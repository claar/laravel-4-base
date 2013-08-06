<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Additional Compiled Classes
	|--------------------------------------------------------------------------
	|
	| Here you may specify additional classes to include in the compiled file
	| generated by the `artisan optimize` command. These should be classes
	| that are included on basically every request into the application.
	|
	*/

	// database-specific stuff
	'vendor/laravel/framework/src/Illuminate/Database/Connectors/ConnectorInterface.php',
	'vendor/laravel/framework/src/Illuminate/Database/Connection.php',
	'vendor/laravel/framework/src/Illuminate/Database/ConnectionInterface.php',
	'vendor/laravel/framework/src/Illuminate/Database/Query/Grammars/Grammar.php',
	'vendor/laravel/framework/src/Illuminate/Database/Connectors/Connector.php',
	'vendor/laravel/framework/src/Illuminate/Database/Connectors/MySqlConnector.php',
	'vendor/laravel/framework/src/Illuminate/Database/MySqlConnection.php',
	'vendor/laravel/framework/src/Illuminate/Database/Grammar.php',
	'vendor/laravel/framework/src/Illuminate/Database/Query/Grammars/MySqlGrammar.php',
	'vendor/laravel/framework/src/Illuminate/Database/Query/Processors/Processor.php',
	'vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php',
	'vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
	'vendor/laravel/framework/src/Illuminate/Database/Eloquent/Relations/Relation.php',

	// eloquent and fluent stuff
	'/home/autoshine/vendor/laravel/framework/src/Illuminate/Support/Collection.php',
	'/home/autoshine/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Collection.php',

	// controller-specific stuff
	'vendor/laravel/framework/src/Illuminate/Routing/ControllerServiceProvider.php',
	'vendor/laravel/framework/src/Illuminate/Routing/Controllers/Controller.php',
	'vendor/laravel/framework/src/Illuminate/Routing/Controllers/Inspector.php',
	'vendor/laravel/framework/src/Illuminate/Routing/Controllers/Filter.php',
	'vendor/laravel/framework/src/Illuminate/Routing/Controllers/Before.php',
	'vendor/laravel/framework/src/Illuminate/Routing/Controllers/After.php',
	'vendor/laravel/framework/src/Illuminate/Routing/Controllers/FilterParser.php',

	// URL generator
	'/home/autoshine/vendor/symfony/routing/Symfony/Component/Routing/Generator/ConfigurableRequirementsInterface.php',
	'/home/autoshine/vendor/symfony/routing/Symfony/Component/Routing/Generator/UrlGeneratorInterface.php',
	'/home/autoshine/vendor/symfony/routing/Symfony/Component/Routing/Generator/UrlGenerator.php',
	'vendor/laravel/framework/src/Illuminate/Routing/UrlGenerator.php',

	// sentry specific stuff
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Users/ProviderInterface.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Hashing/HasherInterface.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Groups/ProviderInterface.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/ProviderInterface.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/ThrottleInterface.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Sessions/SessionInterface.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Cookies/CookieInterface.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Sentry.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Users/Eloquent/Provider.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Hashing/Sha256Hasher.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Eloquent/Provider.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Eloquent/Provider.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Eloquent/Throttle.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Sessions/IlluminateSession.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Cookies/IlluminateCookie.php',
	'vendor/cartalyst/sentry/src/Cartalyst/Sentry/Facades/Laravel/Sentry.php',

);