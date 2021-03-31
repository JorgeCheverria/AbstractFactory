<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 31/03/2021
 * Time: 0:15
 */

namespace Jcheverria\AbstractFactory;


class PC extends Computer
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

    public function getRam()
    {
        return $this->ram;
    }

    public function getHdd()
    {
        return $this->hdd;
    }

    public function getCpu()
    {
        return $this->cpu;
    }
}