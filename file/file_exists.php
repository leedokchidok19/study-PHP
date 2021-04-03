<?php
$filename = 'readme.txt';
if (file_exists($filename)) {# 파일이 존재하는 경우
    echo "The file $filename exists";
} else {# 파일이 존재하지 않는 경우
    echo "The file $filename is not exists";
}
?>