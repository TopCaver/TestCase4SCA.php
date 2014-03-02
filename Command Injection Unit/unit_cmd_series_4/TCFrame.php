<?php
class TCF_Controller_Action{
	public $_params = array();
	public function _render($data=null,$tpl){
		$this->data = $data;
		require_once("views/{$tpl}.tpl.php");
	}
}

function tcf_main() {
	$url = $_SERVER['REQUEST_URI'];
	$file = basename(__FILE__);
	$request_string = substr($url, strpos($url, $file)+strlen($file));
	list($controller,$action,$params) = explode("/", trim($request_string,"/"), 3);

	include("controllers/".ucfirst($controller)."Controller.php");
	$controller_class_name = ucfirst($controller)."Controller";
	$agent = new $controller_class_name;
	$agent->_params = array();
	$params_array = explode("/", $params);
	for ($i=0; $i < count($params); $i = $i+2) { 
		$agent->_params[$params_array[$i]] = $params_array[$i+1];
	}
	$agent->$action();
}

tcf_main();
?>