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
            $add = $this->db->prepare("insert into tweets(author,contents,time) values(:author, :content , now())");
            $add->execute(array(':author'=>$author,':content'=>$content));

        }
        public function delete($no) // This function deletes a tweet
        {
            //Fill out here
            
            $delete = $this->db->prepare("delete from tweets where no = :no;");
            $delete->execute(array(':no'=>$no));
           
        }
        # Ex 6: hash tag
        # Find has tag from the contents, add <a> tag using preg_replace() or preg_replace_callback()
        public function loadTweets() // This function load all tweets
        {
            //Fill out here
            
            
            $load = $this->db->query("select * from tweets order by time desc;");
            $row = $load->rowCount();
            $load = $load->fetchAll();
            for ($i=0; $i < $row; $i++) { 
                $content = $load[$i]["contents"];
                $myurl = "http://".$_SERVER["HTTP_HOST"]."/timeline/index.php";
                $replace = "<a href=\"{$myurl}?type=contents&query=%23$1\">#$1</a>";
                $regex = "/#([_]*[a-zA-Z0-9가-힣]+[\w가-힣]*)/";
                $content = preg_replace($regex, $replace, $content);
                $load[$i]["contents"] = $content;
            }
            return $load;
            
            
        }
        public function searchTweets($type, $query) // This function load tweets meeting conditions
        {
            //Fill out here
            $query = htmlspecialchars($query,ENT_COMPAT);
            if (!strcmp($type,"Author")){
                $query = '%'.$query.'%';
                $result = $this->db->prepare("select * from tweets where author like :query order by time desc;");
               
                $result->execute(array(':query'=>$query));
                 $row = $result->rowCount();
                $result = $result->fetchAll();
                for ($i=0; $i < $row; $i++) { 
                    $content = $result[$i]["contents"];
                    $myurl = "http://".$_SERVER["HTTP_HOST"]."/timeline/index.php";
                    $replace = "<a href=\"{$myurl}?type=contents&query=%23$1\">#$1</a>";
                    $regex = "/#([_]*[a-zA-Z0-9가-힣]+[\w가-힣]*)/";
                    $content = preg_replace($regex, $replace, $content);
                    $result[$i]["contents"] = $content;
                 }
                return $result;
            }
            if (!strcmp($type,"Contents")){
                $query = '%'.$query.'%';
                $result = $this->db->prepare("select * from tweets where contents like :query order by time desc;");
                $result->execute(array(':query'=>$query));
                $row = $result->rowCount();
                $result = $result->fetchAll();
                for ($i=0; $i < $row; $i++) { 
                    $content = $result[$i]["contents"];
                    $myurl = "http://".$_SERVER["HTTP_HOST"]."/timeline/index.php";
                    $replace = "<a href=\"{$myurl}?type=contents&query=%23$1\">#$1</a>";
                    $regex = "/#([_]*[a-zA-Z0-9가-힣]+[\w가-힣]*)/";
                    $content = preg_replace($regex, $replace, $content);
                    $result[$i]["contents"] = $content;
                 }
                return $result;
            }
            

        }
    }
?>
