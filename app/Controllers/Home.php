<?php

/**
 * @author    Alex Díaz
 * @copyright Conectera
 * @version   v 0.0
**/

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


class Home extends BaseController
{

    public $model, $session;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        $session                                                                =   \Config\Services::session();
        parent::initController($request, $response, $logger);
        $this->session                                                          =   session();
        $this->smarty->assign('RESOURCES',                                      $_ENV['resources']);
        $this->smarty->assign('path_change_password',                           site_url('change_password'));
        $this->smarty->assign("users",                                          TRUE);
        $this->smarty->assign('csrf_field',                                     csrf_field());
        $this->smarty->assign('session',                                        session());
        $this->smarty->assign("path_logout",                                    base_url('logout_admin'));

        $login_model                                                            =   model(LoginModel::class);  
        $this->smarty->assign('submodule_active',                                   $login_model->menu_left($session->get('data.role')) );
        $this->smarty->assign('module_active',                                      $login_model->menu_left($session->get('data.role')) );
        $this->smarty->assign('menu_left',                                          $login_model->menu_left($session->get('data.role')));
        $this->smarty->assign('find_left',                                          $login_model->menu_left($session->get('data.role')));
        $this->smarty->assign('name_user',                                          $session->get('data.name') . ' '. $session->get('data.lastname') );


        if(!$this->session->data)
        {
            header("Location: " . site_url('/'));
            exit();
        }
    }

    /**
     * @author    Alex Díaz
     * @copyright Conectera
     * @since     v0.0
     * @param     
     * @return    boolean
    **/

    public function view()
    {
        return $this->smarty->view('admin/dashboard/home.tpl');
        exit();
    }
}