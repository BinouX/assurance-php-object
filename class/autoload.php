<?php
class Autoloader{
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    static function autoload($class){
      echo "test";
        require 'class/' . $class . '.php';
        require 'class/bean' . $class .'.php';
        require 'class/dao' . $class .'.php';
        require 'class/impl' . $class .'.php';
    }
}
?>
