<?php 
// src/controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;

class UserController extends AppController{
    public function index()
    {
        $users = $this->Users->find()->all();

        $this->set('users');
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }
}