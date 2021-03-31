<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 31/03/2021
 * Time: 0:30
 */

namespace Jcheverria\AbstractFactory\Tests;


use Jcheverria\AbstractFactory\ComputerFactory;
use Jcheverria\AbstractFactory\PCFactory;
use Jcheverria\AbstractFactory\ServerFactory;

class AbstractFactoryTest extends TestCase
{
    /**
     * @test
     * @covers
     */
    public function abstract_factory_computer_pc()
    {
        $pc = new ComputerFactory();
        $pc = $pc->getComputer(new PCFactory("2 gb", "500 GB", "2.4 GHz"));
        //echo $pc->descripcion();
        $esperado = "Ram: 2 gb, Hdd: 500 GB, Cpu: 2.4 GHz";
        $this->assertSame($esperado, $pc->descripcion());

    }

    /**
     * @test
     * @covers
     */
    public function abstract_factory_computer_server()
    {
        $server = new ComputerFactory();
        $server = $server->getComputer(new ServerFactory("16 gb","5 TB", "4.3 GHz"));
        //echo $server->descripcion();
        $esperado = "Ram: 16 gb, Hdd: 5 TB, Cpu: 4.3 GHz";
        $this->assertSame($esperado,$server->descripcion());
    }
}