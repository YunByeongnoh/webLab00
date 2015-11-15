<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="author">
	<link rel="stylesheet" href="index.css">
</head>
<body>
 	<header>
        <?php
            $setid = $_POST["bringID"];
            print($setid."ddd?");
            $logon = "ng2111";
            $getid;
            $getpw;
            if ($logon == NULL){
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
            <div><a><?=$logon?>님 환영합니다</a></div>  
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
    		<button id="writeBtn">글쓰기</button>
				<?
				// 1. 공통 인클루드 파일
				include ("./include.php");
				?>
				<br/>
				<table id="tabletitle">
				    <tr>
				        <td align="center" valign="middle">글목록</td>
				    </tr>
				</table>
				<br/>
				<table id="board" cellspacing="1">
				    <tr class="boardtitle">
				        <td align="center" valign="middle" width="5%">번호</td>
				        <td align="center" valign="middle" width="30%">글제목(hash)</td>
				        <td align="center" valign="middle" width="15%">글쓴이</td>
				        <td align="center" valign="middle" width="15%">Answer</td>
				        <td align="center" valign="middle" width="15%">Views</td>
				        <td align="center" valign="middle" width="20%">작성일</td>
				    </tr>
				    <tr class="boardcontent">
				        <td align="center" valign="middle" width="5%">1</td>
				        <td align="center" valign="middle" width="30%">가가</td>
				        <td align="center" valign="middle" width="15%">가가가</td>
				        <td align="center" valign="middle" width="15%">가가가</td>
				        <td align="center" valign="middle" width="15%">가가가</td>
				        <td align="center" valign="middle" width="20%">2014-02-03</td>
				    </tr>
				    <tr class="boardcontent">
				        <td align="center" valign="middle" width="5%">2</td>
				        <td align="center" valign="middle" width="30%">나</td>
				        <td align="center" valign="middle" width="15%">나나나</td>
				        <td align="center" valign="middle" width="15%">나나나</td>
						<td align="center" valign="middle" width="15%">나나나</td>
				        <td align="center" valign="middle" width="20%">2014-03-20</td>
				    </tr>
				</table>
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
