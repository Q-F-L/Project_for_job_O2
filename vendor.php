<?php

class SendMail
{
	private $email;
	private $subject;
	private $data;
	private $error_arr = [];

	public function __construct($email, $subject, $data)
	{
		$this->email = $email;
		$this->subject = $subject;
		$this->data = $data;

		if($this->validate($this->data))
			$this->send($email, $subject, $data);
		
		$response = [
			"status" => false,
			"type" => 3,
			"message" => "Данные введены некоректно.",
			"fields" => []
		];

		echo json_encode($response);
	}

	public function validate($validate)
	{
		$requires = ['email', 'phone', 'surname', 'name'];

		foreach($validate as $key => $val)
		{
			if(empty($validate[$key]) && in_array($key, $requires))
				$error_arr[] = $key;
		}

		if(!empty($error_arr))
		{
			$response = [
				"status" => false,
				"type" => 1,
				"message" => "Обязательные поля не заполнены.",
				"fields" => $error_arr
			];

			echo json_encode($response);

			die();
		}

		$phonValidate = preg_match("/^[8?\+7][0-9]{10}$/", str_replace(['+','-','(',')',' '], '', $validate['phone']));
		
		if(!filter_var($validate['email'], FILTER_VALIDATE_EMAIL) || !$phonValidate)
		{
			return false;
		}
		
		return true;
	}

	public function send($email, $subject, $message)
	{
		$response = [
			"status" => true,
			"type" => 2,
			"message" => "Изменения сохранены.",
			"fields" => []
		];

		echo json_encode($response);

		die();
	}
}
$send = new SendMail($_POST['email'], 'Ваши данные', $_POST);
