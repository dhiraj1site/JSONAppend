<?php

class JSONAppendTest extends PHPUnit_Framework_TestCase{
	
  public function testIsThereAnySyntaxError(){
	$var = new dhiraj1site\jsonappend\JSONAppend;
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
  public function testMethod1(){
	$var = new dhiraj1site\jsonappend\JSONAppend;
	$this->assertTrue($var->method1("hey") == 'Hello World');
	unset($var);
  }
  
}