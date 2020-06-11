# arrayaccess-container

What is it?
-----------
ArrayAccess adapter

You can use your container as array

You can use this adapter for example for library [davedevelopment/phpmig][phpmig]
or you are like array

Supported Containers: 
* [laminas/laminas-servicemanager][servicemanager]

P.S

Also adapter supported PSR 11

Getting Started
---------------
```php
use \SoulRise\ArrayAccess\LaminasServiceManager\ArrayAccessContainerAdapter;

$arrayAccess = new ContainerArrayAccessAdapter($container);
$service = $arrayAccess['your_service']; // create and get instance your service 
```

[phpmig]:https://github.com/davedevelopment/phpmig
[servicemanager]:https://github.com/laminas/laminas-servicemanager
