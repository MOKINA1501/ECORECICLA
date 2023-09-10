<?php

namespace App\Controllers;
use App\Models\ActionsModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Libraries\CISmarty;


class ArrivalDocumentsController extends BaseController{

    private $actions;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $session = session();

        $this->model                                                            =   model(ArrivalDocumentsModel::Class);
        $this->actions                                                          =   $this->model->actions_by_role($session->get('data.role'), 'CORRESPONDENCE');
        $this->request                                                          =   \Config\Services::request();
        $this->smarty->assign("csrf_field",                                         csrf_field());
        $this->smarty->assign('path_change_password',                           site_url('change_password'));
        $this->smarty->assign('session',                                        session());
        $this->smarty->assign("path_logout",                                    base_url('logout_admin'));

        // if ($this->session->userdata['id_role'] != "1") 
        // {
        //     if (in_array('ACTIONS', $this->session->userdata['actions']) == FALSE) 
        //     {
        //         header("Location: " . $this->session->userdata['initial_site']);
        //         exit();
        //     }
        // }

        $login_model = model(LoginModel::class);
        $this->smarty->assign('submodule_active',                                   $login_model->menu_left($session->get('data.role')) );
        $this->smarty->assign('module_active',                                      $login_model->menu_left($session->get('data.role')) );
        $this->smarty->assign('menu_left',                                          $login_model->menu_left($session->get('data.role')) );
        $this->smarty->assign('find_left',                                          $login_model->menu_left($session->get('data.role')));
        $this->smarty->assign('name_user',                                          $session->get('data.name') . ' ' . $session->get('data.lastname'));
        $this->smarty->assign('path_actions',                                       site_url('actions'));
        $this->smarty->assign('mobile');
        $this->smarty->assign('path_search_companies');
        $this->smarty->assign('path_search_projects');
        $this->smarty->assign('path_cleargeneralsearch');
        $this->smarty->assign('session_company_gral');
        $this->smarty->assign('session_company_text_gral');
        $this->smarty->assign('session_project_gral');
        $this->smarty->assign('session_project_text_gral');

        $this->smarty->assign('path_correspondence',                            site_url('correspondence'));
        $this->smarty->assign('path_view_add',                                  site_url('correspondence/view_add'));
        $this->smarty->assign('path_view_groups',                               site_url('correspondence/view_groups'));
        $this->smarty->assign('path_view_add_group',                            site_url('correspondence/view_add_group'));
        $this->smarty->assign('path_view_edit_draft',                           site_url('correspondence/view_edit_draft'));

            /* MONICA ARIAS */
        $this->smarty->assign('path_view',                                      site_url('correspondence/datalist'));
        $this->smarty->assign('path_drafts',                                    site_url('correspondence/drafts'));
        $this->smarty->assign('path_detail',                                    site_url('correspondence/view/detail'));
        $this->smarty->assign('path_view_add_group',                            site_url('correspondence/view_add_group'));

            /* FIN MONICA ARIAS */
            
        $this->smarty->assign('path_traceability',                              site_url('correspondence/view_traceability'));
       
    }

    public function view()
    {
        $this->smarty->assign('act_view',                                       in_array('VIEW', $this->actions));
        $this->smarty->assign('act_add',                                        in_array('ADD', $this->actions));
        $this->smarty->assign('act_assign',                                     in_array('ASSIGN', $this->actions));
        $this->smarty->assign('act_detail',                                     in_array('DETAILS', $this->actions));
        $this->smarty->assign('act_trace',                                      in_array('TRACE', $this->actions));
        $this->smarty->assign('act_display',                                    in_array('DISPLAY', $this->actions));

        return $this->smarty->view('admin/dashboard/arrival_documents.tpl');
        exit();
    }
    public function view_add()
    {
        return $this->smarty->view('admin/arrival_documents/add.tpl');
    }
    public function view_groups()
    {
        return $this->smarty->view('admin/arrival_documents/groups.tpl');
    }

    /**
     * @author    Mónica Arias
     * @copyright Conectera
     * @since     v0.0
     * @param     
     * @return    boolean
    **/

    public function view_add_group()
    {
        return $this->smarty->view('admin/arrival_documents/add_group.tpl');
    }

    /**
     * @author    Mónica Arias
     * @copyright Conectera
     * @since     v0.0
     * @param     
     * @return    boolean
    **/

    public function view_drafts()
    {
        return $this->smarty->view('admin/arrival_documents/drafts.tpl');
    }
    public function view_edit_draft()
    {
        return $this->smarty->view('admin/arrival_documents/edit_draft.tpl');
    }
    public function view_detail()
    {
        return $this->smarty->view('admin/arrival_documents/detail.tpl');
    }
    public function view_traceability()
    {
        return $this->smarty->view('admin/arrival_documents/traceability.tpl');
    }

    /**
     * @author    Mónica Arias
     * @copyright Conectera
     * @since     v0.0
     * @param     
     * @return    json
    **/

    public function datalist()
    {
        //die(var_dump($this->request->getGet()));
        // if(in_array('VIEW', $this->actions))
        // {
            $pageNumber                                                         =   $this->request->getGet('pageNumber');
            $length                                                             =   $this->request->getGet('pageSize');
            $start                                                              =   ($pageNumber - 1) * $length;
            $search                                                             =   $this->request->getGet('search');
            $filter                                                             =   $this->request->getGet('filter');
            $count_rows                                                         =   $this->model->count_rows($search,$filter);
            $all_rows                                                           =   $this->model->all_rows($start, $length, $search, $filter);
            $json_data                                                          =   array(
                "recordsTotal"                                                      =>  intval($count_rows['total']),
                "recordsFiltered"                                                   =>  intval($count_rows['total_filtered']),
                "data"                                                              =>  $all_rows['data'],
                "pageNumber"                                                        =>  $pageNumber
                                                                                    );
            echo json_encode($json_data);
            exit();
            //die(var_dump($this->request->getGet()));
        // }
        /*else
        { 
            if ($this->request->getMethod(TRUE) == 'GET')
            {
                header("Location: " . site_url('arrival_documents'));
            }
            else
            {
                echo json_encode(array('data'=> FALSE, 'message' => 'No cuentas con los permisos necesarios para ejecutar esta solicitud.'));
            }
            exit(); 
        }*/
    }












}