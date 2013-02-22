<?php 
	App::uses('Sanitize', 'Utility');
	App::uses('Xml', 'Utility');

	class UsersController extends AppController{
		public $name = 'Users';
		public $helper = array('Html', 'Form','Javascript');
		public $components = array('Session','Util');//将组件导入进来
		
		//注册用户
		public function register(){
			$this->data = Sanitize::paranoid($this->data, array('@','_','.'));
			if(!empty($this->data)){
				//$username = mysql_real_escape_string($this->data['username']);
				//print_r($name);
			//	$results = $this->User->findByusername($this->data['User']['username']);
				//echo $results ;
			//	if(!$results){
					if($this->User->save($this->data)){
					
						$this->Session->setFlash('注册成功！');
						//$this->redirect('');
					//	$this->redirect(array('action' => 'login','controller'=>'users'));
					
					}else{
						$this->Session->setFlash('注册失败！');
						//$this->redirect(array('action' => 'register'));
					}
				}else{
					$this->Session->setFlash('该用户名已注册，请用其他的用户名！');
					//$this->redirect(array('action' => 'register'));
					//exit();
				//}
			}
			
		}
		public function test(){
			$path = 'xml/score2.xml' ;//xml文档的路径
				
				$str=$this->Util->XMLToJson($path); //使用组件将xml文档转化为json形式的数据
				
				print_r($str); //打印     gettimeofday(true);
				$this->User->create();
				$this->User->save($str);
		}
		
	}
?>
