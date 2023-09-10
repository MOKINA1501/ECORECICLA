<?php
namespace App\Libraries;

require_once APPPATH.'ThirdParty/Smarty/libs/Autoloader.php';

use \Smarty_Autoloader;

Smarty_Autoloader::register();

use \Smarty;

class CISmarty extends Smarty {

    public function __construct()
    {
        parent::__construct();
       
        parent::setTemplateDir(APPPATH . 'Views/');
        parent::setCompileDir(WRITEPATH . 'smarty/templates_c/')->setCacheDir(WRITEPATH . 'smarty/cache/');
       
    }

    public function view(string $view, array $options = null) 
    {
        $result = $this->fetch($view);
            
        return $result;
    }
    
    public function setData(array $data = [])
    {
        foreach ($data as $key => $value)
        {
            $this->assign($key, $value);
        }
        
        return $this;
    }
}