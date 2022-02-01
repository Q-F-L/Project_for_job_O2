<?php

class SendMail
{
	private $email;
	private $subject;
	private $data;

	public function __construct($email, $subject, $data)
	{
		$this->email = $email;
		$this->subject = $subject;
		$this->data = $data;

		if($this->validate($this->data) == true)
			$this->send($email, $subject, $data);
	}

	public function validate($validate)
	{
		$requires = ['email', 'phone', 'surname', 'name'];
		$phonValidate = preg_match("/^[8?\+7][0-9]{10}$/", str_replace(['+','-','(',')',' '], '', $validate['phone']));
		
		foreach($validate as $key => $val)
		{
			if(empty($validate[$key]) && in_array($key, $requires))
				return false;
		}

		if(filter_var($validate['mail'], FILTER_VALIDATE_EMAIL) || !$phonValidate)
		{
			return false;
		}
		return true;
	}

	public function send($email, $subject, $message)
	{
		echo 'send';
		mail($email, $subject, $message);
		print_r($message);
	}
}
$send = new SendMail($_POST['email'], 'Ваши данные', $_POST);
