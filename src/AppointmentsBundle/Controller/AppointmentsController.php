<?php

namespace AppointmentsBundle\Controller;

use AppointmentsBundle\Entity\Appointments;
use AppointmentsBundle\Entity\Calendries;
use DataBundle\Entity\Dp;
use DataBundle\Entity\FosUser;
use AppointmentsBundle\Entity\Seances;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;
use DoctorsBundle\Entity\Locations;
use AppointmentsBundle\Entity\Reasons;
use PatientBundle\Entity\Patient;
use DoctorsBundle\Entity\Comments;
use DoctorsBundle\Entity\Blockdays;
use DoctorsBundle\Entity\Doctors;


/**
 * Appointment controller.
 *
 */
class AppointmentsController extends Controller
{
    function getBlockDays($bd){
        $weekends = array();
        foreach($bd as $item){
            for ($i = 1;$i<=12;$i++){
                $month = $this->getAllDaysInAMonth(date("Y"),$i,$item->getDay());
                foreach($month as $inner){
                    array_push($weekends,$inner);
                }
            }
        }
        $final  = array();
        foreach ($weekends as $current) {
            if ( ! in_array($current, $final)) {
                $final[] = $current;
            }
        }
        return $final;
    }
    function getAllDaysInAMonth($year, $month, $day, $daysError = 3) {
        $dateString = 'first '.$day.' of '.$year.'-'.$month;

        if (!strtotime($dateString)) {
            throw new \Exception('"'.$dateString.'" is not a valid strtotime');
        }

        $startDay = new \DateTime($dateString);

        if ($startDay->format('j') > $daysError) {
            $startDay->modify('- 7 days');
        }

        $days = array();

        while ($startDay->format('Y-m') <= $year.'-'.str_pad($month, 2, 0, STR_PAD_LEFT)) {
            $days[] = clone($startDay);
            $startDay->modify('+ 7 days');
        }

        return $days;
    }
    public function copyperiodAction(Request $request){
        $sd = explode("-",$request->get('psdate'));
        $psdate = new \DateTime();
        $psdate->setDate($sd[0],$sd[1],$sd[2]);
        $sd = explode("-",$request->get('sdate'));
        $sdate = new \DateTime();
        $sdate->setDate($sd[0],$sd[1],$sd[2]);
        $total = $request->get('days');
        $loc = $request->get('loc');
        $em = $this->getDoctrine();
        $user = $this->getUser();
        $idDoctor = $user->getIdTable();
        $doctor = $em->getRepository('DoctorsBundle:Doctors')->find($idDoctor);
        $unb = $this->getDoctrine()->getRepository('DataBundle:Unblockph')->findBy(array(
            'doctor'=> $doctor
        ));
        $hd = $this->getDoctrine()->getRepository('DataBundle:Publicholiday')->findAll();
        $temp =  array();
        if(count($unb) > 0){
            foreach($unb as $item){
                foreach($hd as $inner){
                    if($inner != $item->getPh()){
                        array_push($temp,$inner);
                    }
                }
            }
            $hd = $temp;
        }

        $location = $this->getDoctrine()->getRepository('DoctorsBundle:Locations')->find($loc);
        $bd = $this->getDoctrine()->getRepository('DoctorsBundle:Blockdays')->findAll();
        $weekends = $this->getBlockDays($bd);
        $unbd = $this->getDoctrine()->getRepository('DataBundle:Unblockday')->findBy(array(
            'doctor' => $doctor
        ));
        foreach ($unbd as $item){
            $sd = explode("-",$item->getDate());
            $date = new \DateTime();
            $date->setDate($sd[0],$sd[1],$sd[2]);
            for ($j = 0; $j < count($weekends);$j++){
                if($weekends[$j]->format('d-m-Y') == $date->format('d-m-Y')){
                    array_splice($weekends,$j,1);
                    break;
                }
            }
        }
        for($i = 0;$i<=$total;$i++){

            $found = false;
            foreach ($weekends as $item){
                if($item->format('Y-m-d') == $sdate->format('Y-m-d')){
                    $found = true;
                }
            }
            foreach($hd as $item){
                if($item->getDate() == $sdate->format('m/d/Y')){
                    $found = true;
                }
            }
            if(!$found){
                $oldcal = $this->getDoctrine()->getRepository('AppointmentsBundle:Calendries')->findOneBy(array('date' => $psdate,'location'=>$location, 'deleatedAt' => null));
                $emcheck = $this->getDoctrine()->getManager();
                $newcheck = $emcheck->getRepository('AppointmentsBundle:Calendries')->findOneBy(array('date' => $sdate,'location'=>$location, 'deleatedAt' => null));
                if($newcheck != null){
                    $newcheck->setDeleatedAt(new \DateTime());
                    $emcheck->flush();
                }

                if($oldcal != null){
                    $em = $this->getDoctrine()->getManager();
                    $cal = new Calendries();
                    $cal->setDate($sdate);
                    $cal->setLocation($location);
                    $cal->setPublic(1);
                    $cal->setAbsence(0);
                    $em->persist($cal);
                    $em->flush();

                    $sea = $this->getDoctrine()->getRepository('AppointmentsBundle:Seances')->findBy(array(
                        'calendrie' => $oldcal->getId()
                    ));
                    foreach($sea as $item){
                        $seance = new Seances();
                        $seance->setHeurDebut($item->getHeurDebut());
                        $seance->setHeurFin($item->getHeurFin());
                        $seance->setCalendrie($cal);
                        $seance->setAbsence(0);
                        $seance->setDispo(1);
                        $em->persist($seance);
                        $em->flush();
                    }
                }
            }
            $psdate->modify("+1 day");
            $sdate->modify("+1 day");
        }
        return $this->redirect($this->generateUrl('calendries_index',array('id' => 0)));


    }
    public function appointmentforPatientAction(Request $request,$seance){
        $em = $this->getDoctrine();
        $user = $this->getUser();
        $idDoctor = $user->getIdTable();
        $doctor = $em->getRepository('DoctorsBundle:Doctors')->find($idDoctor);
        $seance = $em->getRepository('AppointmentsBundle:Seances')->find($seance);

        $reason = $em->getRepository('AppointmentsBundle:Reasons')->findAll();
        $dp = $em->getRepository('DataBundle:Dp')->findBy(array(
            'doctor' => $doctor,
            'block' => 0
        ));
        return $this->render('AppointmentsBundle:Appointments:appointmentforPatient.html.twig',array(
            'doctor' => $doctor,
            'seance' => $seance,
            'reason' => $reason,
            'dp' => $dp
        ));
    }
    public function oldpatientAction(Request $request){
        $em = $this->getDoctrine();
        $user = $this->getUser();
        $idDoctor = $user->getIdTable();
        $doctor = $em->getRepository('DoctorsBundle:Doctors')->find($idDoctor);
        $app = new Appointments();
        $app->setReason($em->getRepository('AppointmentsBundle:Reasons')->find($request->get('reason')));
        $app->setPatient($em->getRepository('DataBundle:FosUser')->findOneBy(array('idtable' => $request->get('patient'))));
        $app->setPhone($request->get('phone'));
        $app->setNote($request->get('note'));
        $app->setSeenbefor(1);
        $sea = $em->getRepository('AppointmentsBundle:Seances')->find($request->get('seance'));
        $app->setSeance($sea);
        $app->setEtat('confirme');
        $em1 = $this->getDoctrine()->getManager();
        $em1->persist($app);
        $em1->flush();
        $cal = $em->getRepository('AppointmentsBundle:Seances')->find($request->get('seance'));
        $cal->setDispo(0);
        $em1->flush();
        return $this->redirectToRoute('seances_index',array('calendrie' => $sea->getCalendrie()->getId()));
    }
    public function newpatientAction(Request $request){
        $user = new User();
        $user->setUsername($request->get('uname'));
        $user->setUsernameCanonical($request->get('uname'));
        $user->setPassword($this->get('security.password_encoder')->encodePassword($user, $request->get('pass')));
        $user->setEmail($request->get('email'));
        $user->setEmailCanonical($request->get('email'));
        $user->setEnabled(1);
        $user->setTypeuser('patients');
        $originalRoles = $this->getParameter('security.role_hierarchy.roles');
        $user->setRoles($originalRoles['ROLE_PATIENT']);
        $patient = new Patient();
        $sd = explode("-",$request->get('dob'));
        $sdate = new \DateTime();
        $sdate->setDate($sd[0],$sd[1],$sd[2]);
        $patient->setBirthday($sdate);
        $patient->setFirstname($request->get('fname'));
        $patient->setLastname($request->get('lname'));
        $patient->setAdresse($request->get('address'));
        $patient->setSexe($request->get('sex'));
        $patient->setPreferrednumber('gsm');
        $patient->setGsm($request->get('phone'));
        $em2= $this->getDoctrine()->getManager();
        $em2->persist($patient);
        $em2->flush();
        $user->setIdtable($patient->getId());
        $em2->persist($user);
        $em2->flush();
        $user = $this->getDoctrine()->getRepository('DataBundle:FosUser')->find($user->getId());
        $em = $this->getDoctrine();
        $user1 = $this->getUser();
        $idDoctor = $user1->getIdTable();
        $doctor = $em->getRepository('DoctorsBundle:Doctors')->find($idDoctor);
        $app = new Appointments();
        $app->setReason($em->getRepository('AppointmentsBundle:Reasons')->find($request->get('reason')));
        $app->setPatient($user);
        $app->setPhone($request->get('phone'));
        $app->setNote($request->get('note'));
        $app->setSeenbefor(1);
        $sea = $em->getRepository('AppointmentsBundle:Seances')->find($request->get('seance'));
        $app->setSeance($sea);
        $app->setEtat('confirme');
        $em1 = $this->getDoctrine()->getManager();
        $em1->persist($app);
        $em1->flush();
        $cal = $em->getRepository('AppointmentsBundle:Seances')->find($request->get('seance'));
        $cal->setDispo(0);
        $em1->flush();
        $dp = new Dp();
        $dp->setDoctor($doctor);
        $dp->setPatient($patient);
        $dp->setBlock(0);
        $em1->persist($dp);
        $em1->flush();
        return $this->redirectToRoute('seances_index',array('calendrie' => $sea->getCalendrie()->getId()));
    }
    public function checkseanceAction(Request $request){
        $sea = $this->getDoctrine()->getRepository('AppointmentsBundle:Seances')->find($request->get('sea'));
        if($sea->getDispo() == 1){
            return new Response('true');
        }else{
          return new Response('false');
        }
    }
    public function displayAction(){
        $em = $this->getDoctrine();
        $user = $this->getUser();
        $idDoctor = $user->getIdTable();
        $doctor = $em->getRepository('DoctorsBundle:Doctors')->find($idDoctor);
        $location = $em->getRepository('DoctorsBundle:Locations')->findBy(array(
            'doctor' => $doctor,
            'deleatedAt' => null
        ));
        $cal = $em->getRepository('AppointmentsBundle:Calendries')->findBy(array(
            'location' => $location,
            'deleatedAt' => null
        ));
        $seanas = $em->getRepository('AppointmentsBundle:Seances')->findBy(array(
            'calendrie' => $cal,
            'dispo' => 0
        ));
        $appointments = $em->getRepository('AppointmentsBundle:Appointments')->findBy(array(
            'seance' => $seanas
        ));
        return $this->render('AppointmentsBundle:Appointments:display.html.twig', array(
            'appointment' =>$appointments,
            'doctor' => $doctor
            ));
    }

