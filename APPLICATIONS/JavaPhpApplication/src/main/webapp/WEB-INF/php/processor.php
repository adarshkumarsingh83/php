<?php 
  /* including the inc file which will have lib for java and php bridge loading */
  include_once ('java\Java.inc');
    /* input userName and userPwd is checking which is comming as Post param */      
    if(isset($_POST["userName"]) && isset($_POST["userPwd"])){
        /* invoking the com.adarsh.sample.ApplicationMsg java class from the php */    	
	    $searchObj = new Java("com.adarsh.sample.ApplicationMsg");
		 /* invoking the com.adarsh.sample.ApplicationMsg java class getMsg() from the php */ 
	    $result = $searchObj -> getMsg($_POST["userName"]." ".$_POST["userPwd"]);
		echo "<h1>".$result."</h1>";
	}
?>