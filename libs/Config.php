<?php

class Config {

    private $vars;
    private static $instance;

    private function __construct() {
        $this->vars=array();
    } // constructor

    public function set($attributeName, $valor){
        if(!isset($this->vars[$attributeName])){
            $this->vars[$attributeName]=$valor;
        }
    } // set Generico

    public function get($attributeName){
        if(isset($this->vars[$attributeName])){
            return $this->vars[$attributeName];
        }
    } // get

    public static function singleton(){
        if(!isset(self::$instance)){
            $tmpClass=__CLASS__;
            self::$instance=new $tmpClass;
        }
        return self::$instance;
    } // singleton

} // fin clase

?>
