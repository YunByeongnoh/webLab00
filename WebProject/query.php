<?php
    class Webquery {
        # Ex 2 : Fill out the methods
        private $db;
        function __construct()
        {
            # You can change mysql username or password
            $this->db = new PDO("mysql:host=localhost;dbname=project", "root", "root");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        public function add($insert) // This function inserts a  array of info login
        {
            //Fill out here
            $id = $insert[0];
            $pw = $insert[1];
            $email = $insert[2];

            #$id = $this->db->quote($id);
            #$pw = $this->db->quote($pw);
            #$email = $this->db->quote($email);
            $add = $this->db->prepare("insert into user values(:id, :pw , :email);");
            $add->execute(array(':id'=>$id , ':pw'=>$pw ,':email'=>$email ));
        }
        
        public function searchID($ID, $PW) // This function load tweets meeting conditions
        {
            //Fill out here
            $userid = $this->db->prepare("SELECT PW FROM user WHERE ID = :ID");
            $userid->execute(array('ID'=>$ID));
            $userid = $userid->fetchAll();

            if (!strcmp($PW,$userid[0][0])){
                return 1;
            }
            else{
                return 0;
            }
        }
    }
?>
