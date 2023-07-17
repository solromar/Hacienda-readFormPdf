<?php

namespace App\Controller;

use App\Entity\Model036;
use App\Entity\Model100;
use App\Entity\Model111;
use App\Service\ModelService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ModelController extends AbstractController
{
    /**
     * @Route("/model", name="app_model")
     */  
    
}


//Es la puerta de enlace, decide que hacer y como emitir la respueta. Llama al servicio