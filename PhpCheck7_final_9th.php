<?php
require_once('include/init.phph');
use RightNow\Connect\v1_3 as RNCPHP;
require_once( get_cfg_var("doc_root")."/ConnectPHP/Connect_init.php" );
initConnetAPI();

try 
{	
$email_1 = "deepthi.a.suresh@accenture.com";
$text_body ="Text Goes here";
$html_body ="<p> <h1> HTML Content Goes here</h1> <p>";

$mm = new RNCPHP\MailMessage();
$mm->To->EmailAddresses = array($email_1);
$mm->Subject = "Message from Oracle Service Cloud";
 

$mm->Body->Text = $text_body;
$mm->Body->Html = $html_body;
$mm->Options->IncludeOECustomHeaders = false;
 
$mm->send();

foo();



} 
catch ( Exception $e ) 
{
	$msg = $e->getMessage();
	echo $msg;
}
