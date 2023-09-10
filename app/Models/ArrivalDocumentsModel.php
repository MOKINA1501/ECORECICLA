<?php

namespace App\Models;

use CodeIgniter\Model;

class ArrivalDocumentsModel extends Model{

    public function __construct()
    {
        parent::__construct();
        $this->model                                                            =   model(DatamaxModel::class);
        $this->builder                                                          =   $this->db->table('dtm_arrivals_docs');
        $this->validation                                                       =   \Config\Services::validation();
        $this->request                                                          =   \Config\Services::request();
        $this->session                                                          =   \Config\Services::session();
    }

	 /**
     * @author    Brayan Orellanos
     * @copyright Conectera
     * @since     v0.0
     * @param     int $role, varchar $submodule
     * @return    array
    **/
    public function actions_by_role($role, $submodule)
    {
        return $this->model->actions_by_role($role, $submodule);
        exit();
    }

	/**
    * @author    juan sebastian ropero
    * @copyright 2022 Fábrica de Desarrollo
    * @since     v 2.0
    * @param     
    * @return    array
    **/
    public function get_menu()
    {
        return $this->model->get_menu();
        exit();
    }

	/**
     * @author    Brayan Orellanos
     * @copyright Conectera
     * @since     v0.0
     * @param     string $submodule
     * @return    array | boolean
    **/
    public function get_breadcrumb($submodule)
    {
        return $this->_datamax_model->get_breadcrumb($submodule);
        exit();
    }

