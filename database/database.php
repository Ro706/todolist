<?php
function make_connection()
{
	$host = "localhost:3030";
	$username = "root";
	$password = "";
	$database = "todoapp";
	$conn=mysqli_connect($host,$username,$password,$database);
	if($conn)
	{
		return $conn;
	}
	else
	{
		echo "not connected";
	}
}
make_connection();
function make_count(){
	$conn = make_connection();
	$sql = "select count(*) from todolist";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_row($result);
	return $row[0];
}
function add_items($value)
{   
	$conn = make_connection();
	$count = make_count();
	$count++;
	$sql = "insert into todolist values('$count','$value','0');";
	$result = mysqli_query($conn,$sql);
	// if($result)
	// {
	// 	echo "added";
	// }
	// else
	// {
	// 	echo "not added";
	// }
}
function get_items(){
	$conn = make_connection();
	$sql = "select id,item from todolist where status = '0'";
	$result = mysqli_query($conn,$sql);
	return $result;
}
function update_items($id){
	$conn = make_connection();
	$sql = "update todolist set status = '1' where id = '$id'";
	$result = mysqli_query($conn,$sql);
}
function delete_items($id){
	$conn = make_connection();
	$sql = "delete from todolist where id = '$id'";
	$result = mysqli_query($conn,$sql);
}
function get_items_checked(){
	$conn = make_connection();
	$sql = "select id,item from todolist where status = '1'";
	$result = mysqli_query($conn,$sql);
	return $result;
}
?>