PSR Log
======

Ce référentiel contient toutes les interfaces/classes/traits liés à
[PSR-3(anglais)](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)

Ce paquet est une copie du paquet [psr-fig/log(anglais)](https://github.com/php-fig/log/blob/master/README.md)
avec commentaire du code source en français.

Installation
------------

```bash
composer require psr/log
```

Utilisation
-----------

Si vous avez besoin d'un logeur, vous pouvez utiliser l'interface comme ceci :

````php
<?php

use Psr\Log\LoggerInterface;

class Foo
{
    private $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        if ($this->logger) {
            $this->logger->info('Faire ton travail');
        }
           
        try {
            $this->doSomethingElse();
        } catch (Exception $exception) {
            $this->logger->error('Oh non!', array('exception' => $exception));
        }

        // faire quelque chose d'utile
    }
````

Vous pouvez ensuite choisir l'une des implémentations de l'interface pour obtenir un logeur.
Si vous souhaitez implémenter l'interface, vous pouvez exiger ce paquet et
implémentez `Psr\Log\LoggerInterface` dans votre code. S'il vous plaît, liser
le [texte spécifié(anglais)](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
pour plus de détails.