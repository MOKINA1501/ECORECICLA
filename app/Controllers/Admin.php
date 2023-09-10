<?php

/**
 * @author    Alex Díaz
 * @copyright Conectera
 * @version   v 0.0
**/

namespace App\Controllers;
use App\Models\AdminModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Model;
use Psr\Log\LoggerInterface;


class Admin extends BaseController
{

    public $model;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->model                                                            =   Model(AdminModel::class);
        
        $this->smarty->assign('RESOURCES',                                      $_ENV['resources']);
        $this->smarty->assign('path_users',                                     site_url('users'));
        $this->smarty->assign('path_slides',                                    site_url('slides'));
        $this->smarty->assign('path_functionalities',                           site_url('functionalities'));
        $this->smarty->assign('path_enterprises',                               site_url('enterprises'));
        $this->smarty->assign('path_tutorials',                                 site_url('tutorials'));
        $this->smarty->assign('path_pqr',                                       site_url('pqrs'));
        $this->smarty->assign('path_support',                                   site_url('support'));
        $this->smarty->assign('path_frequent_questions',                        site_url('frequent_questions'));
        $this->smarty->assign('path_change_password',                           site_url('change_password'));
        $this->smarty->assign('csrf_field',                                     csrf_field());
        $this->smarty->assign('session',                                        session());

        $this->smarty->assign('path_back',                                      base_url('change_password'));
        $this->smarty->assign('path_pass_change',                               base_url('passChange'));
        $this->smarty->assign('path_validate_password',                         base_url('validatePass'));

        

        $this->session                                                          =   session();

