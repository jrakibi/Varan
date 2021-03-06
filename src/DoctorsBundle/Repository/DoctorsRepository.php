<?php

namespace DoctorsBundle\Repository;


use Symfony\Component\ClassLoader\ClassLoader;
use Doctrine\ORM\EntityManager;

use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

/**
 * DoctorsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DoctorsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getDoctorBySeance($id){
        $qb = $this->createQueryBuilder('d')
            ->select('d')
            ->innerJoin('d.location', 'l')
            ->innerJoin('l.calendrie', 'c')
            ->innerJoin('c.seances', 's')
            ->where('s.id = :id')
            ->setMaxResults(1)
            ->setParameter('id', $id);
        return $qb->getQuery()->getResult();
    }

    public function getAllDoctors(){
        $qb = $this->createQueryBuilder('d')
            ->select('d')
            ->innerJoin('d.location', 'l')
            ->where('l.deleatedAt is null')
            ->andWhere('l.verified = 1');
        return $qb->getQuery()->getResult();
    }

    
    public function getDoctorsByLonLat($lon,$lat){
        $distance = 10000; //10000 miles
        $entityManager = $this->getEntityManager();
        $sql = "select DISTINCT d.*
                from doctors as d join locations as l 
                where l.doctor_id = d.id
                AND l.deletedAt is null
                and ACOS(SIN(?) * sin(l.latitude) + cos(?) * cos(l.latitude) * cos(l.langitude - (?))) * 6371 < {$distance}
                order BY doctor_id desc
                LIMIT 0,6";
        $rsm = new ResultSetMappingBuilder($entityManager);
        $rsm->addRootEntityFromClassMetadata('DoctorsBundle\Entity\Doctors', 'd');

        $query = $entityManager->createNativeQuery($sql, $rsm);
        $query->setParameter(1, $lat);
        $query->setParameter(2, $lat);
        $query->setParameter(3, $lon);
        $doctors = $query->getResult();
        
        return $doctors;
    }
    

    public function getDoctorsByMaxRDV() {
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT doctor_id
                                            FROM locations
                                            group By doctor_id
                                            order BY COUNT(*) desc, doctor_id desc
                                            LIMIT 0,6");
        $statement->execute();
        $doctors_id = $statement->fetchAll();
        $Ids = array();
        for($i=0; $i<count($doctors_id) ; $i++) {
            $Ids[$i] = intval($doctors_id[$i]['doctor_id']);
        }
        $doctors = $em->getRepository('DoctorsBundle:Doctors')->findById($Ids);
        
        return $doctors;
    }
    
    public function searchBy($search_array, $specialite, $availability, $gender,
                             $fraisMin,$fraisMax, $timeMin, $timeMax) {
        if(is_array($availability[0])){
            foreach ($availability[0] as $day) {
                //get all days of next 2 mounth
                $dayDate = date( 'Y-m-d', strtotime( 'next '.(string)$day ));
                $day2Date = date( 'Y-m-d', strtotime( $dayDate."+7 days" ));
                $day3Date = date( 'Y-m-d', strtotime( $day2Date."+7 days" ));
                $day4Date = date( 'Y-m-d', strtotime( $day3Date."+7 days" ));
                $day5Date = date( 'Y-m-d', strtotime( $day4Date."+7 days" ));
                $availabilityDate[] = $dayDate;
                $availabilityDate[] = $day2Date;
                $availabilityDate[] = $day3Date;
                $availabilityDate[] = $day4Date;
                $availabilityDate[] = $day5Date;
            }
            $availabilityDate = implode("','", $availabilityDate);
        }
        $entityManager = $this->getEntityManager();
        $rsm = new ResultSetMappingBuilder($entityManager, ResultSetMappingBuilder::COLUMN_RENAMING_INCREMENT);
        $rsm->addRootEntityFromClassMetadata('DoctorsBundle\Entity\Doctors', 'd');

        $sql = "SELECT {$rsm->generateSelectClause()}
                FROM locations l 
                LEFT JOIN doctors d
                ON l.doctor_id = d.id
                LEFT JOIN calendries c
                ON c.location_id = l.id
                LEFT JOIN invoices i
                ON i.doctor_id = d.id
                LEFT JOIN seances s
                ON s.calendrie_id = c.id
                LEFT JOIN doctors_specialities ds
                ON ds.doctor_id = d.id
                LEFT JOIN specialities sp
                ON sp.id = ds.specialitie_id
                LEFT JOIN services ser
                ON ser.specialitie_id = sp.id
                LEFT JOIN sub_services subS
                ON subS.service_id = ser.id
                WHERE 1=1 ";
                
        if(strcmp($gender, "'mr'") == 0){
            $sql.= " AND d.title = 'mr' ";
        }elseif(strcmp($gender, "'mme','mlle'") == 0){
            $sql.= " AND d.title IN ({$gender}) ";
        }
        
        if(is_array($availability[0])){
            $sql.=" AND c.date IN ('{$availabilityDate}') "; 
        }
        if(strcmp($specialite,"aucun") != 0){
            $sql.=" AND sp.libelle = '{$specialite}' "; 
        }
        if(strcmp($timeMin,"0:00:00") != 0 || strcmp($timeMax,"0:00:00") != 0){
            $sql.= " AND s.heur_debut BETWEEN '{$timeMin}' AND '{$timeMax}' AND s.heur_fin BETWEEN '{$timeMin}' AND '{$timeMax}' ";
        }

        if(strcmp($fraisMin,"0") != 0 || strcmp($fraisMax,"0") != 0){
            $sql.= " AND i.price BETWEEN '{$fraisMin}' AND '{$fraisMax}' ";
        }
        
        if(strcmp($search_array[0],"aucun") != 0){
            if (is_array($search_array) || is_object($search_array)){
                foreach($search_array as $mot){
                    $sql.=" AND (d.first_name like '%" . $mot . "%' or d.last_name     like '%" . $mot . "%' 
                           or l.adresse like '%" . $mot . "%' or l.ville like '%" . $mot . "%' 
                           or l.name like '%" . $mot . "%' or d.professional_statement like '%". $mot ."%'
                           or ser.service like '%". $mot ."%' or sp.libelle like '%". $mot ."%'
                           or subS.subService like '%". $mot ."%') "; 
                }
            }
        }
        $query = $entityManager->createNativeQuery($sql, $rsm);

        $doctors = $query->getResult();
        return $doctors;
    }
    
    public function search($search_array) {
        $entityManager = $this->getEntityManager();
        $rsm = new ResultSetMappingBuilder($entityManager, ResultSetMappingBuilder::COLUMN_RENAMING_INCREMENT);
        $rsm->addRootEntityFromClassMetadata('DoctorsBundle\Entity\Doctors', 'd');

        $sql = "SELECT {$rsm->generateSelectClause()}
                FROM locations l 
                INNER JOIN doctors d
                ON l.doctor_id = d.id
                LEFT JOIN calendries c
                ON c.location_id = l.id
                LEFT JOIN invoices i
                ON i.doctor_id = d.id
                LEFT JOIN seances s
                ON s.calendrie_id = c.id
                LEFT JOIN doctors_specialities ds
                ON ds.doctor_id = d.id
                LEFT JOIN specialities sp
                ON sp.id = ds.specialitie_id
                LEFT JOIN services ser
                ON ser.specialitie_id = sp.id
                LEFT JOIN sub_services subS
                ON subS.service_id = ser.id
                WHERE 1=1 ";
        if(strcmp($search_array[0],"aucun") != 0){
            if (is_array($search_array) || is_object($search_array)){
                foreach($search_array as $mot){
                    $sql.=" AND (d.first_name like '%" . $mot . "%' or d.last_name     like '%" . $mot . "%' 
                           or l.adresse like '%" . $mot . "%' or l.ville like '%" . $mot . "%' 
                           or l.name like '%" . $mot . "%' or d.professional_statement like '%". $mot ."%'
                           or ser.service like '%". $mot ."%' or sp.libelle like '%". $mot ."%'
                           or subS.subService like '%". $mot ."%') "; 
                }
            }
        }

        $query = $entityManager->createNativeQuery($sql, $rsm);

        $doctors = $query->getResult();
        return $doctors;
    }
    
    public function searchAll() {
        $entityManager = $this->getEntityManager();
        $rsm = new ResultSetMappingBuilder($entityManager, ResultSetMappingBuilder::COLUMN_RENAMING_INCREMENT);
        $rsm->addRootEntityFromClassMetadata('DoctorsBundle\Entity\Doctors', 'd');

        $sql = "SELECT {$rsm->generateSelectClause()}
                FROM locations l 
                LEFT JOIN doctors d
                ON l.doctor_id = d.id";

        $query = $entityManager->createNativeQuery($sql, $rsm);

        $doctors = $query->getResult();
        return $doctors;
    }        
}