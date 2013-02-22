<?php 
	class ConvertsController extends AppController{
		public $name = 'Converts';
		public $components = array('Util');
		public function test(){
			$this->layout = false ;
			$str=$this->Util->XMLToJson('xml/introduce.xml');
			print_r($str);
		}
	}

?>
