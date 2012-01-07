<?php
class Doctrine_ReadWriteArgvInput extends Symfony\Component\Console\Input\ArgvInput
{
    public function setOption($name,$value){
        if(!$this->hasOption($name)){
            $this->definition->addOption(new \Symfony\Component\Console\Input\InputOption($name));
        }
        parent::setOption($name,$value);
    }
}
