<?php

namespace App\Controller;

use App\Entity\ChangeName;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LearningController extends AbstractController
{
    /**
     * @Route("/about-me", name="aboutMe")
     */
    public function aboutMe()
    {
        $name = new ChangeName();
        if (!isset($_SESSION['name'])) {
            return $this->forward('App\Controller\LearningController::showMyName');
        }
        else {
            return $this->render('learning/index.html.twig', [
                'controller_name' => 'LearningController', 'name' => $name->changeName(),
            ]);
        }
    }

    /**
     * @Route("/", name="show_my_name")
     */
    public function showMyName()
    {
        $name = new ChangeName();
        return $this->render('learning/show_my_name.html.twig', [
            'name' => $name->changeName(),
        ]);
    }

    /**
     * @Route("/change-my-name", name="change_my_name", methods={"POST"})
     */
    public function changeMyName()
    {
        $name = new ChangeName();
        return $this->render('learning/change_my_name.html.twig', [
            'name' => $name->changeName(),
        ]);
    }
}
