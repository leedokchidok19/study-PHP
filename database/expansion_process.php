<?php
# MySQL 확장 사용 -> php.ini 파일에 extension=php_mysqli.dll
# mysql_connect(host, username, password); == mysql -u[username] -p[password] -h[host]
mysql_connect('localhost', 'root', '111111');
# use database
mysql_select_db('opentutorials');

switch($_GET['mode']){# mysql_real_escape_string 보안 관련
    case 'insert':
        $result = mysql_query("INSERT INTO topic (title, description, created) VALUES ('".mysql_real_escape_string($_POST['title'])."', '".mysql_real_escape_string($_POST['description'])."', now())");
        header("Location: list.php"); # Redirection
        break;
    case 'delete':
        mysql_query('DELETE FROM topic WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify':
        mysql_query('UPDATE topic SET title = "'.mysql_real_escape_string($_POST['title']).'", description = "'.mysql_real_escape_string($_POST['description']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php?id={$_POST['id']}");
        break;
}

?>