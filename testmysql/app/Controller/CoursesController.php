<?php
class CoursesController extends AppController{
	public $name = 'Courses';
	public function test(){
		
		for($i=0;$i<100;$i++){
			$data = array('Course'=>array('name'=>'course'.$i));
			$this->Course->save($data);
			//print_r($i);
		}
	}
	
}
?>