<!DOCTYPE html>
<html>
<head>
    <title>Dictionary</title>
    <meta charset="utf-8" />
    <link href="dictionary.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="header">
        <h1>My Dictionary</h1>
        <!-- Ex. 1: File of Dictionary -->
        <?php
        $list1 = array();
        $list2 = array();
        $name = file("dictionary.tsv");
        foreach ($name as $word) {
            $tokens = explode("\t", $word);
            $line = explode("\n", $word);
            array_push($list1, $tokens[0]);
            array_push($list2, $tokens[1]);
            $filename +=1;
        }
        $size = (int) filesize("dictionary.tsv");
        ?>
        <p>
            My dictionary has <?=$filename?> total words
            and
            size of <?=$size?> bytes.
        </p>
    </div>
    <div class="article">
        <div class="section">
            <h2>Today's words</h2>
            <!-- Ex. 2: Today’s Words & Ex 6: Query Parameters -->
            <ol>
                <?php
                $numberOfWords = (int)$_GET['number_of_words'];
                #print_r($numberOfWords);
                if ($numberOfWords == null){
                    #print("com");
                    $numberOfWords = 3;
                }
                #print_r($numberOfWords);
                $todaysWords = getWordsByNumber($name,$numberOfWords);
                foreach ($todaysWords as $key ) {
                    $list = explode("\t", $name[$key]);
                 ?>
                 
                    <li><?=$list[0]?> - <?=$list[1]?></li>
                 
                 <?php  
                }
                function getWordsByNumber($listOfWords, $numberOfWords){
                    

                        $resultArray = array();
                        $resultArray = array_rand($listOfWords,$numberOfWords);
                        return $resultArray;
                     

                }

             ?>
         </ol>
     </div>
     <div class="section">
        <h2>Searching Words</h2>
        <!-- Ex. 3: Searching Words & Ex 6: Query Parameters -->
         <ol>
            <?php
            
            $startCharacter = $_GET['character'];
            if ($startCharacter == null){
                $startCharacter = 'C';
            }
            $searchedWords = getWordsByCharacter($name,$startCharacter);


            function getWordsByCharacter($listOfWords, $startCharacter){
                $resultArray = array();
                foreach ($listOfWords as $key => $value) {
                    if($value[0] == $startCharacter){
                        array_push($resultArray, $value);
                    }
                }
                return $resultArray;
            }

            ?>

        <p>
            Words that started by <strong>"<?=$startCharacter?>"</strong> are followings :
        </p>
       
            <?php
                foreach ($searchedWords as $key => $value) {
                    $list = explode("\t",  $value);

            ?> 
                    <li> <?=$list[0]?> - <?=$list[1]?> </li>
            <?php
                }
            ?>
        </ol>
    </div>
    <div class="section">
        <h2>List of Words</h2>
        <!-- Ex. 4: List of Words & Ex 6: Query Parameters -->
            <ol>
            <?php

            $orderby = (int)$_GET['orderby'];
            if ($orderby == null){
                $orderby = 0;
            }
            $orderbyWord = getWordsByOrder($name,$orderby);
            $order;
            if($orderby ==0 )
                $order =  "alphabetical order";
            else{
                $order = "reverse alphabetical order";
            }
            ?>
             <p>
                All of words ordered by <strong><?=$order?></strong> are followings :
             </p>
            <?php
            foreach ($orderbyWord as $key => $value) {
                    $list = explode("\t", $value);
                    if (strlen($list[0]) > 6 ){
            ?>
                        <li class= "long" > <?=$list[0]?> - <?=$list[1]?></li>
            <?php

                    }
                    else{
            ?>
                        <li><?=$list[0]?> - <?=$list[1]?></li>
            
            <?php
                    }
            }

            function getWordsByOrder($listOfWords, $orderby){
                $resultArray = $listOfWords;
                if($orderby == 0){
                    asort($resultArray);
                }
                if($orderby == 1){
                    arsort($resultArray);
                }
                return $resultArray;
            }
            ?>
            </ol>

    
    </div>
    <div class="section">
        <h2>Adding Words</h2>
        <!-- Ex. 5: Adding Words & Ex 6: Query Parameters -->
        <?php
            $newWord = $_GET['new_word'];
            $meaning = $_GET['meaning'];
            
            if (isset($newWord) && isset($meaning)) {
                $input = $newWord."\t".$meaning;
                file_put_contents($name,$input."\n",FILE_APPEND);
                ?>Adding a word is success!
        <?php
                
            }
            else{
               
        ?>
                <p>Input word or meaning of the word doesn't exist.</p>
        <?php
            }
        ?>
    </div>
</div>
<div id="footer">
    <a href="http://validator.w3.org/check/referer">
        <img src="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/images/w3c-html.png" alt="Valid HTML5" />
    </a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/images/w3c-css.png" alt="Valid CSS" />
    </a>
</div>
</body>
</html>