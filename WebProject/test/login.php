<?php include 'base.php' ?>
<?php startblock('body') ?>
			<!-- body -->
			<article>
				<div id="content">
					<?php
					if(isset($_POST["logout"])) {
						$logout = $_POST["logout"];
					}
					else{
						$logout = "";
					}
					include ("query.php");
					//if(isset($getid)) {
					if (isset($_POST["login"])) $getid = $_POST["login"];
					else $getid = NULL;
					//}
					//else{
						//$getid = null;
				//	}
					if(isset($_POST["password"])) $getpw = $_POST["password"];
					else $getpw = NULL;

					//}
					//else{
					//	$getpw = null;
					//}


					$query = new Webquery();
					$result = $query->searchID($getid,$getpw);
					var_dump($logout);
					if ($logout == "on"){
						session_destroy();
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
<?php endblock()?>
