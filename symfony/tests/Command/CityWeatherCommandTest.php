<?php


namespace App\Tests\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class CityWeatherCommandTest extends KernelTestCase
{
    public function testCommand()
    {
        $kernel      = static::createKernel();
        $application = new Application($kernel);

        $command       = $application->find('app:get-city-weather');
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $output = $commandTester->getDisplay();
        $this->assertEquals(substr_count($output, 'Processed city'), 10);
    }
}