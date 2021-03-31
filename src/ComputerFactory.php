<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 31/03/2021
 * Time: 0:26
 */

namespace Jcheverria\AbstractFactory;


class ComputerFactory
{
    public function getComputer(ComputerAbstractFactory $factory)
    {
        return $factory->createComputer();
    }
}