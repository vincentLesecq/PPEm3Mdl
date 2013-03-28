<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('LamMdlBundle:Default:index.html.twig');
    }
    
    public function inscriptionAction()
    { 
        $unParticipant= new Participant();
        $request=$this->getRequest();
        $form=$this->createForm(new participantType(), $unParticipant);
        $message="";
        
        if($request->getMethod()=='POST'){
            $form->bindRequest($request);
            if($form->isValid()){
                $em=$this->getDoctrine()->getEntityManager();
                $em->persist($unParticipant);
                $em->flush();
                $message='Votre inscription a bien été prise en compte';
            }
        }
        return $this->container->get('templating')->renderResponse('LamMdlBundle:Default:inscription.html.twig',array('form'=>$form->createView(), 'message'=>$message));
    }
}
