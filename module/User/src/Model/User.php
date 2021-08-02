<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Felix Botta
 */

namespace User\Model;

use Core\Model\CoreModelTrait;


class User {
    
    
    use CoreModelTrait;
    
    public $id;
    public $name;
    public $email;
    public $password;
    public $token;
    public $email_confirmed;
    
    
}
