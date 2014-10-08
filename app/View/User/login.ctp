<?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('User', array('url' => array('controller' => 'user', 'action'=>'login')));
    echo $this->Form->input('username', array('required' => false));
    echo $this->Form->input('password', array('required' => false));
    echo $this->Form->end("Login");
?>