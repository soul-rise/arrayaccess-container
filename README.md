# arrayaccess-container
[![Latest Version](https://img.shields.io/github/release/soul-rise/arrayaccess-container)](https://github.com/soul-rise/arrayaccess-container/releases)
[![Build Status](https://travis-ci.org/soul-rise/arrayaccess-container.svg?branch=master)](https://travis-ci.org/soul-rise/arrayaccess-container)
[![Total Downloads](https://img.shields.io/packagist/dt/soul-rise/arrayaccess-container.svg)](https://packagist.org/packages/soul-rise/arrayaccess-container)

What is it?
-----------
ArrayAccess adapter

You can use your container as array

You can use this adapter for example for library [davedevelopment/phpmig][phpmig]
or you are like array

Supported Containers: 
* [laminas/laminas-servicemanager][servicemanager]

P.S

Also, adapter supports PSR 11

Getting Started
---------------
```php
use \SoulRise\ArrayAccess\LaminasServiceManager\ArrayAccessContainerAdapter;

$arrayAccess = new ContainerArrayAccessAdapter($container);
$service = $arrayAccess['your_service']; // create and get instance your service 
```

[phpmig]:https://github.com/davedevelopment/phpmig
[servicemanager]:https://github.com/laminas/laminas-servicemanager
