<?php

namespace DoctorsBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PatientController extends Controller
{
    public function displayAction()
    {
      $em = $this->getDoctrine()->getManager();
      $user = $this->getUser();
      $idDoctor = $user->getIdTable();
      $doctor = $em->getRepository('DoctorsBundle:Doctors')->find($idDoctor);
      $dp = $this->getDoctrine()->getRepository('DataBundle:Dp')->findBy(array(
          'doctor' => $doctor
      ));
      $dp = array_reverse($dp);
      return $this->render('DoctorsBundle:Patient:display.html.twig', array(
            'doctor' => $doctor,
            'dp' => $dp
        ));
    }
    public function changestatusAction(Request $request){
      $em = $this->getDoctrine()->getManager();
      $dp = $em->getRepository('DataBundle:Dp')->find($request->get('id'));
      if($dp->getBlock() == 0){
        $dp->setBlock(1);
      }else{
        $dp->setBlock(0);
      }
      $em->flush();
      return $this->redirectToRoute('patient_doctor_display');
    }
  }
