<?php

namespace Docker\Api\Validator;

class ServicesIdUpdatePostBodyConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Name' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Labels' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'TaskTemplate' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Mode' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'UpdateConfig' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'RollbackConfig' => new \Symfony\Component\Validator\Constraints\Optional(array()), 'Networks' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'EndpointSpec' => new \Symfony\Component\Validator\Constraints\Optional(array())), 'allowExtraFields' => true)));
    }
}