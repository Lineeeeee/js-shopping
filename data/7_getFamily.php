<?php
//设置响应头为json
header("Content-Type:application/json");
//引入init.php
require_once("./init.php");
//定义$sql查询xz_laptop_family中所有内容，仅返回fid和fname
$sql="select fid,fname from xz_laptop_family";
//执行查询，将结果转化为json，返回到客户端
echo json_encode(sql_execute($sql));