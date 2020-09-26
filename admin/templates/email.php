<?php
	include "base/navbar.php";
	$user = "pakkem_mail@pakkem.org";
	$pass = "Covid*20";
	$imap_host = "{mail.pakkem.org/imap/ssl/novalidate-cert}";
	$imap_folder = "INBOX";

	$mbox = imap_open($imap_host.$imap_folder, $user, $pass) or die("can't connect: " . imap_last_error());
	$MC = imap_check($mbox);
	$result = imap_fetch_overview($mbox,"1:{$MC->Nmsgs}",0);

	foreach($result as $overview) {
		$message_id = $overview->msgno;

		$msg_id = imap_uid($mbox,$message_id);

		$subject = $overview->subject;

		$header = imap_header($mbox,$message_id);


		$from = $header->from[0]->mailbox."@".$header->from[0]->host;
		$to = $header->to[0]->mailbox."@".$header->to[0]->host;

		$emaildate1 = strtotime($header->date);
		$emaildate = date("Y-m-d H:i:s",$emaildate1);

		// $message =  imap_qprint(imap_body($mbox, $message_id));
		$message = imap_fetchbody($mbox,$message_id,2);

		echo "<div class='container'>";
		echo "<h1>Pesan masuk</h1>";
		echo "<hr>";
		echo "<b>Dari : ".$from."</b><br>";
		echo "Subject : ".$subject."<br>";
		echo "To : ".$to."<br>";
		echo "Date : ".$emaildate."<br>";
		echo "Message : <br>";
		echo "<div class='border border-dark bg-white p-3'>".$message."</div>";
		echo "<br>";

		echo "</div>";

	}
 
	imap_close($mbox);
 	include "base/footer.php";
?>
