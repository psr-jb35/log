<?php

namespace Psr\Log;

use Stringable;

/**
 * Ce Logeur peut être utilisé pour éviter les appels de journaux conditionnels.
 *
 * La journalisation doit toujours être facultative, et si aucun enregistreur n'est fourni à votre bibliothèque,
 * créer une instance NullLogger pour avoir quelque chose sur lequel lancer les journaux est un bon moyen
 * d'éviter de salir votre code avec des blocs `if ($this→logger) { }’.
 */
class NullLogeur extends AbstractLogger
{

    /**
     * Logs avec un niveau arbitraire.
     *
     * @param mixed             $level
     * @param string|Stringable $message
     * @param array             $context
     *
     * @return void
     *
     * @throws InvalidArgumentException
     * @SuppressWarnings("unused")
     */
    public function log(mixed $level, Stringable|string $message, array $context = []): void
    {
        // TODO: Implement log() method.
    }
}