        if(isset($_COOKIE['email']))
        {
            $email                                                              =   $_COOKIE['email'];
            $remember                                                           =   $_COOKIE['remember'];

            $this->smarty->assign('email',                                      $email);
            $this->smarty->assign('remember',                                   $remember);

        }
    }

    /**
     * @author    Mateo García
     * @copyright Conectera
     * @since     v0.0
     * @param     
     * @return    boolean
    **/

    // public function login()
    // {
    //     $this->smarty->assign("csrf_field",                                     csrf_field());
    //     $this->smarty->assign("path_login",                                     base_url('get_login_admin'));
    //     $this->smarty->assign("path_logout",                                    base_url('logout_admin'));
    //     $this->smarty->assign("path_inicio",                                    base_url('home'));
    //     $this->smarty->assign('path_password_forgotten',                        base_url('password'));
    //     $this->smarty->assign('path_code_valid',                                base_url('codeValid'));
    //     $this->smarty->assign('path_password_new',                              base_url('passwordNew'));
    //     $this->smarty->assign('path_code_again',                                base_url('codeAgain'));
    //     $this->smarty->assign('path_resset_code',                               base_url('ressetCode'));

    //     if(!session()->has('data'))
    //     {
    //         return $this->smarty->view('login.tpl');
    //         exit();
    //     }
    //     else
    //     {
    //         header("Location: " . base_url('home'));
    //         exit();
    //     }
    // }
    public function view()
    {
        return $this->smarty->view('view.tpl');
        exit();
    }

    /**
     * @author    Mateo García
     * @copyright Conectera
     * @since     v0.0
     * @param     
     * @return    boolean
    **/
    
    public function change_password_view()
    {
        $this->smarty->assign("changepass",                                         TRUE);
        $this->smarty->assign("path_logout",                                    base_url('logout_admin'));
        return $this->smarty->view('change_password.tpl');
        exit();
    }

    

    /**
     * @author    Mateo García
     * @copyright Conectera
     * @since     v0.0
     * @param     array $params
     * @return    array $result
    **/

    public function get_login()
    {
        $method                                                                 =   $this->request->getMethod();

        if($method == 'post')
        {
            $params                                                             =   $this->request->getPost();
            
            if(!empty($params['email']) && !empty($params['password']))
            {
                $data_user                                                      =   $this->model->get_user($params);
                $email                                                          =   $params['email'];
                $pass                                                           =   $params['password'];
                
                if($data_user['value'])
                {
                    if(!empty($params['remember']))
                    {
                        $remember                                               =   $params['remember'];
                        setcookie('email', $email, time()+60*60*7);
                        setcookie('remember', $remember, time()+60*60*7);
                    }
                    
                    $session                                                    =   session();
                    $session->set('data', $data_user['data']);
                    echo json_encode($data_user);
                    exit();
                }
                else
                {
                    echo json_encode($data_user);
                    exit();
                }
            }
            else
            {
                $result['value']                                                =   FALSE;
                $result['message']                                              =   'Complete todos los campos.';
                echo json_encode($result);
                exit();
            }
        }
        else
        {
            header("Location: " . base_url('admin/login'));
            exit();
        }
    }

    /**
     * @author    Mateo García
     * @copyright Conectera
     * @since     v0.0
     * @param     
     * @return    boolean
    **/

    public function logout()
    {
        $session                                                                =   session();
        $session->destroy();
        header("Location: " . base_url('admin/login'));
        exit();
    }

    /**
     * @author    Mateo García
     * @copyright Conectera
     * @since     v0.0
     * @param     array $params
     * @return    int $iduser
    **/

    public function password_forgotten()
    {
        $params                                                                 =   $this->request->getPost();

        $email                                                                  =   $params['emailpassword'];

        if($email !== '')
        {
            $iduser                                                             =   $this->model->get_idUser($email);

            if ($iduser['value']) 
            {
                echo json_encode($iduser);
                exit();      
            }
            else
            {
               echo json_encode($iduser);
               exit();      
            }
        }
        else
        {
            $result['value']                                                    =  FALSE;
            $result['message']                                                  = 'Por favor complete el campo de correo electrónico.';
            echo json_encode($result);
            exit();
        }

    }

    /**
     * @author    Mateo García
     * @copyright Conectera
     * @since     v0.0
     * @param     array $params
     * @return    int $iduser
    **/

    public function code_again()
    {
        $params                                                                 =   $this->request->getPost();

        $email                                                                  =  $params['email-password'];

        if($params)
        {
            $iduser                                                             =   $this->model->get_idUser_again($email);

            if ($iduser['value']) 
            {
                echo json_encode($iduser);
                exit();      
            }
            else
            {
               echo json_encode($iduser);
               exit();      
            }
        }
    }

    /**
     * @author    Mateo García
     * @copyright Conectera
     * @since     v0.0
     * @param     array $params
     * @return    array $result
    **/

    public function code_valid()
    {
        $params                                                                 =   $this->request->getPost();

        $code                                                                   = implode("", $params['code-verification']);

        if($code !== '')
        {
            $code_valid                                                         =   $this->model->code_valid($code);

            if ($code_valid['value']) 
            {
                echo json_encode($code_valid);
                exit();      
            }
            else
            {
               echo json_encode($code_valid);
               exit();      
            }
        }
        else
        {
            $result['value']                                                    =  FALSE;
            $result['message']                                                  = 'Por favor ingrese el código de validación.';
            echo json_encode($result);
            exit();
        }
    }

    /**
     * @author    Mateo García
     * @copyright Conectera
     * @since     v0.0
     * @param     array $params
     * @return    array $result
    **/

    public function password_new()
    {
        $params                                                                 =   $this->request->getPost();
        $email                                                                  =   $params['email-password'];

        if ($params['passwordrepeat'] !== '')  
        {
            $password                                                           =   password_hash($params['passwordrepeat'], PASSWORD_DEFAULT);
        }
        else
        {
            $password                                                           =   '';
        }

        if($email !== '' && $password !== '')
        {
            $passwordNew                                                         =   $this->model->password_new($password, $email);

            if ($passwordNew['value']) 
            {
                echo json_encode($passwordNew);
                exit();      
            }
            else
            {
               echo json_encode($passwordNew);
               exit();      
            }
        }
        else
        {
            $result['value']                                                    =  FALSE;
            $result['message']                                                  = 'Por favor complete todos los campos.';
            echo json_encode($result);
            exit();
        }
    
    }

    /**
     * @author    Mateo Garcia
     * @copyright Conectera
     * @since     v0.0
     * @param     array $params
     * @return    array $result
    **/

    public function resset_code()
    {
        
        $params                                                                 =   $this->request->getPost();
        $email                                                                  =   $params['email-password'];

        if($params)
        {
            $RessetCode                                                         =   $this->model->ressetCode($email);
            if ($RessetCode['value']) 
            {
                echo json_encode($RessetCode);
                exit();      
            }
            else
            {
               echo json_encode($RessetCode);
               exit();      
            }
        }
        else
        {
            $result['value']                                                    =   FALSE;
            $result['message']                                                  =   'No se ha podido eliminar el antiguo código de verificación.';
            echo json_encode($result);
            exit();
        }

    }

    public function changePass()
    {
        $params                                                                 =   $this->request->getPost();

        $password                                                               =   password_hash($params['conpassword'], PASSWORD_DEFAULT);
        $id                                                                     =   $this->session->get('data.id');
        $email                                                                  =   $this->session->get('data.email');

        $passChange                                                             =   $this->model->change_password($id, $password, $email); 

        if ($passChange['value']) 
        {
            echo json_encode($passChange);
            exit();      
        }
        else
        {
            echo json_encode($passChange);
            exit();      
        }
    }

    public function validate_password()
    {
        $params                                                                 =   $this->request->getGet();
        $password                                                               =   password_hash($params['password'], PASSWORD_DEFAULT);

        // die(var_dump($password));

        if($params)
        {
            $validate_pass                                                      =   $this->model->validate_password($params);
            if ($validate_pass['value']) 
            {
                echo json_encode($validate_pass);
                exit();      
            }
            else
            {
               echo json_encode($validate_pass);
               exit();      
            }
        }
        else
        {
            $result['value']                                                    =   FALSE;
            $result['message']                                                  =   'No se ha podido validar la contraseña actual.';
            echo json_encode($result);
            exit();
        }

                               
    }

}
