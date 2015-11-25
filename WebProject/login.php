<?session_start();?>
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
			<div>
				<div><a href = "login.php">Log in</a></div>
				<div><a href = "index.php">Home</a></div>
			</div>
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
					<?php
					$logout = $_POST["logout"];
					include ("query.php");
					$getid = $_POST["login"];
					$getpw = $_POST["password"];
					$query = new Webquery();
					$result = $query->searchID($getid,$getpw);


					if ($logout == "on"){
						
						?>
					<section class="container">
						<div class="login">
							<h1>Login to This Page</h1>
							<form id = "loginform" method="post" action="login.php" >
								<p>ID :	<input type="text" name="login" value="" placeholder="Username or Email"></p>
								<p>PW : <input type="password" name="password" value="" placeholder="Password"></p>
								<p class="submit"><input type="submit" name="commit" value="Login"></p>
							</form>
						</div>

						<p>회원이 아니신가요?  <button><a href="MKID.php">회원가입</a></button></p>
					</section>

					<?php
					
					if($result != $getid){
						?>
						<p>아이디 또는 비밀번호를 잘못 입력하셧습니다</p>
						<?php
					}
					?>
					<?php
						#echo "<meta http-equiv='refresh' content='0; url=index.php'>";
					?>
					<?php
					} 
					elseif ($result == null){
						?>

					<section class="container">
						<div class="login">
							<h1>Login to This Page</h1>
							<form id = "loginform" method="post" action="login.php" >
								<p>ID :	<input type="text" name="login" value="" placeholder="Username or Email"></p>
								<p>PW : <input type="password" name="password" value="" placeholder="Password"></p>
								<p class="submit"><input type="submit" name="commit" value="Login"></p>
							</form>
						</div>

						<p>회원이 아니신가요?  <button><a href="MKID.php">회원가입</a></button></p>
					</section>

					<?php
					
					if($result != $getid){
						?>
						<p>아이디 또는 비밀번호를 잘못 입력하셧습니다</p>
						<?php
					}
					?>
					<?php
						#echo "<meta http-equiv='refresh' content='0; url=index.php'>";
					?>
					<?php
					} 
					else{
						$_SESSION["user_id"] = $result;

					?>
					<p>로그인 되었습니다</p>
					<p><button><a href="board.php">게시판으로</a></button></p>
					<?php
						
					}

					?>
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
