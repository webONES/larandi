<?php 

/**
* Create User Test Cases
*/
class CreateUserTest extends TestCase {

	public function testWeCanCreateUsersAndUseMagicMethods()
	{
		$user = new User(array(
			'firstName' => 'Arandi',
			'email'     => 'arandilopez.93@gmail.com'
		));

		$this->assertEquals('Arandi', $user->firstName, '$user->email is not equal');

		return $user;
	}

	public function testDaTests()
	{
		$this->assertTrue(true, 'Nope. It\'s not true');
	}

	/**
	* Somethign to tets
	* @param  User $user [description]
	* @return  void       [description]
	* @expectedException Exception
	* @depends testWeCanCreateUsersAndUseMagicMethods
	*/
	public function testYouCanCallUndefinedMethods($user)
	{
		$user->findAllRelations(2,3);
	}

}