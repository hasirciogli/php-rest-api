<?php 

class PluginController{
    public function run($params){
        die("ok" . var_dump($params));
    }

    public static function cfun($params){
        $pc = new PluginController();
        $pc->run($params);
        return $pc;
    }
}

?>