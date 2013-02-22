<h1>博客用户的注册</h1>
<?php 
	
   	
	echo $this->Form->create('User',array('method'=>'post'));
	echo $this->Form->input('username',array('id'=>'username'));
	echo $this->Form->input('password',array('id'=>'password'));
	echo $this->Form->input('email',array('id'=>'email'));
	echo $this->Form->end('注册');

?>