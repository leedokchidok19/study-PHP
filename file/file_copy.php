<?php
$file = 'readme.txt';
$newfile = 'example.txt.bak';
 
if (!copy($file, $newfile)) {# 파일 복사가 실패한 경우 실행
    echo "failed to copy $file...\n";
}
?>