<?php
namespace SimpleThings\FormSerializerBundle\Tests\Serializer\Fixture;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('street', 'text', ['serialize_xml_attribute' => true])
            ->add('zipCode', 'text', ['serialize_xml_attribute' => true])
            ->add('city', 'text', ['serialize_xml_attribute' => true]);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => __NAMESPACE__ . '\\Address',
        ]);
    }

    public function getName()
    {
        return 'address';
    }
}
