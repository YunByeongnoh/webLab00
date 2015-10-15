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
                //echo $tokens[0];
                array_push($list1, $tokens[0]);
                array_push($list2, $tokens[1]);
                $filename +=1;
        }
        print_r($list1);
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
            function getWordsByNumber($listOfWords, $numberOfWords){
                $resultArray = array();
//                implement here.
                return $resultArray;

            }
            $i = 0;
            foreach ($list1 as $key ) {
               
           ?>
         
            <li><?=$key?> - <?=$list2[$i]?></li>
        
        <?php  
            $i +=1;   
            }
        ?>
       </ol>
    </div>
    <div class="section">
        <h2>Searching Words</h2>
<!-- Ex. 3: Searching Words & Ex 6: Query Parameters -->
         <p>
            Words that started by <strong>'C'</strong> are followings :
        </p>
        <ol>
        <?php
            function getWordsByCharacter($listOfWords, $startCharacter){
                $resultArray = array();
//                implement here.
                return $resultArray;
            }

            $string = 'C';
            
            $j = 0;
            foreach ($list1 as $key) {
                if ($key[0] ==$string ) {
                    ?>
                    <li><?=$key?> - <?=$list2[$j]?></li>
                    <?php
                }
                $j +=1;
            }

        ?>
      
          
        </ol>
    </div>
    <div class="section">
        <h2>List of Words</h2>
<!-- Ex. 4: List of Words & Ex 6: Query Parameters -->
        <p>
            All of words ordered by <strong>alphabetical order</strong> are followings :
        </p>
        <ol>
        <?php
            function getWordsByOrder($listOfWords, $orderby){
                $resultArray = $listOfWords;
//                implement here.
                return $resultArray;
            }

            $i=0;
            sort($list1);
            foreach ($list1 as $key ) {
                if (strlen($key)>6) {
                    ?>
                     <li class="long"><?=$key?> - <?=$list2[$i]?> </li>
                    <?php
                }else{
                    ?>
                     <li><?=$key?> - <?=$list2[$i]?> </li>
                     <?php
                }
            }
            $i +=1;
        ?>
        
        </ol>
    </div>
    <div class="section">
        <h2>Adding Words</h2>
<!-- Ex. 5: Adding Words & Ex 6: Query Parameters -->
        <p>Input word or meaning of the word doesn't exist.</p>
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