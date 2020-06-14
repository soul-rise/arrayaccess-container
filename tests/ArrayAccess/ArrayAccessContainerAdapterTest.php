<?php

declare(strict_types=1);

namespace LaminasServiceManager;

use Laminas\ServiceManager\Exception\ServiceNotFoundException;
use Laminas\ServiceManager\ServiceManager;
use Prophecy\Prophecy\ObjectProphecy;
use Psr\Container\ContainerInterface;
use PHPUnit\Framework\TestCase;
use SoulRise\ArrayAccess\LaminasServiceManager\ArrayAccessContainerAdapter;
use stdClass;

/**
 * Class ArrayAccessContainerAdapterTest
 *
 * @package LaminasServiceManager
 */
class ArrayAccessContainerAdapterTest extends TestCase
{
    /** @var ContainerInterface|ObjectProphecy */
    protected $container;

    protected function setUp(): void
    {
        $this->container = new ServiceManager();
    }

    /**
     * @return ArrayAccessContainerAdapter
     */
    protected function getArrayAccessContainer(): ArrayAccessContainerAdapter
    {
        return new ArrayAccessContainerAdapter($this->container);
    }

    public function testAccessExistObject(): void
    {
        $arrayAccessContainer = $this->getArrayAccessContainer();
        $object = new stdClass();
        $arrayAccessContainer['test_object'] = $object;

        $this->assertInstanceOf(stdClass::class, $arrayAccessContainer['test_object']);
        $this->assertInstanceOf(stdClass::class, $arrayAccessContainer->get('test_object'));
    }

    public function testAccessNotExistObject(): void
    {
        $arrayAccessContainer = $this->getArrayAccessContainer();
        $this->expectException(ServiceNotFoundException::class);

        $arrayAccessContainer['object'];
        $arrayAccessContainer->get('object');
    }

    public function testHasExistObject(): void
    {
        $arrayAccessContainer = $this->getArrayAccessContainer();
        $object = new stdClass();
        $arrayAccessContainer['test_object'] = $object;
        $this->assertEquals(true, isset($arrayAccessContainer['test_object']));
        $this->assertEquals(true, $arrayAccessContainer->has('test_object'));
    }

    public function testHasNotExistObject(): void
    {
        $arrayAccessContainer = $this->getArrayAccessContainer();

        $this->assertEquals(false, isset($arrayAccessContainer['object']));
        $this->assertEquals(false, $arrayAccessContainer->has('object'));
    }
}
