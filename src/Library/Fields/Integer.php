<?php

namespace Lia\Bundle\FormBundle\Library\Fields;

use Lia\Library\Annotation\ReflexionProperty;

class Integer
    extends Field
{

    public function extractAnnotationConfig(ReflexionProperty $property){


        //$this->getConfig()->set($config);
        return $this;
    }
}