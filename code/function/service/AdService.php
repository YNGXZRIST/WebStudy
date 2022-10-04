<?php

namespace service;

use helpers\Database;
use model\Advertise;
use PDO;
use Throwable;

include_once $_SERVER['DOCUMENT_ROOT'] . '/helpers/' . 'Database.php';

class AdService
{
    // function get Advertise
    public function getAdvertiseList()
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT ad.email,ad.title,ad.description,ad.category,ad.created FROM ad");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // function Add advertise
    public function addAdvertise(Advertise $advertise): string
    {
        $conn = Database::getConnection();
        try {
            $stmt = $conn->prepare(
                "INSERT INTO ad(email,title,description,category,created) VALUES (:email_in,:title_in,:description_in,:category_in,:time_in)"
            );
            $stmt->bindParam(':email_in', $advertise->getEmail(), PDO::PARAM_STR);
            $stmt->bindParam(':title_in', $advertise->getTitle(), PDO::PARAM_STR);
            $stmt->bindParam(':description_in', $advertise->getDescription(), PDO::PARAM_STR);
            $stmt->bindParam(':category_in', $advertise->getCategory(), PDO::PARAM_STR);
            $stmt->bindParam(':time_in', $advertise->getTime(), PDO::PARAM_STR);
            $stmt->execute();
        } catch (Throwable $e) {
            return $e->getMessage();
        }
        return 'Запись успешно добавлена';
    }
}

