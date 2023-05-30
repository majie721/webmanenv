<?php
if(!function_exists('env')){
    function env(string $key = null, mixed $default = null){
        $loader =  new Majie721\Webmanenv\EnvLoader(base_path('.env'));
        return $loader::get($key,$default);
    }
}