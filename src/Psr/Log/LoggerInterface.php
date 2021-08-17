<?php

namespace Psr\Log;

use Stringable;

/**
 * Décrit une instance de logeur.
 * Le message DOIT être une chaîne ou un objet implémentant __toString().
 * Le message PEUT contenir des espaces réservés sous la forme : {foo}
 * où foo sera remplacé par les données de contexte dans la clé "foo".
 *
 * Le tableau de contexte peut contenir des données arbitraires.
 * La seule hypothèse qui peut être faite par les implémenteurs est que si une instance d'exception
 * est donnée pour produire une trace de pile, elle DOIT être dans une clé nommée "exception".
 *
 * Voir https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md pour plus de détail sur
 * l'interface.
 */
interface LoggerInterface
{
    /**
     * Le système est inutilisable
     *
     * @param string|Stringable $message
     * @param array             $context
     *
     * @return void
     */
    public function emergency(string|Stringable $message, array $context = []): void;

    /**
     * Des mesures doivent être prises immédiatement.
     *
     * Exemple : Site entier en panne, base de données indisponible, etc.
     * Cela devrait déclencher les alertes SMS et vous réveiller.
     *
     * @param string|Stringable $message
     * @param array             $context
     *
     * @return void
     */
    public function alert(string|Stringable $message, array $context = []): void;

    /**
     * Condition critique
     *
     * Exemple : Composant d'application indisponible, exception inattendue.
     *
     * @param string|Stringable $message
     * @param array             $context
     *
     * @return void
     */
    public function critical(string|Stringable $message, array $context = []): void;

    /**
     * Erreurs d'exécution qui ne nécessite pas d'action immédiate,
     * mais doivent généralement être consignées et surveillées.
     *
     * @param string|Stringable $message
     * @param array             $context
     *
     * @return void
     */
    public function error(string|Stringable $message, array $context = []): void;

    /**
     * Des occurrences exceptionnelles qui ne sont pas des erreurs.
     *
     * Exemple : Utilisation d'API obsolètes, mauvaise utilisation d'une API,
     * choses indésirables qui ne sont pas forcément fausses.
     *
     * @param string|Stringable $message
     * @param array             $context
     *
     * @return void
     */
    public function warning(string|Stringable $message, array $context = []): void;

    /**
     * Événements normaux, mais significatifs.
     *
     * @param string|Stringable $message
     * @param array             $context
     *
     * @return void
     */
    public function notice(string|Stringable $message, array $context = []): void;

    /**
     * Événements intéressants.
     *
     * Exemple : Log utilisateur dans, log SQL.
     *
     * @param string|Stringable $message
     * @param array             $context
     *
     * @return void
     */
    public function info(string|Stringable $message, array $context = []): void;

    /**
     * Information de debug détaillé.
     *
     * @param string|Stringable $message
     * @param array             $context
     *
     * @return void
     */
    public function debug(string|Stringable $message, array $context = []): void;

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
     */
    public function log(mixed $level, string|Stringable $message, array $context = []): void;
}
