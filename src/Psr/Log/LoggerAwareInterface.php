<?php

namespace Psr\Log;

/**
 * Décrit une instance prenant en charge la journalisation.
 */
interface LoggerAwareInterface
{
    /**
     * Définit une instance logeur.
     *
     * @param LoggerInterface $logeur
     *
     * @return void
     */
    public function setLogger(LoggerInterface $logeur):void;
}
