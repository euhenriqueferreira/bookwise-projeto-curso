<?php
    function view($view, $data = []){
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        require 'views/templates/app.php';
    }


    function dd(...$dump){
        dump($dump);
        exit();
    }


    function dump(...$dump){
        echo "<pre>";
        var_dump($dump);
        echo "</pre>";
    }

    function abort($code){
        http_response_code($code);
        view($code);
        die();
    }
?>