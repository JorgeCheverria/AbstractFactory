<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 31/03/2021
 * Time: 0:11
 */

namespace Jcheverria\AbstractFactory;


abstract class Computer
{
    public abstract function getRam();

    public abstract function getHdd();

    public abstract function getCpu();

    public function descripcion()
    {
        return "Ram: " . $this->getRam() . ", Hdd: " . $this->getHdd() . ", Cpu: " . $this->getCpu();
    }
}