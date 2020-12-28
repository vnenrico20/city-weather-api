<?php


namespace App\Tests\Helper;

use App\Helper\CityHelper;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CityHelperTest extends KernelTestCase
{
    /**
     * @var CityHelper
     */
    private $cityHelper;

    protected function setUp()
    {
        self::bootKernel();
        $this->cityHelper = self::$container->get('App\Helper\CityHelper');
    }

    /**
     *
     */
    public function testGetCitiesFromMusementAPI()
    {
        $result = $this->cityHelper->getCitiesLatLong(10);
        $this->assertEquals(count($result), 10);

        $result = $this->cityHelper->getCitiesLatLong(5);
        $this->assertEquals(count($result), 5);
    }
}