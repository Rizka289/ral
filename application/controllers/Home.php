<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function index()
    {
        $data = array(
            'resource' => array('main', 'dore'),
            'navbar' => 'component/navbar/navbar.dore',
            'navbarConf' => array(
                'adaUserMenu' => false,
                'adaNotif' => true,
                'pencarian' => true,
                'adaSidebar' => true,
                'homePath' => base_url()
            ),
            'sidebar' => 'component/sidebar/sidebar.dore',
            'sidebarConf' => config_sidebar('admin', 1, 2) // parameter pertama adalah kelompok menu sidebar, kedua adalah menu sidebar yang active, ketiga adalah subMenu yang active (jika ada)
        );
        $this->addViews('template/dore', $data);
        $this->render();
    }
}
