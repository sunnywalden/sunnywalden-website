<?php

//create short variable names
$sex = trim($_POST['sex']);
$job = trim($_POST['job']);
$bank = trim($_POST['bank']);
$advise = trim($_POST['advise']);

//set up some static information
$toaddress = "276639405@qq.com";

$subject = "Feedback from web site";

$mailcontent = "Customer sex: ".$sex."\n".
			   "Customer job: ".$job."\n".
               "Customer's creditcard bank:\n".$bank."\n".
               "Customer's advise:\n".$advise."\n".;

$fromaddress = "From: sunnywalden@gmail.com";

//invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

echo"<head>
<title>Henry's credit home - Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</h1>
<p>Your feedback (shown below) has been sent.</p>";
echo nl2br($mailcontent);
echo"

		            <ul>
		         
		                  <li>您的性别:$sex</li>
		                 
		                  <li>您的职业:&job</li>
		  
			       
		                  <li>您持有信用卡的银行有:&bank</li>
		                    
		              
		              <li>您的意见或者建议:$advise</li>
<p>谢谢您的参与！</p>";
?>