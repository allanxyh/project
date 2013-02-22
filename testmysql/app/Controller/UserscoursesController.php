<?php
class UserscoursesController extends AppController{
	public $name = 'Userscourses';
	public $components = array('Session','Util');//将组件导入进来
	/**
	 * 测试写操作
	 */
	public function  testWrite(){
		
			$path = 'xml/score4.xml' ;//xml文档的路径
		
			$str=$this->Util->XMLToJson($path); //使用组件将xml文档转化为数组形式的数据
			
			//print_r($str['User']['Userscourse']);
			//将各科成绩插入数据库
			for($i=0;$i<count($str['User']['Userscourse']);$i++){
				$a = array('Userscourse'=>'');
				$a['Userscourse'] = $str['User']['Userscourse'][$i];
				//print_r($a);
				$this->Userscourse->create();
				$this->Userscourse->save($a);
			}
	}
	/**
	 * 测试读操作
	 */
	public function testRead(){
		$userscourse = $this->Userscourse->find('all',array('conditions'=>array('Userscourse.uid = '=>1)));
		//print_r($userscourse);
		
	}
	
		
	
}
?>