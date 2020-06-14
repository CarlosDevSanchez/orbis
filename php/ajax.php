<?php
    if(isset($_POST['inputUsername']) && isset($_POST['inputPassword'])):
        $username = trim($_POST['inputUsername']);
        $password = trim($_POST['inputPassword']);
        $responser = [
            'message' => 'datos correctos',
            'status' => 'activo',
            'error' => ''
        ];
        print(json_encode($responser));
    endif;