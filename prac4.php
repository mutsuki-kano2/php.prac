<html>
<head><title>結果</title></head>
<body>
<?php
$date = $_POST['date'];
$date = new DateTime($date);
$msg = $date->format('Y年m月d日は<b>l</b>です。');
$msg = str_replace('Monday','月曜日',$msg);
$msg = str_replace('Tuesday','火曜日',$msg);
$msg = str_replace('Wednesday','水曜日',$msg);
$msg = str_replace('Thursday','木曜日',$msg);
$msg = str_replace('Friday','金曜日',$msg);
$msg = str_replace('Saturday','土曜日',$msg);
$msg = str_replace('Sunday','日曜日',$msg);
print $msg;
?>
< /body>
</html>
