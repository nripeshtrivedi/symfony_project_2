<?php
namespace Acme\TaskBundle\Form\Type;
use Symfony\Component\Form\DataTransformerInterface;

class ValueToChoiceOrTextTransformer implements DataTransformerInterface
{
    private $choices;

    public function __construct(array $choices)
    {
        $this->choices = $choices;
    }

    public function transform($data)
    {
        if (in_array($data, $this->choices, true)) {
            return array('choice' => $data, 'text' => null);
        }

        return array('choice' => 'Other', 'text' => $data);
    }

    public function reverseTransform($data)
    {
        if ('Other' === $data['choice']) {
            return $data['text'];
        }

        return $data['choice'];
    }
}