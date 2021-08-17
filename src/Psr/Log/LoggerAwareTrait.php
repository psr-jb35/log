<?php

namespace Psr\Log;

/**
 * Implémentation basique de LoggerAwareInterface
 */
trait LoggerAwareTrait
{
    /**
     * L'instance logeur
     * @var LoggerInterface|null
     */
    protected ?LoggerInterface $logeur= null;

    /**
     * Définit une instance logeur.
     *
     * @param LoggerInterface $logeur
     */
    public function setLogger(LoggerInterface $logeur):void
    {
        $this->logeur=$logeur;
    }
}
