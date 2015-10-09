<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

    public function index(){
        $this->set('users', $this->Users->find('all'));
    }

}