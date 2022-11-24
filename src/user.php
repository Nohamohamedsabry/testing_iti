<?php 
class User{
  public $name;
  public $email;
  function set_name($name){
    $this->name=$name;
  }
  function set_email($email){
    $this->email=$email;
  }
  function name() {
    $arguments= func_get_args();
    $number_of_arguments= func_num_args();
    if($number_of_arguments==1){
        $this->set_name($arguments[0]);
        return $this->name;
    }else{
        return $this->name;
    }  
  }
  function email(){
    $arguments= func_get_args();
    $number_of_arguments= func_num_args();
    if($number_of_arguments==1){
        $this->set_email($arguments[0]);
        return $this->email;
    }else{
        return $this->email;
    }
  }
  function __destruct() {
    echo "Name---->{$this->name}.<br>";
    echo "E-mail----->{$this->email}.<br>";
  }
}
?>