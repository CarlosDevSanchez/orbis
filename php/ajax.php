<?php

    require_once './model.php';

    class Password {
        public static function hash($password) {
            return hash('sha512', SALT . $password);
        }
        public static function verify($password, $hash) {
            return ($hash == self::hash($password));
        }
    }

    $Pass = new Password();
    $Model = new Model();

    #login response
    if(!isset($_POST['inputCodeSegurity']) && isset($_POST['inputUsername']) && isset($_POST['inputPassword'])):
        $username = trim($_POST['inputUsername']);
        $password = trim($_POST['inputPassword']);

        $res = $Model->Login($username);
        $responser = [];
        if($res){
            if($Pass->verify($res->User_Password, $password)){
                $responser = [
                    'message' => 'datos correctos',
                    'status' => 'activo',
                    'error' => ''
                ];
            }else{
                $responser = [
                    'message' => 'Credenciales incorrectas',
                    'status' => 'bloqueado',
                    'error' => 'Verificar el nombre de usuario y contraseña'
                ]; 
            }
        }
        print(json_encode($responser));
    endif;

    #register response
    if(isset($_POST['inputCodeSegurity']) && isset($_POST['inputUsername']) && isset($_POST['inputPassword'])):
        $code = trim($_POST['inputCodeSegurity']);
        $username = trim($_POST['inputUsername']);
        $password = trim($_POST['inputPassword']);
        $name = trim($_POST['inputName']);
        $lastname = trim($_POST['inputLastname']);

        $res = $Model->codeSearch($code);
        $responser = [];
        if(isset($res)){
            if($model->register($res->Cod_Id, $res->Cod_Number, $username, $Pass->hash($password), $name, $lastname)){
                $responser = [
                    'message' => 'datos correctos',
                    'status' => 'create',
                    'error' => ''
                ];
            }else{
                $responser = [
                    'message' => 'Credenciales incorrectas',
                    'status' => 'bloqueado',
                    'error' => 'Verificar campos'
                ];
            }
        }
        print(json_encode($responser));
    endif;

    