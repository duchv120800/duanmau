<?php
    if(!function_exists('require_file')){
        function require_file($pathFile){
            $files=array_diff(scandir($pathFile),['.','..']);
            foreach($files as $file){
                require_once $pathFile.$file;
            }
        }
    }

    if(!function_exists('debug')){
        function debug($data){
            echo '<pre>';
            print_r($data);
            echo "</pre>";
        }
    }
?>