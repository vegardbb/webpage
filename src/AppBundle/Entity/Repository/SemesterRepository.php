<?php

namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class SemesterRepository extends EntityRepository {

    public function findNameById($id){
        return $this->createQueryBuilder('Semester')
            ->select('Semester.name')
            ->where('Semester.id = '.$id)
            ->getQuery()
            ->getSingleScalarResult();
    }

	public function findAllSemestersByDepartment($department){
		
		$semesters =  $this->getEntityManager()->createQuery("
		
		SELECT s
		FROM AppBundle:Semester s
		WHERE s.department = :department
		ORDER BY s.semesterStartDate DESC
		
		")
		->setParameter('department', $department)
		->getResult();

		return $semesters;
		
	}

    public function findAllSemesterName(){
        return $this->createQueryBuilder('Semester')
            ->select('Semester.name')
            ->where('Semester.id = 1')
            ->getQuery()
            ->getScalarResult();
    }

    public function NumOfSemesters(){
        return $this->createQueryBuilder('Semester')
            ->select('count(Semester.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findAllSemesters(){
        return $this->createQueryBuilder('Semester')
            ->select('Semester')
            ->distinct()
            ->getQuery()
            ->getResult();
    }

	
}