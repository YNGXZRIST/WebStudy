<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/classes/' . 'Database.php';

class Advertise
{

	protected $email;
	protected $title;
	protected $description;
	protected $category;
	protected $time;

	public function __construct(string $email = '', string $title = '', string $description = '', string $category = '')
	{
		$this->email = $email;
		$this->title = $title;
		$this->description = $description;
		$this->category = $category;
		$this->time = date('Y-m-d H:i:s');
	}

	// function get Advertise
	public function getAdvertiseList()
	{
		$conn = Database::getConnection();
		$stmt = $conn->prepare("SELECT ad.email,ad.title,ad.description,ad.category,ad.created FROM ad");

		$stmt->execute();
		$result = $stmt->fetchAll();

		return $result;
	}

	// function Add advertise
	public function addAdvertise(Advertise $advertise): string
	{
		$conn = Database::getConnection();
		try
		{
			$stmt = $conn->prepare(
				"INSERT INTO ad(email,title,description,category,created) VALUES (:email_in,:title_in,:description_in,:category_in,:time_in)"
			);
			$stmt->bindParam(':email_in', $advertise->email, PDO::PARAM_STR);
			$stmt->bindParam(':title_in', $advertise->title, PDO::PARAM_STR);
			$stmt->bindParam(':description_in', $advertise->description, PDO::PARAM_STR);
			$stmt->bindParam(':category_in', $advertise->category, PDO::PARAM_STR);
			$stmt->bindParam(':time_in', $advertise->time, PDO::PARAM_STR);
			$stmt->execute();
		}
		catch (Throwable $e)
		{
			return $e->getMessage();
		}

		return 'Запись успешно добавлена';
	}
}