<?php
$tb = $_GET["tk"];
$tong_tb = ["sbjssjsjkss","Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvc3YyLmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE2ODkzNTMzMjAsImV4cCI6MTcyMDg4OTMyMCwibmJmIjoxNjg5MzUzMzIwLCJqdGkiOiJoVGpBbE1FWEFlM0lQbGZQIiwic3ViIjoxOTE1OTc3LCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.X_fG4n7p1OK1W8IDjNLo0WFkP4s0GAaMJiITUUVOwAc"];
$get = array_search($tb, $tong_tb);
if (!$get){
	echo "SAI";
}else{
	echo "SUCCESS";
}