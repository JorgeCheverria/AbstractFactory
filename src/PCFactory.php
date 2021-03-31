<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 31/03/2021
 * Time: 0:20
 */

namespace Jcheverria\AbstractFactory;


class PCFactory implements ComputerAbstractFactory
{
    private $ram;
    private $hdd;
    private $cpu;

    public function __construct($ram, $hdd, $cpu)
    {
        $this->ram = $ram;
        $this->hdd = $hdd;
        $this->cpu = $cpu;
    }

    public function createComputer()
    {
        // TODO: Implement createComputer() method.
        return new PC($this->ram, $this->hdd, $this->cpu);
    }
}