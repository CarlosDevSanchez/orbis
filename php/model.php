<?php
    require_once './database.php';
    class Model{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function Login($username){
            $query = "SELECT * FROM Tbl_Users WHERE User_Username = :User_Username;";
            $this->db->query($query);
            $this->db->bind(':User_Username', $username);
            return $this->db->registro();
        }

        public function codeSearch($code){
            $query = "SELECT * FROM Tbl_Code WHERE Cod_Number = :Cod_Number;";
            $this->db->query($query);
            $this->db->bind(':Cod_Number', $code);
            return $this->db->resultado();
        }

        public function register($cod_id, $cod_number, $username, $password, $name, $lastname){
            $query = "INSERT INTO Tbl_Users (User_Name, User_Lastname, User_Username, User_Password, Tbl_Code_Cod_Id, Tbl_Code_Cod_Number) VALUES (:User_Name, :User_Lastname, :User_Username, :User_Password, :Tbl_Code_Cod_Id, :Tbl_Code_Cod_Number);";
            $this->db->query($query);
            $this->db->bind(':User_Name', $name);
            $this->db->bind(':User_Lastname', $lastname);
            $this->db->bind(':User_Username', $username);
            $this->db->bind(':User_Password', $password);
            $this->db->bind(':Tbl_Code_Cod_Id', $cod_id);
            $this->db->bind(':Tbl_Code_Cod_Number', $cod_number);
            return $this->db->execute();
        }
    }