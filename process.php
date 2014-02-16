<?php

$ans = @$_POST['ans'];
$qno = @$_POST['qid'];

if( $ans=="1")
	{
		$s=( (int)$qno - 1).".jpg";
		$json=array("status"=>"1","url"=>$s);
		echo json_encode($json);
		//echo $s;
	}
else
	{
		$json=array("status"=>"0","url"=>"");
		echo json_encode($json);
	}


?>