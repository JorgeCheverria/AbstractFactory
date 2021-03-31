<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 31/03/2021
 * Time: 0:18
 */

namespace Jcheverria\AbstractFactory;


class Server extends Computer
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
        $this->ram;
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