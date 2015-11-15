<!-- Chanyeong Lee, 2011036856 -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome to TITLE</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header>
        <?php
            $setid = $_POST["bringID"];
           
            if ($setid == NULL){
        ?>
        <div>
            <div><a href = "login.php">Log in</a></div>                
            <div>Home</div>
        </div>
        <?php
            }
            else{
        ?>
         <div>
            <div><a><?=$setid?>님 환영합니다</a></div>  
            <form id = "myForm"  method = "post" action = "login.php">
                <div>
                    <input type="hidden"  name = "logout" value = "on" >
                   
                    <a onclick="document.getElementById('myForm').submit()">Logout</a>
                </div>
                
            </form>             
            <div>Home</div>
        </div>
        <?php
            }
        ?>
    </header>

        <!-- title -->
        <div>
            <div id="title">
              TITLEEEEEEEEE
            </div>

            <!-- navigation bar -->
            <nav>
              <div><a href="index.php">Home</a></div>
              <div><a href="tutorial.php">Tutorial</a></div>
              <div><a href="example.php">Example</a></div>
              <div><a href="advanced.php">Advanced</a></div>
              <div><a href="board.php">Board</a></div>
            </nav>

            <!-- body -->
            <article>
                <div id="content">
                  WELCOMEMMEMEMEEM
                </div>
            </article>
        </div>

        <!-- footer -->
        <footer>
            <div>
                <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="img/w3c-css.png" alt="Valid CSS" /></a>
                <a href="http://validator.w3.org/check/referer"><img src="img/w3c-html.png" alt="Valid HTML5" /></a>
            </div>
        </footer>
    </body>
</html>
