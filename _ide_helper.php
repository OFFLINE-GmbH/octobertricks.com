<?php
// @formatter:off

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 5.5.50.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

    namespace Illuminate\Support\Facades { 
            /**
     * 
     *
     * @see \Illuminate\Foundation\Application
     */ 
        class App {
                    /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function publicPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->publicPath();
        }
                    /**
         * Get the path to the language files.
         *
         * @return string 
         * @static 
         */ 
        public static function langPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->langPath();
        }
                    /**
         * Run the given array of bootstrap classes.
         *
         * @param array $bootstrappers
         * @return void 
         * @static 
         */ 
        public static function bootstrapWith($bootstrappers)
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->bootstrapWith($bootstrappers);
        }
                    /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function pluginsPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->pluginsPath();
        }
                    /**
         * Set the plugins path for the application.
         *
         * @param string $path
         * @return \October\Rain\Foundation\Application 
         * @static 
         */ 
        public static function setPluginsPath($path)
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->setPluginsPath($path);
        }
                    /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function themesPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->themesPath();
        }
                    /**
         * Set the themes path for the application.
         *
         * @param string $path
         * @return \October\Rain\Foundation\Application 
         * @static 
         */ 
        public static function setThemesPath($path)
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->setThemesPath($path);
        }
                    /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function tempPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->tempPath();
        }
                    /**
         * Resolve the given type from the container.
         * 
         * (Overriding Container::make)
         *
         * @param string $abstract
         * @return mixed 
         * @static 
         */ 
        public static function make($abstract, $parameters = [])
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->make($abstract, $parameters);
        }
                    /**
         * Register a "before" application filter.
         *
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->before($callback);
        }
                    /**
         * Register an "after" application filter.
         *
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->after($callback);
        }
                    /**
         * Register an application error handler.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function error($callback)
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->error($callback);
        }
                    /**
         * Register an error handler for fatal errors.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function fatal($callback)
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->fatal($callback);
        }
                    /**
         * Determine if we are running in the back-end area.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningInBackend()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->runningInBackend();
        }
                    /**
         * Returns true if a database connection is present.
         *
         * @return boolean 
         * @static 
         */ 
        public static function hasDatabase()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->hasDatabase();
        }
                    /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setLocale($locale)
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->setLocale($locale);
        }
                    /**
         * Register the core class aliases in the container.
         *
         * @return void 
         * @static 
         */ 
        public static function registerCoreContainerAliases()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->registerCoreContainerAliases();
        }
                    /**
         * Get the path to the configuration cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedConfigPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getCachedConfigPath();
        }
                    /**
         * Get the path to the routes cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedRoutesPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getCachedRoutesPath();
        }
                    /**
         * Get the path to the cached "compiled.php" file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedCompilePath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getCachedCompilePath();
        }
                    /**
         * Get the path to the cached services.json file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedServicesPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getCachedServicesPath();
        }
                    /**
         * Get the path to the cached packages.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedPackagesPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getCachedPackagesPath();
        }
                    /**
         * Get the path to the cached packages.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedClassesPath()
        {
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getCachedClassesPath();
        }
                    /**
         * Get the version number of the application.
         *
         * @return string 
         * @static 
         */ 
        public static function version()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->version();
        }
                    /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterLoadingEnvironment($callback)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->afterLoadingEnvironment($callback);
        }
                    /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function beforeBootstrapping($bootstrapper, $callback)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->beforeBootstrapping($bootstrapper, $callback);
        }
                    /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterBootstrapping($bootstrapper, $callback)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->afterBootstrapping($bootstrapper, $callback);
        }
                    /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasBeenBootstrapped()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->hasBeenBootstrapped();
        }
                    /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return \October\Rain\Foundation\Application 
         * @static 
         */ 
        public static function setBasePath($basePath)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->setBasePath($basePath);
        }
                    /**
         * Get the path to the application "app" directory.
         *
         * @param string $path Optionally, a path to append to the app path
         * @return string 
         * @static 
         */ 
        public static function path($path = '')
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->path($path);
        }
                    /**
         * Get the base path of the Laravel installation.
         *
         * @param string $path Optionally, a path to append to the base path
         * @return string 
         * @static 
         */ 
        public static function basePath($path = '')
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->basePath($path);
        }
                    /**
         * Get the path to the bootstrap directory.
         *
         * @param string $path Optionally, a path to append to the bootstrap path
         * @return string 
         * @static 
         */ 
        public static function bootstrapPath($path = '')
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->bootstrapPath($path);
        }
                    /**
         * Get the path to the application configuration files.
         *
         * @param string $path Optionally, a path to append to the config path
         * @return string 
         * @static 
         */ 
        public static function configPath($path = '')
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->configPath($path);
        }
                    /**
         * Get the path to the database directory.
         *
         * @param string $path Optionally, a path to append to the database path
         * @return string 
         * @static 
         */ 
        public static function databasePath($path = '')
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->databasePath($path);
        }
                    /**
         * Set the database directory.
         *
         * @param string $path
         * @return \October\Rain\Foundation\Application 
         * @static 
         */ 
        public static function useDatabasePath($path)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->useDatabasePath($path);
        }
                    /**
         * Get the path to the storage directory.
         *
         * @return string 
         * @static 
         */ 
        public static function storagePath()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->storagePath();
        }
                    /**
         * Set the storage directory.
         *
         * @param string $path
         * @return \October\Rain\Foundation\Application 
         * @static 
         */ 
        public static function useStoragePath($path)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->useStoragePath($path);
        }
                    /**
         * Get the path to the resources directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function resourcePath($path = '')
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->resourcePath($path);
        }
                    /**
         * Get the path to the environment file directory.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentPath()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->environmentPath();
        }
                    /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return \October\Rain\Foundation\Application 
         * @static 
         */ 
        public static function useEnvironmentPath($path)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->useEnvironmentPath($path);
        }
                    /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return \October\Rain\Foundation\Application 
         * @static 
         */ 
        public static function loadEnvironmentFrom($file)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->loadEnvironmentFrom($file);
        }
                    /**
         * Get the environment file the application is using.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFile()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->environmentFile();
        }
                    /**
         * Get the fully qualified path to the environment file.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFilePath()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->environmentFilePath();
        }
                    /**
         * Get or check the current application environment.
         *
         * @return string|bool 
         * @static 
         */ 
        public static function environment()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->environment();
        }
                    /**
         * Determine if application is in local environment.
         *
         * @return bool 
         * @static 
         */ 
        public static function isLocal()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->isLocal();
        }
                    /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         * @return string 
         * @static 
         */ 
        public static function detectEnvironment($callback)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->detectEnvironment($callback);
        }
                    /**
         * Determine if we are running in the console.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningInConsole()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->runningInConsole();
        }
                    /**
         * Determine if we are running unit tests.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningUnitTests()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->runningUnitTests();
        }
                    /**
         * Register all of the configured providers.
         *
         * @return void 
         * @static 
         */ 
        public static function registerConfiguredProviders()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->registerConfiguredProviders();
        }
                    /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param array $options
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function register($provider, $options = [], $force = false)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->register($provider, $options, $force);
        }
                    /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return \Illuminate\Support\ServiceProvider|null 
         * @static 
         */ 
        public static function getProvider($provider)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getProvider($provider);
        }
                    /**
         * Get the registered service provider instances if any exist.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return array 
         * @static 
         */ 
        public static function getProviders($provider)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getProviders($provider);
        }
                    /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function resolveProvider($provider)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->resolveProvider($provider);
        }
                    /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProviders()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->loadDeferredProviders();
        }
                    /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProvider($service)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->loadDeferredProvider($service);
        }
                    /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string|null $service
         * @return void 
         * @static 
         */ 
        public static function registerDeferredProvider($provider, $service = null)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->registerDeferredProvider($provider, $service);
        }
                    /**
         * Determine if the given abstract type has been bound.
         * 
         * (Overriding Container::bound)
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function bound($abstract)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->bound($abstract);
        }
                    /**
         * Determine if the application has booted.
         *
         * @return bool 
         * @static 
         */ 
        public static function isBooted()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->isBooted();
        }
                    /**
         * Boot the application's service providers.
         *
         * @return void 
         * @static 
         */ 
        public static function boot()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->boot();
        }
                    /**
         * Register a new boot listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function booting($callback)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->booting($callback);
        }
                    /**
         * Register a new "booted" listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function booted($callback)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->booted($callback);
        }
                    /**
         * {@inheritdoc}
         *
         * @static 
         */ 
        public static function handle($request, $type = 1, $catch = true)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->handle($request, $type, $catch);
        }
                    /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool 
         * @static 
         */ 
        public static function shouldSkipMiddleware()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->shouldSkipMiddleware();
        }
                    /**
         * Determine if the application configuration is cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function configurationIsCached()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->configurationIsCached();
        }
                    /**
         * Determine if the application routes are cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function routesAreCached()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->routesAreCached();
        }
                    /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool 
         * @static 
         */ 
        public static function isDownForMaintenance()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->isDownForMaintenance();
        }
                    /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @static 
         */ 
        public static function abort($code, $message = '', $headers = [])
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->abort($code, $message, $headers);
        }
                    /**
         * Register a terminating callback with the application.
         *
         * @param \Closure $callback
         * @return \October\Rain\Foundation\Application 
         * @static 
         */ 
        public static function terminating($callback)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->terminating($callback);
        }
                    /**
         * Terminate the application.
         *
         * @return void 
         * @static 
         */ 
        public static function terminate()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->terminate();
        }
                    /**
         * Get the service providers that have been loaded.
         *
         * @return array 
         * @static 
         */ 
        public static function getLoadedProviders()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getLoadedProviders();
        }
                    /**
         * Get the application's deferred services.
         *
         * @return array 
         * @static 
         */ 
        public static function getDeferredServices()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getDeferredServices();
        }
                    /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function setDeferredServices($services)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->setDeferredServices($services);
        }
                    /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function addDeferredServices($services)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->addDeferredServices($services);
        }
                    /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool 
         * @static 
         */ 
        public static function isDeferredService($service)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->isDeferredService($service);
        }
                    /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function provideFacades($namespace)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->provideFacades($namespace);
        }
                    /**
         * Define a callback to be used to configure Monolog.
         *
         * @param callable $callback
         * @return \October\Rain\Foundation\Application 
         * @static 
         */ 
        public static function configureMonologUsing($callback)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->configureMonologUsing($callback);
        }
                    /**
         * Determine if the application has a custom Monolog configurator.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasMonologConfigurator()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->hasMonologConfigurator();
        }
                    /**
         * Get the custom Monolog configurator for the application.
         *
         * @return callable 
         * @static 
         */ 
        public static function getMonologConfigurator()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getMonologConfigurator();
        }
                    /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getLocale();
        }
                    /**
         * Determine if application locale is the given locale.
         *
         * @param string $locale
         * @return bool 
         * @static 
         */ 
        public static function isLocale($locale)
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->isLocale($locale);
        }
                    /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->flush();
        }
                    /**
         * Get the application namespace.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function getNamespace()
        {            //Method inherited from \Illuminate\Foundation\Application         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getNamespace();
        }
                    /**
         * Define a contextual binding.
         *
         * @param string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder 
         * @static 
         */ 
        public static function when($concrete)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->when($concrete);
        }
                    /**
         * Returns true if the container can return an entry for the given identifier.
         * 
         * Returns false otherwise.
         * 
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @param string $id Identifier of the entry to look for.
         * @return bool 
         * @static 
         */ 
        public static function has($id)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->has($id);
        }
                    /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function resolved($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->resolved($abstract);
        }
                    /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function isShared($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->isShared($abstract);
        }
                    /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function isAlias($name)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->isAlias($name);
        }
                    /**
         * Register a binding with the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bind($abstract, $concrete = null, $shared = false)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->bind($abstract, $concrete, $shared);
        }
                    /**
         * Determine if the container has a method binding.
         *
         * @param string $method
         * @return bool 
         * @static 
         */ 
        public static function hasMethodBinding($method)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->hasMethodBinding($method);
        }
                    /**
         * Bind a callback to resolve with Container::call.
         *
         * @param string $method
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function bindMethod($method, $callback)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->bindMethod($method, $callback);
        }
                    /**
         * Get the method binding for the given method.
         *
         * @param string $method
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function callMethodBinding($method, $instance)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->callMethodBinding($method, $instance);
        }
                    /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @return void 
         * @static 
         */ 
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->addContextualBinding($concrete, $abstract, $implementation);
        }
                    /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->bindIf($abstract, $concrete, $shared);
        }
                    /**
         * Register a shared binding in the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function singleton($abstract, $concrete = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->singleton($abstract, $concrete);
        }
                    /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function extend($abstract, $closure)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->extend($abstract, $closure);
        }
                    /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function instance($abstract, $instance)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->instance($abstract, $instance);
        }
                    /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void 
         * @static 
         */ 
        public static function tag($abstracts, $tags)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->tag($abstracts, $tags);
        }
                    /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return array 
         * @static 
         */ 
        public static function tagged($tag)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->tagged($tag);
        }
                    /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void 
         * @static 
         */ 
        public static function alias($abstract, $alias)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->alias($abstract, $alias);
        }
                    /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rebinding($abstract, $callback)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->rebinding($abstract, $callback);
        }
                    /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed 
         * @static 
         */ 
        public static function refresh($abstract, $target, $method)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->refresh($abstract, $target, $method);
        }
                    /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         * @return \Closure 
         * @static 
         */ 
        public static function wrap($callback, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->wrap($callback, $parameters);
        }
                    /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array $parameters
         * @param string|null $defaultMethod
         * @return mixed 
         * @static 
         */ 
        public static function call($callback, $parameters = [], $defaultMethod = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->call($callback, $parameters, $defaultMethod);
        }
                    /**
         * Get a closure to resolve the given type from the container.
         *
         * @param string $abstract
         * @return \Closure 
         * @static 
         */ 
        public static function factory($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->factory($abstract);
        }
                    /**
         * An alias function name for make().
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */ 
        public static function makeWith($abstract, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->makeWith($abstract, $parameters);
        }
                    /**
         * Finds an entry of the container by its identifier and returns it.
         *
         * @param string $id Identifier of the entry to look for.
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         * @return mixed Entry.
         * @static 
         */ 
        public static function get($id)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->get($id);
        }
                    /**
         * Instantiate a concrete instance of the given type.
         *
         * @param string $concrete
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */ 
        public static function build($concrete)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->build($concrete);
        }
                    /**
         * Register a new resolving callback.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function resolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->resolving($abstract, $callback);
        }
                    /**
         * Register a new after resolving callback for all types.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function afterResolving($abstract, $callback = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->afterResolving($abstract, $callback);
        }
                    /**
         * Get the container's bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getBindings()
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getBindings();
        }
                    /**
         * Get the alias for an abstract if available.
         *
         * @param string $abstract
         * @return string 
         * @throws \LogicException
         * @static 
         */ 
        public static function getAlias($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->getAlias($abstract);
        }
                    /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetExtenders($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->forgetExtenders($abstract);
        }
                    /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetInstance($abstract)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->forgetInstance($abstract);
        }
                    /**
         * Clear all of the instances from the container.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetInstances()
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->forgetInstances();
        }
                    /**
         * Set the globally available instance of the container.
         *
         * @return static 
         * @static 
         */ 
        public static function getInstance()
        {            //Method inherited from \Illuminate\Container\Container         
                        return \October\Rain\Foundation\Application::getInstance();
        }
                    /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container|null $container
         * @return static 
         * @static 
         */ 
        public static function setInstance($container = null)
        {            //Method inherited from \Illuminate\Container\Container         
                        return \October\Rain\Foundation\Application::setInstance($container);
        }
                    /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->offsetSet($key, $value);
        }
                    /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {            //Method inherited from \Illuminate\Container\Container         
                        /** @var \October\Rain\Foundation\Application $instance */
                        $instance->offsetUnset($key);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Contracts\Console\Kernel
     */ 
        class Artisan {
                    /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface $output
         * @return int 
         * @static 
         */ 
        public static function handle($input, $output = null)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        return $instance->handle($input, $output);
        }
                    /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         * @return void 
         * @static 
         */ 
        public static function terminate($input, $status)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        $instance->terminate($input, $status);
        }
                    /**
         * Register a Closure based command with the application.
         *
         * @param string $signature
         * @param \Closure $callback
         * @return \Illuminate\Foundation\Console\ClosureCommand 
         * @static 
         */ 
        public static function command($signature, $callback)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        return $instance->command($signature, $callback);
        }
                    /**
         * Register the given command with the console application.
         *
         * @param \Symfony\Component\Console\Command\Command $command
         * @return void 
         * @static 
         */ 
        public static function registerCommand($command)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        $instance->registerCommand($command);
        }
                    /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface $outputBuffer
         * @return int 
         * @static 
         */ 
        public static function call($command, $parameters = [], $outputBuffer = null)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        return $instance->call($command, $parameters, $outputBuffer);
        }
                    /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return \Illuminate\Foundation\Bus\PendingDispatch 
         * @static 
         */ 
        public static function queue($command, $parameters = [])
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        return $instance->queue($command, $parameters);
        }
                    /**
         * Get all of the commands registered with the console.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        return $instance->all();
        }
                    /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */ 
        public static function output()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        return $instance->output();
        }
                    /**
         * Bootstrap the application for artisan commands.
         *
         * @return void 
         * @static 
         */ 
        public static function bootstrap()
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        $instance->bootstrap();
        }
                    /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application $artisan
         * @return void 
         * @static 
         */ 
        public static function setArtisan($artisan)
        {            //Method inherited from \Illuminate\Foundation\Console\Kernel         
                        /** @var \October\Rain\Foundation\Console\Kernel $instance */
                        $instance->setArtisan($artisan);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Contracts\Bus\Dispatcher
     */ 
        class Bus {
                    /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
         * @return mixed 
         * @static 
         */ 
        public static function dispatch($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatch($command);
        }
                    /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed 
         * @static 
         */ 
        public static function dispatchNow($command, $handler = null)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatchNow($command, $handler);
        }
                    /**
         * Determine if the given command has a handler.
         *
         * @param mixed $command
         * @return bool 
         * @static 
         */ 
        public static function hasCommandHandler($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->hasCommandHandler($command);
        }
                    /**
         * Retrieve the handler for a command.
         *
         * @param mixed $command
         * @return bool|mixed 
         * @static 
         */ 
        public static function getCommandHandler($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->getCommandHandler($command);
        }
                    /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
         * @return mixed 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function dispatchToQueue($command)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->dispatchToQueue($command);
        }
                    /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param array $pipes
         * @return \Illuminate\Bus\Dispatcher 
         * @static 
         */ 
        public static function pipeThrough($pipes)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->pipeThrough($pipes);
        }
                    /**
         * Map a command to a handler.
         *
         * @param array $map
         * @return \Illuminate\Bus\Dispatcher 
         * @static 
         */ 
        public static function map($map)
        {
                        /** @var \Illuminate\Bus\Dispatcher $instance */
                        return $instance->map($map);
        }
                    /**
         * Assert if a job was dispatched based on a truth-test callback.
         *
         * @param string $command
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatched($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        $instance->assertDispatched($command, $callback);
        }
                    /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatched($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        $instance->assertNotDispatched($command, $callback);
        }
                    /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatched($command, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->dispatched($command, $callback);
        }
                    /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool 
         * @static 
         */ 
        public static function hasDispatched($command)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
                        return $instance->hasDispatched($command);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Cache\CacheManager
     * @see \Illuminate\Cache\Repository
     */ 
        class Cache {
                    /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
        public static function store($name = null)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->store($name);
        }
                    /**
         * Get a cache driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository 
         * @static 
         */ 
        public static function repository($store)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->repository($store);
        }
                    /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        $instance->setDefaultDriver($name);
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Cache\CacheManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Cache\CacheManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->has($key);
        }
                    /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Retrieve multiple items from the cache by key.
         * 
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function many($keys)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->many($keys);
        }
                    /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of keys that can obtained in a single operation.
         * @param mixed $default Default value to return for keys that do not exist.
         * @return \Psr\SimpleCache\iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function getMultiple($keys, $default = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getMultiple($keys, $default);
        }
                    /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->pull($key, $default);
        }
                    /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return void 
         * @static 
         */ 
        public static function put($key, $value, $minutes = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        $instance->put($key, $value, $minutes);
        }
                    /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param string $key The key of the item to store.
         * @param mixed $value The value of the item to store, must be serializable.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function set($key, $value, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->set($key, $value, $ttl);
        }
                    /**
         * Store multiple items in the cache for a given number of minutes.
         *
         * @param array $values
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return void 
         * @static 
         */ 
        public static function putMany($values, $minutes)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        $instance->putMany($values, $minutes);
        }
                    /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param \Psr\SimpleCache\iterable $values A list of key => value pairs for a multiple-set operation.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                       the driver supports TTL then the library may set a default value
         *                                       for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static 
         */ 
        public static function setMultiple($values, $ttl = null)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->setMultiple($values, $ttl);
        }
                    /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return bool 
         * @static 
         */ 
        public static function add($key, $value, $minutes)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->add($key, $value, $minutes);
        }
                    /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function increment($key, $value = 1)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->increment($key, $value);
        }
                    /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function decrement($key, $value = 1)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->decrement($key, $value);
        }
                    /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function forever($key, $value)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        $instance->forever($key, $value);
        }
                    /**
         * Get an item from the cache, or store the default value.
         *
         * @param string $key
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $minutes, $callback)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->remember($key, $minutes, $callback);
        }
                    /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function sear($key, $callback)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->sear($key, $callback);
        }
                    /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rememberForever($key, $callback)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->rememberForever($key, $callback);
        }
                    /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function forget($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->forget($key);
        }
                    /**
         * Delete an item from the cache by its unique key.
         *
         * @param string $key The unique cache key of the item to delete.
         * @return bool True if the item was successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function delete($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->delete($key);
        }
                    /**
         * Deletes multiple cache items in a single operation.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of string-based keys to be deleted.
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function deleteMultiple($keys)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->deleteMultiple($keys);
        }
                    /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool True on success and false on failure.
         * @static 
         */ 
        public static function clear()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->clear();
        }
                    /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         * @return \Illuminate\Cache\TaggedCache 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function tags($names)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->tags($names);
        }
                    /**
         * Get the default cache time.
         *
         * @return float|int 
         * @static 
         */ 
        public static function getDefaultCacheTime()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getDefaultCacheTime();
        }
                    /**
         * Set the default cache time in minutes.
         *
         * @param float|int $minutes
         * @return \Illuminate\Cache\Repository 
         * @static 
         */ 
        public static function setDefaultCacheTime($minutes)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->setDefaultCacheTime($minutes);
        }
                    /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */ 
        public static function getStore()
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->getStore();
        }
                    /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        $instance->setEventDispatcher($events);
        }
                    /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        $instance->offsetSet($key, $value);
        }
                    /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        $instance->offsetUnset($key);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Cache\Repository::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
                        \Illuminate\Cache\Repository::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Cache\Repository::hasMacro($name);
        }
                    /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
                        /** @var \Illuminate\Cache\Repository $instance */
                        return $instance->macroCall($method, $parameters);
        }
                    /**
         * Remove all items from the cache.
         *
         * @return bool 
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Cache\FileStore $instance */
                        return $instance->flush();
        }
                    /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */ 
        public static function getFilesystem()
        {
                        /** @var \Illuminate\Cache\FileStore $instance */
                        return $instance->getFilesystem();
        }
                    /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */ 
        public static function getDirectory()
        {
                        /** @var \Illuminate\Cache\FileStore $instance */
                        return $instance->getDirectory();
        }
                    /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */ 
        public static function getPrefix()
        {
                        /** @var \Illuminate\Cache\FileStore $instance */
                        return $instance->getPrefix();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Cookie\CookieJar
     */ 
        class Cookie {
                    /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true, $raw = false, $sameSite = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
                    /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string $name
         * @param string $value
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true, $raw = false, $sameSite = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
                    /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string $path
         * @param string $domain
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forget($name, $path = null, $domain = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->forget($name, $path, $domain);
        }
                    /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasQueued($key)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->hasQueued($key);
        }
                    /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function queued($key, $default = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->queued($key, $default);
        }
                    /**
         * Queue a cookie to send with the next response.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */ 
        public static function queue(...$parameters)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        $instance->queue(...$parameters);
        }
                    /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function unqueue($name)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        $instance->unqueue($name);
        }
                    /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param string $sameSite
         * @return \Illuminate\Cookie\CookieJar 
         * @static 
         */ 
        public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }
                    /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[] 
         * @static 
         */ 
        public static function getQueuedCookies()
        {
                        /** @var \Illuminate\Cookie\CookieJar $instance */
                        return $instance->getQueuedCookies();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Encryption\Encrypter
     */ 
        class Crypt {
                    /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
         * @return bool 
         * @static 
         */ 
        public static function supported($key, $cipher)
        {
                        return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }
                    /**
         * Create a new encryption key for the given cipher.
         *
         * @param string $cipher
         * @return string 
         * @static 
         */ 
        public static function generateKey($cipher)
        {
                        return \Illuminate\Encryption\Encrypter::generateKey($cipher);
        }
                    /**
         * Encrypt the given value.
         *
         * @param mixed $value
         * @param bool $serialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static 
         */ 
        public static function encrypt($value, $serialize = true)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->encrypt($value, $serialize);
        }
                    /**
         * Encrypt a string without serialization.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function encryptString($value)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->encryptString($value);
        }
                    /**
         * Decrypt the given value.
         *
         * @param mixed $payload
         * @param bool $unserialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static 
         */ 
        public static function decrypt($payload, $unserialize = true)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->decrypt($payload, $unserialize);
        }
                    /**
         * Decrypt the given string without unserialization.
         *
         * @param string $payload
         * @return string 
         * @static 
         */ 
        public static function decryptString($payload)
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->decryptString($payload);
        }
                    /**
         * Get the encryption key.
         *
         * @return string 
         * @static 
         */ 
        public static function getKey()
        {
                        /** @var \Illuminate\Encryption\Encrypter $instance */
                        return $instance->getKey();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Database\DatabaseManager
     * @see \Illuminate\Database\Connection
     */ 
        class DB {
                    /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function connection($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->connection($name);
        }
                    /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->purge($name);
        }
                    /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function disconnect($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->disconnect($name);
        }
                    /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function reconnect($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->reconnect($name);
        }
                    /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultConnection()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->getDefaultConnection();
        }
                    /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultConnection($name)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->setDefaultConnection($name);
        }
                    /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */ 
        public static function supportedDrivers()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->supportedDrivers();
        }
                    /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */ 
        public static function availableDrivers()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->availableDrivers();
        }
                    /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($name, $resolver)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->extend($name, $resolver);
        }
                    /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */ 
        public static function getConnections()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->getConnections();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Database\DatabaseManager
     * @see \Illuminate\Database\Connection
     */ 
        class DB {
                    /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function connection($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->connection($name);
        }
                    /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->purge($name);
        }
                    /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function disconnect($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->disconnect($name);
        }
                    /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function reconnect($name = null)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->reconnect($name);
        }
                    /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultConnection()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->getDefaultConnection();
        }
                    /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultConnection($name)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->setDefaultConnection($name);
        }
                    /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */ 
        public static function supportedDrivers()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->supportedDrivers();
        }
                    /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */ 
        public static function availableDrivers()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->availableDrivers();
        }
                    /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($name, $resolver)
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        $instance->extend($name, $resolver);
        }
                    /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */ 
        public static function getConnections()
        {
                        /** @var \Illuminate\Database\DatabaseManager $instance */
                        return $instance->getConnections();
        }
                    /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */ 
        public static function getSchemaBuilder()
        {
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getSchemaBuilder();
        }
                    /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
         * @param array $bindings
         * @return void 
         * @static 
         */ 
        public static function bindValues($statement, $bindings)
        {
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->bindValues($statement, $bindings);
        }
                    /**
         * Get a new query builder instance.
         *
         * @return \October\Rain\Database\QueryBuilder 
         * @static 
         */ 
        public static function query()
        {            //Method inherited from \October\Rain\Database\Connections\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->query();
        }
                    /**
         * Flush the memory cache.
         *
         * @return void 
         * @static 
         */ 
        public static function flushDuplicateCache()
        {            //Method inherited from \October\Rain\Database\Connections\Connection         
                        \October\Rain\Database\Connections\MySqlConnection::flushDuplicateCache();
        }
                    /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void 
         * @static 
         */ 
        public static function logQuery($query, $bindings, $time = null)
        {            //Method inherited from \October\Rain\Database\Connections\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->logQuery($query, $bindings, $time);
        }
                    /**
         * Set the query grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->useDefaultQueryGrammar();
        }
                    /**
         * Set the schema grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->useDefaultSchemaGrammar();
        }
                    /**
         * Set the query post processor to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->useDefaultPostProcessor();
        }
                    /**
         * Begin a fluent query against a database table.
         *
         * @param string $table
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function table($table)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->table($table);
        }
                    /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed 
         * @static 
         */ 
        public static function selectOne($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->selectOne($query, $bindings, $useReadPdo);
        }
                    /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function selectFromWriteConnection($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->selectFromWriteConnection($query, $bindings);
        }
                    /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */ 
        public static function select($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->select($query, $bindings, $useReadPdo);
        }
                    /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return \Generator 
         * @static 
         */ 
        public static function cursor($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->cursor($query, $bindings, $useReadPdo);
        }
                    /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function insert($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->insert($query, $bindings);
        }
                    /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function update($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->update($query, $bindings);
        }
                    /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function delete($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->delete($query, $bindings);
        }
                    /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function statement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->statement($query, $bindings);
        }
                    /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function affectingStatement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->affectingStatement($query, $bindings);
        }
                    /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool 
         * @static 
         */ 
        public static function unprepared($query)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->unprepared($query);
        }
                    /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array 
         * @static 
         */ 
        public static function pretend($callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->pretend($callback);
        }
                    /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function prepareBindings($bindings)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->prepareBindings($bindings);
        }
                    /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function listen($callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->listen($callback);
        }
                    /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */ 
        public static function raw($value)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->raw($value);
        }
                    /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function recordsHaveBeenModified($value = true)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->recordsHaveBeenModified($value);
        }
                    /**
         * Is Doctrine available?
         *
         * @return bool 
         * @static 
         */ 
        public static function isDoctrineAvailable()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->isDoctrineAvailable();
        }
                    /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column 
         * @static 
         */ 
        public static function getDoctrineColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getDoctrineColumn($table, $column);
        }
                    /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager 
         * @static 
         */ 
        public static function getDoctrineSchemaManager()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getDoctrineSchemaManager();
        }
                    /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection 
         * @static 
         */ 
        public static function getDoctrineConnection()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getDoctrineConnection();
        }
                    /**
         * Get the current PDO connection.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getPdo();
        }
                    /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getReadPdo();
        }
                    /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \October\Rain\Database\Connections\MySqlConnection 
         * @static 
         */ 
        public static function setPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->setPdo($pdo);
        }
                    /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \October\Rain\Database\Connections\MySqlConnection 
         * @static 
         */ 
        public static function setReadPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->setReadPdo($pdo);
        }
                    /**
         * Set the reconnect instance on the connection.
         *
         * @param callable $reconnector
         * @return \October\Rain\Database\Connections\MySqlConnection 
         * @static 
         */ 
        public static function setReconnector($reconnector)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->setReconnector($reconnector);
        }
                    /**
         * Get the database connection name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getName()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getName();
        }
                    /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @return mixed 
         * @static 
         */ 
        public static function getConfig($option = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getConfig($option);
        }
                    /**
         * Get the PDO driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDriverName()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getDriverName();
        }
                    /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */ 
        public static function getQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getQueryGrammar();
        }
                    /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return void 
         * @static 
         */ 
        public static function setQueryGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->setQueryGrammar($grammar);
        }
                    /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar 
         * @static 
         */ 
        public static function getSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getSchemaGrammar();
        }
                    /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return void 
         * @static 
         */ 
        public static function setSchemaGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->setSchemaGrammar($grammar);
        }
                    /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */ 
        public static function getPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getPostProcessor();
        }
                    /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return void 
         * @static 
         */ 
        public static function setPostProcessor($processor)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->setPostProcessor($processor);
        }
                    /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getEventDispatcher();
        }
                    /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->setEventDispatcher($events);
        }
                    /**
         * Determine if the connection in a "dry run".
         *
         * @return bool 
         * @static 
         */ 
        public static function pretending()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->pretending();
        }
                    /**
         * Get the connection query log.
         *
         * @return array 
         * @static 
         */ 
        public static function getQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getQueryLog();
        }
                    /**
         * Clear the query log.
         *
         * @return void 
         * @static 
         */ 
        public static function flushQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->flushQueryLog();
        }
                    /**
         * Enable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function enableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->enableQueryLog();
        }
                    /**
         * Disable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function disableQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->disableQueryLog();
        }
                    /**
         * Determine whether we're logging queries.
         *
         * @return bool 
         * @static 
         */ 
        public static function logging()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->logging();
        }
                    /**
         * Get the name of the connected database.
         *
         * @return string 
         * @static 
         */ 
        public static function getDatabaseName()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getDatabaseName();
        }
                    /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return string 
         * @static 
         */ 
        public static function setDatabaseName($database)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->setDatabaseName($database);
        }
                    /**
         * Get the table prefix for the connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getTablePrefix()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->getTablePrefix();
        }
                    /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return void 
         * @static 
         */ 
        public static function setTablePrefix($prefix)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->setTablePrefix($prefix);
        }
                    /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar 
         * @static 
         */ 
        public static function withTablePrefix($grammar)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->withTablePrefix($grammar);
        }
                    /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function resolverFor($driver, $callback)
        {            //Method inherited from \Illuminate\Database\Connection         
                        \October\Rain\Database\Connections\MySqlConnection::resolverFor($driver, $callback);
        }
                    /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function getResolver($driver)
        {            //Method inherited from \Illuminate\Database\Connection         
                        return \October\Rain\Database\Connections\MySqlConnection::getResolver($driver);
        }
                    /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @param int $attempts
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */ 
        public static function transaction($callback, $attempts = 1)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->transaction($callback, $attempts);
        }
                    /**
         * Start a new database transaction.
         *
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function beginTransaction()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->beginTransaction();
        }
                    /**
         * Commit the active database transaction.
         *
         * @return void 
         * @static 
         */ 
        public static function commit()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->commit();
        }
                    /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         * @return void 
         * @static 
         */ 
        public static function rollBack($toLevel = null)
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        $instance->rollBack($toLevel);
        }
                    /**
         * Get the number of active transactions.
         *
         * @return int 
         * @static 
         */ 
        public static function transactionLevel()
        {            //Method inherited from \Illuminate\Database\Connection         
                        /** @var \October\Rain\Database\Connections\MySqlConnection $instance */
                        return $instance->transactionLevel();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Events\Dispatcher
     */ 
        class Event {
                    /**
         * Register an event listener with the dispatcher.
         *
         * @param string|array $events
         * @param mixed $listener
         * @param int $priority
         * @return void 
         * @static 
         */ 
        public static function listen($events, $listener, $priority = 0)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        $instance->listen($events, $listener, $priority);
        }
                    /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */ 
        public static function hasListeners($eventName)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        return $instance->hasListeners($eventName);
        }
                    /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param array $payload
         * @return void 
         * @static 
         */ 
        public static function push($event, $payload = [])
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        $instance->push($event, $payload);
        }
                    /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void 
         * @static 
         */ 
        public static function subscribe($subscriber)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        $instance->subscribe($subscriber);
        }
                    /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function flush($event)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        $instance->flush($event);
        }
                    /**
         * Get the event that is currently firing.
         *
         * @return string 
         * @static 
         */ 
        public static function firing()
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        return $instance->firing();
        }
                    /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         * @return array|null 
         * @static 
         */ 
        public static function until($event, $payload = [])
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        return $instance->until($event, $payload);
        }
                    /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function fire($event, $payload = [], $halt = false)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        return $instance->fire($event, $payload, $halt);
        }
                    /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function dispatch($event, $payload = [], $halt = false)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        return $instance->dispatch($event, $payload, $halt);
        }
                    /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array 
         * @static 
         */ 
        public static function getListeners($eventName)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        return $instance->getListeners($eventName);
        }
                    /**
         * Register an event listener with the dispatcher.
         *
         * @param mixed $listener
         * @return mixed 
         * @static 
         */ 
        public static function makeListener($listener)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        return $instance->makeListener($listener);
        }
                    /**
         * Create a class based listener using the IoC container.
         *
         * @param mixed $listener
         * @return \Closure 
         * @static 
         */ 
        public static function createClassListener($listener)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        return $instance->createClassListener($listener);
        }
                    /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function forget($event)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        $instance->forget($event);
        }
                    /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetPushed()
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        $instance->forgetPushed();
        }
                    /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return \October\Rain\Events\Dispatcher 
         * @static 
         */ 
        public static function setQueueResolver($resolver)
        {
                        /** @var \October\Rain\Events\Dispatcher $instance */
                        return $instance->setQueueResolver($resolver);
        }
                    /**
         * Assert if an event was dispatched based on a truth-test callback.
         *
         * @param string $event
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatched($event, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        $instance->assertDispatched($event, $callback);
        }
                    /**
         * Assert if a event was dispatched a number of times.
         *
         * @param string $event
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedTimes($event, $times = 1)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        $instance->assertDispatchedTimes($event, $times);
        }
                    /**
         * Determine if an event was dispatched based on a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatched($event, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        $instance->assertNotDispatched($event, $callback);
        }
                    /**
         * Get all of the events matching a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatched($event, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->dispatched($event, $callback);
        }
                    /**
         * Determine if the given event has been dispatched.
         *
         * @param string $event
         * @return bool 
         * @static 
         */ 
        public static function hasDispatched($event)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
                        return $instance->hasDispatched($event);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Hashing\BcryptHasher
     */ 
        class Hash {
                    /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function make($value, $options = [])
        {
                        /** @var \Illuminate\Hashing\BcryptHasher $instance */
                        return $instance->make($value, $options);
        }
                    /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function check($value, $hashedValue, $options = [])
        {
                        /** @var \Illuminate\Hashing\BcryptHasher $instance */
                        return $instance->check($value, $hashedValue, $options);
        }
                    /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function needsRehash($hashedValue, $options = [])
        {
                        /** @var \Illuminate\Hashing\BcryptHasher $instance */
                        return $instance->needsRehash($hashedValue, $options);
        }
                    /**
         * Set the default password work factor.
         *
         * @param int $rounds
         * @return \Illuminate\Hashing\BcryptHasher 
         * @static 
         */ 
        public static function setRounds($rounds)
        {
                        /** @var \Illuminate\Hashing\BcryptHasher $instance */
                        return $instance->setRounds($rounds);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Http\Request
     */ 
        class Input {
                    /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */ 
        public static function capture()
        {
                        return \Illuminate\Http\Request::capture();
        }
                    /**
         * Return the Request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function instance()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->instance();
        }
                    /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */ 
        public static function method()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->method();
        }
                    /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */ 
        public static function root()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->root();
        }
                    /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function url()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->url();
        }
                    /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function fullUrl()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrl();
        }
                    /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string 
         * @static 
         */ 
        public static function fullUrlWithQuery($query)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlWithQuery($query);
        }
                    /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function path()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->path();
        }
                    /**
         * Get the current decoded path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function decodedPath()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->decodedPath();
        }
                    /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */ 
        public static function segment($index, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->segment($index, $default);
        }
                    /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */ 
        public static function segments()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->segments();
        }
                    /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->is(...$patterns);
        }
                    /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function routeIs(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->routeIs(...$patterns);
        }
                    /**
         * Determine if the current request URL and query string matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function fullUrlIs(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlIs(...$patterns);
        }
                    /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function ajax()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ajax();
        }
                    /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function pjax()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->pjax();
        }
                    /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */ 
        public static function secure()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->secure();
        }
                    /**
         * Get the client IP address.
         *
         * @return string 
         * @static 
         */ 
        public static function ip()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ip();
        }
                    /**
         * Get the client IP addresses.
         *
         * @return array 
         * @static 
         */ 
        public static function ips()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ips();
        }
                    /**
         * Get the client user agent.
         *
         * @return string 
         * @static 
         */ 
        public static function userAgent()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->userAgent();
        }
                    /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function merge($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->merge($input);
        }
                    /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function replace($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->replace($input);
        }
                    /**
         * Get the JSON payload for the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\ParameterBag|mixed 
         * @static 
         */ 
        public static function json($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->json($key, $default);
        }
                    /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function createFromBase($request)
        {
                        return \Illuminate\Http\Request::createFromBase($request);
        }
                    /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return static 
         * @static 
         */ 
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
                    /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function session()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->session();
        }
                    /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void 
         * @static 
         */ 
        public static function setLaravelSession($session)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->setLaravelSession($session);
        }
                    /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed 
         * @static 
         */ 
        public static function user($guard = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->user($guard);
        }
                    /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */ 
        public static function route($param = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->route($param);
        }
                    /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function fingerprint()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fingerprint();
        }
                    /**
         * Set the JSON payload for the request.
         *
         * @param \Symfony\Component\HttpFoundation\ParameterBag $json
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setJson($json)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setJson($json);
        }
                    /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getUserResolver()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUserResolver();
        }
                    /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setUserResolver($callback)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setUserResolver($callback);
        }
                    /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getRouteResolver()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRouteResolver();
        }
                    /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setRouteResolver($callback)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setRouteResolver($callback);
        }
                    /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */ 
        public static function toArray()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->toArray();
        }
                    /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetExists($offset);
        }
                    /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetGet($offset);
        }
                    /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($offset, $value)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->offsetSet($offset, $value);
        }
                    /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->offsetUnset($offset);
        }
                    /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource|null $content The raw body data
         * @static 
         */ 
        public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
                    /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return static 
         * @static 
         */ 
        public static function createFromGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::createFromGlobals();
        }
                    /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string|resource|null $content The raw body data
         * @return static 
         * @static 
         */ 
        public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
                    /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
         * @static 
         */ 
        public static function setFactory($callable)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setFactory($callable);
        }
                    /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */ 
        public static function overrideGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->overrideGlobals();
        }
                    /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @throws \InvalidArgumentException When $trustedHeaderSet is invalid
         * @static 
         */ 
        public static function setTrustedProxies($proxies)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
                    /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies
         * @static 
         */ 
        public static function getTrustedProxies()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedProxies();
        }
                    /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static 
         */ 
        public static function getTrustedHeaderSet()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
                    /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */ 
        public static function setTrustedHosts($hostPatterns)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
                    /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns
         * @static 
         */ 
        public static function getTrustedHosts()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHosts();
        }
                    /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         *  * Request::HEADER_FORWARDED:    defaults to Forwarded         (see RFC 7239)
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the $trustedHeaderSet argument of the Request::setTrustedProxies() method instead.
         * @static 
         */ 
        public static function setTrustedHeaderName($key, $value)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
                    /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
         * @return string The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the Request::getTrustedHeaderSet() method instead.
         * @static 
         */ 
        public static function getTrustedHeaderName($key)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
                    /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
         * @return string A normalized query string for the Request
         * @static 
         */ 
        public static function normalizeQueryString($qs)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
                    /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */ 
        public static function enableHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
                    /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static 
         */ 
        public static function getHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
                    /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key The key
         * @param mixed $default The default value if the parameter key does not exist
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
         * @static 
         */ 
        public static function getSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getSession();
        }
                    /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasPreviousSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasPreviousSession();
        }
                    /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static 
         */ 
        public static function hasSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasSession();
        }
                    /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
         * @static 
         */ 
        public static function setSession($session)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setSession($session);
        }
                    /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */ 
        public static function getClientIps()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getClientIps();
        }
                    /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return string|null The client IP address
         * @see getClientIps()
         * @see https://wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */ 
        public static function getClientIp()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getClientIp();
        }
                    /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */ 
        public static function getScriptName()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getScriptName();
        }
                    /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getPathInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPathInfo();
        }
                    /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBasePath()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getBasePath();
        }
                    /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBaseUrl()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getBaseUrl();
        }
                    /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */ 
        public static function getScheme()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getScheme();
        }
                    /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return int|string can be a string if fetched from the server bag
         * @static 
         */ 
        public static function getPort()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPort();
        }
                    /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getUser()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUser();
        }
                    /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getPassword()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPassword();
        }
                    /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */ 
        public static function getUserInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUserInfo();
        }
                    /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */ 
        public static function getHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getHttpHost();
        }
                    /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */ 
        public static function getRequestUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRequestUri();
        }
                    /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static 
         */ 
        public static function getSchemeAndHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getSchemeAndHttpHost();
        }
                    /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static 
         */ 
        public static function getUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUri();
        }
                    /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static 
         */ 
        public static function getUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUriForPath($path);
        }
                    /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
         * @return string The relative target path
         * @static 
         */ 
        public static function getRelativeUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRelativeUriForPath($path);
        }
                    /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static 
         */ 
        public static function getQueryString()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getQueryString();
        }
                    /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return bool 
         * @static 
         */ 
        public static function isSecure()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isSecure();
        }
                    /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return string 
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static 
         */ 
        public static function getHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getHost();
        }
                    /**
         * Sets the request method.
         *
         * @param string $method
         * @static 
         */ 
        public static function setMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setMethod($method);
        }
                    /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */ 
        public static function getMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getMethod();
        }
                    /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static 
         */ 
        public static function getRealMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRealMethod();
        }
                    /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
         * @return string|null The associated mime type (null if not found)
         * @static 
         */ 
        public static function getMimeType($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getMimeType($format);
        }
                    /**
         * Gets the mime types associated with the format.
         *
         * @param string $format The format
         * @return array The associated mime types
         * @static 
         */ 
        public static function getMimeTypes($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getMimeTypes($format);
        }
                    /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
         * @return string|null The format (null if not found)
         * @static 
         */ 
        public static function getFormat($mimeType)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getFormat($mimeType);
        }
                    /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */ 
        public static function setFormat($format, $mimeTypes)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setFormat($format, $mimeTypes);
        }
                    /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @param string|null $default The default format
         * @return string|null The request format
         * @static 
         */ 
        public static function getRequestFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRequestFormat($default);
        }
                    /**
         * Sets the request format.
         *
         * @param string $format The request format
         * @static 
         */ 
        public static function setRequestFormat($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setRequestFormat($format);
        }
                    /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static 
         */ 
        public static function getContentType()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getContentType();
        }
                    /**
         * Sets the default locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setDefaultLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setDefaultLocale($locale);
        }
                    /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getDefaultLocale();
        }
                    /**
         * Sets the locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setLocale($locale);
        }
                    /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getLocale();
        }
                    /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @return bool 
         * @static 
         */ 
        public static function isMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethod($method);
        }
                    /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @param bool $andCacheable Adds the additional condition that the method should be cacheable. True by default.
         * @return bool 
         * @static 
         */ 
        public static function isMethodSafe()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodSafe();
        }
                    /**
         * Checks whether or not the method is idempotent.
         *
         * @return bool 
         * @static 
         */ 
        public static function isMethodIdempotent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodIdempotent();
        }
                    /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @return bool True for GET and HEAD, false otherwise
         * @static 
         */ 
        public static function isMethodCacheable()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodCacheable();
        }
                    /**
         * Returns the protocol version.
         * 
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @return string 
         * @static 
         */ 
        public static function getProtocolVersion()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getProtocolVersion();
        }
                    /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream
         * @throws \LogicException
         * @static 
         */ 
        public static function getContent($asResource = false)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getContent($asResource);
        }
                    /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static 
         */ 
        public static function getETags()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getETags();
        }
                    /**
         * 
         *
         * @return bool 
         * @static 
         */ 
        public static function isNoCache()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isNoCache();
        }
                    /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static 
         */ 
        public static function getPreferredLanguage($locales = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPreferredLanguage($locales);
        }
                    /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static 
         */ 
        public static function getLanguages()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getLanguages();
        }
                    /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static 
         */ 
        public static function getCharsets()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getCharsets();
        }
                    /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static 
         */ 
        public static function getEncodings()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getEncodings();
        }
                    /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static 
         */ 
        public static function getAcceptableContentTypes()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getAcceptableContentTypes();
        }
                    /**
         * Returns true if the request is a XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */ 
        public static function isXmlHttpRequest()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isXmlHttpRequest();
        }
                    /**
         * Indicates whether this request originated from a trusted proxy.
         * 
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @return bool true if the request came from a trusted proxy, false otherwise
         * @static 
         */ 
        public static function isFromTrustedProxy()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isFromTrustedProxy();
        }
                    /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */ 
        public static function matchesType($actual, $type)
        {
                        return \Illuminate\Http\Request::matchesType($actual, $type);
        }
                    /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function isJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isJson();
        }
                    /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool 
         * @static 
         */ 
        public static function expectsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->expectsJson();
        }
                    /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */ 
        public static function wantsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->wantsJson();
        }
                    /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */ 
        public static function accepts($contentTypes)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->accepts($contentTypes);
        }
                    /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */ 
        public static function prefers($contentTypes)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->prefers($contentTypes);
        }
                    /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsJson();
        }
                    /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsHtml()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsHtml();
        }
                    /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function format($default = 'html')
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->format($default);
        }
                    /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function old($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->old($key, $default);
        }
                    /**
         * Flash the input for the current request to the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flash()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flash();
        }
                    /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashOnly($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flashOnly($keys);
        }
                    /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashExcept($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flashExcept($keys);
        }
                    /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flush();
        }
                    /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function server($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->server($key, $default);
        }
                    /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasHeader($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasHeader($key);
        }
                    /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function header($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->header($key, $default);
        }
                    /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */ 
        public static function bearerToken()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->bearerToken();
        }
                    /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->exists($key);
        }
                    /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->has($key);
        }
                    /**
         * Determine if the request contains any of the given inputs.
         *
         * @param mixed $key
         * @return bool 
         * @static 
         */ 
        public static function hasAny(...$keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasAny(...$keys);
        }
                    /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function filled($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->filled($key);
        }
                    /**
         * Get the keys for all of the input and files.
         *
         * @return array 
         * @static 
         */ 
        public static function keys()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->keys();
        }
                    /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function all($keys = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->all($keys);
        }
                    /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function input($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->input($key, $default);
        }
                    /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function only($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->only($keys);
        }
                    /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function except($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->except($keys);
        }
                    /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function query($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->query($key, $default);
        }
                    /**
         * Retrieve a request payload item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function post($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->post($key, $default);
        }
                    /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasCookie($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasCookie($key);
        }
                    /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function cookie($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->cookie($key, $default);
        }
                    /**
         * Get an array of all of the files on the request.
         *
         * @return array 
         * @static 
         */ 
        public static function allFiles()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->allFiles();
        }
                    /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasFile($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasFile($key);
        }
                    /**
         * Retrieve a file from the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Http\UploadedFile|array|null 
         * @static 
         */ 
        public static function file($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->file($key, $default);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Http\Request::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
                        \Illuminate\Http\Request::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Http\Request::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Translation\Translator
     */ 
        class Lang {
                    /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @param bool $fallback
         * @return string|array|null 
         * @static 
         */ 
        public static function get($key, $replace = [], $locale = null, $fallback = true)
        {
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->get($key, $replace, $locale, $fallback);
        }
                    /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int|array|\Countable $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function choice($key, $number, $replace = [], $locale = null)
        {
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->choice($key, $number, $replace, $locale);
        }
                    /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
                        /** @var \October\Rain\Translation\Translator $instance */
                        $instance->setEventDispatcher($events);
        }
                    /**
         * Determine if a translation exists for a given locale.
         *
         * @param string $key
         * @param string|null $locale
         * @return bool 
         * @static 
         */ 
        public static function hasForLocale($key, $locale = null)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->hasForLocale($key, $locale);
        }
                    /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string|null $locale
         * @param bool $fallback
         * @return bool 
         * @static 
         */ 
        public static function has($key, $locale = null, $fallback = true)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->has($key, $locale, $fallback);
        }
                    /**
         * Get the translation for a given key.
         *
         * @param string $key
         * @param array $replace
         * @param string $locale
         * @return string|array|null 
         * @static 
         */ 
        public static function trans($key, $replace = [], $locale = null)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->trans($key, $replace, $locale);
        }
                    /**
         * Get the translation for a given key from the JSON translation files.
         *
         * @param string $key
         * @param array $replace
         * @param string $locale
         * @return string|array|null 
         * @static 
         */ 
        public static function getFromJson($key, $replace = [], $locale = null)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->getFromJson($key, $replace, $locale);
        }
                    /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int|array|\Countable $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function transChoice($key, $number, $replace = [], $locale = null)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->transChoice($key, $number, $replace, $locale);
        }
                    /**
         * Add translation lines to the given locale.
         *
         * @param array $lines
         * @param string $locale
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function addLines($lines, $locale, $namespace = '*')
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        $instance->addLines($lines, $locale, $namespace);
        }
                    /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function load($namespace, $group, $locale)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        $instance->load($namespace, $group, $locale);
        }
                    /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */ 
        public static function addNamespace($namespace, $hint)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        $instance->addNamespace($namespace, $hint);
        }
                    /**
         * Add a new JSON path to the loader.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function addJsonPath($path)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        $instance->addJsonPath($path);
        }
                    /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */ 
        public static function parseKey($key)
        {
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->parseKey($key);
        }
                    /**
         * Get the message selector instance.
         *
         * @return \Illuminate\Translation\MessageSelector 
         * @static 
         */ 
        public static function getSelector()
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->getSelector();
        }
                    /**
         * Set the message selector instance.
         *
         * @param \Illuminate\Translation\MessageSelector $selector
         * @return void 
         * @static 
         */ 
        public static function setSelector($selector)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        $instance->setSelector($selector);
        }
                    /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Contracts\Translation\Loader 
         * @static 
         */ 
        public static function getLoader()
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->getLoader();
        }
                    /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function locale()
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->locale();
        }
                    /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->getLocale();
        }
                    /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setLocale($locale)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        $instance->setLocale($locale);
        }
                    /**
         * Get the fallback locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getFallback()
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        return $instance->getFallback();
        }
                    /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void 
         * @static 
         */ 
        public static function setFallback($fallback)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        /** @var \October\Rain\Translation\Translator $instance */
                        $instance->setFallback($fallback);
        }
                    /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void 
         * @static 
         */ 
        public static function setParsedKey($key, $parsed)
        {
                        /** @var \October\Rain\Translation\Translator $instance */
                        $instance->setParsedKey($key, $parsed);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        \October\Rain\Translation\Translator::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        \October\Rain\Translation\Translator::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Translation\Translator         
                        return \October\Rain\Translation\Translator::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Log\Writer
     */ 
        class Log {
                    /**
         * Log an emergency message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function emergency($message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->emergency($message, $context);
        }
                    /**
         * Log an alert message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function alert($message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->alert($message, $context);
        }
                    /**
         * Log a critical message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function critical($message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->critical($message, $context);
        }
                    /**
         * Log an error message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function error($message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->error($message, $context);
        }
                    /**
         * Log a warning message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function warning($message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->warning($message, $context);
        }
                    /**
         * Log a notice to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function notice($message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->notice($message, $context);
        }
                    /**
         * Log an informational message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function info($message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->info($message, $context);
        }
                    /**
         * Log a debug message to the logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function debug($message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->debug($message, $context);
        }
                    /**
         * Log a message to the logs.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function log($level, $message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->log($level, $message, $context);
        }
                    /**
         * Dynamically pass log calls into the writer.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function write($level, $message, $context = [])
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->write($level, $message, $context);
        }
                    /**
         * Register a file log handler.
         *
         * @param string $path
         * @param string $level
         * @return void 
         * @static 
         */ 
        public static function useFiles($path, $level = 'debug')
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->useFiles($path, $level);
        }
                    /**
         * Register a daily file log handler.
         *
         * @param string $path
         * @param int $days
         * @param string $level
         * @return void 
         * @static 
         */ 
        public static function useDailyFiles($path, $days = 0, $level = 'debug')
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->useDailyFiles($path, $days, $level);
        }
                    /**
         * Register a Syslog handler.
         *
         * @param string $name
         * @param string $level
         * @param mixed $facility
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */ 
        public static function useSyslog($name = 'laravel', $level = 'debug', $facility = 8)
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        return $instance->useSyslog($name, $level, $facility);
        }
                    /**
         * Register an error_log handler.
         *
         * @param string $level
         * @param int $messageType
         * @return void 
         * @static 
         */ 
        public static function useErrorLog($level = 'debug', $messageType = 0)
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->useErrorLog($level, $messageType);
        }
                    /**
         * Register a new callback handler for when a log event is triggered.
         *
         * @param \Closure $callback
         * @return void 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function listen($callback)
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->listen($callback);
        }
                    /**
         * Get the underlying Monolog instance.
         *
         * @return \Monolog\Logger 
         * @static 
         */ 
        public static function getMonolog()
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        return $instance->getMonolog();
        }
                    /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        return $instance->getEventDispatcher();
        }
                    /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($dispatcher)
        {
                        /** @var \Illuminate\Log\Writer $instance */
                        $instance->setEventDispatcher($dispatcher);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Mail\Mailer
     */ 
        class Mail {
                    /**
         * Send a new message using a view.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */ 
        public static function send($view, $data = [], $callback = null)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->send($view, $data, $callback);
        }
                    /**
         * Helper for send() method, the first argument can take a single email or an
         * array of recipients where the key is the address and the value is the name.
         *
         * @param array $recipients
         * @param string|array $view
         * @param array $data
         * @param mixed $callback
         * @param array $options
         * @return void 
         * @static 
         */ 
        public static function sendTo($recipients, $view, $data = [], $callback = null, $options = [])
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        $instance->sendTo($recipients, $view, $data, $callback, $options);
        }
                    /**
         * Queue a new e-mail message for sending.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function queue($view, $data = null, $callback = null, $queue = null)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->queue($view, $data, $callback, $queue);
        }
                    /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */ 
        public static function queueOn($queue, $view, $data = null, $callback = null)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->queueOn($queue, $view, $data, $callback);
        }
                    /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function later($delay, $view, $data = null, $callback = null, $queue = null)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->later($delay, $view, $data, $callback, $queue);
        }
                    /**
         * Queue a new e-mail message for sending after (n) seconds on the given queue.
         *
         * @param string $queue
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */ 
        public static function laterOn($queue, $delay, $view, $data = null, $callback = null)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->laterOn($queue, $delay, $view, $data, $callback);
        }
                    /**
         * Send a new message when only a raw text part.
         *
         * @param string $text
         * @param mixed $callback
         * @return int 
         * @static 
         */ 
        public static function raw($view, $callback)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->raw($view, $callback);
        }
                    /**
         * Helper for raw() method, send a new message when only a raw text part.
         *
         * @param array $recipients
         * @param string $view
         * @param mixed $callback
         * @param array $options
         * @return int 
         * @static 
         */ 
        public static function rawTo($recipients, $view, $callback = null, $options = [])
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->rawTo($recipients, $view, $callback, $options);
        }
                    /**
         * Tell the mailer to not really send messages.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function pretend($value = true)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        $instance->pretend($value);
        }
                    /**
         * Set the global from address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function alwaysFrom($address, $name = null)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        $instance->alwaysFrom($address, $name);
        }
                    /**
         * Set the global reply-to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function alwaysReplyTo($address, $name = null)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        $instance->alwaysReplyTo($address, $name);
        }
                    /**
         * Set the global to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function alwaysTo($address, $name = null)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        $instance->alwaysTo($address, $name);
        }
                    /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
        public static function to($users)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->to($users);
        }
                    /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
        public static function bcc($users)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->bcc($users);
        }
                    /**
         * Send a new message when only a plain part.
         *
         * @param string $view
         * @param array $data
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function plain($view, $data, $callback)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        $instance->plain($view, $data, $callback);
        }
                    /**
         * Render the given message as a view.
         *
         * @param string|array $view
         * @param array $data
         * @return string 
         * @static 
         */ 
        public static function render($view, $data = [])
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->render($view, $data);
        }
                    /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @return mixed 
         * @static 
         */ 
        public static function onQueue($queue, $view)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->onQueue($queue, $view);
        }
                    /**
         * Get the view factory instance.
         *
         * @return \Illuminate\Contracts\View\Factory 
         * @static 
         */ 
        public static function getViewFactory()
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->getViewFactory();
        }
                    /**
         * Get the Swift Mailer instance.
         *
         * @return \Swift_Mailer 
         * @static 
         */ 
        public static function getSwiftMailer()
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->getSwiftMailer();
        }
                    /**
         * Get the array of failed recipients.
         *
         * @return array 
         * @static 
         */ 
        public static function failures()
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->failures();
        }
                    /**
         * Set the Swift Mailer instance.
         *
         * @param \Swift_Mailer $swift
         * @return void 
         * @static 
         */ 
        public static function setSwiftMailer($swift)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        $instance->setSwiftMailer($swift);
        }
                    /**
         * Set the queue manager instance.
         *
         * @param \Illuminate\Contracts\Queue\Factory $queue
         * @return \October\Rain\Mail\Mailer 
         * @static 
         */ 
        public static function setQueue($queue)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->setQueue($queue);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        \October\Rain\Mail\Mailer::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        \October\Rain\Mail\Mailer::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Mail\Mailer         
                        return \October\Rain\Mail\Mailer::hasMacro($name);
        }
                    /**
         * Create a new event binding.
         *
         * @return self 
         * @static 
         */ 
        public static function bindEvent($event, $callback, $priority = 0)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->bindEvent($event, $callback, $priority);
        }
                    /**
         * Create a new event binding that fires once only
         *
         * @return self 
         * @static 
         */ 
        public static function bindEventOnce($event, $callback)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->bindEventOnce($event, $callback);
        }
                    /**
         * Destroys an event binding.
         *
         * @param string $event Event to destroy
         * @return self 
         * @static 
         */ 
        public static function unbindEvent($event = null)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->unbindEvent($event);
        }
                    /**
         * Fire an event and call the listeners.
         *
         * @param string $event Event name
         * @param array $params Event parameters
         * @param boolean $halt Halt after first non-null result
         * @return array Collection of event results / Or single result (if halted)
         * @static 
         */ 
        public static function fireEvent($event, $params = [], $halt = false)
        {
                        /** @var \October\Rain\Mail\Mailer $instance */
                        return $instance->fireEvent($event, $params, $halt);
        }
                    /**
         * Assert if a mailable was sent based on a truth-test callback.
         *
         * @param string $mailable
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertSent($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        $instance->assertSent($mailable, $callback);
        }
                    /**
         * Determine if a mailable was not sent based on a truth-test callback.
         *
         * @param string $mailable
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotSent($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        $instance->assertNotSent($mailable, $callback);
        }
                    /**
         * Assert that no mailables were sent.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingSent()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        $instance->assertNothingSent();
        }
                    /**
         * Assert if a mailable was queued based on a truth-test callback.
         *
         * @param string $mailable
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertQueued($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        $instance->assertQueued($mailable, $callback);
        }
                    /**
         * Determine if a mailable was not queued based on a truth-test callback.
         *
         * @param string $mailable
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotQueued($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        $instance->assertNotQueued($mailable, $callback);
        }
                    /**
         * Assert that no mailables were queued.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingQueued()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        $instance->assertNothingQueued();
        }
                    /**
         * Get all of the mailables matching a truth-test callback.
         *
         * @param string $mailable
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function sent($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->sent($mailable, $callback);
        }
                    /**
         * Determine if the given mailable has been sent.
         *
         * @param string $mailable
         * @return bool 
         * @static 
         */ 
        public static function hasSent($mailable)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->hasSent($mailable);
        }
                    /**
         * Get all of the queued mailables matching a truth-test callback.
         *
         * @param string $mailable
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function queued($mailable, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->queued($mailable, $callback);
        }
                    /**
         * Determine if the given mailable has been queued.
         *
         * @param string $mailable
         * @return bool 
         * @static 
         */ 
        public static function hasQueued($mailable)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
                        return $instance->hasQueued($mailable);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Queue\QueueManager
     * @see \Illuminate\Queue\Queue
     */ 
        class Queue {
                    /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        $instance->before($callback);
        }
                    /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        $instance->after($callback);
        }
                    /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function exceptionOccurred($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        $instance->exceptionOccurred($callback);
        }
                    /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function looping($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        $instance->looping($callback);
        }
                    /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function failing($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        $instance->failing($callback);
        }
                    /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function stopping($callback)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        $instance->stopping($callback);
        }
                    /**
         * Determine if the driver is connected.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function connected($name = null)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->connected($name);
        }
                    /**
         * Resolve a queue connection instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Queue\Queue 
         * @static 
         */ 
        public static function connection($name = null)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->connection($name);
        }
                    /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($driver, $resolver)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        $instance->extend($driver, $resolver);
        }
                    /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function addConnector($driver, $resolver)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        $instance->addConnector($driver, $resolver);
        }
                    /**
         * Get the name of the default queue connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        $instance->setDefaultDriver($name);
        }
                    /**
         * Get the full name for the given connection.
         *
         * @param string $connection
         * @return string 
         * @static 
         */ 
        public static function getName($connection = null)
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->getName($connection);
        }
                    /**
         * Determine if the application is in maintenance mode.
         *
         * @return bool 
         * @static 
         */ 
        public static function isDownForMaintenance()
        {
                        /** @var \Illuminate\Queue\QueueManager $instance */
                        return $instance->isDownForMaintenance();
        }
                    /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string $job
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertPushed($job, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        $instance->assertPushed($job, $callback);
        }
                    /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string $queue
         * @param string $job
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertPushedOn($queue, $job, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        $instance->assertPushedOn($queue, $job, $callback);
        }
                    /**
         * Determine if a job was pushed based on a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotPushed($job, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        $instance->assertNotPushed($job, $callback);
        }
                    /**
         * Assert that no jobs were pushed.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingPushed()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        $instance->assertNothingPushed();
        }
                    /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function pushed($job, $callback = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->pushed($job, $callback);
        }
                    /**
         * Determine if there are any stored jobs for a given class.
         *
         * @param string $job
         * @return bool 
         * @static 
         */ 
        public static function hasPushed($job)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->hasPushed($job);
        }
                    /**
         * Get the size of the queue.
         *
         * @param string $queue
         * @return int 
         * @static 
         */ 
        public static function size($queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->size($queue);
        }
                    /**
         * Push a new job onto the queue.
         *
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function push($job, $data = '', $queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->push($job, $data, $queue);
        }
                    /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string $queue
         * @param array $options
         * @return mixed 
         * @static 
         */ 
        public static function pushRaw($payload, $queue = null, $options = [])
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->pushRaw($payload, $queue, $options);
        }
                    /**
         * Push a new job onto the queue after a delay.
         *
         * @param \DateTime|int $delay
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function later($delay, $job, $data = '', $queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->later($delay, $job, $data, $queue);
        }
                    /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function pushOn($queue, $job, $data = '')
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->pushOn($queue, $job, $data);
        }
                    /**
         * Push a new job onto the queue after a delay.
         *
         * @param string $queue
         * @param \DateTime|int $delay
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function laterOn($queue, $delay, $job, $data = '')
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->laterOn($queue, $delay, $job, $data);
        }
                    /**
         * Pop the next job off of the queue.
         *
         * @param string $queue
         * @return \Illuminate\Contracts\Queue\Job|null 
         * @static 
         */ 
        public static function pop($queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->pop($queue);
        }
                    /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function bulk($jobs, $data = '', $queue = null)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->bulk($jobs, $data, $queue);
        }
                    /**
         * Get the connection name for the queue.
         *
         * @return string 
         * @static 
         */ 
        public static function getConnectionName()
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->getConnectionName();
        }
                    /**
         * Set the connection name for the queue.
         *
         * @param string $name
         * @return \Illuminate\Support\Testing\Fakes\QueueFake 
         * @static 
         */ 
        public static function setConnectionName($name)
        {
                        /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
                        return $instance->setConnectionName($name);
        }
                    /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed 
         * @static 
         */ 
        public static function getJobExpiration($job)
        {            //Method inherited from \Illuminate\Queue\Queue         
                        /** @var \Illuminate\Queue\SyncQueue $instance */
                        return $instance->getJobExpiration($job);
        }
                    /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Queue\Queue         
                        /** @var \Illuminate\Queue\SyncQueue $instance */
                        $instance->setContainer($container);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Routing\Redirector
     */ 
        class Redirect {
                    /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function guest($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->guest($path, $status, $headers, $secure);
        }
                    /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function intended($default = '/', $status = 302, $headers = [], $secure = null)
        {
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->intended($default, $status, $headers, $secure);
        }
                    /**
         * Create a new redirect response to the "home" route.
         *
         * @param int $status
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function home($status = 302)
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->home($status);
        }
                    /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @param mixed $fallback
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function back($status = 302, $headers = [], $fallback = false)
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->back($status, $headers, $fallback);
        }
                    /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function refresh($status = 302, $headers = [])
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->refresh($status, $headers);
        }
                    /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function to($path, $status = 302, $headers = [], $secure = null)
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->to($path, $status, $headers, $secure);
        }
                    /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function away($path, $status = 302, $headers = [])
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->away($path, $status, $headers);
        }
                    /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function secure($path, $status = 302, $headers = [])
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->secure($path, $status, $headers);
        }
                    /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function route($route, $parameters = [], $status = 302, $headers = [])
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->route($route, $parameters, $status, $headers);
        }
                    /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function action($action, $parameters = [], $status = 302, $headers = [])
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->action($action, $parameters, $status, $headers);
        }
                    /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function getUrlGenerator()
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        return $instance->getUrlGenerator();
        }
                    /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         * @return void 
         * @static 
         */ 
        public static function setSession($session)
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        /** @var \RainLab\User\Classes\UserRedirector $instance */
                        $instance->setSession($session);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        \RainLab\User\Classes\UserRedirector::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        \RainLab\User\Classes\UserRedirector::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Routing\Redirector         
                        return \RainLab\User\Classes\UserRedirector::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Redis\RedisManager
     * @see \Illuminate\Contracts\Redis\Factory
     */ 
        class Redis {
                    /**
         * Get a Redis connection by name.
         *
         * @param string|null $name
         * @return \Illuminate\Redis\Connections\Connection 
         * @static 
         */ 
        public static function connection($name = null)
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        return $instance->connection($name);
        }
                    /**
         * Resolve the given connection by name.
         *
         * @param string|null $name
         * @return \Illuminate\Redis\Connections\Connection 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function resolve($name = null)
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        return $instance->resolve($name);
        }
                    /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */ 
        public static function connections()
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        return $instance->connections();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Http\Request
     */ 
        class Request {
                    /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */ 
        public static function capture()
        {
                        return \Illuminate\Http\Request::capture();
        }
                    /**
         * Return the Request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function instance()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->instance();
        }
                    /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */ 
        public static function method()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->method();
        }
                    /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */ 
        public static function root()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->root();
        }
                    /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function url()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->url();
        }
                    /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function fullUrl()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrl();
        }
                    /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string 
         * @static 
         */ 
        public static function fullUrlWithQuery($query)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlWithQuery($query);
        }
                    /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function path()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->path();
        }
                    /**
         * Get the current decoded path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function decodedPath()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->decodedPath();
        }
                    /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */ 
        public static function segment($index, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->segment($index, $default);
        }
                    /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */ 
        public static function segments()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->segments();
        }
                    /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->is(...$patterns);
        }
                    /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function routeIs(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->routeIs(...$patterns);
        }
                    /**
         * Determine if the current request URL and query string matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function fullUrlIs(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlIs(...$patterns);
        }
                    /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function ajax()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ajax();
        }
                    /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function pjax()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->pjax();
        }
                    /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */ 
        public static function secure()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->secure();
        }
                    /**
         * Get the client IP address.
         *
         * @return string 
         * @static 
         */ 
        public static function ip()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ip();
        }
                    /**
         * Get the client IP addresses.
         *
         * @return array 
         * @static 
         */ 
        public static function ips()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ips();
        }
                    /**
         * Get the client user agent.
         *
         * @return string 
         * @static 
         */ 
        public static function userAgent()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->userAgent();
        }
                    /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function merge($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->merge($input);
        }
                    /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function replace($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->replace($input);
        }
                    /**
         * Get the JSON payload for the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\ParameterBag|mixed 
         * @static 
         */ 
        public static function json($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->json($key, $default);
        }
                    /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function createFromBase($request)
        {
                        return \Illuminate\Http\Request::createFromBase($request);
        }
                    /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return static 
         * @static 
         */ 
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
                    /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function session()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->session();
        }
                    /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void 
         * @static 
         */ 
        public static function setLaravelSession($session)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->setLaravelSession($session);
        }
                    /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed 
         * @static 
         */ 
        public static function user($guard = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->user($guard);
        }
                    /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */ 
        public static function route($param = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->route($param);
        }
                    /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function fingerprint()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fingerprint();
        }
                    /**
         * Set the JSON payload for the request.
         *
         * @param \Symfony\Component\HttpFoundation\ParameterBag $json
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setJson($json)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setJson($json);
        }
                    /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getUserResolver()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUserResolver();
        }
                    /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setUserResolver($callback)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setUserResolver($callback);
        }
                    /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getRouteResolver()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRouteResolver();
        }
                    /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setRouteResolver($callback)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setRouteResolver($callback);
        }
                    /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */ 
        public static function toArray()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->toArray();
        }
                    /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetExists($offset);
        }
                    /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetGet($offset);
        }
                    /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($offset, $value)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->offsetSet($offset, $value);
        }
                    /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->offsetUnset($offset);
        }
                    /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource|null $content The raw body data
         * @static 
         */ 
        public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
                    /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return static 
         * @static 
         */ 
        public static function createFromGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::createFromGlobals();
        }
                    /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string|resource|null $content The raw body data
         * @return static 
         * @static 
         */ 
        public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
                    /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
         * @static 
         */ 
        public static function setFactory($callable)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setFactory($callable);
        }
                    /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */ 
        public static function overrideGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->overrideGlobals();
        }
                    /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @throws \InvalidArgumentException When $trustedHeaderSet is invalid
         * @static 
         */ 
        public static function setTrustedProxies($proxies)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
                    /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies
         * @static 
         */ 
        public static function getTrustedProxies()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedProxies();
        }
                    /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static 
         */ 
        public static function getTrustedHeaderSet()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
                    /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */ 
        public static function setTrustedHosts($hostPatterns)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
                    /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns
         * @static 
         */ 
        public static function getTrustedHosts()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHosts();
        }
                    /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         *  * Request::HEADER_FORWARDED:    defaults to Forwarded         (see RFC 7239)
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the $trustedHeaderSet argument of the Request::setTrustedProxies() method instead.
         * @static 
         */ 
        public static function setTrustedHeaderName($key, $value)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
                    /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
         * @return string The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the Request::getTrustedHeaderSet() method instead.
         * @static 
         */ 
        public static function getTrustedHeaderName($key)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
                    /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
         * @return string A normalized query string for the Request
         * @static 
         */ 
        public static function normalizeQueryString($qs)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
                    /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */ 
        public static function enableHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
                    /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static 
         */ 
        public static function getHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
                    /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key The key
         * @param mixed $default The default value if the parameter key does not exist
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
         * @static 
         */ 
        public static function getSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getSession();
        }
                    /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasPreviousSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasPreviousSession();
        }
                    /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static 
         */ 
        public static function hasSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasSession();
        }
                    /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
         * @static 
         */ 
        public static function setSession($session)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setSession($session);
        }
                    /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */ 
        public static function getClientIps()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getClientIps();
        }
                    /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return string|null The client IP address
         * @see getClientIps()
         * @see https://wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */ 
        public static function getClientIp()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getClientIp();
        }
                    /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */ 
        public static function getScriptName()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getScriptName();
        }
                    /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getPathInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPathInfo();
        }
                    /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBasePath()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getBasePath();
        }
                    /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBaseUrl()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getBaseUrl();
        }
                    /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */ 
        public static function getScheme()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getScheme();
        }
                    /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return int|string can be a string if fetched from the server bag
         * @static 
         */ 
        public static function getPort()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPort();
        }
                    /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getUser()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUser();
        }
                    /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getPassword()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPassword();
        }
                    /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */ 
        public static function getUserInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUserInfo();
        }
                    /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */ 
        public static function getHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getHttpHost();
        }
                    /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */ 
        public static function getRequestUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRequestUri();
        }
                    /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static 
         */ 
        public static function getSchemeAndHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getSchemeAndHttpHost();
        }
                    /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static 
         */ 
        public static function getUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUri();
        }
                    /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static 
         */ 
        public static function getUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUriForPath($path);
        }
                    /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
         * @return string The relative target path
         * @static 
         */ 
        public static function getRelativeUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRelativeUriForPath($path);
        }
                    /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static 
         */ 
        public static function getQueryString()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getQueryString();
        }
                    /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return bool 
         * @static 
         */ 
        public static function isSecure()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isSecure();
        }
                    /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return string 
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static 
         */ 
        public static function getHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getHost();
        }
                    /**
         * Sets the request method.
         *
         * @param string $method
         * @static 
         */ 
        public static function setMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setMethod($method);
        }
                    /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */ 
        public static function getMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getMethod();
        }
                    /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static 
         */ 
        public static function getRealMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRealMethod();
        }
                    /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
         * @return string|null The associated mime type (null if not found)
         * @static 
         */ 
        public static function getMimeType($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getMimeType($format);
        }
                    /**
         * Gets the mime types associated with the format.
         *
         * @param string $format The format
         * @return array The associated mime types
         * @static 
         */ 
        public static function getMimeTypes($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getMimeTypes($format);
        }
                    /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
         * @return string|null The format (null if not found)
         * @static 
         */ 
        public static function getFormat($mimeType)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getFormat($mimeType);
        }
                    /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */ 
        public static function setFormat($format, $mimeTypes)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setFormat($format, $mimeTypes);
        }
                    /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @param string|null $default The default format
         * @return string|null The request format
         * @static 
         */ 
        public static function getRequestFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRequestFormat($default);
        }
                    /**
         * Sets the request format.
         *
         * @param string $format The request format
         * @static 
         */ 
        public static function setRequestFormat($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setRequestFormat($format);
        }
                    /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static 
         */ 
        public static function getContentType()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getContentType();
        }
                    /**
         * Sets the default locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setDefaultLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setDefaultLocale($locale);
        }
                    /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getDefaultLocale();
        }
                    /**
         * Sets the locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setLocale($locale);
        }
                    /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getLocale();
        }
                    /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @return bool 
         * @static 
         */ 
        public static function isMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethod($method);
        }
                    /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @param bool $andCacheable Adds the additional condition that the method should be cacheable. True by default.
         * @return bool 
         * @static 
         */ 
        public static function isMethodSafe()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodSafe();
        }
                    /**
         * Checks whether or not the method is idempotent.
         *
         * @return bool 
         * @static 
         */ 
        public static function isMethodIdempotent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodIdempotent();
        }
                    /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @return bool True for GET and HEAD, false otherwise
         * @static 
         */ 
        public static function isMethodCacheable()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodCacheable();
        }
                    /**
         * Returns the protocol version.
         * 
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @return string 
         * @static 
         */ 
        public static function getProtocolVersion()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getProtocolVersion();
        }
                    /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream
         * @throws \LogicException
         * @static 
         */ 
        public static function getContent($asResource = false)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getContent($asResource);
        }
                    /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static 
         */ 
        public static function getETags()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getETags();
        }
                    /**
         * 
         *
         * @return bool 
         * @static 
         */ 
        public static function isNoCache()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isNoCache();
        }
                    /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static 
         */ 
        public static function getPreferredLanguage($locales = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPreferredLanguage($locales);
        }
                    /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static 
         */ 
        public static function getLanguages()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getLanguages();
        }
                    /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static 
         */ 
        public static function getCharsets()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getCharsets();
        }
                    /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static 
         */ 
        public static function getEncodings()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getEncodings();
        }
                    /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static 
         */ 
        public static function getAcceptableContentTypes()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getAcceptableContentTypes();
        }
                    /**
         * Returns true if the request is a XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */ 
        public static function isXmlHttpRequest()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isXmlHttpRequest();
        }
                    /**
         * Indicates whether this request originated from a trusted proxy.
         * 
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @return bool true if the request came from a trusted proxy, false otherwise
         * @static 
         */ 
        public static function isFromTrustedProxy()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isFromTrustedProxy();
        }
                    /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */ 
        public static function matchesType($actual, $type)
        {
                        return \Illuminate\Http\Request::matchesType($actual, $type);
        }
                    /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function isJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isJson();
        }
                    /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool 
         * @static 
         */ 
        public static function expectsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->expectsJson();
        }
                    /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */ 
        public static function wantsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->wantsJson();
        }
                    /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */ 
        public static function accepts($contentTypes)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->accepts($contentTypes);
        }
                    /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */ 
        public static function prefers($contentTypes)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->prefers($contentTypes);
        }
                    /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsJson();
        }
                    /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsHtml()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsHtml();
        }
                    /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function format($default = 'html')
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->format($default);
        }
                    /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function old($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->old($key, $default);
        }
                    /**
         * Flash the input for the current request to the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flash()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flash();
        }
                    /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashOnly($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flashOnly($keys);
        }
                    /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashExcept($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flashExcept($keys);
        }
                    /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flush();
        }
                    /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function server($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->server($key, $default);
        }
                    /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasHeader($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasHeader($key);
        }
                    /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function header($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->header($key, $default);
        }
                    /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */ 
        public static function bearerToken()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->bearerToken();
        }
                    /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->exists($key);
        }
                    /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->has($key);
        }
                    /**
         * Determine if the request contains any of the given inputs.
         *
         * @param mixed $key
         * @return bool 
         * @static 
         */ 
        public static function hasAny(...$keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasAny(...$keys);
        }
                    /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function filled($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->filled($key);
        }
                    /**
         * Get the keys for all of the input and files.
         *
         * @return array 
         * @static 
         */ 
        public static function keys()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->keys();
        }
                    /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function all($keys = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->all($keys);
        }
                    /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function input($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->input($key, $default);
        }
                    /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function only($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->only($keys);
        }
                    /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function except($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->except($keys);
        }
                    /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function query($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->query($key, $default);
        }
                    /**
         * Retrieve a request payload item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function post($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->post($key, $default);
        }
                    /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasCookie($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasCookie($key);
        }
                    /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function cookie($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->cookie($key, $default);
        }
                    /**
         * Get an array of all of the files on the request.
         *
         * @return array 
         * @static 
         */ 
        public static function allFiles()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->allFiles();
        }
                    /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasFile($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasFile($key);
        }
                    /**
         * Retrieve a file from the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Http\UploadedFile|array|null 
         * @static 
         */ 
        public static function file($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->file($key, $default);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Http\Request::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
                        \Illuminate\Http\Request::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Http\Request::hasMacro($name);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Contracts\Routing\ResponseFactory
     */ 
        class Response {
                    /**
         * Return a new response from the application.
         *
         * @param string $content
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function make($content = '', $status = 200, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->make($content, $status, $headers);
        }
                    /**
         * Return a new view response from the application.
         *
         * @param string $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function view($view, $data = [], $status = 200, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->view($view, $data, $status, $headers);
        }
                    /**
         * Return a new JSON response from the application.
         *
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function json($data = [], $status = 200, $headers = [], $options = 0)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->json($data, $status, $headers, $options);
        }
                    /**
         * Return a new JSONP response from the application.
         *
         * @param string $callback
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function jsonp($callback, $data = [], $status = 200, $headers = [], $options = 0)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->jsonp($callback, $data, $status, $headers, $options);
        }
                    /**
         * Return a new streamed response from the application.
         *
         * @param \Closure $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function stream($callback, $status = 200, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->stream($callback, $status, $headers);
        }
                    /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function download($file, $name = null, $headers = [], $disposition = 'attachment')
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->download($file, $name, $headers, $disposition);
        }
                    /**
         * Return the raw contents of a binary file.
         *
         * @param \SplFileInfo|string $file
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function file($file, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->file($file, $headers);
        }
                    /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectTo($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectTo($path, $status, $headers, $secure);
        }
                    /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToRoute($route, $parameters = [], $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectToRoute($route, $parameters, $status, $headers);
        }
                    /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToAction($action, $parameters = [], $status = 302, $headers = [])
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectToAction($action, $parameters, $status, $headers);
        }
                    /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectGuest($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectGuest($path, $status, $headers, $secure);
        }
                    /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Illuminate\Routing\ResponseFactory $instance */
                        return $instance->redirectToIntended($default, $status, $headers, $secure);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
                        \Illuminate\Routing\ResponseFactory::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @method static \Illuminate\Support\Facades\Route prefix(string  $prefix)
     * @method static \Illuminate\Routing\RouteRegistrar middleware(array|string|null $middleware)
     * @method static \Illuminate\Support\Facades\Route as(string $value)
     * @method static \Illuminate\Support\Facades\Route domain(string $value)
     * @method static \Illuminate\Support\Facades\Route name(string $value)
     * @method static \Illuminate\Support\Facades\Route namespace(string $value)
     * @method static \Illuminate\Support\Facades\Route where(array|string $name, string $expression = null)
     * @see \Illuminate\Routing\Router
     */ 
        class Route {
                    /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function dispatch($request)
        {
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->dispatch($request);
        }
                    /**
         * Register a new "before" filter with the router.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->before($callback);
        }
                    /**
         * Register a new "after" filter with the router.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->after($callback);
        }
                    /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function get($uri, $action = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->get($uri, $action);
        }
                    /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function post($uri, $action = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->post($uri, $action);
        }
                    /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function put($uri, $action = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->put($uri, $action);
        }
                    /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function patch($uri, $action = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->patch($uri, $action);
        }
                    /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function delete($uri, $action = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->delete($uri, $action);
        }
                    /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function options($uri, $action = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->options($uri, $action);
        }
                    /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function any($uri, $action = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->any($uri, $action);
        }
                    /**
         * Register a new Fallback route with the router.
         *
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function fallback($action)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->fallback($action);
        }
                    /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @param int $status
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function redirect($uri, $destination, $status = 301)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->redirect($uri, $destination, $status);
        }
                    /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
         * @param array $data
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function view($uri, $view, $data = [])
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->view($uri, $view, $data);
        }
                    /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function match($methods, $uri, $action = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->match($methods, $uri, $action);
        }
                    /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @return void 
         * @static 
         */ 
        public static function resources($resources)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->resources($resources);
        }
                    /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function resource($name, $controller, $options = [])
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->resource($name, $controller, $options);
        }
                    /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @return void 
         * @static 
         */ 
        public static function apiResources($resources)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->apiResources($resources);
        }
                    /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function apiResource($name, $controller, $options = [])
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->apiResource($name, $controller, $options);
        }
                    /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure|string $routes
         * @return void 
         * @static 
         */ 
        public static function group($attributes, $routes)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->group($attributes, $routes);
        }
                    /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @return array 
         * @static 
         */ 
        public static function mergeWithLastGroup($new)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->mergeWithLastGroup($new);
        }
                    /**
         * Get the prefix from the last group on the stack.
         *
         * @return string 
         * @static 
         */ 
        public static function getLastGroupPrefix()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->getLastGroupPrefix();
        }
                    /**
         * Return the response returned by the given route.
         *
         * @param string $name
         * @return mixed 
         * @static 
         */ 
        public static function respondWithRoute($name)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->respondWithRoute($name);
        }
                    /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return mixed 
         * @static 
         */ 
        public static function dispatchToRoute($request)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->dispatchToRoute($request);
        }
                    /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array 
         * @static 
         */ 
        public static function gatherRouteMiddleware($route)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->gatherRouteMiddleware($route);
        }
                    /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function prepareResponse($request, $response)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->prepareResponse($request, $response);
        }
                    /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function toResponse($request, $response)
        {            //Method inherited from \Illuminate\Routing\Router         
                        return \October\Rain\Router\CoreRouter::toResponse($request, $response);
        }
                    /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function substituteBindings($route)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->substituteBindings($route);
        }
                    /**
         * Substitute the implicit Eloquent model bindings for the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return void 
         * @static 
         */ 
        public static function substituteImplicitBindings($route)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->substituteImplicitBindings($route);
        }
                    /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */ 
        public static function matched($callback)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->matched($callback);
        }
                    /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array 
         * @static 
         */ 
        public static function getMiddleware()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->getMiddleware();
        }
                    /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return \October\Rain\Router\CoreRouter 
         * @static 
         */ 
        public static function aliasMiddleware($name, $class)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->aliasMiddleware($name, $class);
        }
                    /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMiddlewareGroup($name)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->hasMiddlewareGroup($name);
        }
                    /**
         * Get all of the defined middleware groups.
         *
         * @return array 
         * @static 
         */ 
        public static function getMiddlewareGroups()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->getMiddlewareGroups();
        }
                    /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return \October\Rain\Router\CoreRouter 
         * @static 
         */ 
        public static function middlewareGroup($name, $middleware)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->middlewareGroup($name, $middleware);
        }
                    /**
         * Add a middleware to the beginning of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \October\Rain\Router\CoreRouter 
         * @static 
         */ 
        public static function prependMiddlewareToGroup($group, $middleware)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->prependMiddlewareToGroup($group, $middleware);
        }
                    /**
         * Add a middleware to the end of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \October\Rain\Router\CoreRouter 
         * @static 
         */ 
        public static function pushMiddlewareToGroup($group, $middleware)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->pushMiddlewareToGroup($group, $middleware);
        }
                    /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void 
         * @static 
         */ 
        public static function bind($key, $binder)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->bind($key, $binder);
        }
                    /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static 
         */ 
        public static function model($key, $class, $callback = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->model($key, $class, $callback);
        }
                    /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
         * @return \Closure|null 
         * @static 
         */ 
        public static function getBindingCallback($key)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->getBindingCallback($key);
        }
                    /**
         * Get the global "where" patterns.
         *
         * @return array 
         * @static 
         */ 
        public static function getPatterns()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->getPatterns();
        }
                    /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void 
         * @static 
         */ 
        public static function pattern($key, $pattern)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->pattern($key, $pattern);
        }
                    /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void 
         * @static 
         */ 
        public static function patterns($patterns)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->patterns($patterns);
        }
                    /**
         * Determine if the router currently has a group stack.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasGroupStack()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->hasGroupStack();
        }
                    /**
         * Get the current group stack for the router.
         *
         * @return array 
         * @static 
         */ 
        public static function getGroupStack()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->getGroupStack();
        }
                    /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */ 
        public static function input($key, $default = null)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->input($key, $default);
        }
                    /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getCurrentRequest()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->getCurrentRequest();
        }
                    /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function getCurrentRoute()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->getCurrentRoute();
        }
                    /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function current()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->current();
        }
                    /**
         * Check if a route with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function has($name)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->has($name);
        }
                    /**
         * Get the current route name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function currentRouteName()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->currentRouteName();
        }
                    /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is(...$patterns)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->is(...$patterns);
        }
                    /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function currentRouteNamed(...$patterns)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->currentRouteNamed(...$patterns);
        }
                    /**
         * Get the current route action.
         *
         * @return string|null 
         * @static 
         */ 
        public static function currentRouteAction()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->currentRouteAction();
        }
                    /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array $patterns
         * @return bool 
         * @static 
         */ 
        public static function uses(...$patterns)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->uses(...$patterns);
        }
                    /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool 
         * @static 
         */ 
        public static function currentRouteUses($action)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->currentRouteUses($action);
        }
                    /**
         * Register the typical authentication routes for an application.
         *
         * @return void 
         * @static 
         */ 
        public static function auth()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->auth();
        }
                    /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         * @return void 
         * @static 
         */ 
        public static function singularResourceParameters($singular = true)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->singularResourceParameters($singular);
        }
                    /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */ 
        public static function resourceParameters($parameters = [])
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->resourceParameters($parameters);
        }
                    /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
         * @return array|null 
         * @static 
         */ 
        public static function resourceVerbs($verbs = [])
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->resourceVerbs($verbs);
        }
                    /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollection 
         * @static 
         */ 
        public static function getRoutes()
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->getRoutes();
        }
                    /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return void 
         * @static 
         */ 
        public static function setRoutes($routes)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        $instance->setRoutes($routes);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {            //Method inherited from \Illuminate\Routing\Router         
                        \October\Rain\Router\CoreRouter::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {            //Method inherited from \Illuminate\Routing\Router         
                        \October\Rain\Router\CoreRouter::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Routing\Router         
                        return \October\Rain\Router\CoreRouter::hasMacro($name);
        }
                    /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {            //Method inherited from \Illuminate\Routing\Router         
                        /** @var \October\Rain\Router\CoreRouter $instance */
                        return $instance->macroCall($method, $parameters);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Session\SessionManager
     * @see \Illuminate\Session\Store
     */ 
        class Session {
                    /**
         * Get the session configuration.
         *
         * @return array 
         * @static 
         */ 
        public static function getSessionConfig()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getSessionConfig();
        }
                    /**
         * Get the default session driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        $instance->setDefaultDriver($name);
        }
                    /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Session\SessionManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getDrivers();
        }
                    /**
         * Start the session, reading the data from a handler.
         *
         * @return bool 
         * @static 
         */ 
        public static function start()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->start();
        }
                    /**
         * Save the session data to storage.
         *
         * @return bool 
         * @static 
         */ 
        public static function save()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->save();
        }
                    /**
         * Age the flash data for the session.
         *
         * @return void 
         * @static 
         */ 
        public static function ageFlashData()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->ageFlashData();
        }
                    /**
         * Get all of the session data.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->all();
        }
                    /**
         * Checks if a key exists.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->exists($key);
        }
                    /**
         * Checks if a key is present and not null.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->has($key);
        }
                    /**
         * Get an item from the session.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->pull($key, $default);
        }
                    /**
         * Determine if the session contains old input.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasOldInput($key = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->hasOldInput($key);
        }
                    /**
         * Get the requested item from the flashed input array.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function getOldInput($key = null, $default = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getOldInput($key, $default);
        }
                    /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         * @return void 
         * @static 
         */ 
        public static function replace($attributes)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->replace($attributes);
        }
                    /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function put($key, $value = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->put($key, $value);
        }
                    /**
         * Get an item from the session, or store the default value.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $callback)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->remember($key, $callback);
        }
                    /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->push($key, $value);
        }
                    /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return mixed 
         * @static 
         */ 
        public static function increment($key, $amount = 1)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->increment($key, $amount);
        }
                    /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return int 
         * @static 
         */ 
        public static function decrement($key, $amount = 1)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->decrement($key, $amount);
        }
                    /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function flash($key, $value = true)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->flash($key, $value);
        }
                    /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function now($key, $value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->now($key, $value);
        }
                    /**
         * Reflash all of the session flash data.
         *
         * @return void 
         * @static 
         */ 
        public static function reflash()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->reflash();
        }
                    /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function keep($keys = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->keep($keys);
        }
                    /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void 
         * @static 
         */ 
        public static function flashInput($value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->flashInput($value);
        }
                    /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function remove($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->remove($key);
        }
                    /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void 
         * @static 
         */ 
        public static function forget($keys)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->forget($keys);
        }
                    /**
         * Remove all of the items from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->flush();
        }
                    /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool 
         * @static 
         */ 
        public static function invalidate()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->invalidate();
        }
                    /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function regenerate($destroy = false)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->regenerate($destroy);
        }
                    /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function migrate($destroy = false)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->migrate($destroy);
        }
                    /**
         * Determine if the session has been started.
         *
         * @return bool 
         * @static 
         */ 
        public static function isStarted()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->isStarted();
        }
                    /**
         * Get the name of the session.
         *
         * @return string 
         * @static 
         */ 
        public static function getName()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getName();
        }
                    /**
         * Set the name of the session.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setName($name)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setName($name);
        }
                    /**
         * Get the current session ID.
         *
         * @return string 
         * @static 
         */ 
        public static function getId()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getId();
        }
                    /**
         * Set the session ID.
         *
         * @param string $id
         * @return void 
         * @static 
         */ 
        public static function setId($id)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setId($id);
        }
                    /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
         * @return bool 
         * @static 
         */ 
        public static function isValidId($id)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->isValidId($id);
        }
                    /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function setExists($value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setExists($value);
        }
                    /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */ 
        public static function token()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->token();
        }
                    /**
         * Regenerate the CSRF token value.
         *
         * @return void 
         * @static 
         */ 
        public static function regenerateToken()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->regenerateToken();
        }
                    /**
         * Get the previous URL from the session.
         *
         * @return string|null 
         * @static 
         */ 
        public static function previousUrl()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->previousUrl();
        }
                    /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void 
         * @static 
         */ 
        public static function setPreviousUrl($url)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setPreviousUrl($url);
        }
                    /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface 
         * @static 
         */ 
        public static function getHandler()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getHandler();
        }
                    /**
         * Determine if the session handler needs a request.
         *
         * @return bool 
         * @static 
         */ 
        public static function handlerNeedsRequest()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->handlerNeedsRequest();
        }
                    /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequestOnHandler($request)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setRequestOnHandler($request);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Filesystem\FilesystemManager
     */ 
        class Storage {
                    /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function drive($name = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->drive($name);
        }
                    /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function disk($name = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->disk($name);
        }
                    /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function cloud()
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->cloud();
        }
                    /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createLocalDriver($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->createLocalDriver($config);
        }
                    /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createFtpDriver($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->createFtpDriver($config);
        }
                    /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function createS3Driver($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->createS3Driver($config);
        }
                    /**
         * Create an instance of the Rackspace driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function createRackspaceDriver($config)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->createRackspaceDriver($config);
        }
                    /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return void 
         * @static 
         */ 
        public static function set($name, $disk)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        $instance->set($name, $disk);
        }
                    /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Get the default cloud driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultCloudDriver()
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->getDefaultCloudDriver();
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Filesystem\FilesystemManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Filesystem\FilesystemManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * Assert that the given file exists.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function assertExists($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        $instance->assertExists($path);
        }
                    /**
         * Assert that the given file does not exist.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function assertMissing($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        $instance->assertMissing($path);
        }
                    /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->exists($path);
        }
                    /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function path($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->path($path);
        }
                    /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function get($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->get($path);
        }
                    /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->response($path, $name, $headers, $disposition);
        }
                    /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function download($path, $name = null, $headers = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->download($path, $name, $headers);
        }
                    /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string|resource $contents
         * @param mixed $options
         * @return bool 
         * @static 
         */ 
        public static function put($path, $contents, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->put($path, $contents, $options);
        }
                    /**
         * Store the uploaded file on the disk.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFile($path, $file, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->putFile($path, $file, $options);
        }
                    /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param string $name
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFileAs($path, $file, $name, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->putFileAs($path, $file, $name, $options);
        }
                    /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function getVisibility($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->getVisibility($path);
        }
                    /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return void 
         * @static 
         */ 
        public static function setVisibility($path, $visibility)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        $instance->setVisibility($path, $visibility);
        }
                    /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return int 
         * @static 
         */ 
        public static function prepend($path, $data, $separator = '
')
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->prepend($path, $data, $separator);
        }
                    /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return int 
         * @static 
         */ 
        public static function append($path, $data, $separator = '
')
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->append($path, $data, $separator);
        }
                    /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->delete($paths);
        }
                    /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function copy($from, $to)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->copy($from, $to);
        }
                    /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function move($from, $to)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->move($from, $to);
        }
                    /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->size($path);
        }
                    /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->mimeType($path);
        }
                    /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->lastModified($path);
        }
                    /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function url($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->url($path);
        }
                    /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function temporaryUrl($path, $expiration, $options = [])
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->temporaryUrl($path, $expiration, $options);
        }
                    /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\AwsS3v3\AwsS3Adapter $adapter
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function getAwsTemporaryUrl($adapter, $path, $expiration, $options)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->getAwsTemporaryUrl($adapter, $path, $expiration, $options);
        }
                    /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\Rackspace\RackspaceAdapter $adapter
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function getRackspaceTemporaryUrl($adapter, $path, $expiration, $options)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->getRackspaceTemporaryUrl($adapter, $path, $expiration, $options);
        }
                    /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function files($directory = null, $recursive = false)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->files($directory, $recursive);
        }
                    /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allFiles($directory = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->allFiles($directory);
        }
                    /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function directories($directory = null, $recursive = false)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->directories($directory, $recursive);
        }
                    /**
         * Get all (recursive) of the directories within a given directory.
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allDirectories($directory = null)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->allDirectories($directory);
        }
                    /**
         * Create a directory.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->makeDirectory($path);
        }
                    /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory)
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->deleteDirectory($directory);
        }
                    /**
         * Flush the Flysystem cache.
         *
         * @return void 
         * @static 
         */ 
        public static function flushCache()
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        $instance->flushCache();
        }
                    /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemInterface 
         * @static 
         */ 
        public static function getDriver()
        {
                        /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
                        return $instance->getDriver();
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Routing\UrlGenerator
     */ 
        class URL {
                    /**
         * Build a URL from an array returned from a `parse_url` call.
         * 
         * This function serves as a counterpart to the `parse_url` method available in PHP, and a userland implementation
         * of the `http_build_query` method provided by the PECL HTTP module. This allows a developer to parse a URL to an
         * array and make adjustments to the URL parts before combining them into a valid URL reference string.
         * 
         * Based off of the implentation at https://github.com/jakeasmith/http_build_url/blob/master/src/http_build_url.php.
         *
         * @param array $url The URL parts, as an array. Must match the structure returned from a `parse_url` call.
         * @param array $replace The URL replacement parts. Allows a developer to replace certain sections of the URL with
         *                       a different value.
         * @param mixed $flags A bitmask of binary or'ed HTTP_URL constants. By default, this is set to HTTP_URL_REPLACE.
         * @param array $newUrl If set, this will be filled with the array parts of the composed URL, similar to the return
         *                      value of `parse_url`.
         * @return string The generated URL as a string
         * @static 
         */ 
        public static function buildUrl($url, $replace = [], $flags = 1, $newUrl = [])
        {
                        return \October\Rain\Router\UrlGenerator::buildUrl($url, $replace, $flags, $newUrl);
        }
                    /**
         * Get the full URL for the current request.
         *
         * @return string 
         * @static 
         */ 
        public static function full()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->full();
        }
                    /**
         * Get the current URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function current()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->current();
        }
                    /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string 
         * @static 
         */ 
        public static function previous($fallback = false)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->previous($fallback);
        }
                    /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function to($path, $extra = [], $secure = null)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->to($path, $extra, $secure);
        }
                    /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string 
         * @static 
         */ 
        public static function secure($path, $parameters = [])
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->secure($path, $parameters);
        }
                    /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function asset($path, $secure = null)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->asset($path, $secure);
        }
                    /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function secureAsset($path)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->secureAsset($path);
        }
                    /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function assetFrom($root, $path, $secure = null)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->assetFrom($root, $path, $secure);
        }
                    /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function formatScheme($secure)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatScheme($secure);
        }
                    /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function route($name, $parameters = [], $absolute = true)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->route($name, $parameters, $absolute);
        }
                    /**
         * Get the URL to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function action($action, $parameters = [], $absolute = true)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->action($action, $parameters, $absolute);
        }
                    /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
         * @return array 
         * @static 
         */ 
        public static function formatParameters($parameters)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatParameters($parameters);
        }
                    /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string $root
         * @return string 
         * @static 
         */ 
        public static function formatRoot($scheme, $root = null)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatRoot($scheme, $root);
        }
                    /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function format($root, $path)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->format($root, $path);
        }
                    /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isValidUrl($path)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->isValidUrl($path);
        }
                    /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @return void 
         * @static 
         */ 
        public static function defaults($defaults)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        $instance->defaults($defaults);
        }
                    /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array 
         * @static 
         */ 
        public static function getDefaultParameters()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->getDefaultParameters();
        }
                    /**
         * Force the scheme for URLs.
         *
         * @param string $schema
         * @return void 
         * @static 
         */ 
        public static function forceScheme($schema)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        $instance->forceScheme($schema);
        }
                    /**
         * Set the forced root URL.
         *
         * @param string $root
         * @return void 
         * @static 
         */ 
        public static function forceRootUrl($root)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        $instance->forceRootUrl($root);
        }
                    /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function formatHostUsing($callback)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatHostUsing($callback);
        }
                    /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function formatPathUsing($callback)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatPathUsing($callback);
        }
                    /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function pathFormatter()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->pathFormatter();
        }
                    /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getRequest()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->getRequest();
        }
                    /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequest($request)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        $instance->setRequest($request);
        }
                    /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function setRoutes($routes)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->setRoutes($routes);
        }
                    /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function setSessionResolver($sessionResolver)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->setSessionResolver($sessionResolver);
        }
                    /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function setRootControllerNamespace($rootNamespace)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->setRootControllerNamespace($rootNamespace);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        \October\Rain\Router\UrlGenerator::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        \October\Rain\Router\UrlGenerator::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        return \October\Rain\Router\UrlGenerator::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Routing\UrlGenerator
     */ 
        class URL {
                    /**
         * Build a URL from an array returned from a `parse_url` call.
         * 
         * This function serves as a counterpart to the `parse_url` method available in PHP, and a userland implementation
         * of the `http_build_query` method provided by the PECL HTTP module. This allows a developer to parse a URL to an
         * array and make adjustments to the URL parts before combining them into a valid URL reference string.
         * 
         * Based off of the implentation at https://github.com/jakeasmith/http_build_url/blob/master/src/http_build_url.php.
         *
         * @param array $url The URL parts, as an array. Must match the structure returned from a `parse_url` call.
         * @param array $replace The URL replacement parts. Allows a developer to replace certain sections of the URL with
         *                       a different value.
         * @param mixed $flags A bitmask of binary or'ed HTTP_URL constants. By default, this is set to HTTP_URL_REPLACE.
         * @param array $newUrl If set, this will be filled with the array parts of the composed URL, similar to the return
         *                      value of `parse_url`.
         * @return string The generated URL as a string
         * @static 
         */ 
        public static function buildUrl($url, $replace = [], $flags = 1, $newUrl = [])
        {
                        return \October\Rain\Router\UrlGenerator::buildUrl($url, $replace, $flags, $newUrl);
        }
                    /**
         * Get the full URL for the current request.
         *
         * @return string 
         * @static 
         */ 
        public static function full()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->full();
        }
                    /**
         * Get the current URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function current()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->current();
        }
                    /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string 
         * @static 
         */ 
        public static function previous($fallback = false)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->previous($fallback);
        }
                    /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function to($path, $extra = [], $secure = null)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->to($path, $extra, $secure);
        }
                    /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string 
         * @static 
         */ 
        public static function secure($path, $parameters = [])
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->secure($path, $parameters);
        }
                    /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function asset($path, $secure = null)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->asset($path, $secure);
        }
                    /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function secureAsset($path)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->secureAsset($path);
        }
                    /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function assetFrom($root, $path, $secure = null)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->assetFrom($root, $path, $secure);
        }
                    /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function formatScheme($secure)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatScheme($secure);
        }
                    /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function route($name, $parameters = [], $absolute = true)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->route($name, $parameters, $absolute);
        }
                    /**
         * Get the URL to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function action($action, $parameters = [], $absolute = true)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->action($action, $parameters, $absolute);
        }
                    /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
         * @return array 
         * @static 
         */ 
        public static function formatParameters($parameters)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatParameters($parameters);
        }
                    /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string $root
         * @return string 
         * @static 
         */ 
        public static function formatRoot($scheme, $root = null)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatRoot($scheme, $root);
        }
                    /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function format($root, $path)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->format($root, $path);
        }
                    /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isValidUrl($path)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->isValidUrl($path);
        }
                    /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @return void 
         * @static 
         */ 
        public static function defaults($defaults)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        $instance->defaults($defaults);
        }
                    /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array 
         * @static 
         */ 
        public static function getDefaultParameters()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->getDefaultParameters();
        }
                    /**
         * Force the scheme for URLs.
         *
         * @param string $schema
         * @return void 
         * @static 
         */ 
        public static function forceScheme($schema)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        $instance->forceScheme($schema);
        }
                    /**
         * Set the forced root URL.
         *
         * @param string $root
         * @return void 
         * @static 
         */ 
        public static function forceRootUrl($root)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        $instance->forceRootUrl($root);
        }
                    /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function formatHostUsing($callback)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatHostUsing($callback);
        }
                    /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function formatPathUsing($callback)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->formatPathUsing($callback);
        }
                    /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function pathFormatter()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->pathFormatter();
        }
                    /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getRequest()
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->getRequest();
        }
                    /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequest($request)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        $instance->setRequest($request);
        }
                    /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function setRoutes($routes)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->setRoutes($routes);
        }
                    /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function setSessionResolver($sessionResolver)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->setSessionResolver($sessionResolver);
        }
                    /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return \October\Rain\Router\UrlGenerator 
         * @static 
         */ 
        public static function setRootControllerNamespace($rootNamespace)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        /** @var \October\Rain\Router\UrlGenerator $instance */
                        return $instance->setRootControllerNamespace($rootNamespace);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        \October\Rain\Router\UrlGenerator::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        \October\Rain\Router\UrlGenerator::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Routing\UrlGenerator         
                        return \October\Rain\Router\UrlGenerator::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Validation\Factory
     */ 
        class Validator {
                    /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator 
         * @static 
         */ 
        public static function make($data, $rules, $messages = [], $customAttributes = [])
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->make($data, $rules, $messages, $customAttributes);
        }
                    /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return void 
         * @throws \Illuminate\Validation\ValidationException
         * @static 
         */ 
        public static function validate($data, $rules, $messages = [], $customAttributes = [])
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        $instance->validate($data, $rules, $messages, $customAttributes);
        }
                    /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extend($rule, $extension, $message = null)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        $instance->extend($rule, $extension, $message);
        }
                    /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extendImplicit($rule, $extension, $message = null)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        $instance->extendImplicit($rule, $extension, $message);
        }
                    /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extendDependent($rule, $extension, $message = null)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        $instance->extendDependent($rule, $extension, $message);
        }
                    /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void 
         * @static 
         */ 
        public static function replacer($rule, $replacer)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        $instance->replacer($rule, $replacer);
        }
                    /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function resolver($resolver)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        $instance->resolver($resolver);
        }
                    /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator 
         * @static 
         */ 
        public static function getTranslator()
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->getTranslator();
        }
                    /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface 
         * @static 
         */ 
        public static function getPresenceVerifier()
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        return $instance->getPresenceVerifier();
        }
                    /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void 
         * @static 
         */ 
        public static function setPresenceVerifier($presenceVerifier)
        {
                        /** @var \Illuminate\Validation\Factory $instance */
                        $instance->setPresenceVerifier($presenceVerifier);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\View\Factory
     */ 
        class View {
                    /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function file($path, $data = [], $mergeData = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->file($path, $data, $mergeData);
        }
                    /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function make($view, $data = [], $mergeData = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->make($view, $data, $mergeData);
        }
                    /**
         * Get the first view that actually exists from the given list.
         *
         * @param array $views
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function first($views, $data = [], $mergeData = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->first($views, $data, $mergeData);
        }
                    /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return string 
         * @static 
         */ 
        public static function renderWhen($condition, $view, $data = [], $mergeData = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->renderWhen($condition, $view, $data, $mergeData);
        }
                    /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string 
         * @static 
         */ 
        public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->renderEach($view, $data, $iterator, $empty);
        }
                    /**
         * Determine if a given view exists.
         *
         * @param string $view
         * @return bool 
         * @static 
         */ 
        public static function exists($view)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->exists($view);
        }
                    /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         * @return \Illuminate\Contracts\View\Engine 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function getEngineFromPath($path)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getEngineFromPath($path);
        }
                    /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed $value
         * @return mixed 
         * @static 
         */ 
        public static function share($key, $value = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->share($key, $value);
        }
                    /**
         * Increment the rendering counter.
         *
         * @return void 
         * @static 
         */ 
        public static function incrementRender()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->incrementRender();
        }
                    /**
         * Decrement the rendering counter.
         *
         * @return void 
         * @static 
         */ 
        public static function decrementRender()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->decrementRender();
        }
                    /**
         * Check if there are no active render operations.
         *
         * @return bool 
         * @static 
         */ 
        public static function doneRendering()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->doneRendering();
        }
                    /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @return void 
         * @static 
         */ 
        public static function addLocation($location)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->addLocation($location);
        }
                    /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory 
         * @static 
         */ 
        public static function addNamespace($namespace, $hints)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->addNamespace($namespace, $hints);
        }
                    /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory 
         * @static 
         */ 
        public static function prependNamespace($namespace, $hints)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->prependNamespace($namespace, $hints);
        }
                    /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory 
         * @static 
         */ 
        public static function replaceNamespace($namespace, $hints)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->replaceNamespace($namespace, $hints);
        }
                    /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function addExtension($extension, $engine, $resolver = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->addExtension($extension, $engine, $resolver);
        }
                    /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void 
         * @static 
         */ 
        public static function flushState()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->flushState();
        }
                    /**
         * Flush all of the section contents if done rendering.
         *
         * @return void 
         * @static 
         */ 
        public static function flushStateIfDoneRendering()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->flushStateIfDoneRendering();
        }
                    /**
         * Get the extension to engine bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getExtensions()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getExtensions();
        }
                    /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver 
         * @static 
         */ 
        public static function getEngineResolver()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getEngineResolver();
        }
                    /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface 
         * @static 
         */ 
        public static function getFinder()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getFinder();
        }
                    /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
         * @return void 
         * @static 
         */ 
        public static function setFinder($finder)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->setFinder($finder);
        }
                    /**
         * Flush the cache of views located by the finder.
         *
         * @return void 
         * @static 
         */ 
        public static function flushFinderCache()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->flushFinderCache();
        }
                    /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getDispatcher()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getDispatcher();
        }
                    /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setDispatcher($events)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->setDispatcher($events);
        }
                    /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */ 
        public static function getContainer()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getContainer();
        }
                    /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->setContainer($container);
        }
                    /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function shared($key, $default = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->shared($key, $default);
        }
                    /**
         * Get all of the shared data for the environment.
         *
         * @return array 
         * @static 
         */ 
        public static function getShared()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getShared();
        }
                    /**
         * Start a component rendering process.
         *
         * @param string $name
         * @param array $data
         * @return void 
         * @static 
         */ 
        public static function startComponent($name, $data = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->startComponent($name, $data);
        }
                    /**
         * Render the current component.
         *
         * @return string 
         * @static 
         */ 
        public static function renderComponent()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->renderComponent();
        }
                    /**
         * Start the slot rendering process.
         *
         * @param string $name
         * @param string|null $content
         * @return void 
         * @static 
         */ 
        public static function slot($name, $content = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->slot($name, $content);
        }
                    /**
         * Save the slot content for rendering.
         *
         * @return void 
         * @static 
         */ 
        public static function endSlot()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->endSlot();
        }
                    /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
        public static function creator($views, $callback)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->creator($views, $callback);
        }
                    /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         * @return array 
         * @static 
         */ 
        public static function composers($composers)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->composers($composers);
        }
                    /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
        public static function composer($views, $callback)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->composer($views, $callback);
        }
                    /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */ 
        public static function callComposer($view)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->callComposer($view);
        }
                    /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */ 
        public static function callCreator($view)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->callCreator($view);
        }
                    /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string|null $content
         * @return void 
         * @static 
         */ 
        public static function startSection($section, $content = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->startSection($section, $content);
        }
                    /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function inject($section, $content)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->inject($section, $content);
        }
                    /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string 
         * @static 
         */ 
        public static function yieldSection()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->yieldSection();
        }
                    /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopSection($overwrite = false)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->stopSection($overwrite);
        }
                    /**
         * Stop injecting content into a section and append it.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function appendSection()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->appendSection();
        }
                    /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function yieldContent($section, $default = '')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->yieldContent($section, $default);
        }
                    /**
         * Get the parent placeholder for the current request.
         *
         * @param string $section
         * @return string 
         * @static 
         */ 
        public static function parentPlaceholder($section = '')
        {
                        return \Illuminate\View\Factory::parentPlaceholder($section);
        }
                    /**
         * Check if section exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasSection($name)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->hasSection($name);
        }
                    /**
         * Get the contents of a section.
         *
         * @param string $name
         * @param string $default
         * @return mixed 
         * @static 
         */ 
        public static function getSection($name, $default = null)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getSection($name, $default);
        }
                    /**
         * Get the entire array of sections.
         *
         * @return array 
         * @static 
         */ 
        public static function getSections()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getSections();
        }
                    /**
         * Flush all of the sections.
         *
         * @return void 
         * @static 
         */ 
        public static function flushSections()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->flushSections();
        }
                    /**
         * Add new loop to the stack.
         *
         * @param \Countable|array $data
         * @return void 
         * @static 
         */ 
        public static function addLoop($data)
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->addLoop($data);
        }
                    /**
         * Increment the top loop's indices.
         *
         * @return void 
         * @static 
         */ 
        public static function incrementLoopIndices()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->incrementLoopIndices();
        }
                    /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void 
         * @static 
         */ 
        public static function popLoop()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->popLoop();
        }
                    /**
         * Get an instance of the last loop in the stack.
         *
         * @return \stdClass|null 
         * @static 
         */ 
        public static function getLastLoop()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getLastLoop();
        }
                    /**
         * Get the entire loop stack.
         *
         * @return array 
         * @static 
         */ 
        public static function getLoopStack()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->getLoopStack();
        }
                    /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function startPush($section, $content = '')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->startPush($section, $content);
        }
                    /**
         * Stop injecting content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopPush()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->stopPush();
        }
                    /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function startPrepend($section, $content = '')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->startPrepend($section, $content);
        }
                    /**
         * Stop prepending content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopPrepend()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->stopPrepend();
        }
                    /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function yieldPushContent($section, $default = '')
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->yieldPushContent($section, $default);
        }
                    /**
         * Flush all of the stacks.
         *
         * @return void 
         * @static 
         */ 
        public static function flushStacks()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->flushStacks();
        }
                    /**
         * Start a translation block.
         *
         * @param array $replacements
         * @return void 
         * @static 
         */ 
        public static function startTranslation($replacements = [])
        {
                        /** @var \Illuminate\View\Factory $instance */
                        $instance->startTranslation($replacements);
        }
                    /**
         * Render the current translation.
         *
         * @return string 
         * @static 
         */ 
        public static function renderTranslation()
        {
                        /** @var \Illuminate\View\Factory $instance */
                        return $instance->renderTranslation();
        }
         
    }
     
}

        namespace October\Rain\Database { 
            /**
     * Active Record base class.
     * 
     * Extends Eloquent with added extendability and deferred bindings.
     *
     * @package october\database
     * @author Alexey Bobkov, Samuel Georges
     */ 
        class Model {
         
    }
     
}

    namespace October\Rain\Support\Facades { 
            /**
     * 
     *
     * @see \October\Rain\Html\BlockBuilder
     */ 
        class Block {
                    /**
         * Helper for startBlock
         *
         * @param string $name Specifies the block name.
         * @return void 
         * @static 
         */ 
        public static function put($name)
        {
                        /** @var \October\Rain\Html\BlockBuilder $instance */
                        $instance->put($name);
        }
                    /**
         * Begins the layout block.
         *
         * @param string $name Specifies the block name.
         * @return void 
         * @static 
         */ 
        public static function startBlock($name)
        {
                        /** @var \October\Rain\Html\BlockBuilder $instance */
                        $instance->startBlock($name);
        }
                    /**
         * Helper for endBlock and also clears the output buffer.
         *
         * @param boolean $append Indicates that the new content should be appended to the existing block content.
         * @return void 
         * @throws \Exception if there are no items in the block stack
         * @static 
         */ 
        public static function endPut($append = false)
        {
                        /** @var \October\Rain\Html\BlockBuilder $instance */
                        $instance->endPut($append);
        }
                    /**
         * Closes the layout block.
         *
         * @param boolean $append Indicates that the new content should be appended to the existing block content.
         * @return void 
         * @throws \Exception if there are no items in the block stack
         * @static 
         */ 
        public static function endBlock($append = false)
        {
                        /** @var \October\Rain\Html\BlockBuilder $instance */
                        $instance->endBlock($append);
        }
                    /**
         * Sets a content of the layout block.
         *
         * @param string $name Specifies the block name.
         * @param string $content Specifies the block content.
         * @return void 
         * @throws \Exception if there are no items in the block stack
         * @static 
         */ 
        public static function set($name, $content)
        {
                        /** @var \October\Rain\Html\BlockBuilder $instance */
                        $instance->set($name, $content);
        }
                    /**
         * Appends a content of the layout block.
         *
         * @param string $name Specifies the block name.
         * @param string $content Specifies the block content.
         * @return void 
         * @static 
         */ 
        public static function append($name, $content)
        {
                        /** @var \October\Rain\Html\BlockBuilder $instance */
                        $instance->append($name, $content);
        }
                    /**
         * Returns the layout block contents and deletes the block from memory.
         *
         * @param string $name Specifies the block name.
         * @param string $default Specifies a default block value to use if the block requested is not exists.
         * @return string 
         * @static 
         */ 
        public static function placeholder($name, $default = null)
        {
                        /** @var \October\Rain\Html\BlockBuilder $instance */
                        return $instance->placeholder($name, $default);
        }
                    /**
         * Returns the layout block contents but not deletes the block from memory.
         *
         * @param string $name Specifies the block name.
         * @param string $default Specifies a default block value to use if the block requested is not exists.
         * @return string 
         * @static 
         */ 
        public static function get($name, $default = null)
        {
                        /** @var \October\Rain\Html\BlockBuilder $instance */
                        return $instance->get($name, $default);
        }
                    /**
         * Clears all the registered blocks.
         *
         * @return void 
         * @static 
         */ 
        public static function reset()
        {
                        /** @var \October\Rain\Html\BlockBuilder $instance */
                        $instance->reset();
        }
         
    }
            /**
     * 
     *
     * @method static void ensureDirectoryExists(string $path, int $mode = 0755, bool $recursive = true)
     * @see \October\Rain\Filesystem\Filesystem
     */ 
        class File {
                    /**
         * Determine if the given path contains no files.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function isDirectoryEmpty($directory)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->isDirectoryEmpty($directory);
        }
                    /**
         * Converts a file size in bytes to human readable format.
         *
         * @param int $bytes
         * @return string 
         * @static 
         */ 
        public static function sizeToString($bytes)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->sizeToString($bytes);
        }
                    /**
         * Returns a public file path from an absolute one
         * eg: /home/mysite/public_html/welcome -> /welcome
         *
         * @param string $path Absolute path
         * @return string 
         * @static 
         */ 
        public static function localToPublic($path)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->localToPublic($path);
        }
                    /**
         * Returns true if the specified path is within the path of the application
         *
         * @param string $path The path to
         * @param boolean $realpath Default true, uses realpath() to resolve the provided path before checking location. Set to false if you need to check if a potentially non-existent path would be within the application path
         * @return boolean 
         * @static 
         */ 
        public static function isLocalPath($path, $realpath = true)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->isLocalPath($path, $realpath);
        }
                    /**
         * Finds the path to a class
         *
         * @param mixed $className Class name or object
         * @return string The file path
         * @static 
         */ 
        public static function fromClass($className)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->fromClass($className);
        }
                    /**
         * Determine if a file exists with case insensitivity
         * supported for the file only.
         *
         * @param string $path
         * @return mixed Sensitive path or false
         * @static 
         */ 
        public static function existsInsensitive($path)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->existsInsensitive($path);
        }
                    /**
         * Normalizes the directory separator, often used by Win systems.
         *
         * @param string $path Path name
         * @return string Normalized path
         * @static 
         */ 
        public static function normalizePath($path)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->normalizePath($path);
        }
                    /**
         * Converts a path using path symbol. Returns the original path if
         * no symbol is used and no default is specified.
         *
         * @param string $path
         * @param mixed $default
         * @return string 
         * @static 
         */ 
        public static function symbolizePath($path, $default = false)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->symbolizePath($path, $default);
        }
                    /**
         * Returns true if the path uses a symbol.
         *
         * @param string $path
         * @return boolean 
         * @static 
         */ 
        public static function isPathSymbol($path)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->isPathSymbol($path);
        }
                    /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @return int 
         * @static 
         */ 
        public static function put($path, $contents, $lock = false)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->put($path, $contents, $lock);
        }
                    /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function copy($path, $target)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->copy($path, $target);
        }
                    /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path, $mode = 511, $recursive = false, $force = false)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->makeDirectory($path, $mode, $recursive, $force);
        }
                    /**
         * Modify file/folder permissions
         *
         * @param string $path
         * @param \October\Rain\Filesystem\octal $mask
         * @return void 
         * @static 
         */ 
        public static function chmod($path, $mask = null)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        $instance->chmod($path, $mask);
        }
                    /**
         * Modify file/folder permissions recursively
         *
         * @param string $path
         * @param \October\Rain\Filesystem\octal $fileMask
         * @param \October\Rain\Filesystem\octal $directoryMask
         * @return void 
         * @static 
         */ 
        public static function chmodRecursive($path, $fileMask = null, $directoryMask = null)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        $instance->chmodRecursive($path, $fileMask, $directoryMask);
        }
                    /**
         * Returns the default file permission mask to use.
         *
         * @return string Permission mask as octal (0777) or null
         * @static 
         */ 
        public static function getFilePermissions()
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->getFilePermissions();
        }
                    /**
         * Returns the default folder permission mask to use.
         *
         * @return string Permission mask as octal (0777) or null
         * @static 
         */ 
        public static function getFolderPermissions()
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->getFolderPermissions();
        }
                    /**
         * Match filename against a pattern.
         *
         * @param string|array $fileName
         * @param string $pattern
         * @return bool 
         * @static 
         */ 
        public static function fileNameMatch($fileName, $pattern)
        {
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->fileNameMatch($fileName, $pattern);
        }
                    /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->exists($path);
        }
                    /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function get($path, $lock = false)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->get($path, $lock);
        }
                    /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function sharedGet($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->sharedGet($path);
        }
                    /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @return mixed 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function getRequire($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->getRequire($path);
        }
                    /**
         * Require the given file once.
         *
         * @param string $file
         * @return mixed 
         * @static 
         */ 
        public static function requireOnce($file)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->requireOnce($file);
        }
                    /**
         * Get the MD5 hash of the file at the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function hash($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->hash($path);
        }
                    /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function prepend($path, $data)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->prepend($path, $data);
        }
                    /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function append($path, $data)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->append($path, $data);
        }
                    /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->delete($paths);
        }
                    /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function move($path, $target)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->move($path, $target);
        }
                    /**
         * Create a hard link to the target file or directory.
         *
         * @param string $target
         * @param string $link
         * @return void 
         * @static 
         */ 
        public static function link($target, $link)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        $instance->link($target, $link);
        }
                    /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function name($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->name($path);
        }
                    /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function basename($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->basename($path);
        }
                    /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function dirname($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->dirname($path);
        }
                    /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function extension($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->extension($path);
        }
                    /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function type($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->type($path);
        }
                    /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->mimeType($path);
        }
                    /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->size($path);
        }
                    /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->lastModified($path);
        }
                    /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function isDirectory($directory)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->isDirectory($directory);
        }
                    /**
         * Determine if the given path is readable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isReadable($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->isReadable($path);
        }
                    /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isWritable($path)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->isWritable($path);
        }
                    /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool 
         * @static 
         */ 
        public static function isFile($file)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->isFile($file);
        }
                    /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array 
         * @static 
         */ 
        public static function glob($pattern, $flags = 0)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->glob($pattern, $flags);
        }
                    /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function files($directory, $hidden = false)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->files($directory, $hidden);
        }
                    /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function allFiles($directory, $hidden = false)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->allFiles($directory, $hidden);
        }
                    /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array 
         * @static 
         */ 
        public static function directories($directory)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->directories($directory);
        }
                    /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool 
         * @static 
         */ 
        public static function moveDirectory($from, $to, $overwrite = false)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->moveDirectory($from, $to, $overwrite);
        }
                    /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int $options
         * @return bool 
         * @static 
         */ 
        public static function copyDirectory($directory, $destination, $options = null)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->copyDirectory($directory, $destination, $options);
        }
                    /**
         * Recursively delete a directory.
         * 
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory, $preserve = false)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->deleteDirectory($directory, $preserve);
        }
                    /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function cleanDirectory($directory)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        /** @var \October\Rain\Filesystem\Filesystem $instance */
                        return $instance->cleanDirectory($directory);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        \October\Rain\Filesystem\Filesystem::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        \October\Rain\Filesystem\Filesystem::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Filesystem\Filesystem         
                        return \October\Rain\Filesystem\Filesystem::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Config\Repository
     */ 
        class Config {
                    /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->has($key);
        }
                    /**
         * Determine if a configuration group exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasGroup($key)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->hasGroup($key);
        }
                    /**
         * Get the specified configuration value.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function set($key, $value = null)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->set($key, $value);
        }
                    /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function prepend($key, $value)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->prepend($key, $value);
        }
                    /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->push($key, $value);
        }
                    /**
         * Get all of the configuration items for the application.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->all();
        }
                    /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */ 
        public static function parseConfigKey($key)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->parseConfigKey($key);
        }
                    /**
         * Register a package for cascading configuration.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */ 
        public static function package($namespace, $hint)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->package($namespace, $hint);
        }
                    /**
         * Register an after load callback for a given namespace.
         *
         * @param string $namespace
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterLoading($namespace, $callback)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->afterLoading($namespace, $callback);
        }
                    /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */ 
        public static function addNamespace($namespace, $hint)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->addNamespace($namespace, $hint);
        }
                    /**
         * Returns all registered namespaces with the config
         * loader.
         *
         * @return array 
         * @static 
         */ 
        public static function getNamespaces()
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->getNamespaces();
        }
                    /**
         * Get the loader implementation.
         *
         * @return \October\Rain\Config\LoaderInterface 
         * @static 
         */ 
        public static function getLoader()
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->getLoader();
        }
                    /**
         * Set the loader implementation.
         *
         * @param \October\Rain\Config\LoaderInterface $loader
         * @return void 
         * @static 
         */ 
        public static function setLoader($loader)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->setLoader($loader);
        }
                    /**
         * Get the current configuration environment.
         *
         * @return string 
         * @static 
         */ 
        public static function getEnvironment()
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->getEnvironment();
        }
                    /**
         * Get the after load callback array.
         *
         * @return array 
         * @static 
         */ 
        public static function getAfterLoadCallbacks()
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->getAfterLoadCallbacks();
        }
                    /**
         * Get all of the configuration items.
         *
         * @return array 
         * @static 
         */ 
        public static function getItems()
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->getItems();
        }
                    /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->offsetSet($key, $value);
        }
                    /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->offsetUnset($key);
        }
                    /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void 
         * @static 
         */ 
        public static function setParsedKey($key, $parsed)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        $instance->setParsedKey($key, $parsed);
        }
                    /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */ 
        public static function parseKey($key)
        {
                        /** @var \October\Rain\Config\Repository $instance */
                        return $instance->parseKey($key);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Flash\FlashBag
     */ 
        class Flash {
                    /**
         * Checks to see if any message is available.
         *
         * @return bool 
         * @static 
         */ 
        public static function check()
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->check();
        }
                    /**
         * Get first message for every key in the bag.
         *
         * @param string|null $format
         * @return array 
         * @static 
         */ 
        public static function all($format = null)
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->all($format);
        }
                    /**
         * Gets all the flash messages of a given type.
         *
         * @param string $key
         * @param string|null $format
         * @return array 
         * @static 
         */ 
        public static function get($key, $format = null)
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->get($key, $format);
        }
                    /**
         * Gets / Sets an error message
         *
         * @param string|null $message
         * @return array|\October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function error($message = null)
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->error($message);
        }
                    /**
         * Sets Gets / a success message
         *
         * @param string|null $message
         * @return array|\October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function success($message = null)
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->success($message);
        }
                    /**
         * Gets / Sets a warning message
         *
         * @param string|null $message
         * @return array|\October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function warning($message = null)
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->warning($message);
        }
                    /**
         * Gets / Sets a information message
         *
         * @param string|null $message
         * @return array|\October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function info($message = null)
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->info($message);
        }
                    /**
         * Add a message to the bag and stores it in the session.
         *
         * @param string $key
         * @param string $message
         * @return \October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function add($key, $message)
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->add($key, $message);
        }
                    /**
         * Stores the flash data to the session.
         *
         * @static 
         */ 
        public static function store()
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->store();
        }
                    /**
         * Removes an object with a specified key or erases the flash data.
         *
         * @param string $key Specifies a key to remove, optional
         * @static 
         */ 
        public static function forget($key = null)
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->forget($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function purge()
        {
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->purge();
        }
                    /**
         * Get the keys present in the message bag.
         *
         * @return array 
         * @static 
         */ 
        public static function keys()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->keys();
        }
                    /**
         * Merge a new array of messages into the bag.
         *
         * @param \Illuminate\Contracts\Support\MessageProvider|array $messages
         * @return \October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function merge($messages)
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->merge($messages);
        }
                    /**
         * Determine if messages exist for all of the given keys.
         *
         * @param array|string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->has($key);
        }
                    /**
         * Determine if messages exist for any of the given keys.
         *
         * @param array|string $keys
         * @return bool 
         * @static 
         */ 
        public static function hasAny($keys = [])
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->hasAny($keys);
        }
                    /**
         * Get the first message from the bag for a given key.
         *
         * @param string $key
         * @param string $format
         * @return string 
         * @static 
         */ 
        public static function first($key = null, $format = null)
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->first($key, $format);
        }
                    /**
         * Get all of the unique messages for every key in the bag.
         *
         * @param string $format
         * @return array 
         * @static 
         */ 
        public static function unique($format = null)
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->unique($format);
        }
                    /**
         * Get the raw messages in the container.
         *
         * @return array 
         * @static 
         */ 
        public static function messages()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->messages();
        }
                    /**
         * Get the raw messages in the container.
         *
         * @return array 
         * @static 
         */ 
        public static function getMessages()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->getMessages();
        }
                    /**
         * Get the messages for the instance.
         *
         * @return \Illuminate\Support\MessageBag 
         * @static 
         */ 
        public static function getMessageBag()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->getMessageBag();
        }
                    /**
         * Get the default message format.
         *
         * @return string 
         * @static 
         */ 
        public static function getFormat()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->getFormat();
        }
                    /**
         * Set the default message format.
         *
         * @param string $format
         * @return \Illuminate\Support\MessageBag 
         * @static 
         */ 
        public static function setFormat($format = ':message')
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->setFormat($format);
        }
                    /**
         * Determine if the message bag has any messages.
         *
         * @return bool 
         * @static 
         */ 
        public static function isEmpty()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->isEmpty();
        }
                    /**
         * Determine if the message bag has any messages.
         *
         * @return bool 
         * @static 
         */ 
        public static function isNotEmpty()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->isNotEmpty();
        }
                    /**
         * Determine if the message bag has any messages.
         *
         * @return bool 
         * @static 
         */ 
        public static function any()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->any();
        }
                    /**
         * Get the number of messages in the container.
         *
         * @return int 
         * @static 
         */ 
        public static function count()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->count();
        }
                    /**
         * Get the instance as an array.
         *
         * @return array 
         * @static 
         */ 
        public static function toArray()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->toArray();
        }
                    /**
         * Convert the object into something JSON serializable.
         *
         * @return array 
         * @static 
         */ 
        public static function jsonSerialize()
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->jsonSerialize();
        }
                    /**
         * Convert the object to its JSON representation.
         *
         * @param int $options
         * @return string 
         * @static 
         */ 
        public static function toJson($options = 0)
        {            //Method inherited from \Illuminate\Support\MessageBag         
                        /** @var \October\Rain\Flash\FlashBag $instance */
                        return $instance->toJson($options);
        }
         
    }
            /**
     * 
     *
     * @method static string bool oldInputIsEmpty()
     * @see \October\Rain\Html\FormBuilder
     */ 
        class Form {
                    /**
         * Open up a new HTML form and includes a session key.
         *
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function open($options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->open($options);
        }
                    /**
         * Helper for opening a form used for an AJAX call.
         *
         * @param string $handler Request handler name, eg: onUpdate
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function ajax($handler, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->ajax($handler, $options);
        }
                    /**
         * Create a new model based form builder.
         *
         * @param mixed $model
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function model($model, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->model($model, $options);
        }
                    /**
         * Set the model instance on the form builder.
         *
         * @param mixed $model
         * @return void 
         * @static 
         */ 
        public static function setModel($model)
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        $instance->setModel($model);
        }
                    /**
         * Close the current form.
         *
         * @return string 
         * @static 
         */ 
        public static function close()
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->close();
        }
                    /**
         * Generate a hidden field with the current CSRF token.
         *
         * @return string 
         * @static 
         */ 
        public static function token()
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->token();
        }
                    /**
         * Create a form label element.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function label($name, $value = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->label($name, $value, $options);
        }
                    /**
         * Create a form input field.
         *
         * @param string $type
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function input($type, $name, $value = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->input($type, $name, $value, $options);
        }
                    /**
         * Create a text input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function text($name, $value = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->text($name, $value, $options);
        }
                    /**
         * Create a password input field.
         *
         * @param string $name
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function password($name, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->password($name, $options);
        }
                    /**
         * Create a hidden input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function hidden($name, $value = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->hidden($name, $value, $options);
        }
                    /**
         * Create an e-mail input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function email($name, $value = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->email($name, $value, $options);
        }
                    /**
         * Create a url input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function url($name, $value = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->url($name, $value, $options);
        }
                    /**
         * Create a file input field.
         *
         * @param string $name
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function file($name, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->file($name, $options);
        }
                    /**
         * Create a textarea input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function textarea($name, $value = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->textarea($name, $value, $options);
        }
                    /**
         * Create a select box field with empty option support.
         *
         * @param string $name
         * @param array $list
         * @param string $selected
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function select($name, $list = [], $selected = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->select($name, $list, $selected, $options);
        }
                    /**
         * Create a select range field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function selectRange($name, $begin, $end, $selected = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->selectRange($name, $begin, $end, $selected, $options);
        }
                    /**
         * Create a select year field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function selectYear()
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->selectYear();
        }
                    /**
         * Create a select month field.
         *
         * @param string $name
         * @param string $selected
         * @param array $options
         * @param string $format
         * @return string 
         * @static 
         */ 
        public static function selectMonth($name, $selected = null, $options = [], $format = '%B')
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->selectMonth($name, $selected, $options, $format);
        }
                    /**
         * Get the select option for the given value.
         *
         * @param string $display
         * @param string $value
         * @param string $selected
         * @return string 
         * @static 
         */ 
        public static function getSelectOption($display, $value, $selected)
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->getSelectOption($display, $value, $selected);
        }
                    /**
         * Create a checkbox input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function checkbox($name, $value = 1, $checked = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->checkbox($name, $value, $checked, $options);
        }
                    /**
         * Create a radio button input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function radio($name, $value = null, $checked = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->radio($name, $value, $checked, $options);
        }
                    /**
         * Create a HTML reset input element.
         *
         * @param string $value
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function reset($value, $attributes = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->reset($value, $attributes);
        }
                    /**
         * Create a HTML image input element.
         *
         * @param string $url
         * @param string $name
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function image($url, $name = null, $attributes = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->image($url, $name, $attributes);
        }
                    /**
         * Create a submit button element.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function submit($value = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->submit($value, $options);
        }
                    /**
         * Create a button element.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function button($value = null, $options = [])
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->button($value, $options);
        }
                    /**
         * Get the ID attribute for a field name.
         *
         * @param string $name
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function getIdAttribute($name, $attributes)
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->getIdAttribute($name, $attributes);
        }
                    /**
         * Get the value that should be assigned to the field.
         *
         * @param string $name
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function getValueAttribute($name, $value = null)
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->getValueAttribute($name, $value);
        }
                    /**
         * Get a value from the session's old input.
         *
         * @param string $name
         * @return string 
         * @static 
         */ 
        public static function old($name)
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->old($name);
        }
                    /**
         * Determine if the old input is empty.
         *
         * @return bool 
         * @static 
         */ 
        public static function oldInputIsEmpty()
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->oldInputIsEmpty();
        }
                    /**
         * Get the session store implementation.
         *
         * @return \Illuminate\Session\Store $session
         * @static 
         */ 
        public static function getSessionStore()
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->getSessionStore();
        }
                    /**
         * Set the session store implementation.
         *
         * @param \Illuminate\Session\Store $session
         * @return \October\Rain\Html\FormBuilder 
         * @static 
         */ 
        public static function setSessionStore($session)
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->setSessionStore($session);
        }
                    /**
         * Helper for getting form values. Tries to find the old value,
         * then uses a postback/get value, then looks at the form model values.
         *
         * @param string $name
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function value($name, $value = null)
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->value($name, $value);
        }
                    /**
         * Returns a hidden HTML input, supplying the session key value.
         *
         * @return string 
         * @static 
         */ 
        public static function sessionKey($sessionKey = null)
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->sessionKey($sessionKey);
        }
                    /**
         * Returns the active session key, used fr deferred bindings.
         *
         * @return string 
         * @static 
         */ 
        public static function getSessionKey()
        {
                        /** @var \October\Rain\Html\FormBuilder $instance */
                        return $instance->getSessionKey();
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \October\Rain\Html\FormBuilder::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
                        \October\Rain\Html\FormBuilder::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \October\Rain\Html\FormBuilder::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Html\HtmlBuilder
     */ 
        class Html {
                    /**
         * Convert an HTML string to entities.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function entities($value)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->entities($value);
        }
                    /**
         * Convert entities to HTML characters.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function decode($value)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->decode($value);
        }
                    /**
         * Generate a link to a JavaScript file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function script($url, $attributes = [], $secure = null)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->script($url, $attributes, $secure);
        }
                    /**
         * Generate a link to a CSS file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function style($url, $attributes = [], $secure = null)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->style($url, $attributes, $secure);
        }
                    /**
         * Generate an HTML image element.
         *
         * @param string $url
         * @param string $alt
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function image($url, $alt = null, $attributes = [], $secure = null)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->image($url, $alt, $attributes, $secure);
        }
                    /**
         * Generate a HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function link($url, $title = null, $attributes = [], $secure = null)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->link($url, $title, $attributes, $secure);
        }
                    /**
         * Generate a HTTPS HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function secureLink($url, $title = null, $attributes = [])
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->secureLink($url, $title, $attributes);
        }
                    /**
         * Generate a HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function linkAsset($url, $title = null, $attributes = [], $secure = null)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->linkAsset($url, $title, $attributes, $secure);
        }
                    /**
         * Generate a HTTPS HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function linkSecureAsset($url, $title = null, $attributes = [])
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->linkSecureAsset($url, $title, $attributes);
        }
                    /**
         * Generate a HTML link to a named route.
         *
         * @param string $name
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function linkRoute($name, $title = null, $parameters = [], $attributes = [])
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->linkRoute($name, $title, $parameters, $attributes);
        }
                    /**
         * Generate a HTML link to a controller action.
         *
         * @param string $action
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function linkAction($action, $title = null, $parameters = [], $attributes = [])
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->linkAction($action, $title, $parameters, $attributes);
        }
                    /**
         * Generate a HTML link to an email address.
         *
         * @param string $email
         * @param string $title
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function mailto($email, $title = null, $attributes = [])
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->mailto($email, $title, $attributes);
        }
                    /**
         * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
         *
         * @param string $email
         * @return string 
         * @static 
         */ 
        public static function email($email)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->email($email);
        }
                    /**
         * Generate an ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function ol($list, $attributes = [])
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->ol($list, $attributes);
        }
                    /**
         * Generate an un-ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function ul($list, $attributes = [])
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->ul($list, $attributes);
        }
                    /**
         * Build an HTML attribute string from an array.
         *
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function attributes($attributes)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->attributes($attributes);
        }
                    /**
         * Obfuscate a string to prevent spam-bots from sniffing it.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function obfuscate($value)
        {
                        /** @var \October\Rain\Html\HtmlBuilder $instance */
                        return $instance->obfuscate($value);
        }
                    /**
         * Removes HTML from a string
         *
         * @param $string String to strip HTML from
         * @return string 
         * @static 
         */ 
        public static function strip($string)
        {
                        return \October\Rain\Html\HtmlBuilder::strip($string);
        }
                    /**
         * Limits HTML with specific length with a proper tag handling.
         *
         * @param string $html HTML string to limit
         * @param int $maxLength String length to truncate at
         * @param string $end
         * @return string 
         * @static 
         */ 
        public static function limit($html, $maxLength = 100, $end = '...')
        {
                        return \October\Rain\Html\HtmlBuilder::limit($html, $maxLength, $end);
        }
                    /**
         * Cleans HTML to prevent most XSS attacks.
         *
         * @param string $html HTML
         * @return string Cleaned HTML
         * @static 
         */ 
        public static function clean($html)
        {
                        return \October\Rain\Html\HtmlBuilder::clean($html);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \October\Rain\Html\HtmlBuilder::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
                        \October\Rain\Html\HtmlBuilder::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \October\Rain\Html\HtmlBuilder::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Network\Http
     */ 
        class Http {
                    /**
         * Make the object with common properties
         *
         * @param string $url HTTP request address
         * @param string $method Request method (GET, POST, PUT, DELETE, etc)
         * @param callable $options Callable helper function to modify the object
         * @static 
         */ 
        public static function make($url, $method, $options = null)
        {
                        return \October\Rain\Network\Http::make($url, $method, $options);
        }
                    /**
         * Make a HTTP GET call.
         *
         * @param string $url
         * @param callable $options
         * @return self 
         * @static 
         */ 
        public static function get($url, $options = null)
        {
                        return \October\Rain\Network\Http::get($url, $options);
        }
                    /**
         * Make a HTTP POST call.
         *
         * @param string $url
         * @param callable $options
         * @return self 
         * @static 
         */ 
        public static function post($url, $options = null)
        {
                        return \October\Rain\Network\Http::post($url, $options);
        }
                    /**
         * Make a HTTP DELETE call.
         *
         * @param string $url
         * @param callable $options
         * @return self 
         * @static 
         */ 
        public static function delete($url, $options = null)
        {
                        return \October\Rain\Network\Http::delete($url, $options);
        }
                    /**
         * Make a HTTP PATCH call.
         *
         * @param string $url
         * @param callable $options
         * @return self 
         * @static 
         */ 
        public static function patch($url, $options = null)
        {
                        return \October\Rain\Network\Http::patch($url, $options);
        }
                    /**
         * Make a HTTP PUT call.
         *
         * @param string $url
         * @param callable $options
         * @return self 
         * @static 
         */ 
        public static function put($url, $options = null)
        {
                        return \October\Rain\Network\Http::put($url, $options);
        }
                    /**
         * Make a HTTP OPTIONS call.
         *
         * @param string $url
         * @param callable $options
         * @return self 
         * @static 
         */ 
        public static function options($url, $options = null)
        {
                        return \October\Rain\Network\Http::options($url, $options);
        }
                    /**
         * Execute the HTTP request.
         *
         * @return string response body
         * @static 
         */ 
        public static function send()
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->send();
        }
                    /**
         * Return the request data set.
         *
         * @return string 
         * @static 
         */ 
        public static function getRequestData()
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->getRequestData();
        }
                    /**
         * Add a data to the request.
         *
         * @param string $value
         * @return self 
         * @static 
         */ 
        public static function data($key, $value = null)
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->data($key, $value);
        }
                    /**
         * Add a header to the request.
         *
         * @param string $value
         * @return self 
         * @static 
         */ 
        public static function header($key, $value = null)
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->header($key, $value);
        }
                    /**
         * Sets a proxy to use with this request
         *
         * @static 
         */ 
        public static function proxy($type, $host, $port, $username = null, $password = null)
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->proxy($type, $host, $port, $username, $password);
        }
                    /**
         * Adds authentication to the comms.
         *
         * @param string $user
         * @param string $pass
         * @return self 
         * @static 
         */ 
        public static function auth($user, $pass = null)
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->auth($user, $pass);
        }
                    /**
         * Disable follow location (redirects)
         *
         * @static 
         */ 
        public static function noRedirect()
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->noRedirect();
        }
                    /**
         * Enable SSL verification
         *
         * @static 
         */ 
        public static function verifySSL()
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->verifySSL();
        }
                    /**
         * Sets the request timeout.
         *
         * @param string $timeout
         * @return self 
         * @static 
         */ 
        public static function timeout($timeout)
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->timeout($timeout);
        }
                    /**
         * Write the response to a file
         *
         * @param string $path Path to file
         * @param string $filter Stream filter as listed in stream_get_filters()
         * @return self 
         * @static 
         */ 
        public static function toFile($path, $filter = null)
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->toFile($path, $filter);
        }
                    /**
         * Add a single option to the request.
         *
         * @param string $option
         * @param string $value
         * @return self 
         * @static 
         */ 
        public static function setOption($option, $value = null)
        {
                        /** @var \October\Rain\Network\Http $instance */
                        return $instance->setOption($option, $value);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Support\Str
     */ 
        class Str {
                    /**
         * Converts number to its ordinal English form.
         * 
         * This method converts 13 to 13th, 2 to 2nd ...
         *
         * @param integer $number Number to get its ordinal value
         * @return string Ordinal representation of given string.
         * @static 
         */ 
        public static function ordinal($number)
        {
                        return \October\Rain\Support\Str::ordinal($number);
        }
                    /**
         * Converts line breaks to a standard \r\n pattern.
         *
         * @static 
         */ 
        public static function normalizeEol($string)
        {
                        return \October\Rain\Support\Str::normalizeEol($string);
        }
                    /**
         * Removes the starting slash from a class namespace \
         *
         * @static 
         */ 
        public static function normalizeClassName($name)
        {
                        return \October\Rain\Support\Str::normalizeClassName($name);
        }
                    /**
         * Generates a class ID from either an object or a string of the class name.
         *
         * @static 
         */ 
        public static function getClassId($name)
        {
                        return \October\Rain\Support\Str::getClassId($name);
        }
                    /**
         * Returns a class namespace
         *
         * @static 
         */ 
        public static function getClassNamespace($name)
        {
                        return \October\Rain\Support\Str::getClassNamespace($name);
        }
                    /**
         * If $string begins with any number of consecutive symbols,
         * returns the number, otherwise returns 0
         *
         * @param string $string
         * @param string $symbol
         * @return int 
         * @static 
         */ 
        public static function getPrecedingSymbols($string, $symbol)
        {
                        return \October\Rain\Support\Str::getPrecedingSymbols($string, $symbol);
        }
                    /**
         * Return the remainder of a string after a given value.
         *
         * @param string $subject
         * @param string $search
         * @return string 
         * @static 
         */ 
        public static function after($subject, $search)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::after($subject, $search);
        }
                    /**
         * Transliterate a UTF-8 value to ASCII.
         *
         * @param string $value
         * @param string $language
         * @return string 
         * @static 
         */ 
        public static function ascii($value, $language = 'en')
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::ascii($value, $language);
        }
                    /**
         * Get the portion of a string before a given value.
         *
         * @param string $subject
         * @param string $search
         * @return string 
         * @static 
         */ 
        public static function before($subject, $search)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::before($subject, $search);
        }
                    /**
         * Convert a value to camel case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function camel($value)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::camel($value);
        }
                    /**
         * Determine if a given string contains a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool 
         * @static 
         */ 
        public static function contains($haystack, $needles)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::contains($haystack, $needles);
        }
                    /**
         * Determine if a given string ends with a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool 
         * @static 
         */ 
        public static function endsWith($haystack, $needles)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::endsWith($haystack, $needles);
        }
                    /**
         * Cap a string with a single instance of a given value.
         *
         * @param string $value
         * @param string $cap
         * @return string 
         * @static 
         */ 
        public static function finish($value, $cap)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::finish($value, $cap);
        }
                    /**
         * Determine if a given string matches a given pattern.
         *
         * @param string|array $pattern
         * @param string $value
         * @return bool 
         * @static 
         */ 
        public static function is($pattern, $value)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::is($pattern, $value);
        }
                    /**
         * Convert a string to kebab case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function kebab($value)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::kebab($value);
        }
                    /**
         * Return the length of the given string.
         *
         * @param string $value
         * @param string $encoding
         * @return int 
         * @static 
         */ 
        public static function length($value, $encoding = null)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::length($value, $encoding);
        }
                    /**
         * Limit the number of characters in a string.
         *
         * @param string $value
         * @param int $limit
         * @param string $end
         * @return string 
         * @static 
         */ 
        public static function limit($value, $limit = 100, $end = '...')
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::limit($value, $limit, $end);
        }
                    /**
         * Convert the given string to lower-case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function lower($value)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::lower($value);
        }
                    /**
         * Limit the number of words in a string.
         *
         * @param string $value
         * @param int $words
         * @param string $end
         * @return string 
         * @static 
         */ 
        public static function words($value, $words = 100, $end = '...')
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::words($value, $words, $end);
        }
                    /**
         * Parse a Class@method style callback into class and method.
         *
         * @param string $callback
         * @param string|null $default
         * @return array 
         * @static 
         */ 
        public static function parseCallback($callback, $default = null)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::parseCallback($callback, $default);
        }
                    /**
         * Get the plural form of an English word.
         *
         * @param string $value
         * @param int $count
         * @return string 
         * @static 
         */ 
        public static function plural($value, $count = 2)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::plural($value, $count);
        }
                    /**
         * Generate a more truly "random" alpha-numeric string.
         *
         * @param int $length
         * @return string 
         * @static 
         */ 
        public static function random($length = 16)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::random($length);
        }
                    /**
         * Replace a given value in the string sequentially with an array.
         *
         * @param string $search
         * @param array $replace
         * @param string $subject
         * @return string 
         * @static 
         */ 
        public static function replaceArray($search, $replace, $subject)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::replaceArray($search, $replace, $subject);
        }
                    /**
         * Replace the first occurrence of a given value in the string.
         *
         * @param string $search
         * @param string $replace
         * @param string $subject
         * @return string 
         * @static 
         */ 
        public static function replaceFirst($search, $replace, $subject)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::replaceFirst($search, $replace, $subject);
        }
                    /**
         * Replace the last occurrence of a given value in the string.
         *
         * @param string $search
         * @param string $replace
         * @param string $subject
         * @return string 
         * @static 
         */ 
        public static function replaceLast($search, $replace, $subject)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::replaceLast($search, $replace, $subject);
        }
                    /**
         * Begin a string with a single instance of a given value.
         *
         * @param string $value
         * @param string $prefix
         * @return string 
         * @static 
         */ 
        public static function start($value, $prefix)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::start($value, $prefix);
        }
                    /**
         * Convert the given string to upper-case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function upper($value)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::upper($value);
        }
                    /**
         * Convert the given string to title case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function title($value)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::title($value);
        }
                    /**
         * Get the singular form of an English word.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function singular($value)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::singular($value);
        }
                    /**
         * Generate a URL friendly "slug" from a given string.
         *
         * @param string $title
         * @param string $separator
         * @param string $language
         * @return string 
         * @static 
         */ 
        public static function slug($title, $separator = '-', $language = 'en')
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::slug($title, $separator, $language);
        }
                    /**
         * Convert a string to snake case.
         *
         * @param string $value
         * @param string $delimiter
         * @return string 
         * @static 
         */ 
        public static function snake($value, $delimiter = '_')
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::snake($value, $delimiter);
        }
                    /**
         * Determine if a given string starts with a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool 
         * @static 
         */ 
        public static function startsWith($haystack, $needles)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::startsWith($haystack, $needles);
        }
                    /**
         * Convert a value to studly caps case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function studly($value)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::studly($value);
        }
                    /**
         * Returns the portion of string specified by the start and length parameters.
         *
         * @param string $string
         * @param int $start
         * @param int|null $length
         * @return string 
         * @static 
         */ 
        public static function substr($string, $start, $length = null)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::substr($string, $start, $length);
        }
                    /**
         * Make a string's first character uppercase.
         *
         * @param string $string
         * @return string 
         * @static 
         */ 
        public static function ucfirst($string)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::ucfirst($string);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {            //Method inherited from \Illuminate\Support\Str         
                        \October\Rain\Support\Str::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {            //Method inherited from \Illuminate\Support\Str         
                        \October\Rain\Support\Str::mixin($mixin);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Support\Str         
                        return \October\Rain\Support\Str::hasMacro($name);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Parse\Markdown
     */ 
        class Markdown {
                    /**
         * Parse text using Markdown and Markdown-Extra
         *
         * @param string $text Markdown text to parse
         * @return string Resulting HTML
         * @static 
         */ 
        public static function parse($text)
        {
                        /** @var \October\Rain\Parse\Markdown $instance */
                        return $instance->parse($text);
        }
                    /**
         * Enables safe mode
         *
         * @param string $text Markdown text to parse
         * @return string Resulting HTML
         * @static 
         */ 
        public static function parseClean($text)
        {
                        /** @var \October\Rain\Parse\Markdown $instance */
                        return $instance->parseClean($text);
        }
                    /**
         * Disables code blocks caused by indentation.
         *
         * @param string $text Markdown text to parse
         * @return string Resulting HTML
         * @static 
         */ 
        public static function parseSafe($text)
        {
                        /** @var \October\Rain\Parse\Markdown $instance */
                        return $instance->parseSafe($text);
        }
                    /**
         * Parse a single line
         *
         * @param string $text Markdown text to parse
         * @return string Resulting HTML
         * @static 
         */ 
        public static function parseLine($text)
        {
                        /** @var \October\Rain\Parse\Markdown $instance */
                        return $instance->parseLine($text);
        }
                    /**
         * Create a new event binding.
         *
         * @return self 
         * @static 
         */ 
        public static function bindEvent($event, $callback, $priority = 0)
        {
                        /** @var \October\Rain\Parse\Markdown $instance */
                        return $instance->bindEvent($event, $callback, $priority);
        }
                    /**
         * Create a new event binding that fires once only
         *
         * @return self 
         * @static 
         */ 
        public static function bindEventOnce($event, $callback)
        {
                        /** @var \October\Rain\Parse\Markdown $instance */
                        return $instance->bindEventOnce($event, $callback);
        }
                    /**
         * Destroys an event binding.
         *
         * @param string $event Event to destroy
         * @return self 
         * @static 
         */ 
        public static function unbindEvent($event = null)
        {
                        /** @var \October\Rain\Parse\Markdown $instance */
                        return $instance->unbindEvent($event);
        }
                    /**
         * Fire an event and call the listeners.
         *
         * @param string $event Event name
         * @param array $params Event parameters
         * @param boolean $halt Halt after first non-null result
         * @return array Collection of event results / Or single result (if halted)
         * @static 
         */ 
        public static function fireEvent($event, $params = [], $halt = false)
        {
                        /** @var \October\Rain\Parse\Markdown $instance */
                        return $instance->fireEvent($event, $params, $halt);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Parse\Yaml
     */ 
        class Yaml {
                    /**
         * Parses supplied YAML contents in to a PHP array.
         *
         * @param string $contents YAML contents to parse.
         * @return array The YAML contents as an array.
         * @static 
         */ 
        public static function parse($contents)
        {
                        /** @var \October\Rain\Parse\Yaml $instance */
                        return $instance->parse($contents);
        }
                    /**
         * Parses YAML file contents in to a PHP array.
         *
         * @param string $fileName File to read contents and parse.
         * @return array The YAML contents as an array.
         * @static 
         */ 
        public static function parseFile($fileName)
        {
                        /** @var \October\Rain\Parse\Yaml $instance */
                        return $instance->parseFile($fileName);
        }
                    /**
         * Renders a PHP array to YAML format.
         *
         * @param array $vars
         * @param array $options Supported options:
         * - inline: The level where you switch to inline YAML.
         * - exceptionOnInvalidType: if an exception must be thrown on invalid types.
         * - objectSupport: if object support is enabled.
         * @static 
         */ 
        public static function render($vars = [], $options = [])
        {
                        /** @var \October\Rain\Parse\Yaml $instance */
                        return $instance->render($vars, $options);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Parse\Ini
     */ 
        class Ini {
                    /**
         * Parses supplied INI contents in to a PHP array.
         *
         * @param string $contents INI contents to parse.
         * @return array 
         * @static 
         */ 
        public static function parse($contents)
        {
                        /** @var \October\Rain\Parse\Ini $instance */
                        return $instance->parse($contents);
        }
                    /**
         * Parses supplied INI file contents in to a PHP array.
         *
         * @param string $fileName File to read contents and parse.
         * @return array 
         * @static 
         */ 
        public static function parseFile($fileName)
        {
                        /** @var \October\Rain\Parse\Ini $instance */
                        return $instance->parseFile($fileName);
        }
                    /**
         * Expands a single array property from traditional INI syntax.
         * 
         * If no key is given to the method, the entire array will be replaced.
         *
         * @param array $array
         * @param string $key
         * @param mixed $value
         * @return array 
         * @static 
         */ 
        public static function expandProperty($array, $key, $value)
        {
                        /** @var \October\Rain\Parse\Ini $instance */
                        return $instance->expandProperty($array, $key, $value);
        }
                    /**
         * Formats an INI file string from an array
         *
         * @param array $vars Data to format.
         * @param int $level Specifies the level of array value.
         * @return string Returns the INI file string.
         * @static 
         */ 
        public static function render($vars = [], $level = 1)
        {
                        /** @var \October\Rain\Parse\Ini $instance */
                        return $instance->render($vars, $level);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Parse\Twig
     */ 
        class Twig {
                    /**
         * Parses supplied Twig contents, with supplied variables.
         *
         * @param string $contents Twig contents to parse.
         * @param array $vars Context variables.
         * @return string 
         * @static 
         */ 
        public static function parse($contents, $vars = [])
        {
                        /** @var \October\Rain\Parse\Twig $instance */
                        return $instance->parse($contents, $vars);
        }
         
    }
            /**
     * 
     *
     * @see \October\Rain\Database\Dongle
     */ 
        class DbDongle {
                    /**
         * Transforms and executes a raw SQL statement
         *
         * @param string $sql
         * @return mixed 
         * @static 
         */ 
        public static function raw($sql)
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->raw($sql);
        }
                    /**
         * Transforms an SQL statement to match the active driver.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parse($sql)
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->parse($sql);
        }
                    /**
         * Transforms GROUP_CONCAT statement.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parseGroupConcat($sql)
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->parseGroupConcat($sql);
        }
                    /**
         * Transforms CONCAT statement.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parseConcat($sql)
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->parseConcat($sql);
        }
                    /**
         * Transforms IFNULL statement.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parseIfNull($sql)
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->parseIfNull($sql);
        }
                    /**
         * Transforms true|false expressions in a statement.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parseBooleanExpression($sql)
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->parseBooleanExpression($sql);
        }
                    /**
         * Some drivers require same-type comparisons.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function cast($sql, $asType = 'INTEGER')
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->cast($sql, $asType);
        }
                    /**
         * Alters a table's TIMESTAMP field(s) to be nullable and converts existing values.
         * 
         * This is needed to transition from older Laravel code that set DEFAULT 0, which is an
         * invalid date in newer MySQL versions where NO_ZERO_DATE is included in strict mode.
         *
         * @param string $table
         * @param string|array $columns Column name(s). Defaults to ['created_at', 'updated_at']
         * @static 
         */ 
        public static function convertTimestamps($table, $columns = null)
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->convertTimestamps($table, $columns);
        }
                    /**
         * Used to disable strict mode during migrations
         *
         * @static 
         */ 
        public static function disableStrictMode()
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->disableStrictMode();
        }
                    /**
         * Returns the driver name as a string, eg: pgsql
         *
         * @return string 
         * @static 
         */ 
        public static function getDriver()
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->getDriver();
        }
                    /**
         * Get the table prefix.
         *
         * @return string 
         * @static 
         */ 
        public static function getTablePrefix()
        {
                        /** @var \October\Rain\Database\Dongle $instance */
                        return $instance->getTablePrefix();
        }
         
    }
            /**
     * 
     *
     * @method static void registerCustomDoctrineType(string $class, string $name, string $type)
     * @see \Illuminate\Database\Schema\Builder
     */ 
        class Schema {
                    /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool 
         * @static 
         */ 
        public static function hasTable($table)
        {
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        return $instance->hasTable($table);
        }
                    /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array 
         * @static 
         */ 
        public static function getColumnListing($table)
        {
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        return $instance->getColumnListing($table);
        }
                    /**
         * Drop all tables from the database.
         *
         * @return void 
         * @static 
         */ 
        public static function dropAllTables()
        {
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        $instance->dropAllTables();
        }
                    /**
         * Set the default string length for migrations.
         *
         * @param int $length
         * @return void 
         * @static 
         */ 
        public static function defaultStringLength($length)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        \Illuminate\Database\Schema\MySqlBuilder::defaultStringLength($length);
        }
                    /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool 
         * @static 
         */ 
        public static function hasColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        return $instance->hasColumn($table, $column);
        }
                    /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool 
         * @static 
         */ 
        public static function hasColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        return $instance->hasColumns($table, $columns);
        }
                    /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @return string 
         * @static 
         */ 
        public static function getColumnType($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        return $instance->getColumnType($table, $column);
        }
                    /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function table($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        $instance->table($table, $callback);
        }
                    /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function create($table, $callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        $instance->create($table, $callback);
        }
                    /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function drop($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        $instance->drop($table);
        }
                    /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function dropIfExists($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        $instance->dropIfExists($table);
        }
                    /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return void 
         * @static 
         */ 
        public static function rename($from, $to)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        $instance->rename($from, $to);
        }
                    /**
         * Enable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function enableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        return $instance->enableForeignKeyConstraints();
        }
                    /**
         * Disable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function disableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        return $instance->disableForeignKeyConstraints();
        }
                    /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function getConnection()
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        return $instance->getConnection();
        }
                    /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */ 
        public static function setConnection($connection)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        return $instance->setConnection($connection);
        }
                    /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function blueprintResolver($resolver)
        {            //Method inherited from \Illuminate\Database\Schema\Builder         
                        /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
                        $instance->blueprintResolver($resolver);
        }
         
    }
     
}

    namespace October\Rain\Database\Updates { 
            /**
     * 
     *
     */ 
        class Seeder {
         
    }
     
}

    namespace Cms\Facades { 
            /**
     * 
     *
     */ 
        class Cms {
                    /**
         * Returns a URL in context of the Frontend
         *
         * @static 
         */ 
        public static function url($path = null)
        {
                        /** @var \Cms\Helpers\Cms $instance */
                        return $instance->url($path);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function safeModeEnabled()
        {
                        return \Cms\Helpers\Cms::safeModeEnabled();
        }
         
    }
     
}

    namespace Backend\Facades { 
            /**
     * 
     *
     */ 
        class Backend {
                    /**
         * Returns the backend URI segment.
         *
         * @static 
         */ 
        public static function uri()
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->uri();
        }
                    /**
         * Returns a URL in context of the Backend
         *
         * @static 
         */ 
        public static function url($path = null, $parameters = [], $secure = null)
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->url($path, $parameters, $secure);
        }
                    /**
         * Returns the base backend URL
         *
         * @static 
         */ 
        public static function baseUrl($path = null)
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->baseUrl($path);
        }
                    /**
         * Returns a URL in context of the active Backend skin
         *
         * @static 
         */ 
        public static function skinAsset($path = null)
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->skinAsset($path);
        }
                    /**
         * Create a new redirect response to a given backend path.
         *
         * @static 
         */ 
        public static function redirect($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->redirect($path, $status, $headers, $secure);
        }
                    /**
         * Create a new backend redirect response, while putting the current URL in the session.
         *
         * @static 
         */ 
        public static function redirectGuest($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->redirectGuest($path, $status, $headers, $secure);
        }
                    /**
         * Create a new redirect response to the previously intended backend location.
         *
         * @static 
         */ 
        public static function redirectIntended($path, $status = 302, $headers = [], $secure = null)
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->redirectIntended($path, $status, $headers, $secure);
        }
                    /**
         * Proxy method for dateTime() using "date" format alias.
         *
         * @return string 
         * @static 
         */ 
        public static function date($dateTime, $options = [])
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->date($dateTime, $options);
        }
                    /**
         * Returns the HTML for a date formatted in the backend.
         * 
         * Supported for formatAlias:
         *   time             -> 6:28 AM
         *   timeLong         -> 6:28:01 AM
         *   date             -> 04/23/2016
         *   dateMin          -> 4/23/2016
         *   dateLong         -> April 23, 2016
         *   dateLongMin      -> Apr 23, 2016
         *   dateTime         -> April 23, 2016 6:28 AM
         *   dateTimeMin      -> Apr 23, 2016 6:28 AM
         *   dateTimeLong     -> Saturday, April 23, 2016 6:28 AM
         *   dateTimeLongMin  -> Sat, Apr 23, 2016 6:29 AM
         *
         * @return string 
         * @static 
         */ 
        public static function dateTime($dateTime, $options = [])
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->dateTime($dateTime, $options);
        }
                    /**
         * Decompiles the compilation asset files
         * 
         * This is used to load each individual asset file, as opposed to using the compilation assets. This is useful only
         * for development, to allow developers to test changes without having to re-compile assets.
         *
         * @param string $file The compilation asset file to decompile
         * @param boolean $skinAsset If true, will load decompiled assets from the "skins" directory.
         * @throws DecompileException If the compilation file cannot be decompiled
         * @return array 
         * @static 
         */ 
        public static function decompileAsset($file, $skinAsset = false)
        {
                        /** @var \Backend\Helpers\Backend $instance */
                        return $instance->decompileAsset($file, $skinAsset);
        }
         
    }
            /**
     * 
     *
     */ 
        class BackendMenu {
                    /**
         * Registers a callback function that defines menu items.
         * 
         * The callback function should register menu items by calling the manager's
         * `registerMenuItems` method. The manager instance is passed to the callback
         * function as an argument. Usage:
         * 
         *     BackendMenu::registerCallback(function ($manager) {
         *         $manager->registerMenuItems([...]);
         *     });
         *
         * @param callable $callback A callable function.
         * @static 
         */ 
        public static function registerCallback($callback)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->registerCallback($callback);
        }
                    /**
         * Registers the back-end menu items.
         * 
         * The argument is an array of the main menu items. The array keys represent the
         * menu item codes, specific for the plugin/module. Each element in the
         * array should be an associative array with the following keys:
         * - label - specifies the menu label localization string key, required.
         * - icon - an icon name from the Font Awesome icon collection, required.
         * - url - the back-end relative URL the menu item should point to, required.
         * - permissions - an array of permissions the back-end user should have, optional.
         *   The item will be displayed if the user has any of the specified permissions.
         * - order - a position of the item in the menu, optional.
         * - counter - an optional numeric value to output near the menu icon. The value should be
         *   a number or a callable returning a number.
         * - counterLabel - an optional string value to describe the numeric reference in counter.
         * - sideMenu - an array of side menu items, optional. If provided, the array items
         *   should represent the side menu item code, and each value should be an associative
         *   array with the following keys:
         *      - label - specifies the menu label localization string key, required.
         *      - icon - an icon name from the Font Awesome icon collection, required.
         *      - url - the back-end relative URL the menu item should point to, required.
         *      - attributes - an array of attributes and values to apply to the menu item, optional.
         *      - permissions - an array of permissions the back-end user should have, optional.
         *      - counter - an optional numeric value to output near the menu icon. The value should be
         *        a number or a callable returning a number.
         *      - counterLabel - an optional string value to describe the numeric reference in counter.
         *      - badge - an optional string value to output near the menu icon. The value should be
         *        a string. This value will override the counter if set.
         *
         * @param string $owner Specifies the menu items owner plugin or module in the format Author.Plugin.
         * @param array $definitions An array of the menu item definitions.
         * @throws SystemException
         * @static 
         */ 
        public static function registerMenuItems($owner, $definitions)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->registerMenuItems($owner, $definitions);
        }
                    /**
         * Dynamically add an array of main menu items
         *
         * @param string $owner
         * @param array $definitions
         * @static 
         */ 
        public static function addMainMenuItems($owner, $definitions)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->addMainMenuItems($owner, $definitions);
        }
                    /**
         * Dynamically add a single main menu item
         *
         * @param string $owner
         * @param string $code
         * @param array $definition
         * @static 
         */ 
        public static function addMainMenuItem($owner, $code, $definition)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->addMainMenuItem($owner, $code, $definition);
        }
                    /**
         * 
         *
         * @param string $owner
         * @param string $code
         * @return \Backend\Classes\MainMenuItem 
         * @throws SystemException
         * @static 
         */ 
        public static function getMainMenuItem($owner, $code)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->getMainMenuItem($owner, $code);
        }
                    /**
         * Removes a single main menu item
         *
         * @param $owner
         * @param $code
         * @static 
         */ 
        public static function removeMainMenuItem($owner, $code)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->removeMainMenuItem($owner, $code);
        }
                    /**
         * Dynamically add an array of side menu items
         *
         * @param string $owner
         * @param string $code
         * @param array $definitions
         * @static 
         */ 
        public static function addSideMenuItems($owner, $code, $definitions)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->addSideMenuItems($owner, $code, $definitions);
        }
                    /**
         * Dynamically add a single side menu item
         *
         * @param string $owner
         * @param string $code
         * @param string $sideCode
         * @param array $definition
         * @return bool 
         * @static 
         */ 
        public static function addSideMenuItem($owner, $code, $sideCode, $definition)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->addSideMenuItem($owner, $code, $sideCode, $definition);
        }
                    /**
         * Removes a single main menu item
         *
         * @param string $owner
         * @param string $code
         * @param string $sideCode
         * @return bool 
         * @static 
         */ 
        public static function removeSideMenuItem($owner, $code, $sideCode)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->removeSideMenuItem($owner, $code, $sideCode);
        }
                    /**
         * Returns a list of the main menu items.
         *
         * @return array 
         * @throws SystemException
         * @static 
         */ 
        public static function listMainMenuItems()
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->listMainMenuItems();
        }
                    /**
         * Returns a list of side menu items for the currently active main menu item.
         * 
         * The currently active main menu item is set with the setContext methods.
         *
         * @param null $owner
         * @param null $code
         * @return \Backend\Classes\SideMenuItem[] 
         * @throws SystemException
         * @static 
         */ 
        public static function listSideMenuItems($owner = null, $code = null)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->listSideMenuItems($owner, $code);
        }
                    /**
         * Sets the navigation context.
         * 
         * The function sets the navigation owner, main menu item code and the side menu item code.
         *
         * @param string $owner Specifies the navigation owner in the format Vendor/Module
         * @param string $mainMenuItemCode Specifies the main menu item code
         * @param string $sideMenuItemCode Specifies the side menu item code
         * @static 
         */ 
        public static function setContext($owner, $mainMenuItemCode, $sideMenuItemCode = null)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->setContext($owner, $mainMenuItemCode, $sideMenuItemCode);
        }
                    /**
         * Sets the navigation context.
         * 
         * The function sets the navigation owner.
         *
         * @param string $owner Specifies the navigation owner in the format Vendor/Module
         * @static 
         */ 
        public static function setContextOwner($owner)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->setContextOwner($owner);
        }
                    /**
         * Specifies a code of the main menu item in the current navigation context.
         *
         * @param string $mainMenuItemCode Specifies the main menu item code
         * @static 
         */ 
        public static function setContextMainMenu($mainMenuItemCode)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->setContextMainMenu($mainMenuItemCode);
        }
                    /**
         * Returns information about the current navigation context.
         *
         * @return mixed Returns an object with the following fields:
         * - mainMenuCode
         * - sideMenuCode
         * - owner
         * @static 
         */ 
        public static function getContext()
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->getContext();
        }
                    /**
         * Specifies a code of the side menu item in the current navigation context.
         * 
         * If the code is set to TRUE, the first item will be flagged as active.
         *
         * @param string $sideMenuItemCode Specifies the side menu item code
         * @static 
         */ 
        public static function setContextSideMenu($sideMenuItemCode)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->setContextSideMenu($sideMenuItemCode);
        }
                    /**
         * Determines if a main menu item is active.
         *
         * @param \Backend\Classes\MainMenuItem $item Specifies the item object.
         * @return boolean Returns true if the menu item is active.
         * @static 
         */ 
        public static function isMainMenuItemActive($item)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->isMainMenuItemActive($item);
        }
                    /**
         * Returns the currently active main menu item
         *
         * @return null|\Backend\Classes\MainMenuItem $item Returns the item object or null.
         * @throws SystemException
         * @static 
         */ 
        public static function getActiveMainMenuItem()
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->getActiveMainMenuItem();
        }
                    /**
         * Determines if a side menu item is active.
         *
         * @param \Backend\Classes\SideMenuItem $item Specifies the item object.
         * @return boolean Returns true if the side item is active.
         * @static 
         */ 
        public static function isSideMenuItemActive($item)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->isSideMenuItemActive($item);
        }
                    /**
         * Registers a special side navigation partial for a specific main menu.
         * 
         * The sidenav partial replaces the standard side navigation.
         *
         * @param string $owner Specifies the navigation owner in the format Vendor/Module.
         * @param string $mainMenuItemCode Specifies the main menu item code.
         * @param string $partial Specifies the partial name.
         * @static 
         */ 
        public static function registerContextSidenavPartial($owner, $mainMenuItemCode, $partial)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->registerContextSidenavPartial($owner, $mainMenuItemCode, $partial);
        }
                    /**
         * Returns the side navigation partial for a specific main menu previously registered
         * with the registerContextSidenavPartial() method.
         *
         * @param string $owner Specifies the navigation owner in the format Vendor/Module.
         * @param string $mainMenuItemCode Specifies the main menu item code.
         * @return mixed Returns the partial name or null.
         * @static 
         */ 
        public static function getContextSidenavPartial($owner, $mainMenuItemCode)
        {
                        /** @var \Backend\Classes\NavigationManager $instance */
                        return $instance->getContextSidenavPartial($owner, $mainMenuItemCode);
        }
                    /**
         * Create a new instance of this singleton.
         *
         * @static 
         */ 
        public static function instance()
        {
                        return \Backend\Classes\NavigationManager::instance();
        }
                    /**
         * Forget this singleton's instance if it exists
         *
         * @static 
         */ 
        public static function forgetInstance()
        {
                        return \Backend\Classes\NavigationManager::forgetInstance();
        }
         
    }
            /**
     * 
     *
     */ 
        class BackendAuth {
                    /**
         * Registers a callback function that defines authentication permissions.
         * 
         * The callback function should register permissions by calling the manager's
         * registerPermissions() function. The manager instance is passed to the
         * callback function as an argument. Usage:
         * 
         *     BackendAuth::registerCallback(function ($manager) {
         *         $manager->registerPermissions([...]);
         *     });
         *
         * @param callable $callback A callable function.
         * @static 
         */ 
        public static function registerCallback($callback)
        {
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->registerCallback($callback);
        }
                    /**
         * Registers the back-end permission items.
         * 
         * The argument is an array of the permissions. The array keys represent the
         * permission codes, specific for the plugin/module. Each element in the
         * array should be an associative array with the following keys:
         * - label - specifies the menu label localization string key, required.
         * - order - a position of the item in the menu, optional.
         * - comment - a brief comment that describes the permission, optional.
         * - tab - assign this permission to a tabbed group, optional.
         *
         * @param string $owner Specifies the permissions' owner plugin or module in the format Author.Plugin
         * @param array $definitions An array of the menu item definitions.
         * @static 
         */ 
        public static function registerPermissions($owner, $definitions)
        {
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->registerPermissions($owner, $definitions);
        }
                    /**
         * Removes a single back-end permission
         *
         * @param string $owner Specifies the permissions' owner plugin or module in the format Author.Plugin
         * @param string $code The code of the permission to remove
         * @return void 
         * @static 
         */ 
        public static function removePermission($owner, $code)
        {
                        /** @var \Backend\Classes\AuthManager $instance */
                        $instance->removePermission($owner, $code);
        }
                    /**
         * Returns a list of the registered permissions items.
         *
         * @return array 
         * @static 
         */ 
        public static function listPermissions()
        {
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->listPermissions();
        }
                    /**
         * Returns an array of registered permissions, grouped by tabs.
         *
         * @return array 
         * @static 
         */ 
        public static function listTabbedPermissions()
        {
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->listTabbedPermissions();
        }
                    /**
         * Returns an array of registered permissions belonging to a given role code
         *
         * @param string $role
         * @param bool $includeOrphans
         * @return array 
         * @static 
         */ 
        public static function listPermissionsForRole($role, $includeOrphans = true)
        {
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->listPermissionsForRole($role, $includeOrphans);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function hasPermissionsForRole($role)
        {
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->hasPermissionsForRole($role);
        }
                    /**
         * Creates a new instance of the user model
         *
         * @return \October\Rain\Auth\Models\User 
         * @static 
         */ 
        public static function createUserModel()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->createUserModel();
        }
                    /**
         * Extend the query used for finding the user.
         *
         * @param \October\Rain\Database\Builder $query
         * @return void 
         * @static 
         */ 
        public static function extendUserQuery($query)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        $instance->extendUserQuery($query);
        }
                    /**
         * Registers a user with the provided credentials with optional flags
         * for activating the newly created user and automatically logging them in
         *
         * @param array $credentials
         * @param bool $activate
         * @param bool $autoLogin
         * @return \October\Rain\Auth\Models\User 
         * @static 
         */ 
        public static function register($credentials, $activate = false, $autoLogin = true)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->register($credentials, $activate, $autoLogin);
        }
                    /**
         * Sets the user
         *
         * @static 
         */ 
        public static function setUser($user)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->setUser($user);
        }
                    /**
         * Returns the current user, if any.
         *
         * @return mixed (Models\User || null)
         * @static 
         */ 
        public static function getUser()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->getUser();
        }
                    /**
         * Finds a user by the login value.
         *
         * @param string $id
         * @return mixed (Models\User || null)
         * @static 
         */ 
        public static function findUserById($id)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->findUserById($id);
        }
                    /**
         * Finds a user by the login value.
         *
         * @param string $login
         * @return mixed (Models\User || null)
         * @static 
         */ 
        public static function findUserByLogin($login)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->findUserByLogin($login);
        }
                    /**
         * Finds a user by the given credentials.
         *
         * @param array $credentials The credentials to find a user by
         * @throws AuthException If the credentials are invalid
         * @return \October\Rain\Auth\Models\User The requested user
         * @static 
         */ 
        public static function findUserByCredentials($credentials)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->findUserByCredentials($credentials);
        }
                    /**
         * Creates an instance of the throttle model
         *
         * @return \October\Rain\Auth\Models\Throttle 
         * @static 
         */ 
        public static function createThrottleModel()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->createThrottleModel();
        }
                    /**
         * Find a throttle record by login and ip address
         *
         * @param string $loginName
         * @param string $ipAddress
         * @return \October\Rain\Auth\Models\Throttle 
         * @static 
         */ 
        public static function findThrottleByLogin($loginName, $ipAddress)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->findThrottleByLogin($loginName, $ipAddress);
        }
                    /**
         * Find a throttle record by user id and ip address
         *
         * @param integer $userId
         * @param string $ipAddress
         * @return \October\Rain\Auth\Models\Throttle 
         * @static 
         */ 
        public static function findThrottleByUserId($userId, $ipAddress = null)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->findThrottleByUserId($userId, $ipAddress);
        }
                    /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials The user login details
         * @param bool $remember Store a non-expire cookie for the user
         * @throws AuthException If authentication fails
         * @return \October\Rain\Auth\Models\User The successfully logged in user
         * @static 
         */ 
        public static function attempt($credentials = [], $remember = false)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->attempt($credentials, $remember);
        }
                    /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function validate($credentials = [])
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->validate($credentials);
        }
                    /**
         * Attempts to authenticate the given user according to the passed credentials.
         *
         * @param array $credentials The user login details
         * @param bool $remember Store a non-expire cookie for the user
         * @static 
         */ 
        public static function authenticate($credentials, $remember = true)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->authenticate($credentials, $remember);
        }
                    /**
         * Check to see if the user is logged in and activated, and hasn't been banned or suspended.
         *
         * @return bool 
         * @static 
         */ 
        public static function check()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->check();
        }
                    /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */ 
        public static function guest()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->guest();
        }
                    /**
         * Get the currently authenticated user.
         *
         * @return \App\User|null 
         * @static 
         */ 
        public static function user()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->user();
        }
                    /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|null 
         * @static 
         */ 
        public static function id()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->id();
        }
                    /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function once($credentials = [])
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->once($credentials);
        }
                    /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return \App\User|false 
         * @static 
         */ 
        public static function onceUsingId($id)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->onceUsingId($id);
        }
                    /**
         * Logs in the given user and sets properties
         * in the session.
         *
         * @throws AuthException If the user is not activated and $this->requireActivation = true
         * @static 
         */ 
        public static function login($user, $remember = true)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->login($user, $remember);
        }
                    /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \App\User 
         * @static 
         */ 
        public static function loginUsingId($id, $remember = false)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->loginUsingId($id, $remember);
        }
                    /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool 
         * @static 
         */ 
        public static function viaRemember()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->viaRemember();
        }
                    /**
         * Logs the current user out.
         *
         * @static 
         */ 
        public static function logout()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->logout();
        }
                    /**
         * Impersonates the given user and sets properties
         * in the session but not the cookie.
         *
         * @static 
         */ 
        public static function impersonate($user)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->impersonate($user);
        }
                    /**
         * Stop the current session being impersonated and
         * authenticate as the impersonator again
         *
         * @static 
         */ 
        public static function stopImpersonate()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->stopImpersonate();
        }
                    /**
         * Check to see if the current session is being impersonated
         *
         * @return bool 
         * @static 
         */ 
        public static function isImpersonator()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->isImpersonator();
        }
                    /**
         * Get the original user doing the impersonation
         *
         * @return mixed Returns the User model for the impersonator if able, false if not
         * @static 
         */ 
        public static function getImpersonator()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \Backend\Classes\AuthManager $instance */
                        return $instance->getImpersonator();
        }
                    /**
         * Create a new instance of this singleton.
         *
         * @static 
         */ 
        public static function instance()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        return \Backend\Classes\AuthManager::instance();
        }
                    /**
         * Forget this singleton's instance if it exists
         *
         * @static 
         */ 
        public static function forgetInstance()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        return \Backend\Classes\AuthManager::forgetInstance();
        }
         
    }
     
}

    namespace October\Rain\Exception { 
            /**
     * This class represents an AJAX exception.
     * 
     * These are considered "smart errors" and will send http code 406,
     * so they can pass response contents.
     *
     * @package october\exception
     * @author Alexey Bobkov, Samuel Georges
     */ 
        class AjaxException {
         
    }
            /**
     * This class represents a critical system exception.
     * 
     * System exceptions are logged in the error log.
     *
     * @package october\exception
     * @author Alexey Bobkov, Samuel Georges, Luke Towers
     */ 
        class SystemException {
         
    }
            /**
     * This class represents an application exception.
     * 
     * Application exceptions are not logged in the error log.
     *
     * @package october\exception
     * @author Alexey Bobkov, Samuel Georges, Luke Towers
     */ 
        class ApplicationException {
         
    }
            /**
     * Validation exception class.
     *
     * @package october\exception
     * @author Alexey Bobkov, Samuel Georges
     */ 
        class ValidationException {
         
    }
     
}

    namespace Jenssegers\Date { 
            /**
     * 
     *
     */ 
        class Date {
         
    }
     
}

    namespace Sentry\Laravel { 
            /**
     * 
     *
     * @see \Sentry\State\HubInterface
     */ 
        class Facade {
                    /**
         * Gets the client bound to the top of the stack.
         *
         * @static 
         */ 
        public static function getClient()
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->getClient();
        }
                    /**
         * Gets the ID of the last captured event.
         *
         * @static 
         */ 
        public static function getLastEventId()
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->getLastEventId();
        }
                    /**
         * Creates a new scope to store context information that will be layered on
         * top of the current one. It is isolated, i.e. all breadcrumbs and context
         * information added to this scope will be removed once the scope ends. Be
         * sure to always remove this scope with {@see Hub::popScope} when the
         * operation finishes or throws.
         *
         * @static 
         */ 
        public static function pushScope()
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->pushScope();
        }
                    /**
         * Removes a previously pushed scope from the stack. This restores the state
         * before the scope was pushed. All breadcrumbs and context information added
         * since the last call to {@see Hub::pushScope} are discarded.
         *
         * @static 
         */ 
        public static function popScope()
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->popScope();
        }
                    /**
         * Creates a new scope with and executes the given operation within. The scope
         * is automatically removed once the operation finishes or throws.
         *
         * @param callable $callback The callback to be executed
         * @return mixed|void The callback's return value, upon successful execution
         * @psalm-template T
         * @psalm-param callable(Scope): T $callback
         * @psalm-return T
         * @static 
         */ 
        public static function withScope($callback)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->withScope($callback);
        }
                    /**
         * Calls the given callback passing to it the current scope so that any
         * operation can be run within its context.
         *
         * @param callable $callback The callback to be executed
         * @static 
         */ 
        public static function configureScope($callback)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->configureScope($callback);
        }
                    /**
         * Binds the given client to the current scope.
         *
         * @param \Sentry\State\ClientInterface $client The client
         * @static 
         */ 
        public static function bindClient($client)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->bindClient($client);
        }
                    /**
         * Captures a message event and sends it to Sentry.
         *
         * @param string $message The message
         * @param \Sentry\State\Severity|null $level The severity level of the message
         * @param \Sentry\State\EventHint|null $hint Object that can contain additional information about the event
         * @static 
         */ 
        public static function captureMessage($message, $level = null, $hint = null)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->captureMessage($message, $level, $hint);
        }
                    /**
         * Captures an exception event and sends it to Sentry.
         *
         * @param \Throwable $exception The exception
         * @param \Sentry\State\EventHint|null $hint Object that can contain additional information about the event
         * @static 
         */ 
        public static function captureException($exception, $hint = null)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->captureException($exception, $hint);
        }
                    /**
         * Captures a new event using the provided data.
         *
         * @param \Event $event The event being captured
         * @param \Sentry\State\EventHint|null $hint May contain additional information about the event
         * @static 
         */ 
        public static function captureEvent($event, $hint = null)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->captureEvent($event, $hint);
        }
                    /**
         * Captures an event that logs the last occurred error.
         *
         * @param \Sentry\State\EventHint|null $hint Object that can contain additional information about the event
         * @static 
         */ 
        public static function captureLastError($hint = null)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->captureLastError($hint);
        }
                    /**
         * {@inheritdoc}
         *
         * @param int|float|null $duration
         * @static 
         */ 
        public static function captureCheckIn($slug, $status, $duration = null, $monitorConfig = null, $checkInId = null)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->captureCheckIn($slug, $status, $duration, $monitorConfig, $checkInId);
        }
                    /**
         * Records a new breadcrumb which will be attached to future events. They
         * will be added to subsequent events to provide more context on user's
         * actions prior to an error or crash.
         *
         * @param \Sentry\State\Breadcrumb $breadcrumb The breadcrumb to record
         * @return bool Whether the breadcrumb was actually added to the current scope
         * @static 
         */ 
        public static function addBreadcrumb($breadcrumb)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->addBreadcrumb($breadcrumb);
        }
                    /**
         * Gets the integration whose FQCN matches the given one if it's available on the current client.
         *
         * @param string $className The FQCN of the integration
         * @psalm-template T of IntegrationInterface
         * @psalm-param class-string<T> $className
         * @psalm-return T|null
         * @static 
         */ 
        public static function getIntegration($className)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->getIntegration($className);
        }
                    /**
         * Starts a new `Transaction` and returns it. This is the entry point to manual
         * tracing instrumentation.
         * 
         * A tree structure can be built by adding child spans to the transaction, and
         * child spans to other spans. To start a new child span within the transaction
         * or any span, call the respective `startChild()` method.
         * 
         * Every child span must be finished before the transaction is finished,
         * otherwise the unfinished spans are discarded.
         * 
         * The transaction must be finished with a call to its `finish()` method, at
         * which point the transaction with all its finished child spans will be sent to
         * Sentry.
         *
         * @param array<string, mixed> $customSamplingContext Additional context that will be passed to the {@see SamplingContext}
         * @param \Sentry\State\TransactionContext $context Properties of the new transaction
         * @param array<string, mixed> $customSamplingContext Additional context that will be passed to the {@see SamplingContext}
         * @static 
         */ 
        public static function startTransaction($context, $customSamplingContext = [])
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->startTransaction($context, $customSamplingContext);
        }
                    /**
         * Returns the transaction that is on the Hub.
         *
         * @static 
         */ 
        public static function getTransaction()
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->getTransaction();
        }
                    /**
         * Sets the span on the Hub.
         *
         * @param \Sentry\State\Span|null $span The span
         * @static 
         */ 
        public static function setSpan($span)
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->setSpan($span);
        }
                    /**
         * Returns the span that is on the Hub.
         *
         * @static 
         */ 
        public static function getSpan()
        {
                        /** @var \Sentry\State\Hub $instance */
                        return $instance->getSpan();
        }
         
    }
     
}

    namespace RainLab\User\Facades { 
            /**
     * 
     *
     * @see \RainLab\User\Classes\AuthManager
     */ 
        class Auth {
                    /**
         * 
         *
         * @static 
         */ 
        public static function init()
        {
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->init();
        }
                    /**
         * {@inheritDoc}
         *
         * @static 
         */ 
        public static function extendUserQuery($query)
        {
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->extendUserQuery($query);
        }
                    /**
         * {@inheritDoc}
         *
         * @static 
         */ 
        public static function register($credentials, $activate = false, $autoLogin = true)
        {
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->register($credentials, $activate, $autoLogin);
        }
                    /**
         * findUserByEmail finds a user by the email value, which includes
         * deactivated (trashed) user records.
         *
         * @param string $email
         * @return \RainLab\User\Classes\Authenticatable|null 
         * @static 
         */ 
        public static function findUserByEmail($email)
        {
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->findUserByEmail($email);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function findGuestUserByCredentials($credentials)
        {
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->findGuestUserByCredentials($credentials);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function findGuestUser($email)
        {
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->findGuestUser($email);
        }
                    /**
         * Registers a guest user by giving the required credentials.
         *
         * @param array $credentials
         * @return \RainLab\User\Classes\Models\User 
         * @static 
         */ 
        public static function registerGuest($credentials)
        {
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->registerGuest($credentials);
        }
                    /**
         * Converts a guest user to a registered user.
         *
         * @param \RainLab\User\Classes\Models\User $user
         * @param array $credentials
         * @param bool $activate
         * @return \RainLab\User\Classes\Models\User 
         * @static 
         */ 
        public static function convertGuestToUser($user, $credentials, $activate = false)
        {
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->convertGuestToUser($user, $credentials, $activate);
        }
                    /**
         * Creates a new instance of the user model
         *
         * @return \October\Rain\Auth\Models\User 
         * @static 
         */ 
        public static function createUserModel()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->createUserModel();
        }
                    /**
         * Sets the user
         *
         * @static 
         */ 
        public static function setUser($user)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->setUser($user);
        }
                    /**
         * Returns the current user, if any.
         *
         * @return mixed (Models\User || null)
         * @static 
         */ 
        public static function getUser()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->getUser();
        }
                    /**
         * Finds a user by the login value.
         *
         * @param string $id
         * @return mixed (Models\User || null)
         * @static 
         */ 
        public static function findUserById($id)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->findUserById($id);
        }
                    /**
         * Finds a user by the login value.
         *
         * @param string $login
         * @return mixed (Models\User || null)
         * @static 
         */ 
        public static function findUserByLogin($login)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->findUserByLogin($login);
        }
                    /**
         * Finds a user by the given credentials.
         *
         * @param array $credentials The credentials to find a user by
         * @throws AuthException If the credentials are invalid
         * @return \October\Rain\Auth\Models\User The requested user
         * @static 
         */ 
        public static function findUserByCredentials($credentials)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->findUserByCredentials($credentials);
        }
                    /**
         * Creates an instance of the throttle model
         *
         * @return \October\Rain\Auth\Models\Throttle 
         * @static 
         */ 
        public static function createThrottleModel()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->createThrottleModel();
        }
                    /**
         * Find a throttle record by login and ip address
         *
         * @param string $loginName
         * @param string $ipAddress
         * @return \October\Rain\Auth\Models\Throttle 
         * @static 
         */ 
        public static function findThrottleByLogin($loginName, $ipAddress)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->findThrottleByLogin($loginName, $ipAddress);
        }
                    /**
         * Find a throttle record by user id and ip address
         *
         * @param integer $userId
         * @param string $ipAddress
         * @return \October\Rain\Auth\Models\Throttle 
         * @static 
         */ 
        public static function findThrottleByUserId($userId, $ipAddress = null)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->findThrottleByUserId($userId, $ipAddress);
        }
                    /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials The user login details
         * @param bool $remember Store a non-expire cookie for the user
         * @throws AuthException If authentication fails
         * @return \October\Rain\Auth\Models\User The successfully logged in user
         * @static 
         */ 
        public static function attempt($credentials = [], $remember = false)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->attempt($credentials, $remember);
        }
                    /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function validate($credentials = [])
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->validate($credentials);
        }
                    /**
         * Attempts to authenticate the given user according to the passed credentials.
         *
         * @param array $credentials The user login details
         * @param bool $remember Store a non-expire cookie for the user
         * @static 
         */ 
        public static function authenticate($credentials, $remember = true)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->authenticate($credentials, $remember);
        }
                    /**
         * Check to see if the user is logged in and activated, and hasn't been banned or suspended.
         *
         * @return bool 
         * @static 
         */ 
        public static function check()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->check();
        }
                    /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */ 
        public static function guest()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->guest();
        }
                    /**
         * Get the currently authenticated user.
         *
         * @return \App\User|null 
         * @static 
         */ 
        public static function user()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->user();
        }
                    /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|null 
         * @static 
         */ 
        public static function id()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->id();
        }
                    /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function once($credentials = [])
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->once($credentials);
        }
                    /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return \App\User|false 
         * @static 
         */ 
        public static function onceUsingId($id)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->onceUsingId($id);
        }
                    /**
         * Logs in the given user and sets properties
         * in the session.
         *
         * @throws AuthException If the user is not activated and $this->requireActivation = true
         * @static 
         */ 
        public static function login($user, $remember = true)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->login($user, $remember);
        }
                    /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \App\User 
         * @static 
         */ 
        public static function loginUsingId($id, $remember = false)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->loginUsingId($id, $remember);
        }
                    /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool 
         * @static 
         */ 
        public static function viaRemember()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->viaRemember();
        }
                    /**
         * Logs the current user out.
         *
         * @static 
         */ 
        public static function logout()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->logout();
        }
                    /**
         * Impersonates the given user and sets properties
         * in the session but not the cookie.
         *
         * @static 
         */ 
        public static function impersonate($user)
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->impersonate($user);
        }
                    /**
         * Stop the current session being impersonated and
         * authenticate as the impersonator again
         *
         * @static 
         */ 
        public static function stopImpersonate()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->stopImpersonate();
        }
                    /**
         * Check to see if the current session is being impersonated
         *
         * @return bool 
         * @static 
         */ 
        public static function isImpersonator()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->isImpersonator();
        }
                    /**
         * Get the original user doing the impersonation
         *
         * @return mixed Returns the User model for the impersonator if able, false if not
         * @static 
         */ 
        public static function getImpersonator()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        /** @var \RainLab\User\Classes\AuthManager $instance */
                        return $instance->getImpersonator();
        }
                    /**
         * Create a new instance of this singleton.
         *
         * @static 
         */ 
        public static function instance()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        return \RainLab\User\Classes\AuthManager::instance();
        }
                    /**
         * Forget this singleton's instance if it exists
         *
         * @static 
         */ 
        public static function forgetInstance()
        {            //Method inherited from \October\Rain\Auth\Manager         
                        return \RainLab\User\Classes\AuthManager::forgetInstance();
        }
         
    }
     
}

    namespace Barryvdh\Debugbar { 
            /**
     * 
     *
     */ 
        class Facade {
                    /**
         * Enable the Debugbar and boot, if not already booted.
         *
         * @static 
         */ 
        public static function enable()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->enable();
        }
                    /**
         * Boot the debugbar (add collectors, renderer and listener)
         *
         * @static 
         */ 
        public static function boot()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->boot();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldCollect($name, $default = false)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->shouldCollect($name, $default);
        }
                    /**
         * Handle silenced errors
         *
         * @param $level
         * @param $message
         * @param string $file
         * @param int $line
         * @param array $context
         * @throws \ErrorException
         * @static 
         */ 
        public static function handleError($level, $message, $file = '', $line = 0, $context = [])
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->handleError($level, $message, $file, $line, $context);
        }
                    /**
         * Starts a measure
         *
         * @param string $name Internal name, used to stop the measure
         * @param string $label Public name
         * @static 
         */ 
        public static function startMeasure($name, $label = null)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->startMeasure($name, $label);
        }
                    /**
         * Stops a measure
         *
         * @param string $name
         * @static 
         */ 
        public static function stopMeasure($name)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->stopMeasure($name);
        }
                    /**
         * Adds an exception to be profiled in the debug bar
         *
         * @param \Exception $e
         * @deprecated in favor of addThrowable
         * @static 
         */ 
        public static function addException($e)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addException($e);
        }
                    /**
         * Adds an exception to be profiled in the debug bar
         *
         * @param \Exception $e
         * @static 
         */ 
        public static function addThrowable($e)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addThrowable($e);
        }
                    /**
         * Returns a JavascriptRenderer for this instance
         *
         * @param string $baseUrl
         * @param string $basePathng
         * @return \Barryvdh\Debugbar\JavascriptRenderer 
         * @static 
         */ 
        public static function getJavascriptRenderer($baseUrl = null, $basePath = null)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getJavascriptRenderer($baseUrl, $basePath);
        }
                    /**
         * Modify the response and inject the debugbar (or data in headers)
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param \Symfony\Component\HttpFoundation\Response $response
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */ 
        public static function modifyResponse($request, $response)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->modifyResponse($request, $response);
        }
                    /**
         * Check if the Debugbar is enabled
         *
         * @return boolean 
         * @static 
         */ 
        public static function isEnabled()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->isEnabled();
        }
                    /**
         * Collects the data from the collectors
         *
         * @return array 
         * @static 
         */ 
        public static function collect()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->collect();
        }
                    /**
         * Injects the web debug toolbar into the given Response.
         *
         * @param \Symfony\Component\HttpFoundation\Response $response A Response instance
         * Based on https://github.com/symfony/WebProfilerBundle/blob/master/EventListener/WebDebugToolbarListener.php
         * @static 
         */ 
        public static function injectDebugbar($response)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->injectDebugbar($response);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function injectDebugbarCSP($response)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->injectDebugbarCSP($response);
        }
                    /**
         * Disable the Debugbar
         *
         * @static 
         */ 
        public static function disable()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->disable();
        }
                    /**
         * Adds a measure
         *
         * @param string $label
         * @param float $start
         * @param float $end
         * @static 
         */ 
        public static function addMeasure($label, $start, $end)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addMeasure($label, $start, $end);
        }
                    /**
         * Utility function to measure the execution of a Closure
         *
         * @param string $label
         * @param \Closure $closure
         * @static 
         */ 
        public static function measure($label, $closure)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->measure($label, $closure);
        }
                    /**
         * Collect data in a CLI request
         *
         * @return array 
         * @static 
         */ 
        public static function collectConsole()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->collectConsole();
        }
                    /**
         * Adds a message to the MessagesCollector
         * 
         * A message can be anything from an object to a string
         *
         * @param mixed $message
         * @param string $label
         * @static 
         */ 
        public static function addMessage($message, $label = 'info')
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addMessage($message, $label);
        }
                    /**
         * Adds a data collector
         *
         * @param \DebugBar\DataCollectorInterface $collector
         * @throws DebugBarException
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */ 
        public static function addCollector($collector)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addCollector($collector);
        }
                    /**
         * Checks if a data collector has been added
         *
         * @param string $name
         * @return boolean 
         * @static 
         */ 
        public static function hasCollector($name)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->hasCollector($name);
        }
                    /**
         * Returns a data collector
         *
         * @param string $name
         * @return \DebugBar\DataCollectorInterface 
         * @throws DebugBarException
         * @static 
         */ 
        public static function getCollector($name)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getCollector($name);
        }
                    /**
         * Returns an array of all data collectors
         *
         * @return \DebugBar\array[DataCollectorInterface] 
         * @static 
         */ 
        public static function getCollectors()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getCollectors();
        }
                    /**
         * Sets the request id generator
         *
         * @param \DebugBar\RequestIdGeneratorInterface $generator
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */ 
        public static function setRequestIdGenerator($generator)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setRequestIdGenerator($generator);
        }
                    /**
         * 
         *
         * @return \DebugBar\RequestIdGeneratorInterface 
         * @static 
         */ 
        public static function getRequestIdGenerator()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getRequestIdGenerator();
        }
                    /**
         * Returns the id of the current request
         *
         * @return string 
         * @static 
         */ 
        public static function getCurrentRequestId()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getCurrentRequestId();
        }
                    /**
         * Sets the storage backend to use to store the collected data
         *
         * @param \DebugBar\StorageInterface $storage
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */ 
        public static function setStorage($storage = null)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setStorage($storage);
        }
                    /**
         * 
         *
         * @return \DebugBar\StorageInterface 
         * @static 
         */ 
        public static function getStorage()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getStorage();
        }
                    /**
         * Checks if the data will be persisted
         *
         * @return boolean 
         * @static 
         */ 
        public static function isDataPersisted()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->isDataPersisted();
        }
                    /**
         * Sets the HTTP driver
         *
         * @param \DebugBar\HttpDriverInterface $driver
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */ 
        public static function setHttpDriver($driver)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setHttpDriver($driver);
        }
                    /**
         * Returns the HTTP driver
         * 
         * If no http driver where defined, a PhpHttpDriver is automatically created
         *
         * @return \DebugBar\HttpDriverInterface 
         * @static 
         */ 
        public static function getHttpDriver()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getHttpDriver();
        }
                    /**
         * Returns collected data
         * 
         * Will collect the data if none have been collected yet
         *
         * @return array 
         * @static 
         */ 
        public static function getData()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getData();
        }
                    /**
         * Returns an array of HTTP headers containing the data
         *
         * @param string $headerName
         * @param integer $maxHeaderLength
         * @return array 
         * @static 
         */ 
        public static function getDataAsHeaders($headerName = 'phpdebugbar', $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getDataAsHeaders($headerName, $maxHeaderLength, $maxTotalHeaderLength);
        }
                    /**
         * Sends the data through the HTTP headers
         *
         * @param bool $useOpenHandler
         * @param string $headerName
         * @param integer $maxHeaderLength
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */ 
        public static function sendDataInHeaders($useOpenHandler = null, $headerName = 'phpdebugbar', $maxHeaderLength = 4096)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->sendDataInHeaders($useOpenHandler, $headerName, $maxHeaderLength);
        }
                    /**
         * Stacks the data in the session for later rendering
         *
         * @static 
         */ 
        public static function stackData()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->stackData();
        }
                    /**
         * Checks if there is stacked data in the session
         *
         * @return boolean 
         * @static 
         */ 
        public static function hasStackedData()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->hasStackedData();
        }
                    /**
         * Returns the data stacked in the session
         *
         * @param boolean $delete Whether to delete the data in the session
         * @return array 
         * @static 
         */ 
        public static function getStackedData($delete = true)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getStackedData($delete);
        }
                    /**
         * Sets the key to use in the $_SESSION array
         *
         * @param string $ns
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */ 
        public static function setStackDataSessionNamespace($ns)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setStackDataSessionNamespace($ns);
        }
                    /**
         * Returns the key used in the $_SESSION array
         *
         * @return string 
         * @static 
         */ 
        public static function getStackDataSessionNamespace()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getStackDataSessionNamespace();
        }
                    /**
         * Sets whether to only use the session to store stacked data even
         * if a storage is enabled
         *
         * @param boolean $enabled
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */ 
        public static function setStackAlwaysUseSessionStorage($enabled = true)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setStackAlwaysUseSessionStorage($enabled);
        }
                    /**
         * Checks if the session is always used to store stacked data
         * even if a storage is enabled
         *
         * @return boolean 
         * @static 
         */ 
        public static function isStackAlwaysUseSessionStorage()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->isStackAlwaysUseSessionStorage();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetSet($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetGet($key)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetExists($key)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function offsetUnset($key)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetUnset($key);
        }
         
    }
     
}


