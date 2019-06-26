<?php
namespace App\Model\Entity;

use Core\Model\Entity;

class BeerEntity extends Entity
{

    private $id;

    private $title;

    private $img;
    
    private $content;

    private $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function getImg(): string
    {
        return $this->img;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getUrl(): string
    {
        return \App\App::getInstance()
            ->getRouter()
            ->url('shop', [
                "title" => $this->getTitle(),
                "id" => $this->getId()
            ]);
    }
}