    public function getpatientbyUserAction($id){
        //$user = $this->getDoctrine()->getRepository('DataBundle:FosUser')->find($id);
        $patient = $this->getDoctrine()->getRepository('PatientBundle:Patient')->find($id);
        return new Response($patient->getFirstname()." ".$patient->getLastname().", Phone#: ".$patient->getGsm());
    }
    public function appointmentsOfTodayAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $today = date('Y-m-d');
        $appointments = $em->getRepository('AppointmentsBundle:Appointments')->getAppointmentsOfToday($user->getId());
        $appointments = array_reverse($appointments);
        return $this->render('appointments/appointmentsOfToday.html.twig', array(
            'appointments' => $appointments,
            'date' => $today
        ));
    }

    public function cancelAction($id)
    {
          $em = $this->getDoctrine()->getManager();
          $em->getRepository('AppointmentsBundle:Appointments')->cancel($id);
          return $this->redirectToRoute('appointments_appointmentsByUser', array('success'=>'no'));
    }

    public function appointmentsOfNextDaysAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $appointments = $em->getRepository('AppointmentsBundle:Appointments')->getAppointmentsOfNextDays($user->getId());
        return $this->render('appointments/appointmentsNextDays.html.twig', array(
            'appointments' => $appointments,
        ));
    }

    public function appointmentsOfLastDaysAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $appointments = $em->getRepository('AppointmentsBundle:Appointments')->getAppointmentsOfLastDays($user->getId());

        return $this->render('appointments/appointmentsOflastDays.html.twig', array(
            'appointments' => $appointments,
        ));
    }


    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $seance = $em->getRepository('AppointmentsBundle:Seances')->find($id);
        $doctor = $em->getRepository('DoctorsBundle:Doctors')->getDoctorBySeance($id);
        $location = $em->getRepository('DoctorsBundle:Locations')->getLocationBySeance($id);
        $comments = $em->getRepository('DoctorsBundle:Comments')->findBy(array('location'=>$location[0]->getId()));
        return $this->render('appointments/index.html.twig', array(
            'doctor' => $doctor[0],
            'seance' => $seance,
            'location' => $location[0],
            'comments' => $comments
        ));
    }

    /**
     * Creates a new appointment entity.
     *
     */
    public function newAction(Request $request, $seance)
    {
        $appointment = new \AppointmentsBundle\Entity\Appointments();
        $form = $this->createForm('AppointmentsBundle\Form\AppointmentsType', $appointment);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $seance = $em->getRepository('AppointmentsBundle:Seances')->find($seance);
        if ($this->getUser()->getTypeUser() == 'doctors'){
            $patient = $em->getRepository('DoctorsBundle:Doctors')->find($this->getUser()->getIdTable());
        }else if ($this->getUser()->getTypeUser() == 'patients'){
            $patient = $em->getRepository('PatientBundle:Patient')->find($this->getUser()->getIdTable());
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appointment);
            $em->flush();
            $dispo = 0;
            $em->getRepository('AppointmentsBundle:Seances')->disponibilite($seance, $dispo);
            if ($this->getUser()->getTypeUser() == 'patients'){
                $patient = $em->getRepository('PatientBundle:Patient')->find($this->getUser()->getIdTable());
                $doctor = $appointment->getSeance()->getCalendrie()->getLocation()->getDoctor();
                $doctor = $this->getDoctrine()->getRepository('DoctorsBundle:Doctors')->find($doctor->getId());
                $dp = $this->getDoctrine()->getRepository('DataBundle:Dp')->findBy(array(
                  'doctor' => $doctor,
                  'patient' => $patient
                ));
                if($dp == null){
                  $dp = new Dp();
                  $dp->setDoctor($doctor);
                  $dp->setPatient($patient);
                  $dp->setBlock(0);
                  $em->persist($dp);
                  $em->flush();
                }

            }


            return $this->redirectToRoute('appointments_appointmentsByUser', array('success'=> true));
        }

        return $this->render('appointments/new.html.twig', array(
            'appointment' => $appointment,
            'form' => $form->createView(),
            'patient' => $patient,
            'seance' => $seance,
        ));
    }

    /**
     * Finds and displays a appointment entity.
     *
     */
    public function showAction(Appointments $appointment)
    {
        $em = $this->getDoctrine()->getManager();
        if ($this->getUser()->getTypeUser() == 'doctors'){
            $patient = $em->getRepository('DoctorsBundle:Doctors')->find($this->getUser()->getIdTable());
        }else if ($this->getUser()->getTypeUser() == 'patients'){
            $patient = $em->getRepository('PatientBundle:Patient')->find($this->getUser()->getIdTable());
        }

        return $this->render('appointments/show.html.twig', array(
            'appointment' => $appointment,
            'patient' => $patient,
        ));
    }

    /**
     * Displays a form to edit an existing appointment entity.
     *
     */
    public function editAction(Request $request, Appointments $appointment)
    {
        $deleteForm = $this->createDeleteForm($appointment);
        $editForm = $this->createForm('AppointmentsBundle\Form\AppointmentsType', $appointment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('appointments_edit', array('id' => $appointment->getId()));
        }

        return $this->render('appointments/edit.html.twig', array(
            'appointment' => $appointment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a appointment entity.
     *
     */
    public function deleteAction(Request $request, Appointments $appointment)
    {
        $form = $this->createDeleteForm($appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($appointment);
            $em->flush();
        }

        return $this->redirectToRoute('appointments_index');
    }

    /**
     * Creates a form to delete a appointment entity.
     *
     * @param Appointments $appointment The appointment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Appointments $appointment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('appointments_delete', array('id' => $appointment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function appointmentsByUserAction($success)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        if($user->getTypeUser() == 'doctors'){
            $patient = $em->getRepository('DoctorsBundle:Doctors')->find($user->getIdTable());
        }else{
            $patient = $em->getRepository('PatientBundle:Patient')->find($user->getIdTable());
        }
        if ($success){
            $message = 'yes';
        }else{
            $message = 'no';
        }
        if($user->getTypeUser() == 'doctors'){
            $appointments = $em->getRepository('AppointmentsBundle:Appointments')->findAll();
            $temp = array();
            foreach ($appointments as $item){
                $seanas = $item->getSeance();
                $cal = $seanas->getCalendrie();
                $loc = $cal->getLocation();
                $doc = $loc->getDoctor();
                if($patient->getId() == $doc->getId()){
                    array_push($temp,$item);
                }
            }
            $appointments = $temp;
        }else{
            $appointments = $em->getRepository('AppointmentsBundle:Appointments')->findBy(array('patient' => $user->getId()));

        }
        
        return $this->render('appointments/appointmentsByUser.html.twig', array(
            'patient' => $patient,
            'doctor' => $patient,
            'message' => $message,
            'appointments' => $appointments,
        ));
    }
    public function confirmtoggleAction($id){
        $em = $this->getDoctrine()->getManager();
        $app = $em->getRepository('AppointmentsBundle:Appointments')->findOneBy(array('seance' => $id));
        if($app->getEtat() == 'confirme'){
            $app->setEtat('non confirmer');
        }else{
            $app->setEtat('confirme');
        }
        $em->flush();
        return $this->redirectToRoute('appointments_appointmentsByUser',array('success' =>"no"));
    }
}
