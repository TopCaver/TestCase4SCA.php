<?php
class TestController extends Cavy_Controller_Action {
	public $models = 'no';
	public function index(){
		$id = $this->_params['id'];
		$this->_render(array('id'=>$id),'test/index');
	}
}