<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Simple Timeline</title>
        <link rel="stylesheet" href="timeline.css">
    </head>
    <body>
        <div>
            <a href="index.php"><h1>Simple Timeline</h1></a>
            <div class="search">
                <!-- Ex 3: Modify forms -->
                <form class="search-form" method = "get" action = "index.php">
                    <input type="submit" value="search">
                    <input type="text" placeholder="Search" name = "search">
                    <select name = "select">
                        <option>Author</option>
                        <option>Content</option>
                    </select>
                </form>
            </div>
                <?php
               
                $selected = $_GET["select"];
                $searched = $_GET["search"];
                $hash = $_REQUEST["query"];

                if(!empty($searched)){
                 ?>
                 <div class="panel-heading">
                    <!-- Ex 3: Modify forms -->
                    <form class="write-form" method = "post" action = "add.php">
                        <input type="text" placeholder="Author" name ="Author">
                        <div>
                            <input type="text" placeholder="Content" name = "Content" >
                        </div>
                        <input type="submit" value="write">
                    </form>
                </div>
                 <?php   
                    include "timeline.php";
                    $search = new TimeLine();
                    $searched = htmlspecialchars($searched,ENT_COMPAT);
                    $find = $search->searchTweets($selected,$searched);

                    foreach ($find as $row) {
                  ?>
                        <div class="tweet">
                        <form class="delete-form" method = "post" action = "delete.php">
                            <input type="submit" value="delete" name = "delete">
                            <input type="hidden" value = <?=$row[0]?> name = "no">
                        </form>
                        <div class="tweet-info">
                            <span><?=$row[1]?></span>
                            <span><?=$row[3]?></span>
                        </div>
                        <div class="tweet-content">
                            <?=$row[2]?>
                        </div>

                     </div>
                    <?php 
                    }
                }
                else{         
            ?>
            <div class="panel">
                <div class="panel-heading">
                    <!-- Ex 3: Modify forms -->
                    <form class="write-form" method = "post" action = "add.php">
                        <input type="text" placeholder="Author" name ="Author">
                        <div>
                            <input type="text" placeholder="Content" name = "Content" >
                        </div>
                        <input type="submit" value="write">
                    </form>
                </div>
                <!-- Ex 3: Modify forms & Load tweets -->
                   <?php 
                     include "timeline.php";
                     $list = new TimeLine();
                     $rows;
                    if (!empty($hash)){                    
                        $rows = $list->searchTweets("Content",$hash);
                        
                    }
                    else{
                        $rows = $list->loadTweets();
                    }
                     foreach ($rows as $row ) {
                                            
                    ?>
                    <div class="tweet">
                        <form class="delete-form" method = "post" action = "delete.php">
                            <input type="submit" value="delete" name = "delete">
                            <input type="hidden" value = <?=$row[0]?> name = "no">
                        </form>
                        <div class="tweet-info">
                            <span><?=$row[1]?></span>
                            <span><?=$row[3]?></span>
                        </div>
                        <div class="tweet-content">
                            <?=$row[2]?>
                        </div>

                     </div>
                    <?php 
                        }};
                    ?>
               
            </div>
        </div>
    </body>
</html>
