<?php
namespace Lam\MdlBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Lam\MdlBundle\Entity\participant;



class participantType extends AbstractType
{ public function buildForm(FormBuilder $builder, array $options)
    {
       $builder ->add('nom','text',array('label'=>'Nom :'))
                ->add('prenom','text',array('label'=>'Prénom :'))
                ->add('ville','text',array('label'=>'Ville :'))
                ->add('cp','text',array('label'=>'Code postal :'))
                ->add('mail','text',array('label'=>'Adresse e-mail :'))
                ->add('tel','text',array('label'=>'Téléphone :'))
                ->add('nomAssociation','text',array('label'=>'Nom association :'))
                ->add('nbBeneInscrit','text',array('label'=>'Nombre d\'inscrit(s) :'));
    }
    
    public function getName()
    { return 'Lam_mdlbundle_participanttype'; }
    
    
    
    
    
}



?>