<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\StatsService' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Service\\StatsService.php';

return $this->privates['App\\Service\\StatsService'] = new \App\Service\StatsService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));
