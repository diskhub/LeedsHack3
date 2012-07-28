<?php
class leedshack__smsController extends leedshack__AbstractController {
	function page_inbound() {
		$message->to = $_GET['to'];
		$message->from = $_GET['from'];
		$message->content = $_GET['content'];
		$message->msg_id = $_GET['msg_id'];

		//is the message a join or stop command?
		if(str_pos($message,"join")==0){

			echo "join quiz";

		}elseif(str_pos($message,"stop")==0){

			echo "unsub from quiz";

		}else{

			//this is either an answer to a question or junk
			echo "Answer or junk!";
		}

		exit;
	}
}
?>