	/**
     * @author    Monica Arias
     * @copyright Conectera
     * @since     v0.0
     * @param     string $search, string $filter
     * @return    array $result
    **/
    public function count_rows($search, $filter)
    {
        $result                                                                 =   array();
        $total                                                                  =   $this->builder->select('dtm_arrivals_docs.*,dtm_copy_users_docs.state,dtm_users_docs.state')
                                                                                ->  join('dtm_users_docs','dtm_arrivals_docs.id = dtm_users_docs.id_arrival_doc','left')
                                                                                ->  join('dtm_copy_users_docs','dtm_arrivals_docs.id = dtm_copy_users_docs.id_arrival_doc','left')
                                                                                ->  where('dtm_arrivals_docs.user_insert',$this->session->get('data.id'))
                                                                                ->  countAllResults();
        if(!empty($search) || $filter != '')
        {
            $total_filtered                                                     =   $this->builder->select('dtm_arrivals_docs.*,dtm_copy_users_docs.state,dtm_users_docs.state')
                                                                                ->  join('dtm_users_docs','dtm_arrivals_docs.id = dtm_users_docs.id_arrival_doc','left')
                                                                                ->  join('dtm_copy_users_docs','dtm_arrivals_docs.id = dtm_copy_users_docs.id_arrival_doc','left')
                                                                                ->  where('dtm_arrivals_docs.user_insert',$this->session->get('data.id'));
        }
        else 
        {
            $total_filtered                                                     =   $total;
        }

        if (!empty($search) || $filter!= '') 
        {
            if(!empty($search))
            {

                switch(true){
                    case preg_match("/Pendiente/i", $search):
                        $total_filtered                                         ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 1)
                                                                                ->  groupEnd(); 
                        break;
                    case preg_match("/Enviado/i", $search):
                        $total_filtered                                         ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 2)
                                                                                ->  groupEnd(); 
                        break;
                    case preg_match("/Leido/i", $search):
                        $total_filtered                                         ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 3)
                                                                                ->  groupEnd(); 
                        break;
                    case preg_match("/Anulado/i", $search):
                        $total_filtered                                         ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 4)
                                                                                ->  groupEnd(); 
                        break;
                    case preg_match("/Copia/i", $search):
                        $total_filtered                                         ->  groupStart()
                                                                                ->  like('dtm_copy_users_docs.state', 'copia')
                                                                                ->  groupEnd(); 
                        break;
                    default:
                        $total_filtered                                         ->  groupStart()
                                                                                ->  like('dtm_arrivals_docs.subject', $search)
                                                                                ->  orlike('dtm_copy_users_docs.state', $search)
                                                                                ->  groupEnd(); 
                        break;
                }
            }
            if($filter != '')
            {
                $filter                                                         =   explode(',',$filter);
                if($filter['0']!=0){
                    $total_filtered                                             =   $this->builder->select('dtm_arrivals_docs.*')
                                                                                ->  orderBy('dtm_arrivals_docs.date_insert', 'DESC');
                }
                if($filter['1']!=0){
                    $total_filtered                                             =   $this->builder->select('dtm_arrivals_docs.*')
                                                                                ->  orderBy('dtm_arrivals_docs.date_insert', 'ASC');
                }
                if($filter['2']!=0){
                    $total_filtered                                             ->  groupStart()
                                                                                ->  like('dtm_arrivals_docs.priority', 3)
                                                                                ->  groupEnd();
                }
                if($filter['3']!=0){
                    $total_filtered                                             ->  groupStart()
                                                                                ->  like('dtm_arrivals_docs.priority', 2)
                                                                                ->  groupEnd();
                }
                if($filter['4']!=0){
                    $total_filtered                                             ->  groupStart()
                                                                                ->  like('dtm_arrivals_docs.priority', 1)
                                                                                ->  groupEnd();
                }
                if($filter['5']!=0){
                    $total_filtered                                             ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 1)
                                                                                ->  groupEnd();
                }
                if($filter['6']!=0){
                    $total_filtered                                             ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 2)
                                                                                ->  groupEnd();
                }
                if($filter['7']!=0){
                    $total_filtered                                             ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 3)
                                                                                ->  groupEnd();
                }
                if($filter['8']!=0){
                    $total_filtered                                             ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 4)
                                                                                ->  groupEnd();
                }
                if($filter['9']!=0){
                    $total_filtered                                             ->  groupStart()
                                                                                ->  like('dtm_copy_users_docs.state', 'copia')
                                                                                ->  groupEnd();
                }
            }

            $total_filtered                                                     =   count($total_filtered->get()->getResultArray());
            
        }

        $result['total']                                                        =   $total;
        $result['total_filtered']                                               =   $total_filtered;
        return $result;
        exit();
    }   


    /**
     * @author    Brayan Orellanos
     * @copyright Conectera
     * @since     v0.0
     * @param     int $start, $length; varchar $search array $actions
     * @return    array $result
    **/
    public function all_rows($start, $length, $search, $filter)
    {
        $result                                                                 =   array();

        $sql                                                                    =   $this->builder->select('dtm_arrivals_docs.*')
                                                                                ->  join('dtm_users_docs','dtm_arrivals_docs.id = dtm_users_docs.id_arrival_doc','left')
                                                                                ->  join('dtm_copy_users_docs','dtm_arrivals_docs.id = dtm_copy_users_docs.id_arrival_doc','left')
                                                                                ->  where('dtm_arrivals_docs.user_insert',$this->session->get('data.id'));

        if (!empty($search) || $filter!= '') 
        {
            if(!empty($search))
            {

                switch(true){
                    case preg_match("/Pendiente/i", $search):
                        $sql                                         ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 1)
                                                                                ->  groupEnd(); 
                        break;
                    case preg_match("/Enviado/i", $search):
                        $sql                                         ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 2)
                                                                                ->  groupEnd(); 
                        break;
                    case preg_match("/Leido/i", $search):
                        $sql                                         ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 3)
                                                                                ->  groupEnd(); 
                        break;
                    case preg_match("/Anulado/i", $search):
                        $sql                                         ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 4)
                                                                                ->  groupEnd(); 
                        break;
                    case preg_match("/Copia/i", $search):
                        $sql                                         ->  groupStart()
                                                                                ->  like('dtm_copy_users_docs.state', 'copia')
                                                                                ->  groupEnd(); 
                        break;
                    default:
                        $sql                                                    ->  groupStart()
                                                                                ->  like('dtm_arrivals_docs.subject', $search)
                                                                                ->  orlike('dtm_copy_users_docs.state', $search)
                                                                                ->  groupEnd(); 
                        break;
                }
            }
            if($filter != '')
            {
                $filter                                                         =   explode(',',$filter);
                if($filter['0']!=0){
                    $sql                                                        =   $this->builder->select('dtm_arrivals_docs.*')
                                                                                ->  orderBy('dtm_arrivals_docs.date_insert', 'DESC');
                }
                if($filter['1']!=0){
                    $sql                                                        =   $this->builder->select('dtm_arrivals_docs.*')
                                                                                ->  orderBy('dtm_arrivals_docs.date_insert', 'ASC');
                }
                if($filter['2']!=0){
                    $sql                                                        ->  groupStart()
                                                                                ->  like('dtm_arrivals_docs.priority', 3)
                                                                                ->  groupEnd();
                }
                if($filter['3']!=0){
                    $sql                                                        ->  groupStart()
                                                                                ->  like('dtm_arrivals_docs.priority', 2)
                                                                                ->  groupEnd();
                }
                if($filter['4']!=0){
                    $sql                                                        ->  groupStart()
                                                                                ->  like('dtm_arrivals_docs.priority', 1)
                                                                                ->  groupEnd();
                }
                if($filter['5']!=0){
                    $sql                                                        ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 1)
                                                                                ->  groupEnd();
                }
                if($filter['6']!=0){
                    $sql                                                        ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 2)
                                                                                ->  groupEnd();
                }
                if($filter['7']!=0){
                    $sql                                                        ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 3)
                                                                                ->  groupEnd();
                }
                if($filter['8']!=0){
                    $sql                                                        ->  groupStart()
                                                                                ->  like('dtm_users_docs.state', 4)
                                                                                ->  groupEnd();
                }
                if($filter['9']!=0){
                    $sql                                                        ->  groupStart()
                                                                                ->  like('dtm_copy_users_docs.state', 'copia')
                                                                                ->  groupEnd();
                }
            }
            
           
        }
        $sql                                                                    ->  orderBy('dtm_arrivals_docs.date_insert', 'DESC')
                                                                                ->  limit($length, $start);
        $query                                                                  =   $sql->get();
        
        $status                                                                 =   '';
        $class_status                                                           =   '';

        if (count($query->getResultArray()) > 0) 
        {
            $arr_docs                                                           =   array();
            $content                                                            =   '';

            foreach ($query->getResultArray() as $row) 
            {
                switch($row['priority']){
                    case 1:
                        $priority                                               =   "baja";
                        $class_priority                                         =   'low-priority-filter';
                        break;
                    case 2:
                        $priority                                               =   "media";
                        $class_priority                                         =   'media-priority-filter';
                        break;
                    case 3:
                        $priority                                               =   "alta";
                        $class_priority                                         =   'high-priority-filter';
                        break;
                }

                $content                                                    =   '<div class="card-arrival-doc mb-3" id="card_arrival_doc">
                                                                                    <div class="d-flex justify-content-between align-items-center p-3" >
                                                                                        <div class="d-flex justify-content-left align-items-left main-info-arriv-doc">
                                                                                            <p class="gen-info-arr-doc-prior"><span
                                                                                                    class="material-icons-round '.$class_priority.'">circle</span>Prioridad
                                                                                                '.$priority.'
                                                                                            </p>
                                                                                            <p class="imp-arriv-doc">'.$row['subject'].'</p>
                                                                                            <p class="gen-info-arriv-doc">'.$row['sender'].'</p>
                                                                                            <p class="info-arriv-doc-code-year">N° '.$row['code'].' - '.$row['subject'].'</p>
                                                                                        </div>
                                                                                        <div>
                                                                                            <p class="pb-5 gen-info-arriv-doc ml-4">'.$row['date_insert'].'</p>
                                                                                            <p class="status-arriv-doc '.$class_status.'">'.$status.'</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>';

                $arr_docs[]                                                    =   $content;
            }
            $result['data']                                                     =   $arr_docs;
        }
        else{
            $result['data']                                                     =   array();
        }

        return $result;
        exit();
    }
}