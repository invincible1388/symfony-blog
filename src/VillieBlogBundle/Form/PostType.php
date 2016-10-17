<?php

namespace VillieBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('publishedAt', 'datetime')
        ;
		// $builder
			// ->add('Category', 'entity', array(
                // 'class' => 'VillieCategoryBundle:Category',
                // 'property' => 'name',
                // 'required' => false,
                // 'expanded' => true,
			// ));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VillieBlogBundle\Entity\Post'
        ));
    }
}
