<?php
    class TimeLine {
        # Ex 2 : Fill out the methods
        private $db;
        function __construct()
        {
            # You can change mysql username or password
            $this->db = new PDO("mysql:host=localhost;dbname=timeline", "root", "root");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        public function add($tweet) // This function inserts a tweet
        {
            //Fill out here
            $author = $tweet[0];
            $content = $tweet[1];
            //$author = $this->db->quote($author);
            //$content = $this->db->quote($content);
            $add = $this->db->prepare("insert into tweets(author,contents,time) values(:author, :content , now())");
            $add->execute(array(':author'=>$author,':content'=>$content));

        }
        public function delete($no) // This function deletes a tweet
        {
            //Fill out here
            //$no = $this->db->quote($no);
            #$sql = 'DELETE FROM tweets WHERE no =:no ;';
            $delete = $this->db->prepare("delete from tweets where no = :no;");
            $delete->execute(array(':no'=>$no));
            #$delete = $this->db->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            #$delete->execute(array(":no" => '$no'));
            #$delete = $delete->fetchAll();
        }
        # Ex 6: hash tag
        # Find has tag from the contents, add <a> tag using preg_replace() or preg_replace_callback()
        public function loadTweets() // This function load all tweets
        {
            //Fill out here
            $load = $this->db->prepare("select * from tweets order by time desc;");
            $load->execute();
            $test = $load->fetchAll();
            return $test;
            //$q = "SELECT * FROM tweets ORDER BY time DESC";
            //$result = $this->db->query("select * from tweets order by time desc;");
            //$test = $load->fetchAll();
            
        }
        public function searchTweets($type, $query) // This function load tweets meeting conditions
        {
            //Fill out here
            $query = htmlspecialchars($query,ENT_COMPAT);
            if (!strcmp($type,"Author")){
                //echo "sql if come";
                //$query = $this->db->quote($query);
                $query = '%'.$query.'%';
                $result = $this->db->prepare("select * from tweets where author like :query order by time desc;");
                $result->execute(array(':query'=>$query));
                $test = $result->fetchAll();
                //print_r($result);
                return $test;
            }
            if (!strcmp($type,"Content")){
                $query = '%'.$query.'%';
                $result = $this->db->prepare("select * from tweets where contents like :query order by time desc;");
                $result->execute(array(':query'=>$query));
                $test = $result->fetchAll();
                //print_r($result);
                return $test;
            }
            

        }
    }
?>
