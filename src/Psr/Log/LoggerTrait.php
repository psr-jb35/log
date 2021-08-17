<?php

namespace Psr\Log;

use Stringable;

/**
 * Il s'agit d'un simple trait Logger que les classes incapables d'étendre AbstractLogger
 * (parce qu'elles étendent une autre classe, etc.) peuvent inclure ce trait.
 *
 * Il délègue simplement toutes les méthodes spécifiques au niveau du journal à la méthode `log`
 * pour réduire le code qu'un simple logeur qui fait la même chose avec les messages
 * quel que soit le niveau d'erreur doit implémenter.
 */
trait LoggerTrait
{

    /**
     * @inheritDoc
     */
    public function emergency(Stringable|string $message, array $context = []): void
    {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function alert(Stringable|string $message, array $context = []): void
    {
        $this->log(LogLevel::ALERT, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function critical(Stringable|string $message, array $context = []): void
    {
        $this->log(LogLevel::CRITICAL, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function error(Stringable|string $message, array $context = []): void
    {
        $this->log(LogLevel::ERROR, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function warning(Stringable|string $message, array $context = []): void
    {
        $this->log(LogLevel::WARNING, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function notice(Stringable|string $message, array $context = []): void
    {
        $this->log(LogLevel::NOTICE, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function info(Stringable|string $message, array $context = []): void
    {
        $this->log(LogLevel::INFO, $message, $context);
    }

    /**
     * @inheritDoc
     */
    public function debug(Stringable|string $message, array $context = []): void
    {
        $this->log(LogLevel::DEBUG, $message, $context);
    }

    /**
     * @inheritDoc
     */
    abstract public function log(mixed $level, Stringable|string $message, array $context = []): void;
}
