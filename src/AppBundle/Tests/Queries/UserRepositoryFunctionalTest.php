<?php

namespace AppBundle\Tests\Queries;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserRepositoryFunctionalTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;

    /**
     * {@inheritDoc}
     */
    public function setUp()
    {
        self::bootKernel();
        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager()
        ;
        injectUser();
    }
	
	// A test to check whether the method finds all users of a given department
	public function testFindAllUsersByDepartment(){
		$users = $this->em->getRepository('AppBundle:User')->findAllUsersByDepartment(1);

		foreach ($users as $user ){
			$this->assertEquals(1, $user->getFieldOfStudy()->getDepartment()->getId());
		}

	}

	// A test to check whether the method finds all users of a given department, and that the user is active
	public function testFindAllActiveUsersByDepartment(){
		$users = $this->em->getRepository('AppBundle:User')->findAllActiveUsersByDepartment(1);

		foreach ($users as $user ){
			$this->assertEquals(1, $user->getFieldOfStudy()->getDepartment()->getId());
			$this->assertEquals(1, $user->getIsActive());
		}

	} // unsettling?

	 //????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
	//The person who wrote this method should write a test here.

	public function testFindAllUsersByDepartmentAndRoles(){
		$this->users = $this->em->getRepository('AppBundle:User')->findAllUsersByDepartmentAndRoles(1, $this->em->getRepository('AppBundle:Role')->findOneByRole('ROLE_USER') );
        foreach ($this->users as $this->user ){
            $this->assertEquals(1, $this->user->getFieldOfStudy()->getDepartment()->getId());
            $this->assertContains(toArray('ROLE_USER'), $this->user->getRoles());
	} }


	// A test to check if the repository finds the correct user given a username
    public function testFindUserByUsername() {
        setUp();

        $this->user = $this->em->getRepository('AppBundle:User')->findUserByUsername("shiluib");
        $this->assertEquals($this->user->getUsername(), $this->em->getRepository('AppBundle:User')->findUserByUsername("shiluib"));

    }

	// A test to check if the repository finds the correct user given an email
    public function testFindUserByEmail() {
        setUp();
        $this->user = $this->em->getRepository('AppBundle:User')->findUserByEmail("shiluib@student.uib.no");
        $this->assertEquals("shiluib@student.uib.no", $this->user->getEmail());
        tearDown();
    }

	// A test to check if the repository finds the correct user given a ID integer
//    public function testFindUserById() {
//        $this->user = $this->em->getRepository('AppBundle:User')->findUserByUsername("shiluib");
//        $this->assertEquals(1, $this->user->getId());
//    }

    // Static test. Consider revising
    // TODO: Make new user with a username, an email. DONE
//	public function testFindUserByNewUserCode(){
//		$this->user = $this->em->getRepository('AppBundle:User')->findUserByNewUserCode(1); // Static, may not work
  //      $this->assertEquals(1, $this->user->getId());
//	}

    protected function injectUser() {
        $this->user = new User();
        //$admin = 'tester'; // MWAHAHAHA
        //$departmentId = 5; // UiB
        $role =  $this->em->getRepository('AppBundle:Role')->findOneByRole('ROLE_USER');
        $this->user->addRole($role);
        $this->user->setGender(1);
        $this->user->setFirstName("Shi");
        $this->user->setLastName("LaLong");
        $emd = $this->em->getRepository('AppBundle:FieldOfStudy')->find(40); // Tuple "Andre" from UiB, id 40 for fos
        $this->user->setFieldOfStudy($emd);
        $this->user->setUserName("shiluib"); // Weird typo?
        $this->user->setEmail("shiluib@student.uib.no");
        $this->user->setPhone("47661674");
        $this->user->setPicturePath("images/defaultProfile.png");
        $this->user->setPassword("pimwrneil");

        $createNewUserCode = bin2hex(openssl_random_pseudo_bytes(16));
        $hashedNewUserCode = hash('sha512', $createNewUserCode, false);
        $this->user->setNewUserCode($hashedNewUserCode);

        // Persist the user
        $this->user->setIsActive(1);
        $this->em->persist($this->user);
        $this->em->flush();
        return $this;
    }


    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();
        $this->em->remove($this->user);
        $this->em->close();
        //unset($this->user); //
    }
}

   
