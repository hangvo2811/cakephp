<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    var $components = array('Auth', 'Session');
    var $helpers = array('Common');
//    var $components = array( 'Session');
    
    function beforeFilter(){        
        $this->Auth->userModel = 'User';   // Khai bao su dung model khac trong Auth, mac dinh la Use
        $this->Auth->loginAction = array('controller'=>'users','action'=>'login'); //action se chuyen toi sau khi access trang we
        $this->Auth->loginRedirect = array('controller'=>'posts','action'=>'add');//action se chuyen den sau khi login
        $this->Auth->loginError = 'Failed to login';//thong bao dang nhap bi loi
        $this->Auth->authError = 'Access denied'; //thong bao truy cap khong dung khu vuc            
    }
    
}
