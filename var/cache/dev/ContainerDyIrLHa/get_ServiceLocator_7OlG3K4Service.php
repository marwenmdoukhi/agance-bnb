<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.7OlG3K4' shared service.

return $this->privates['.service_locator.7OlG3K4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'statsService' => ['privates', 'App\\Service\\StatsService', 'getStatsServiceService.php', true],
]);
