<?php

/**
 * @author    Alex Díaz
 * @copyright Conectera
 * @version   v 0.0
 **/

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->builder                                                          =   $this->db->table('dtm_users');
        $this->validation                                                       =   \Config\Services::validation();
        $this->request                                                          =   \Config\Services::request();
        $this->email                                                            =   \Config\Services::email();
        $this->session                                                          =   session();
    }


	public function menu_left($role)
    {
        $html                                                                   =   '';

        $all_modules                                                            =   array();
        $roles_user                                                             =   array($role);

        $this->builder = $this->db->table('dtm_permissions');

        if (isset($this->session->userdata['id']))
        {
            $this->db->select('id_role');
            $this->db->where('id_user', $this->session->userdata['id_user']);

            $query_roles                                                        =   $this->db->get('dtm_users_roles');

            if (count($query_roles->result_array()) > 0)
            {
                foreach ($query_roles->result_array() as $row)
                {
                    $roles_user[]                                               =   $row['id_role'];
                }
            }
        }

        $this->builder->select('dtm_modules.id, dtm_modules.name, dtm_modules.name_es, dtm_modules.icon, dtm_modules.url,  dtm_modules.menu');
        $this->builder->join('dtm_submodules', 'dtm_submodules.id = dtm_permissions.submodule');
        $this->builder->join('dtm_modules', 'dtm_modules.id = dtm_submodules.module');
        $this->builder->where('dtm_modules.menu', 0);
        $this->builder->wherein('dtm_permissions.role', $roles_user);
        $this->builder->groupby('dtm_modules.id');
        $this->builder->orderby('dtm_modules.sort ASC');

        $query                                                                  =   $this->builder->get();

        $modules                                                                =   array();
        $modules                                                                =   $query->getResult('array');

        if (count($modules) > 0)
        {
            $this->builder->select('dtm_modules.id, dtm_submodules.name, dtm_submodules.name_es, dtm_submodules.url');
            $this->builder->join('dtm_submodules', 'dtm_submodules.id = dtm_permissions.submodule');
            $this->builder->join('dtm_modules', 'dtm_modules.id = dtm_submodules.module');
            $this->builder->wherein('dtm_permissions.role', $roles_user);
            $this->builder->groupby('dtm_permissions.submodule');
            $this->builder->orderby('dtm_submodules.sort ASC');

            $query                                                              =   $this->builder->get();

            $submodules                                                         =   array();
            $submodules                                                         =   $query->getResult('array');

            foreach ($modules as $module)
            {
                // die(var_dump($modules));
                if ($module['url'] != '' && $module['url'] != '#')
                {
                    $html                                                       .=  '<a href="' . base_url ($module['url']) . '" class="br-menu-link">'
                                                                                .   '<div class="br-menu-item">'
                                                                                .   '<i class="menu-item-icon ' . $module['icon'] . '"></i>'
                                                                                .   '<span class="menu-item-label op-lg-0-force d-lg-none">' . $module['name_es'] . '</span>'
                                                                                .   '</div>'
                                                                                .   '</a>';

                    $all_modules[]                                              =   $module['name'];
                }
                else
                {

                    $html                                                       .=  '<a href="' . base_url($module['url']) . '" class="br-menu-link">'
                                                                                .   '<div class="br-menu-item">'
                                                                                .   '<i class="menu-item-icon ' . $module['icon'] . '"></i>'
                                                                                .   '<span class="menu-item-label op-lg-0-force d-lg-none">' . $module['name_es'] . '</span>'
                                                                                .   '<i class="menu-item-arrow fas fa-angle-down op-lg-0-force d-lg-none"></i>'
                                                                                .   '</div>'
                                                                                .   '</a>'
                                                                                .   '<ul class="br-menu-sub nav flex-column">';

                    foreach ($submodules as $submodule)
                    {
                        if ($submodule['id'] == $module['id'])
                        {
                            $html                                               .=  '<li class="nav-item"><a href="' . base_url($submodule['url']) . '" class="' . $submodule['url'] . ' nav-link">' . $submodule['name_es'] . '</a></li>';
                        }

                        $all_modules[]                                          =   $submodule['name'];
                    }

                    $html                                                       .=  '</ul>';
                }
            }
        }

        if (isset($this->session->userdata['role']))
        {
            $this->session->set_userdata(array('modules' => $all_modules));
        }

        return $html;
        exit();
    }

}
