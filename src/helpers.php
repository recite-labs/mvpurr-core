<?php

if(!function_exists('module_path')){
    function module_path($moduleName, $file) {
        return base_path("Modules/{$moduleName}/{$file}");
    }
}
