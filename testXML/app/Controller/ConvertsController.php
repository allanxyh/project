<?php 
	class ConvertsController extends AppController{
		public $name = 'Converts';
		
		public $components = array('Util');//将组件导入进来
		
		public function test(){
				$path = 'xml/saying.xml' ;//xml文档的路径
				
				$str=$this->Util->XMLToJson($path); //使用组件将xml文档转化为json形式的数据
				
				print_r($str); //打印
				
			
		}
	}

?>
