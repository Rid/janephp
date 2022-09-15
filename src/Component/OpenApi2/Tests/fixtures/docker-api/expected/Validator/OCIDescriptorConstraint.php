<?php

namespace Docker\Api\Validator;

class OCIDescriptorConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('mediaType' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'digest' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'size' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer'))))), 'allowExtraFields' => true)));
    }
}