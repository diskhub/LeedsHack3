<?php
class leedshack__smsController extends leedshack__AbstractController {
	function page_inbound() {

		$message->to = (isset($_GET['to']))?$_GET['to']:false;
		$message->from = (isset($_GET['from']))?$_GET['from']:false;
		$message->content = (isset($_GET['content']))?$_GET['content']:false;
		$message->msg_id = (isset($_GET['msg_id']))?$_GET['msg_id']:false;

		//is the message a join or stop command?
		if(stripos($message->content,"join") === 0){

			//add user and join the quiz
			$mdlUser = new leedshack__UserModel();
			$mdlQuizUser = new leedshack__QuizUserModel();

			$mdlUser->setPhoneNumber($message->from);

			try{

				leedshack__UserModel::write($this->app->init_db, $mdlUser);
				$mdlQuizUser->setUserId($mdlUser->getId());
				leedshack__QuizUserModel::write($this->app->init_db, $mdlQuizUser);

			}catch(Exception $e){
				var_dump($e);
				exit;
			}

		}elseif(stripos($message->content,"stop") === 0){

			echo "unsub from quiz";

		}else{

			//this is either an answer to a question or junk
			echo "Answer or junk!";
		}

		exit;
	}
}
?>
