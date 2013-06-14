<?php
require_once 'PHPUnit/Autoload.php';
require_once './User.php';


/**
 * 
 * @author Andre Cardoso
 */
class UserTest extends PHPUnit_Framework_TestCase 
{
    
    public function setUp()
    {
        $this->User = new User;
    }

    
    public function testInstanceOf()
    {
        $this->assertInstanceOf('User', $this->User);
    }
    
    
    public function testGetName() 
    {
        $this->User->setName('Andre Cardoso');
        
        $this->assertEquals('Andre Cardoso', $this->User->getName());
    }
    
    
    public function testGetNewPassword()
    {
        $this->assertNotEquals(null, $this->User->newPassword(), 'Empty Password');
    }
    
    
    
    
    
}
 
?>
