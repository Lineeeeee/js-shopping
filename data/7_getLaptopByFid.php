<?php
//设置响应头为json
header("Content-Type:application/json");
//引入init.php
require_once("./init.php");
//接收参数fid,保存在$fid中
@$fid=$_REQUEST["fid"];
//如果有$fid
if($fid){
  //定义$sql查询xz_laptop中family_id为$fid的商品，仅返回lid和title即可
  $sql="select lid,title from xz_laptop where family_id=$fid";
  //执行查询,将结果转为json,返回给客户端
  echo json_encode(sql_execute($sql));
}else{
  echo json_encode([]);
}