<?php
require './src/User.php';
use PHPUnit\Framework\TestCase;
class UserTest extends  TestCase{
    public function testUser()
    {
        $name='Noha';
        $email='nohamohamedsabry5506@gmail.com';


        $user=new User();
        $user->set_name($name);
        $user->set_email($email);
        $this->assertEquals($name,$user->name());
        $this->assertEquals('samy',$user->name('samy'));
        $this->assertEquals($email,$user->email());
        $this->assertEquals('samy@gmail.com',$user->email('samy@gmail.com'));
    }
}
?>