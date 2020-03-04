<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChangeNameRepository")
 */
class ChangeName
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $name = "Unknown";

    public function showName()
    {
        return $this->name;
    }

    public function changeName()
    {
        if (isset($_POST["name"])) {
            $_SESSION['name']=$_POST['name'];
            $this->name = $_POST['name'];
        }
        elseif (isset($_SESSION['name'])) {
            $this->name=$_SESSION['name'];
        }
        else {
            $this->name = $this->showName();
        }
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
