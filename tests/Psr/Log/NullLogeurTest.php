<?php

namespace Psr\Log;

use PHPUnit\Framework\TestCase;

class NullLogeurTest extends TestCase
{

    public function testLogEmergency()
    {
        $logeur = new NullLogeur();
        $this->assertInstanceOf(LoggerInterface::class, $logeur);

        $logeur->emergency('Le système est inutilisable');
        //Aucun test à fare car log de la class nuls renvois rien
    }

    public function testLogAlert()
    {
        $logeur = new NullLogeur();
        $this->assertInstanceOf(LoggerInterface::class, $logeur);

        $logeur->alert('Des mesures doivent être prises immédiatement.');
        //Aucun test à fare car log de la class nuls renvois rien
    }

    public function testLogCritical()
    {
        $logeur = new NullLogeur();
        $this->assertInstanceOf(LoggerInterface::class, $logeur);

        $logeur->critical('Condition critique');
        //Aucun test à fare car log de la class nuls renvois rien
    }
    public function testLogError()
    {
        $logeur = new NullLogeur();
        $this->assertInstanceOf(LoggerInterface::class, $logeur);

        $logeur->error('Erreurs d\'exécution qui ne nécessite pas d\'action immédiate,
                mais doivent généralement être consignées et surveillées.');
        //Aucun test à fare car log de la class nuls renvois rien
    }
    public function testLogWarning()
    {
        $logeur = new NullLogeur();
        $this->assertInstanceOf(LoggerInterface::class, $logeur);

        $logeur->warning('Des occurrences exceptionnelles qui ne sont pas des erreurs.');
        //Aucun test à fare car log de la class nuls renvois rien
    }
    public function testLogNotice()
    {
        $logeur = new NullLogeur();
        $this->assertInstanceOf(LoggerInterface::class, $logeur);

        $logeur->notice('Événements normaux, mais significatifs.');
        //Aucun test à fare car log de la class nuls renvois rien
    }
    public function testLogInfo()
    {
        $logeur = new NullLogeur();
        $this->assertInstanceOf(LoggerInterface::class, $logeur);

        $logeur->info('Événements intéressants.');
        //Aucun test à fare car log de la class nuls renvois rien
    }
    public function testLogDebug()
    {
        $logeur = new NullLogeur();
        $this->assertInstanceOf(LoggerInterface::class, $logeur);

        $logeur->debug('Information de debug détaillé.');
        //Aucun test à fare car log de la class nuls renvois rien
    }
    public function testLogLog()
    {
        $logeur = new NullLogeur();
        $this->assertInstanceOf(LoggerInterface::class, $logeur);

        $logeur->log(LogLevel::INFO, 'Logs avec un niveau arbitraire.');
        //Aucun test à fare car log de la class nuls renvois rien
    }
}
