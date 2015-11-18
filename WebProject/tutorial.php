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
            <div><a href = "index.php">Home</a></div>
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

                    <a onclick="document.getElementById('myForm').submit()">Log out</a>
                </div>

            </form>
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

            <!-- side bar -->
            <aside>
                <div>영역 1. 프로그래밍 제어구조 기초</div>
                <div>[Step A] 변수의 사용과 데이터 입출력</div>
                <div>[Step B] 단순 조건문 사용하기</div>
                <div>[Step C] 복합 조건문 사용하기</div>
                <div>[Step D] 반복문 사용하기</div>
                <div>영역 2 : 프로그래밍 제어구조 응용</div>
                <div>[Step E] 복합 반복문 사용하기</div>
                <div>[Step F] 배열 사용하기</div>
                <div>[Step G] 조건과 반복을 활용하는 응용 예제 해결하기</div>
                <div>[Step H] C언어의 주요 함수 사용하기</div>
                <div>영역 3 : 함수 만들어 사용하기</div>
                <div>[Step I] 리턴 값이 없는 함수 만들기</div>
                <div>[Step J] 파라미터는 없고 리턴 값만 있는 함수 만들기</div>
                <div>[Step K] 파라미터와 리턴 값이 모두 있는 함수 만들기</div>
                <div>[Step L] 재귀 호출 함수 만들기</div>
                <div>영역 4. 구조적 데이터 다루기</div>
                <div>[Step M] 구조체 사용하기</div>
                <div>[Step N] 포인터 사용하기</div>
                <div>[Step O] 구조체와 배열 함께 사용하기</div>
                <div>[Step P] 파일 사용하기</div>
            </aside>

            <!-- body -->
            <article>
                <div id="content">
                  content
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
