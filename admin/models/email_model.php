<?php
	$user = "pakkem_mail@pakkem.org";
	$pass = "Covid*20";
	$imap_host = "{mail.pakkem.org/imap/ssl/novalidate-cert}";
	$imap_folder = "INBOX";

	$mbox = imap_open($imap_host.$imap_folder, $user, $pass) or die("can't connect: " . imap_last_error());
	$MC = imap_check($mbox);
	$result = imap_fetch_overview($mbox,"1:{$MC->Nmsgs}",0);

	if($_GET['id']==1){
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

            $status = imap_status($mbox, "{mail.pakkem.org}INBOX", SA_ALL);
            // echo "Recent:     " . $status->recent      . "<br />\n";
            // echo "Unseen:     " . $status->unseen      . "<br />\n";
            // echo "UIDnext:    " . $status->uidnext     . "<br />\n";
            // echo "UIDvalidity:" . $status->uidvalidity . "<br />\n";

            $emails = imap_search($inbox,$email_read);

            $ids = array();
            foreach($emails as $key => $mail) {
                $ids [] = $mail;
            }
            var_dump($mail);

            
            echo "Messages:   " . $status->messages    . "<br />\n";
            
        }
        // echo "<div class='container'>";
        // echo "<hr>";
        // echo "<b>Dari : ".$from."</b><br>";
        // echo "Subject : ".$subject."<br>";
        // echo "To : ".$to."<br>";
        // echo "Date : ".$emaildate."<br>";
        // echo "Message : <br>";
        // echo "<div class='border border-dark bg-white p-3'>".$message."</div>";
        // echo "<br>";
        
        echo "</div>";
        imap_close($mbox);
    }
   
?>