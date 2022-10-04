<?php

namespace model;

use helpers\Database;
use Throwable;


class Advertise
{
    private $email;
    private $title;
    private $description;
    private $category;
    private $time;

    public function __construct(string $email = '', string $title = '', string $description = '', string $category = '')
    {
        $this->email = $email;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->time = date('Y-m-d H:i:s');
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getTime()
    {
        return $this->time;
    }
}
