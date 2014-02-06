<?php

require_once "lib/j4p/J4P.php";
require_once "lib/utils.php";

function j4p_parseForm($input) {
	parse_str($input, $formData);
	J4P::addResponse()->document->getElementById("output")->innerHTML = print_r($formData, true);
}

function j4p_datasrc($input) {
	parse_str($input, $formData);
	J4P::addResponse()->document->getElementById("output2")->innerHTML = print_r($formData, true);
	J4P::addResponse()->eval("setTimeout('data()',1000);");
}

?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>WiFI Access Codes</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" href="lib/css/style.css" type="text/css" />
		<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
		<script src="lib/js/utils.js"></script>
		<?php J4P::outputJs(0); ?>
	</head>
	<body onload="data()">
		<form name="myForm" id="myForm">
			<input name="someInputField" value="someValue" />&nbsp;
      <input id="datepicker" name="datepicker" value="" type="text" /><img src="lib/img/cal.gif" id="cal"/>

      <input type="button" value="Submit" onclick="post('parseForm', 'myForm');" />
			<input type="button" value="Test42" onclick="run('parseForm',{question:'life', answer: 42});" />
		</form>
		<div><pre id="output"></pre></div>
		<div><pre id="output2"></pre></div>


<div class="base title">Active Users</div>
<h4><a href="listinactive.php" title="Click to see available codes">Available</a></h4>
<h4><a href="#" onclick="window.print();">Print</a></h4>
<h4><a href="logout.html">Logout</a></h4>
<h4><a href="listactive.php?fix=1" title="Click to repair WiFI when login prompt appears after having logged in.">Repair</a></h4>
<div class="main">

<h3>NOTE: Click on +/- and the Date at which the code should terminate.</h3>

<div class="base lft box rowhead" style="text-decoration:underline" >
  <div class="join col">User</div>
  <div class="join col">Password</div>
  <div class="join col buttons">Expiry/Today's Usage</div>
</div>
<br />

<div class="base box" data-iglooware-printclasses="lft,mid,rht" data-iglooware-datasrc="/tmp/usages.csv">
  <div class="join">
    <span class="print">&nbsp;&nbsp;User: </span><b>$user</b>
  </div>
  <div class="join">
    <span class="print">Pass: </span><b>$pass</b>
  </div>
  <div class="join buttons">
    <span class="small">$curUsageAndLeaveTime</span>
  </div>
</div>


<!-- ?php system("sudo /home/administrator/scripts/listactive-html '".$_GET['uid']."' '".$_GET['stay']."' '^[^d]|^d[^i]|^di[^n]|^din[^e]|^dine[^r]' 'list' 1"); ? -->

</div>
<br /><hr />


	</body>
</html>
