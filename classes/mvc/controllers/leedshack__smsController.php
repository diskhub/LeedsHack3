<?php
class leedshack__smsController extends leedshack__AbstractController {
	function page_inbound() {

		$message->to = (isset($_GET['to']))?$_GET['to']:false;
		$message->from = (isset($_GET['from']))?$_GET['from']:false;
		$message->content = (isset($_GET['content']))?urldecode($_GET['content']):false;
		$message->msg_id = (isset($_GET['msg_id']))?$_GET['msg_id']:false;
		
		//is the message a join or stop command?
		if(stripos($message->content,"join") === 0){

			$split = explode(' ',$message->content);
			$quiz_id = $split[1];

			$quiz = leedshack__QuizModel::loadById($this->app->init_db, $quiz_id);
			if(isset($quiz)){
				//add user and join the quiz
				$mdlQuizUser = new leedshack__QuizUserModel();

				$user = leedshack__UserModel::loadByPhoneNumber($this->app->init_db, $message->from);
				
				if(empty($user)){
					$user = new leedshack__UserModel();
					$user->setPhoneNumber($message->from);
					leedshack__UserModel::write($this->app->init_db, $user);
					$user->setId($db->lastInsertId());
				}
				$mdlQuizUser->setUserId($user->getId());
				$mdlQuizUser->setQuizId($quiz_id);
				leedshack__QuizUserModel::write($this->app->init_db, $mdlQuizUser);

			}

		}elseif(stripos($message->content,"stop") === 0){

			//unsub the user from the current quiz they are in
			//get the user details by their phone number
			$user = leedshack__UserModel::loadByPhoneNumber($this->app->init_db, $message->from);
			if(!empty($user)){

				//check to see if the user is in an active quiz
				$activequiz = leedshack__QuizUserModel::loadActiveQuizByUserId($this->app->init_db, $user->getId());
				var_dump($activequiz);
				if(!empty($activequiz)){
					echo "pewpew";
					//the user is in an active quiz . . delete the row
					//leedshack__QuizUserModel::deleteByUserId($user->id);
				}
			}

		}else{

			//this is either an answer to a question or junk
			
			//get the user id
			$user = leedshack__UserModel::loadByPhoneNumber($this->app->init_db, $message->from);

			if(isset($user)){
				//check to see if the user is in an active quiz
				$activequiz = leedshack__QuizUserModel::loadActiveQuizByUserId($this->app->init_db, $user->getId());

				if(isset($activequiz)){
					//user is in an active quiz
					echo "<pre>";
					var_dump($activequiz);
					echo "</pre>";
				}else echo "junk!";
			}

		}

		exit;
	}
}
?>
