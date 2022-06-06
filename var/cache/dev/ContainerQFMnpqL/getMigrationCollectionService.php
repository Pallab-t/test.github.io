<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Contao\CoreBundle\Migration\MigrationCollection' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Migration\\MigrationCollection.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Migration\\MigrationInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Migration\\AbstractMigration.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\core-bundle\\src\\Migration\\Version409\\CeAccessMigration.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version330Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version350Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version400Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version410Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version430Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version440Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version447Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version450Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version460Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version470Update.php';
include_once \dirname(__DIR__, 4).'\\vendor\\contao\\installation-bundle\\src\\Database\\Version480Update.php';

$a = ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService());

return $this->privates['Contao\\CoreBundle\\Migration\\MigrationCollection'] = new \Contao\CoreBundle\Migration\MigrationCollection(['Contao\\CoreBundle\\Migration\\Version409\\CeAccessMigration' => new \Contao\CoreBundle\Migration\Version409\CeAccessMigration($a, ($this->services['contao.framework'] ?? $this->getContao_FrameworkService())), 'Contao\\InstallationBundle\\Database\\Version330Update' => new \Contao\InstallationBundle\Database\Version330Update($a), 'Contao\\InstallationBundle\\Database\\Version350Update' => new \Contao\InstallationBundle\Database\Version350Update($a), 'Contao\\InstallationBundle\\Database\\Version400Update' => new \Contao\InstallationBundle\Database\Version400Update($a), 'Contao\\InstallationBundle\\Database\\Version410Update' => new \Contao\InstallationBundle\Database\Version410Update($a), 'Contao\\InstallationBundle\\Database\\Version430Update' => new \Contao\InstallationBundle\Database\Version430Update($a), 'Contao\\InstallationBundle\\Database\\Version440Update' => new \Contao\InstallationBundle\Database\Version440Update($a), 'Contao\\InstallationBundle\\Database\\Version447Update' => new \Contao\InstallationBundle\Database\Version447Update($a, ($this->services['translator'] ?? $this->getTranslatorService())), 'Contao\\InstallationBundle\\Database\\Version450Update' => new \Contao\InstallationBundle\Database\Version450Update($a), 'Contao\\InstallationBundle\\Database\\Version460Update' => new \Contao\InstallationBundle\Database\Version460Update($a), 'Contao\\InstallationBundle\\Database\\Version470Update' => new \Contao\InstallationBundle\Database\Version470Update($a, ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), 'files', \dirname(__DIR__, 4)), 'Contao\\InstallationBundle\\Database\\Version480Update' => new \Contao\InstallationBundle\Database\Version480Update($a, \dirname(__DIR__, 4))]);