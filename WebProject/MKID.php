<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="author" content="author">
      <link rel="stylesheet" href="index.css">
      <title>Welcome to TITLE</title>
  </head>
  <body>
    <header>
        <?php
            $logon;
            if ($logon == NULL){
        ?>
        <div>
            <div><a href = "login.php">Log in</a></div>
            <div><a href = "index.php">Home</a></div>
        </div>
        <?php
            }
            else{
        ?>
         <div>
            <div><a><?=$logon?>님 환영합니다</a></div>
            <div><a herf = "index.php">Log out</a></div>
            <div><a href = "index.php">Home</a></div>
        </div>
        <?php
            }
        ?>
    </header>

    <div>

        <!-- title -->
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
            <h1>회원가입 페이지</h1>
            <form name="signup_form" method="post" action="add.php" >
                ID(4~20 Character): <input type="text" name="user_id" /><br />
                PW(4~20 Character): <input type="password" name="user_pass"/><br />
                Retype Confirm : <input type="password" name="user_pass2" /><br />
                Email Address : <input type="email" name="user_email" /><br />
                <input type="submit" herf value="회원가입" />
            </form>
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
