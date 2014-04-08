<?php
namespace Acme\TaskBundle\Form\Type;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Acme\TaskBundle\Form\Type\ChoiceorTextType;
use Acme\TaskBundle\Entity\Questionstore;

class Questionaire extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

 
         
			}
public function getName()
{
return 'Questionaire';
}
}