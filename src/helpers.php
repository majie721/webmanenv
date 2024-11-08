<?php
if(!function_exists('env')){
    function env(string $key = null, mixed $default = null){
        $loader =  new WebmanEnv\EnvLoader(base_path('.env'));
        return $loader::get($key,$default);
    }
}

if(!function_exists('_env')){
    function _env(string $key = null, mixed $default = null){
        $loader =  new WebmanEnv\EnvLoader(base_path('.env'));
        return $loader::get($key,$default);
    }
}
