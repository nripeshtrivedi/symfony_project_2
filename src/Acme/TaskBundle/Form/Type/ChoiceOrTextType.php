<?php
namespace Acme\TaskBundle\Form\Type;
use Symfony\Component\Form\AbstractType;;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Acme\TaskBundle\Form\Type\ValueToChoiceOrTextTransformer;

class ChoiceOrTextType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('choice', 'choice', array(
                'choices' => $options['choices'] + array('Other' => 'Other'),
                'required' => false,
            ))
            ->add('text', 'text', array(
                'required' => false,
            ))
            ->addModelTransformer(new ValueToChoiceOrTextTransformer($options['choices']))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired(array('choices'));
        $resolver->setAllowedTypes(array('choices' => 'array'));
    }
	public function getName()
   {
   return 'ChoiceOrTextType';
    }
   }