namespace  { 
            class App extends \Illuminate\Support\Facades\App {}
            class Artisan extends \Illuminate\Support\Facades\Artisan {}
            class Bus extends \Illuminate\Support\Facades\Bus {}
            class Cache extends \Illuminate\Support\Facades\Cache {}
            class Cookie extends \Illuminate\Support\Facades\Cookie {}
            class Crypt extends \Illuminate\Support\Facades\Crypt {}
            class Db extends \Illuminate\Support\Facades\DB {}
            class DB extends \Illuminate\Support\Facades\DB {}
            class Eloquent extends \Illuminate\Database\Eloquent\Model {             
                /**
             * Create and return an un-saved model instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function make($attributes = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->make($attributes);
            }
             
                /**
             * Register a new global scope.
             *
             * @param string $identifier
             * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withGlobalScope($identifier, $scope)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withGlobalScope($identifier, $scope);
            }
             
                /**
             * Remove a registered global scope.
             *
             * @param \Illuminate\Database\Eloquent\Scope|string $scope
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withoutGlobalScope($scope)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withoutGlobalScope($scope);
            }
             
                /**
             * Remove all or passed registered global scopes.
             *
             * @param array|null $scopes
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withoutGlobalScopes($scopes = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withoutGlobalScopes($scopes);
            }
             
                /**
             * Get an array of global scopes that were removed from the query.
             *
             * @return array 
             * @static 
             */ 
            public static function removedScopes()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->removedScopes();
            }
             
