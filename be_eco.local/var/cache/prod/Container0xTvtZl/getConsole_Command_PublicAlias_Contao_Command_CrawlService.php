<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.contao.command.crawl' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Command\\CrawlCommand.php';

return $this->services['console.command.public_alias.contao.command.crawl'] = new \Contao\CoreBundle\Command\CrawlCommand(($this->services['contao.crawl.escargot_factory'] ?? $this->load('getContao_Crawl_EscargotFactoryService.php')), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));
