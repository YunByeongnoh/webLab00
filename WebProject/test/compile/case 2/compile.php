<?php

header("Content-Type: text/html; charset=UTF-8");

if(isset($_POST['code']))
    $code = $_POST['code'];

    /*{$code = str_replace('///','
',$_POST['code']);
    }*/

else
    $code='';

if(isset($_GET['answer']))
    $answer = $_GET['answer'];
    
else
    $answer = '';

if(isset($_GET['detail']))
    $detail=$_GET['detail']=='1'?true:false;
else
    $detail=false;

if(!empty($_POST['input'])){
    $input = $_POST['input'];
}



//str_replace(basename(__FILE__), "", realpath(__FILE__))는 현재 폴더를 의미.
//str_replace("찾을문자열","치환할문자열","대상문자열");


$testFile = str_replace(basename(__FILE__), "", realpath(__FILE__)).'answer/'.$answer; //테스트 파일 경로.
//__FILE__ 마법상수 , 심볼릭 링크통해 해석된 경우를 포함한 파일의 전체 경로와 이름. the full path and filename of the file.


$tempFile = 'compile/'.md5(microtime());//컴파일할 때 임시 파일명.
//md5함수는 입력된 텍스트를 md5로 바꿔주는 함수 md5는 암호화 해시함수.
//microtime()은 현재 시간을 microseconds 단위로 출력해주는 함수.

//코드 txt파일에 쓰기.
$file = fopen($tempFile.'.c','w'); //임시 소스 파일을 쓰기 형식으로 불러옴.
fwrite($file,$code);//POST값으로 받은 소스코드를 임시 소스 파일에 입력.
fclose($file);//임시 소스 파일 클로즈.

//t1.txt 입력값과 정답처리 파일
$file = fopen($testFile,'r');//테스트 값들을 읽기 형식으로 불러옴.
$testText = fread($file,filesize($testFile));//불러들인 파일을 읽어 $testText에 저장.
fclose($file);//테스트 값 파일 클로즈.

$testCase = split('out::',$testText);//불러온 테스트 값들을 'out::'라는 문자열로 나눠 배열로 저장.


$testInput = split('
',$testCase[0]);//인풋 값을 줄바꿈으로 나눠 배열로 저장.


$testInput=array_values(array_filter(array_map('trim',$testInput)));//인풋 값에 의미없는 공백을 빼고, 빈 문자열이 있다면 삭제.
//trim = 시작과 끝 문자열에서 공백(또는 문자)를 제거하는는 trim함수
//array_map = 배열의 각 원소에 사용자가 정의한 함수를 적용하고 적용한 후의 결과를 배열로 반환한다. 
//array_filter = boolean 값이나 null, 공백등이 들어가는걸 방지.
//array_values = index를 숫자로 바꿔버린다.
/*<?php

$entry = array(
             0 => 'foo',
             1 => false,
             2 => -1,
             3 => null,
             4 => ''
          );

print_r(array_filter($entry));
?>
위의 예와 출력은 이하입니다.

Array
(
    [0] => foo
    [2] => -1
)
*/

$checkCount = 1; //출력된 값과 정답을 비교하기 위해 현재 테스트하고 있는 값이 몇 번째 값인 지 알기 위한 변수.


shell_exec('gcc -o '.$tempFile.' '.$tempFile.'.c'); //gcc를 이용하여 컴파일을 진행.

if(!file_exists($tempFile)&&!file_exists($tempFile.'.exe')){
    //echo is_file($tempFile)?'true':'false'.'<br />';
    echo 'Compile Error';
    return;
}

$value = $input;

if($value ==''){ //input없을때 
    $output = shell_exec($tempFile);
}
else{ 
    $output = shell_exec('echo '.$value.' | '.$tempFile);
}

if($detail){
    if($value =='')
        echo '<b>input: No INPUT</b><br />';
    else
        echo '<b>input:</b><br />'.$value.'<br />';
}

if($detail)
   echo '<br /><b>Your answer:</b><br /><pre>'.$output.'</pre><br /><b>Correct answer:</b><br /><pre>'.$testText.'</pre><br />';

if(preg_replace( "/\r|\n/", "", $output)==preg_replace( "/\r|\n/", "", $testText)){ 
    if($detail)
        echo '<font color="green"><b>Correct</b></font><br />';
    else
        echo '1';
}
else{
    if($detail)
        echo '<font color="red"><b>Wrong</b></font><br />';
    else
        echo '0';
}

if($detail) echo '------------------<br />';

$checkCount++;


?>