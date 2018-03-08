<?php
include ("connection.php");
header('content-type:appl ication/json;charset=utf8');

$result = mysql_query("select message,username from mymessage");

$results = array();
while ($row = mysql_fetch_assoc($result)) {   //mysql_fetch_assoc() 函数从结果集中取得一行作为关联数组，返回根据从结果集取得的行生成的关联数组!，如果没有更多行，则返回 false。
    $results[] = $row;
}
 
$jsonResult =  json_encode($results);

echo $jsonResult;

mysql_close(); 
?>