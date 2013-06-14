<?php

/**
 * 
 * @author Andre Cardoso
 */

class User 
{
    private $name;
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function newPassword()
    {
        return substr(md5(DATE_ATOM),0,8);
    }
    
    
}
