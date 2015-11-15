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
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>1</span>
                        <span>Last Week : 1</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>The Hills</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>1</span>
                        <span>Last Week : 1</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>The Hills</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>1</span>
                        <span>Last Week : 1</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>The Hills</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>1</span>
                        <span>Last Week : 1</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>The Hills</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>1</span>
                        <span>Last Week : 1</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>The Hills</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>1</span>
                        <span>Last Week : 1</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>The Hills</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>1</span>
                        <span>Last Week : 1</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>The Hills</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>1</span>
                        <span>Last Week : 1</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>The Hills</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>1</span>
                        <span>Last Week : 1</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>The Hills</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>2</span>
                        <span>Last Week : 2</span>
                    </div>
                    <div>
                        <img src="img/bieber.jpg" alt="album image" />
                        <p>
                            <span>What Do You Mean?</span>
                            <span>Justine Bieber</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-right"></i>
                    </div>
                    <div>
                        <span>3</span>
                        <span>Last Week : 3</span>
                    </div>
                    <div>
                        <img src="img/theweeknd.jpg" alt="album image" />
                        <p>
                            <span>Can't Feel My Face</span>
                            <span>The Weeknd</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-up"></i>
                    </div>
                    <div>
                        <span>4</span>
                        <span>Last Week : 9</span>
                    </div>
                    <div>
                        <img src="img/drake.jpg" alt="album image" />
                        <p>
                            <span>Hotline Bling</span>
                            <span>Drake</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-down"></i>
                    </div>
                    <div>
                        <span>5</span>
                        <span>Last Week : 4</span>
                    </div>
                    <div>
                        <img src="img/silento.jpg" alt="album image" />
                        <p>
                            <span>Watch Me</span>
                            <span>Silento</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-up"></i>
                    </div>
                    <div>
                        <span>6</span>
                        <span>Last Week : 7</span>
                    </div>
                    <div>
                        <img src="img/fetty.jpg" alt="album image" />
                        <p>
                            <span>679</span>
                            <span>Fetty Wrap Featuring Remy Boyz</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-down"></i>
                    </div>
                    <div>
                        <span>7</span>
                        <span>Last Week : 6</span>
                    </div>
                    <div>
                        <img src="img/rcity.jpg" alt="album image" />
                        <p>
                            <span>Locked Away</span>
                            <span>R. City Featuring Adam Levien</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-down"></i>
                    </div>
                    <div>
                        <span>8</span>
                        <span>Last Week : 5</span>
                    </div>
                    <div>
                        <img src="img/selena.jpg" alt="album image" />
                        <p>
                            <span>Good For You</span>
                            <span>Selena Gomez Featuring A$AP Rocky</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-down"></i>
                    </div>
                    <div>
                        <span>9</span>
                        <span>Last Week : 8</span>
                    </div>
                    <div>
                        <img src="img/omi.jpg" alt="album image" />
                        <p>
                            <span>Cheerleader</span>
                            <span>OMI</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
                </div>
                <div class="main_chart">
                    <div>
                        <i class="fa fa-arrow-up"></i>
                    </div>
                    <div>
                        <span>10</span>
                        <span>Last Week : 13</span>
                    </div>
                    <div>
                        <img src="img/taylor.jpg" alt="album image" />
                        <p>
                            <span>Wildest Dreams</span>
                            <span>Taylor Swift</span>
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-play"></i>
                    </div>
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
