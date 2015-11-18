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
					$switch;
					$logout = $_POST["logout"];
					print_r($logout."///");
					$getid = $_POST["login"];
					$getpw = $_POST["password"];
					include ("query.php");
					$query = new Webquery();
					$result = $query->searchID($getid,$getpw);
					print_r($result);
					if ($result == 0 ) {
						$switch = 1;
					}
					else{
						$switch = 0;
					}
					$setid = $_POST["login"];

					if ($result == 0 || $logout == "on"){
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
					if($result == 0){
						?>
						<p>아이디 또는 비밀번호를 잘못 입력하셧습니다</p>
						<?php
					}
					?>
					<?php
						#echo "<meta http-equiv='refresh' content='0; url=index.php'>";
					?>
					<?php
					} else {
					?>
					<p>로그인 되었습니다</p>
					<form  method = "post" action = "index.php">
						<div>
							<input type="hidden"  name = "bringID" value = <?=$getid?> >
						</div>
						<input type="submit" value="게시판으로">
					</form>

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
