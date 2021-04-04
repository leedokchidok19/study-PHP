<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>   
<body>
<?php
# var_dump($_FILES);
# php.ini 기본설정 display_errors off를 on 변경
ini_set("display_errors", "1");
$uploaddir = 'C:\Bitnami\wampstack-8.0.3-0\apache2\htdocs\upload\file\\';
# basename() : 경로를 제거한 파일 이름
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
}
echo '자세한 디버깅 정보입니다:';
print_r($_FILES);
print "</pre>";
?>
<!--상대경로-->
<img src="file/<?php echo $_FILES['userfile']['name']?>" alt="">
</body>
</html>