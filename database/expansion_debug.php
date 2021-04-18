<?php
# var_dump()로 return 값 확인 가능 return boolean
# var_dump(mysql_connect('localhost', 'root', '111111'));
# var_dump(mysql_select_db('opentutorials'));
# var_dump(mysql_query('SELECT *  topic'));
mysql_connect('localhost', 'root', '111111');
mysql_select_db('opentutorials');
mysql_query('SELECT *  topic'); # 에러 발생

echo mysql_error(); # 마지막 에러 출력
echo '<br>';
echo mysql_errno(); # 0일 경우 정상, 에러는 에러 번호

?>