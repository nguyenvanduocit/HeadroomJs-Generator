<?php
/**
 * @project regexpBuilderJS-Example
 * @author nguyenvanduocit
 * @date 02/18/2015
 */

class AppData {
    private $data;
    private static $instance = null;
    public static function get_instance(){
        if(is_null(self::$instance)){
            self::$instance = new static();
        }
        return self::$instance;
    }
    function __construct()
    {
        $app_file = DEMO_DIR.DIRECTORY_SEPARATOR."app.json";
        if(is_file($app_file)){
            $this->data = (array)json_decode(file_get_contents($app_file));
        }
        else{
            $this->data = array();
        }
    }
    public function get_all(){
        return $this->data;
    }
    public function toJson(){
        return json_encode($this->get_all());
    }
    public function __get($property){
        if(isset($this->data[$property])){
            return $this->data[$property];
        }
        else{
            return false;
        }
    }
}