<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReadingController extends Controller
{
   public function summaryAction()
    {
        $summary = json_decode(file_get_contents('http://api/reading/summary'));
        
        return $this->render("AppBundle:reading:summary.html.twig", ['rs' => $summary->out]);
    }
}