                /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereKey($id)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereKey($id);
            }
             
                /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereKeyNot($id)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereKeyNot($id);
            }
             
                /**
             * Add a basic where clause to the query.
             *
             * @param string|array|\Closure $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function where($column, $operator = null, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->where($column, $operator, $value, $boolean);
            }
             
                /**
             * Add an "or where" clause to the query.
             *
             * @param \Closure|array|string $column
             * @param string $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhere($column, $operator = null, $value = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhere($column, $operator, $value);
            }
             
                /**
             * Create a collection of models from plain arrays.
             *
             * @param array $items
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function hydrate($items)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->hydrate($items);
            }
             
                /**
             * Create a collection of models from a raw query.
             *
             * @param string $query
             * @param array $bindings
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function fromQuery($query, $bindings = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->fromQuery($query, $bindings);
            }
             
                /**
             * Find a model by its primary key.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null 
             * @static 
             */ 
            public static function find($id, $columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->find($id, $columns);
            }
             
                /**
             * Find multiple models by their primary keys.
             *
             * @param \Illuminate\Contracts\Support\Arrayable|array $ids
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function findMany($ids, $columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->findMany($ids, $columns);
            }
             
                /**
             * Find a model by its primary key or throw an exception.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
             * @static 
             */ 
            public static function findOrFail($id, $columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->findOrFail($id, $columns);
            }
             
                /**
             * Find a model by its primary key or return fresh model instance.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function findOrNew($id, $columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->findOrNew($id, $columns);
            }
             
                /**
             * Get the first record matching the attributes or instantiate it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function firstOrNew($attributes, $values = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->firstOrNew($attributes, $values);
            }
             
                /**
             * Get the first record matching the attributes or create it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function firstOrCreate($attributes, $values = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->firstOrCreate($attributes, $values);
            }
             
                /**
             * Create or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function updateOrCreate($attributes, $values = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->updateOrCreate($attributes, $values);
            }
             
                /**
             * Execute the query and get the first result or throw an exception.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
             * @static 
             */ 
            public static function firstOrFail($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->firstOrFail($columns);
            }
             
                /**
             * Execute the query and get the first result or call a callback.
             *
             * @param \Closure|array $columns
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Model|static|mixed 
             * @static 
             */ 
            public static function firstOr($columns = [], $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->firstOr($columns, $callback);
            }
             
                /**
             * Get a single column's value from the first result of a query.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function value($column)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->value($column);
            }
             
                /**
             * Execute the query as a "select" statement.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Collection|static[] 
             * @static 
             */ 
            public static function get($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->get($columns);
            }
             
                /**
             * Get the hydrated models without eager loading.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model[] 
             * @static 
             */ 
            public static function getModels($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getModels($columns);
            }
             
                /**
             * Eager load the relationships for the models.
             *
             * @param array $models
             * @return array 
             * @static 
             */ 
            public static function eagerLoadRelations($models)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->eagerLoadRelations($models);
            }
             
                /**
             * Get a generator for the given query.
             *
             * @return \Generator 
             * @static 
             */ 
            public static function cursor()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->cursor();
            }
             
                /**
             * Chunk the results of a query by comparing numeric IDs.
             *
             * @param int $count
             * @param callable $callback
             * @param string $column
             * @param string|null $alias
             * @return bool 
             * @static 
             */ 
            public static function chunkById($count, $callback, $column = null, $alias = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->chunkById($count, $callback, $column, $alias);
            }
             
                /**
             * Get an array with the values of a given column.
             *
             * @param string $column
             * @param string|null $key
             * @return \Illuminate\Support\Collection 
             * @static 
             */ 
            public static function pluck($column, $key = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->pluck($column, $key);
            }
             
                /**
             * Paginate the given query.
             *
             * @param int $perPage
             * @param array $columns
             * @param string $pageName
             * @param int|null $page
             * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function paginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->paginate($perPage, $columns, $pageName, $page);
            }
             
                /**
             * Paginate the given query into a simple paginator.
             *
             * @param int $perPage
             * @param array $columns
             * @param string $pageName
             * @param int|null $page
             * @return \Illuminate\Contracts\Pagination\Paginator 
             * @static 
             */ 
            public static function simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->simplePaginate($perPage, $columns, $pageName, $page);
            }
             
                /**
             * Save a new model and return the instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function create($attributes = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->create($attributes);
            }
             
                /**
             * Save a new model and return the instance. Allow mass-assignment.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function forceCreate($attributes)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->forceCreate($attributes);
            }
             
                /**
             * Register a replacement for the default delete function.
             *
             * @param \Closure $callback
             * @return void 
             * @static 
             */ 
            public static function onDelete($callback)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                $instance->onDelete($callback);
            }
             
                /**
             * Call the given local model scopes.
             *
             * @param array $scopes
             * @return mixed 
             * @static 
             */ 
            public static function scopes($scopes)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->scopes($scopes);
            }
             
                /**
             * Apply the scopes to the Eloquent builder instance and return it.
             *
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function applyScopes()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->applyScopes();
            }
             
                /**
             * Prevent the specified relations from being eager loaded.
             *
             * @param mixed $relations
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function without($relations)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->without($relations);
            }
             
                /**
             * Create a new instance of the model being queried.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function newModelInstance($attributes = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->newModelInstance($attributes);
            }
             
                /**
             * Get the underlying query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function getQuery()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getQuery();
            }
             
                /**
             * Set the underlying query builder instance.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function setQuery($query)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->setQuery($query);
            }
             
                /**
             * Get a base query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function toBase()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->toBase();
            }
             
                /**
             * Get the relationships being eagerly loaded.
             *
             * @return array 
             * @static 
             */ 
            public static function getEagerLoads()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getEagerLoads();
            }
             
                /**
             * Set the relationships being eagerly loaded.
             *
             * @param array $eagerLoad
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function setEagerLoads($eagerLoad)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->setEagerLoads($eagerLoad);
            }
             
                /**
             * Get the model instance being queried.
             *
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function getModel()
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getModel();
            }
             
                /**
             * Set a model instance for the model being queried.
             *
             * @param \Illuminate\Database\Eloquent\Model $model
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function setModel($model)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->setModel($model);
            }
             
                /**
             * Get the given macro by name.
             *
             * @param string $name
             * @return \Closure 
             * @static 
             */ 
            public static function getMacro($name)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->getMacro($name);
            }
             
                /**
             * Chunk the results of the query.
             *
             * @param int $count
             * @param callable $callback
             * @return bool 
             * @static 
             */ 
            public static function chunk($count, $callback)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->chunk($count, $callback);
            }
             
                /**
             * Execute a callback over each item while chunking.
             *
             * @param callable $callback
             * @param int $count
             * @return bool 
             * @static 
             */ 
            public static function each($callback, $count = 1000)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->each($callback, $count);
            }
             
                /**
             * Execute the query and get the first result.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|object|static|null 
             * @static 
             */ 
            public static function first($columns = [])
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->first($columns);
            }
             
                /**
             * Apply the callback's query changes if the given "value" is true.
             *
             * @param mixed $value
             * @param callable $callback
             * @param callable $default
             * @return mixed 
             * @static 
             */ 
            public static function when($value, $callback, $default = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->when($value, $callback, $default);
            }
             
                /**
             * Pass the query to a given callback.
             *
             * @param \Closure $callback
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function tap($callback)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->tap($callback);
            }
             
                /**
             * Apply the callback's query changes if the given "value" is false.
             *
             * @param mixed $value
             * @param callable $callback
             * @param callable $default
             * @return mixed 
             * @static 
             */ 
            public static function unless($value, $callback, $default = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->unless($value, $callback, $default);
            }
             
                /**
             * Add a relationship count / exists condition to the query.
             *
             * @param string $relation
             * @param string $operator
             * @param int $count
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->has($relation, $operator, $count, $boolean, $callback);
            }
             
                /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orHas($relation, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orHas($relation, $operator, $count);
            }
             
                /**
             * Add a relationship count / exists condition to the query.
             *
             * @param string $relation
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function doesntHave($relation, $boolean = 'and', $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->doesntHave($relation, $boolean, $callback);
            }
             
                /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orDoesntHave($relation)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orDoesntHave($relation);
            }
             
                /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereHas($relation, $callback, $operator, $count);
            }
             
                /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereHas($relation, $callback, $operator, $count);
            }
             
                /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereDoesntHave($relation, $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->whereDoesntHave($relation, $callback);
            }
             
                /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereDoesntHave($relation, $callback = null)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->orWhereDoesntHave($relation, $callback);
            }
             
                /**
             * Add subselect queries to count the relations.
             *
             * @param mixed $relations
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withCount($relations)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->withCount($relations);
            }
             
                /**
             * Merge the where constraints from another query to the current query.
             *
             * @param \Illuminate\Database\Eloquent\Builder $from
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function mergeConstraintsFrom($from)
            {
                                /** @var \Illuminate\Database\Eloquent\Builder $instance */
                                return $instance->mergeConstraintsFrom($from);
            }
             
                /**
             * Set the columns to be selected.
             *
             * @param array|mixed $columns
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function select($columns = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->select($columns);
            }
             
                /**
             * Add a new "raw" select expression to the query.
             *
             * @param string $expression
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function selectRaw($expression, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->selectRaw($expression, $bindings);
            }
             
                /**
             * Add a subselect expression to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|string $query
             * @param string $as
             * @return \Illuminate\Database\Query\Builder|static 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function selectSub($query, $as)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->selectSub($query, $as);
            }
             
                /**
             * Add a new select column to the query.
             *
             * @param array|mixed $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function addSelect($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->addSelect($column);
            }
             
                /**
             * Force the query to only return distinct results.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function distinct()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->distinct();
            }
             
                /**
             * Set the table which the query is targeting.
             *
             * @param string $table
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function from($table)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->from($table);
            }
             
                /**
             * Add a join clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @param string $type
             * @param bool $where
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->join($table, $first, $operator, $second, $type, $where);
            }
             
                /**
             * Add a "join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @param string $type
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->joinWhere($table, $first, $operator, $second, $type);
            }
             
                /**
             * Add a left join to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function leftJoin($table, $first, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->leftJoin($table, $first, $operator, $second);
            }
             
                /**
             * Add a "join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function leftJoinWhere($table, $first, $operator, $second)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->leftJoinWhere($table, $first, $operator, $second);
            }
             
                /**
             * Add a right join to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function rightJoin($table, $first, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->rightJoin($table, $first, $operator, $second);
            }
             
                /**
             * Add a "right join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function rightJoinWhere($table, $first, $operator, $second)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->rightJoinWhere($table, $first, $operator, $second);
            }
             
                /**
             * Add a "cross join" clause to the query.
             *
             * @param string $table
             * @param string|null $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function crossJoin($table, $first = null, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->crossJoin($table, $first, $operator, $second);
            }
             
                /**
             * Merge an array of where clauses and bindings.
             *
             * @param array $wheres
             * @param array $bindings
             * @return void 
             * @static 
             */ 
            public static function mergeWheres($wheres, $bindings)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                $instance->mergeWheres($wheres, $bindings);
            }
             
                /**
             * Prepare the value and operator for a where clause.
             *
             * @param string $value
             * @param string $operator
             * @param bool $useDefault
             * @return array 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function prepareValueAndOperator($value, $operator, $useDefault = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->prepareValueAndOperator($value, $operator, $useDefault);
            }
             
                /**
             * Add a "where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @param string|null $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereColumn($first, $operator, $second, $boolean);
            }
             
                /**
             * Add an "or where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereColumn($first, $operator = null, $second = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereColumn($first, $operator, $second);
            }
             
                /**
             * Add a raw where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereRaw($sql, $bindings = [], $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereRaw($sql, $bindings, $boolean);
            }
             
                /**
             * Add a raw or where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereRaw($sql, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereRaw($sql, $bindings);
            }
             
                /**
             * Add a "where in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereIn($column, $values, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereIn($column, $values, $boolean, $not);
            }
             
                /**
             * Add an "or where in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereIn($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereIn($column, $values);
            }
             
                /**
             * Add a "where not in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotIn($column, $values, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNotIn($column, $values, $boolean);
            }
             
                /**
             * Add an "or where not in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotIn($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNotIn($column, $values);
            }
             
                /**
             * Add a "where null" clause to the query.
             *
             * @param string $column
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereNull($column, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNull($column, $boolean, $not);
            }
             
                /**
             * Add an "or where null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNull($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNull($column);
            }
             
                /**
             * Add a "where not null" clause to the query.
             *
             * @param string $column
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotNull($column, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNotNull($column, $boolean);
            }
             
                /**
             * Add a where between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereBetween($column, $values, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereBetween($column, $values, $boolean, $not);
            }
             
                /**
             * Add an or where between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereBetween($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereBetween($column, $values);
            }
             
                /**
             * Add a where not between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotBetween($column, $values, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNotBetween($column, $values, $boolean);
            }
             
                /**
             * Add an or where not between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotBetween($column, $values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNotBetween($column, $values);
            }
             
                /**
             * Add an "or where not null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotNull($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNotNull($column);
            }
             
                /**
             * Add a "where date" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereDate($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereDate($column, $operator, $value, $boolean);
            }
             
                /**
             * Add an "or where date" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param string $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereDate($column, $operator, $value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereDate($column, $operator, $value);
            }
             
                /**
             * Add a "where time" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param int $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereTime($column, $operator, $value, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereTime($column, $operator, $value, $boolean);
            }
             
                /**
             * Add an "or where time" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereTime($column, $operator, $value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereTime($column, $operator, $value);
            }
             
                /**
             * Add a "where day" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereDay($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereDay($column, $operator, $value, $boolean);
            }
             
                /**
             * Add a "where month" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereMonth($column, $operator, $value, $boolean);
            }
             
                /**
             * Add a "where year" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereYear($column, $operator, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereYear($column, $operator, $value, $boolean);
            }
             
                /**
             * Add a nested where statement to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNested($callback, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNested($callback, $boolean);
            }
             
                /**
             * Create a new query instance for nested where condition.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function forNestedWhere()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->forNestedWhere();
            }
             
                /**
             * Add another query builder as a nested where to the query builder.
             *
             * @param \Illuminate\Database\Query\Builder|static $query
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function addNestedWhereQuery($query, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->addNestedWhereQuery($query, $boolean);
            }
             
                /**
             * Add an exists clause to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereExists($callback, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereExists($callback, $boolean, $not);
            }
             
                /**
             * Add an or exists clause to the query.
             *
             * @param \Closure $callback
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereExists($callback, $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereExists($callback, $not);
            }
             
                /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotExists($callback, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->whereNotExists($callback, $boolean);
            }
             
                /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure $callback
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotExists($callback)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orWhereNotExists($callback);
            }
             
                /**
             * Add an exists clause to the query.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->addWhereExistsQuery($query, $boolean, $not);
            }
             
                /**
             * Handles dynamic "where" clauses to the query.
             *
             * @param string $method
             * @param string $parameters
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function dynamicWhere($method, $parameters)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->dynamicWhere($method, $parameters);
            }
             
                /**
             * Add a "group by" clause to the query.
             *
             * @param array $groups
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function groupBy(...$groups)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->groupBy(...$groups);
            }
             
                /**
             * Add a "having" clause to the query.
             *
             * @param string $column
             * @param string|null $operator
             * @param string|null $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function having($column, $operator = null, $value = null, $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->having($column, $operator, $value, $boolean);
            }
             
                /**
             * Add a "or having" clause to the query.
             *
             * @param string $column
             * @param string|null $operator
             * @param string|null $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orHaving($column, $operator = null, $value = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orHaving($column, $operator, $value);
            }
             
                /**
             * Add a raw having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function havingRaw($sql, $bindings = [], $boolean = 'and')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->havingRaw($sql, $bindings, $boolean);
            }
             
                /**
             * Add a raw or having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orHavingRaw($sql, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orHavingRaw($sql, $bindings);
            }
             
                /**
             * Add an "order by" clause to the query.
             *
             * @param string $column
             * @param string $direction
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orderBy($column, $direction = 'asc')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orderBy($column, $direction);
            }
             
                /**
             * Add a descending "order by" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orderByDesc($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orderByDesc($column);
            }
             
                /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function latest($column = 'created_at')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->latest($column);
            }
             
                /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function oldest($column = 'created_at')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->oldest($column);
            }
             
                /**
             * Put the query's results in random order.
             *
             * @param string $seed
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function inRandomOrder($seed = '')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->inRandomOrder($seed);
            }
             
                /**
             * Add a raw "order by" clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orderByRaw($sql, $bindings = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->orderByRaw($sql, $bindings);
            }
             
                /**
             * Alias to set the "offset" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function skip($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->skip($value);
            }
             
                /**
             * Set the "offset" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function offset($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->offset($value);
            }
             
                /**
             * Alias to set the "limit" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function take($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->take($value);
            }
             
                /**
             * Set the "limit" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function limit($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->limit($value);
            }
             
                /**
             * Set the limit and offset for a given page.
             *
             * @param int $page
             * @param int $perPage
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function forPage($page, $perPage = 15)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->forPage($page, $perPage);
            }
             
                /**
             * Constrain the query to the next "page" of results after a given ID.
             *
             * @param int $perPage
             * @param int $lastId
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->forPageAfterId($perPage, $lastId, $column);
            }
             
                /**
             * Add a union statement to the query.
             *
             * @param \Illuminate\Database\Query\Builder|\Closure $query
             * @param bool $all
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function union($query, $all = false)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->union($query, $all);
            }
             
                /**
             * Add a union all statement to the query.
             *
             * @param \Illuminate\Database\Query\Builder|\Closure $query
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function unionAll($query)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->unionAll($query);
            }
             
                /**
             * Lock the selected rows in the table.
             *
             * @param string|bool $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function lock($value = true)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->lock($value);
            }
             
                /**
             * Lock the selected rows in the table for updating.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function lockForUpdate()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->lockForUpdate();
            }
             
                /**
             * Share lock the selected rows in the table.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function sharedLock()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->sharedLock();
            }
             
                /**
             * Get the SQL representation of the query.
             *
             * @return string 
             * @static 
             */ 
            public static function toSql()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->toSql();
            }
             
                /**
             * Get the count of the total records for the paginator.
             *
             * @param array $columns
             * @return int 
             * @static 
             */ 
            public static function getCountForPagination($columns = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getCountForPagination($columns);
            }
             
                /**
             * Concatenate values of a given column as a string.
             *
             * @param string $column
             * @param string $glue
             * @return string 
             * @static 
             */ 
            public static function implode($column, $glue = '')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->implode($column, $glue);
            }
             
                /**
             * Determine if any rows exist for the current query.
             *
             * @return bool 
             * @static 
             */ 
            public static function exists()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->exists();
            }
             
                /**
             * Determine if no rows exist for the current query.
             *
             * @return bool 
             * @static 
             */ 
            public static function doesntExist()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->doesntExist();
            }
             
                /**
             * Retrieve the "count" result of the query.
             *
             * @param string $columns
             * @return int 
             * @static 
             */ 
            public static function count($columns = '*')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->count($columns);
            }
             
                /**
             * Retrieve the minimum value of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function min($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->min($column);
            }
             
                /**
             * Retrieve the maximum value of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function max($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->max($column);
            }
             
                /**
             * Retrieve the sum of the values of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function sum($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->sum($column);
            }
             
                /**
             * Retrieve the average of the values of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function avg($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->avg($column);
            }
             
                /**
             * Alias for the "avg" method.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function average($column)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->average($column);
            }
             
                /**
             * Execute an aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return mixed 
             * @static 
             */ 
            public static function aggregate($function, $columns = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->aggregate($function, $columns);
            }
             
                /**
             * Execute a numeric aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return float|int 
             * @static 
             */ 
            public static function numericAggregate($function, $columns = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->numericAggregate($function, $columns);
            }
             
                /**
             * Insert a new record into the database.
             *
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function insert($values)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->insert($values);
            }
             
                /**
             * Insert a new record and get the value of the primary key.
             *
             * @param array $values
             * @param string|null $sequence
             * @return int 
             * @static 
             */ 
            public static function insertGetId($values, $sequence = null)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->insertGetId($values, $sequence);
            }
             
                /**
             * Insert or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function updateOrInsert($attributes, $values = [])
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->updateOrInsert($attributes, $values);
            }
             
                /**
             * Run a truncate statement on the table.
             *
             * @return void 
             * @static 
             */ 
            public static function truncate()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                $instance->truncate();
            }
             
                /**
             * Create a raw database expression.
             *
             * @param mixed $value
             * @return \Illuminate\Database\Query\Expression 
             * @static 
             */ 
            public static function raw($value)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->raw($value);
            }
             
                /**
             * Get the current query value bindings in a flattened array.
             *
             * @return array 
             * @static 
             */ 
            public static function getBindings()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getBindings();
            }
             
                /**
             * Get the raw array of bindings.
             *
             * @return array 
             * @static 
             */ 
            public static function getRawBindings()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getRawBindings();
            }
             
                /**
             * Set the bindings on the query builder.
             *
             * @param array $bindings
             * @param string $type
             * @return \Illuminate\Database\Query\Builder 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function setBindings($bindings, $type = 'where')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->setBindings($bindings, $type);
            }
             
                /**
             * Add a binding to the query.
             *
             * @param mixed $value
             * @param string $type
             * @return \Illuminate\Database\Query\Builder 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function addBinding($value, $type = 'where')
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->addBinding($value, $type);
            }
             
                /**
             * Merge an array of bindings into our bindings.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function mergeBindings($query)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->mergeBindings($query);
            }
             
                /**
             * Get the database query processor instance.
             *
             * @return \Illuminate\Database\Query\Processors\Processor 
             * @static 
             */ 
            public static function getProcessor()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getProcessor();
            }
             
                /**
             * Get the query grammar instance.
             *
             * @return \Illuminate\Database\Query\Grammars\Grammar 
             * @static 
             */ 
            public static function getGrammar()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->getGrammar();
            }
             
                /**
             * Use the write pdo for query.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function useWritePdo()
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->useWritePdo();
            }
             
                /**
             * Clone the query without the given properties.
             *
             * @param array $properties
             * @return static 
             * @static 
             */ 
            public static function cloneWithout($properties)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->cloneWithout($properties);
            }
             
                /**
             * Clone the query without the given bindings.
             *
             * @param array $except
             * @return static 
             * @static 
             */ 
            public static function cloneWithoutBindings($except)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->cloneWithoutBindings($except);
            }
             
                /**
             * Register a custom macro.
             *
             * @param string $name
             * @param object|callable $macro
             * @return void 
             * @static 
             */ 
            public static function macro($name, $macro)
            {
                                \Illuminate\Database\Query\Builder::macro($name, $macro);
            }
             
                /**
             * Mix another object into the class.
             *
             * @param object $mixin
             * @return void 
             * @static 
             */ 
            public static function mixin($mixin)
            {
                                \Illuminate\Database\Query\Builder::mixin($mixin);
            }
             
                /**
             * Checks if macro is registered.
             *
             * @param string $name
             * @return bool 
             * @static 
             */ 
            public static function hasMacro($name)
            {
                                return \Illuminate\Database\Query\Builder::hasMacro($name);
            }
             
                /**
             * Dynamically handle calls to the class.
             *
             * @param string $method
             * @param array $parameters
             * @return mixed 
             * @throws \BadMethodCallException
             * @static 
             */ 
            public static function macroCall($method, $parameters)
            {
                                /** @var \Illuminate\Database\Query\Builder $instance */
                                return $instance->macroCall($method, $parameters);
            }
                    }
            class Event extends \Illuminate\Support\Facades\Event {}
            class Hash extends \Illuminate\Support\Facades\Hash {}
            class Input extends \Illuminate\Support\Facades\Input {}
            class Lang extends \Illuminate\Support\Facades\Lang {}
            class Log extends \Illuminate\Support\Facades\Log {}
            class Mail extends \Illuminate\Support\Facades\Mail {}
            class Queue extends \Illuminate\Support\Facades\Queue {}
            class Redirect extends \Illuminate\Support\Facades\Redirect {}
            class Redis extends \Illuminate\Support\Facades\Redis {}
            class Request extends \Illuminate\Support\Facades\Request {}
            class Response extends \Illuminate\Support\Facades\Response {}
            class Route extends \Illuminate\Support\Facades\Route {}
            class Session extends \Illuminate\Support\Facades\Session {}
            class Storage extends \Illuminate\Support\Facades\Storage {}
            class Url extends \Illuminate\Support\Facades\URL {}
            class URL extends \Illuminate\Support\Facades\URL {}
            class Validator extends \Illuminate\Support\Facades\Validator {}
            class View extends \Illuminate\Support\Facades\View {}
            class Model extends \October\Rain\Database\Model {}
            class Block extends \October\Rain\Support\Facades\Block {}
            class File extends \October\Rain\Support\Facades\File {}
            class Config extends \October\Rain\Support\Facades\Config {}
            class Seeder extends \October\Rain\Database\Updates\Seeder {}
            class Flash extends \October\Rain\Support\Facades\Flash {}
            class Form extends \October\Rain\Support\Facades\Form {}
            class Html extends \October\Rain\Support\Facades\Html {}
            class Http extends \October\Rain\Support\Facades\Http {}
            class Str extends \October\Rain\Support\Facades\Str {}
            class Markdown extends \October\Rain\Support\Facades\Markdown {}
            class Yaml extends \October\Rain\Support\Facades\Yaml {}
            class Ini extends \October\Rain\Support\Facades\Ini {}
            class Twig extends \October\Rain\Support\Facades\Twig {}
            class DbDongle extends \October\Rain\Support\Facades\DbDongle {}
            class Schema extends \October\Rain\Support\Facades\Schema {}
            class Cms extends \Cms\Facades\Cms {}
            class Backend extends \Backend\Facades\Backend {}
            class BackendMenu extends \Backend\Facades\BackendMenu {}
            class BackendAuth extends \Backend\Facades\BackendAuth {}
            class AjaxException extends \October\Rain\Exception\AjaxException {}
            class SystemException extends \October\Rain\Exception\SystemException {}
            class ApplicationException extends \October\Rain\Exception\ApplicationException {}
            class ValidationException extends \October\Rain\Exception\ValidationException {}
            class Date extends \Jenssegers\Date\Date {}
            class Sentry extends \Sentry\Laravel\Facade {}
            class Auth extends \RainLab\User\Facades\Auth {}
            class Debugbar extends \Barryvdh\Debugbar\Facade {}
     
}




