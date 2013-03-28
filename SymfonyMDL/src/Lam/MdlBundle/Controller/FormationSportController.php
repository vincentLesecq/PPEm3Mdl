<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Lam\MdlBundle\Entity\FormationSport;




class FormationSportController extends Controller
{
    
     public function listeAction()
    {$em = $this->getDoctrine()->getEntityManager();
        $listeformationsport = $em->getRepository('LamMdlBundle:formationsport')->findAll();
                      
            return $this->render('LamMdlBundle:FormationSport:listefs.html.twig',array('listeformationsport' => $listeformationsport));
    }
    public function contenusportAction($num)
    {$contenuformationsport = $this->getDoctrine()
                      ->getEntityManager()
                      ->getRepository('LamMdlBundle:formationsport')
                      ->contenuFormationSport($num);
            return $this->render('LamMdlBundle:FormationSport:contenufs.html.twig',array('contenuformationsport' => $contenuformationsport));
    }
     public function stageAction($num)
    {$lesStages = $this->getDoctrine()
                      ->getEntityManager()
                      ->getRepository('LamMdlBundle:formation')
                      ->listestagesport($num);
    $em = $this->getDoctrine()->getEntityManager();
        $laformation = $em->getRepository('LamMdlBundle:formationsport')->find($num);
            return $this->render('LamMdlBundle:Formation:listesport.html.twig',array('lesStages' => $lesStages,'laF' => $laformation));
    }
}
