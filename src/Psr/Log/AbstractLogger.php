<?php

namespace Psr\Log;

/**
 * Il s'agit d'une simple implémentation de Logger dont d'autres Loggers peuvent hériter.
 *
 * Il délègue simplement toutes les méthodes spécifiques au niveau du log à la méthode `log`
 * pour réduire le code qu'un simple logeur qui fait la même chose avec les messages
 * quel que soit le niveau d'erreur doit implémenter.
 */
abstract class AbstractLogger implements LoggerInterface
{
    use LoggerTrait;
}
