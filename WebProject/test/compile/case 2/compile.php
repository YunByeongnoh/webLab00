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



//str_replace(basename(__FILE__), "", realpath(__FILE__))�� ���� ������ �ǹ�.
//str_replace("ã�����ڿ�","ġȯ�ҹ��ڿ�","����ڿ�");


$testFile = str_replace(basename(__FILE__), "", realpath(__FILE__)).'answer/'.$answer; //�׽�Ʈ ���� ���.
//__FILE__ ������� , �ɺ��� ��ũ���� �ؼ��� ��츦 ������ ������ ��ü ��ο� �̸�. the full path and filename of the file.


$tempFile = 'compile/'.md5(microtime());//�������� �� �ӽ� ���ϸ�.
//md5�Լ��� �Էµ� �ؽ�Ʈ�� md5�� �ٲ��ִ� �Լ� md5�� ��ȣȭ �ؽ��Լ�.
//microtime()�� ���� �ð��� microseconds ������ ������ִ� �Լ�.

//�ڵ� txt���Ͽ� ����.
$file = fopen($tempFile.'.c','w'); //�ӽ� �ҽ� ������ ���� �������� �ҷ���.
fwrite($file,$code);//POST������ ���� �ҽ��ڵ带 �ӽ� �ҽ� ���Ͽ� �Է�.
fclose($file);//�ӽ� �ҽ� ���� Ŭ����.

//t1.txt �Է°��� ����ó�� ����
$file = fopen($testFile,'r');//�׽�Ʈ ������ �б� �������� �ҷ���.
$testText = fread($file,filesize($testFile));//�ҷ����� ������ �о� $testText�� ����.
fclose($file);//�׽�Ʈ �� ���� Ŭ����.

$testCase = split('out::',$testText);//�ҷ��� �׽�Ʈ ������ 'out::'��� ���ڿ��� ���� �迭�� ����.


$testInput = split('
',$testCase[0]);//��ǲ ���� �ٹٲ����� ���� �迭�� ����.


$testInput=array_values(array_filter(array_map('trim',$testInput)));//��ǲ ���� �ǹ̾��� ������ ����, �� ���ڿ��� �ִٸ� ����.
//trim = ���۰� �� ���ڿ����� ����(�Ǵ� ����)�� �����ϴ´� trim�Լ�
//array_map = �迭�� �� ���ҿ� ����ڰ� ������ �Լ��� �����ϰ� ������ ���� ����� �迭�� ��ȯ�Ѵ�. 
//array_filter = boolean ���̳� null, ������� ���°� ����.
//array_values = index�� ���ڷ� �ٲ������.
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
���� ���� ����� �����Դϴ�.

Array
(
    [0] => foo
    [2] => -1
)
*/

$checkCount = 1; //��µ� ���� ������ ���ϱ� ���� ���� �׽�Ʈ�ϰ� �ִ� ���� �� ��° ���� �� �˱� ���� ����.


shell_exec('gcc -o '.$tempFile.' '.$tempFile.'.c'); //gcc�� �̿��Ͽ� �������� ����.

if(!file_exists($tempFile)&&!file_exists($tempFile.'.exe')){
    //echo is_file($tempFile)?'true':'false'.'<br />';
    echo 'Compile Error';
    return;
}

$value = $input;

if($value ==''){ //input������ 
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