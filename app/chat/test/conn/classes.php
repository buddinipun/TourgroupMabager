<?php 

class user{
	
	private $userId;
	private $userName;
	private $userMail;
	private $userPassword;
	
	public function getUserId() {
		return $this->userId;
	}
	public function getUserName() {
		return $this->userName;
	}
	public function getUserMail() {
		return $this->userMail;
	}
	public function getUserPassword() {
		return $this->userPassword;
	}
	public function setUserId($userId) {
		 $this->userId=userId;
	}
	public function setUserName($userName) {
		$this->userName=userName;
	}
	public function setUserMail($userMail) {
		$this->userMail=userMail;
	}
	public function setUserPassword($userPassword) {
		$this->userPassword=userPassword;
	}
	
	public function InsertUser(){
		include 'conn.php';
		$req = $bdd->prepare("INSERT INTO users(user_name,user_email,user_password) VALUES(:userName,:userMail,:userPassword)");
		$req->execute(array(
				'userName'=>$this->getUserName(),
				'userMail'=>$this->getUserMail(),
				'userPassword'=>$this->getUserPassword(),
		));
	}
	
	public function UserLogin() {
	include 'conn.php';
	$req = $bdd->prepare("SELECT * FROM users WHERE user_email=:userMail AND user_password=:userPassword");
	$req->execute(array(
		'userMail'=>$this->getUserMail(),
		'userPassword'=>$this->getUserPassword()
	));
	if($req->rowCount()==0){
		header("Location:../index.php?error=1");
	}
		else{
			while ($data=$req->fetch()){
				$this->setUserId($data['chatUserId']);
				$this->setUserName($data['userName']);
				$this->setUserPassword($data['userPassword']);
				$this->setUserMail($data['userMail']);
				header("Location:home.php");
			}
		}
	}
}

	
class chat{
	
	private $chatId,$chatUserId,$chatText;
	public function getChatId() {
		return $this->chatId;
	}
	public function getChatUserId() {
		return $this->chatUserId;
	}
	public function getChatText() {
		return $this->chatText;
	}
	public function setChatId($chatId) {
		$this->chatId=chatId;
	}
	public function setChatUserId($chatUserId) {
		$this->chatUserId=chatUserId;
	}
	public function setChatText($chatText) {
		$this->chatText=chatText;
	}
	
	public function InsertChatMessage(){
		include 'conn.php';
		
		$req = $bdd->prepare("INSERT INTO chats(chatUserId,chatText) VALUES(:chatUserId,:chatText)");
		$req->execute(array(
			'chatUserId'=>$this->getChatUserId(),
			'chatText'=>$this->getChatText()
		));
	}
}
?>