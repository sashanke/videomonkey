<?php
header("Content-Type: text/html; charset=utf-8");

$config = parse_ini_file("config.ini", true);

require_once($config['pfade']['config'] . 'database.php');
require_once($config['pfade']['smarty'] . 'Smarty.class.php');

#Pear Var_Dump
require_once('Var_Dump.php');
Var_Dump::displayInit(array('display_mode' => 'HTML4_Text'), array('mode' => 'normal','offset' => 4));

# INIT Smarty
class Renderer extends Smarty { 
    function Init_Smarty() {
    	#$this->force_compile = true;
		$this->debugging = true;
		$this->caching = true;
		$this->cache_lifetime = 120;
    	
        $this->template_dir = './templates';
		$this->compile_dir = './templates/compiled';
		$this->config_dir = './configs';
		$this->cache_dir = './cache';
    }
}

?>