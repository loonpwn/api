<?php

namespace Dingo\Api\Tests\Stubs;

use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application;

class ApplicationStub extends Container implements Application
{
    public function version()
    {
        return 'v1';
    }

    public function basePath($path = '')
    {
        //
    }

    public function environment(...$environments)
    {
        return 'testing';
    }

    public function isDownForMaintenance()
    {
        return false;
    }

    public function registerConfiguredProviders()
    {
        //
    }

    public function register($provider, $options = [], $force = false)
    {
        //
    }

    public function runningUnitTests()
    {
        // TODO: Implement runningUnitTests() method.
    }

    public function registerDeferredProvider($provider, $service = null)
    {
        //
    }

    public function getCachedCompilePath()
    {
        //
    }

    public function getCachedServicesPath()
    {
        //
    }

    public function boot()
    {
        //
    }

    public function booting($callback)
    {
        //
    }

    public function booted($callback)
    {
        //
    }

    public function getCachedPackagesPath()
    {
        //
    }

    public function runningInConsole()
    {
        //
    }

    /**
     * @inheritDoc
     */
    public function bootstrapPath($path = '')
    {
        // TODO: Implement bootstrapPath() method.
    }

    /**
     * @inheritDoc
     */
    public function configPath($path = '')
    {
        // TODO: Implement configPath() method.
    }

    /**
     * @inheritDoc
     */
    public function databasePath($path = '')
    {
        // TODO: Implement databasePath() method.
    }

    /**
     * @inheritDoc
     */
    public function resourcePath($path = '')
    {
        // TODO: Implement resourcePath() method.
    }

    /**
     * @inheritDoc
     */
    public function storagePath()
    {
        // TODO: Implement storagePath() method.
    }

    /**
     * @inheritDoc
     */
    public function resolveProvider($provider)
    {
        // TODO: Implement resolveProvider() method.
    }

    /**
     * @inheritDoc
     */
    public function bootstrapWith(array $bootstrappers)
    {
        // TODO: Implement bootstrapWith() method.
    }

    /**
     * @inheritDoc
     */
    public function getLocale()
    {
        // TODO: Implement getLocale() method.
    }

    /**
     * @inheritDoc
     */
    public function getNamespace()
    {
        // TODO: Implement getNamespace() method.
    }

    /**
     * @inheritDoc
     */
    public function getProviders($provider)
    {
        // TODO: Implement getProviders() method.
    }

    /**
     * @inheritDoc
     */
    public function hasBeenBootstrapped()
    {
        // TODO: Implement hasBeenBootstrapped() method.
    }

    /**
     * @inheritDoc
     */
    public function loadDeferredProviders()
    {
        // TODO: Implement loadDeferredProviders() method.
    }

    /**
     * @inheritDoc
     */
    public function setLocale($locale)
    {
        // TODO: Implement setLocale() method.
    }

    /**
     * @inheritDoc
     */
    public function shouldSkipMiddleware()
    {
        // TODO: Implement shouldSkipMiddleware() method.
    }

    /**
     * @inheritDoc
     */
    public function terminate()
    {
        // TODO: Implement terminate() method.
    }
}
