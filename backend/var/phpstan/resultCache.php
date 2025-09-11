<?php

declare(strict_types=1);

return [
    'lastFullAnalysisTime' => 1757469568,
    'meta' => [
        'cacheVersion' => 'v12-linesToIgnore',
        'phpstanVersion' => '1.12.28',
        'phpVersion' => 80229,
        'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigGetDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], excludePaths: {analyseAndScan: [*.blade.php, /workspaces/Tourxpedia/backend/tests/*, /workspaces/Tourxpedia/backend/bootstrap/*, /workspaces/Tourxpedia/backend/storage/*, /workspaces/Tourxpedia/backend/vendor/*], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [/workspaces/Tourxpedia/backend/vendor/nunomaduro/larastan/bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], checkModelProperties: true, checkPhpDocMissingReturn: false, checkUnusedViews: false, checkModelAppends: false, generalizeEnvReturnType: false, checkConfigTypes: false, paths: [/workspaces/Tourxpedia/backend/app, /workspaces/Tourxpedia/backend/database/factories, /workspaces/Tourxpedia/backend/database/seeders], level: 6, treatPhpDocTypesAsCertain: true, tmpDir: /workspaces/Tourxpedia/backend/var/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigGetDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}]}',
        'analysedPaths' => [
            0 => '/workspaces/Tourxpedia/backend/app',
            1 => '/workspaces/Tourxpedia/backend/database/factories',
            2 => '/workspaces/Tourxpedia/backend/database/seeders',
        ],
        'scannedFiles' => [
        ],
        'composerLocks' => [
            '/workspaces/Tourxpedia/backend/composer.lock' => '9424b8ae9144688b746a07fb0ac0f0727dbcb119',
        ],
        'composerInstalled' => [
            '/workspaces/Tourxpedia/backend/vendor/composer/installed.php' => [
                'versions' => [
                    'brick/math' => [
                        'pretty_version' => '0.11.0',
                        'version' => '0.11.0.0',
                        'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../brick/math',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'carbonphp/carbon-doctrine-types' => [
                        'pretty_version' => '2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => '99f76ffa36cce3b70a4a6abce41dba15ca2e84cb',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../carbonphp/carbon-doctrine-types',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'cordoval/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'davedevelopment/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'dflydev/dot-access-data' => [
                        'pretty_version' => 'v3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../dflydev/dot-access-data',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/deprecations' => [
                        'pretty_version' => '1.1.5',
                        'version' => '1.1.5.0',
                        'reference' => '459c2f5dd3d6a4633d3b5f46ee2b1c40f57d3f38',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../doctrine/deprecations',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/inflector' => [
                        'pretty_version' => '2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../doctrine/inflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/instantiator' => [
                        'pretty_version' => '1.5.0',
                        'version' => '1.5.0.0',
                        'reference' => '0a0fa9780f5d4e507415a065172d26a98d02047b',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../doctrine/instantiator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'doctrine/lexer' => [
                        'pretty_version' => '2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => '861c870e8b75f7c8f69c146c7f89cc1c0f1b49b6',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../doctrine/lexer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'dragonmantank/cron-expression' => [
                        'pretty_version' => 'v3.4.0',
                        'version' => '3.4.0.0',
                        'reference' => '8c784d071debd117328803d86b2097615b457500',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../dragonmantank/cron-expression',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'egulias/email-validator' => [
                        'pretty_version' => '3.2.6',
                        'version' => '3.2.6.0',
                        'reference' => 'e5997fa97e8790cdae03a9cbd5e78e45e3c7bda7',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../egulias/email-validator',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'fakerphp/faker' => [
                        'pretty_version' => 'v1.24.1',
                        'version' => '1.24.1.0',
                        'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../fakerphp/faker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'filp/whoops' => [
                        'pretty_version' => '2.18.4',
                        'version' => '2.18.4.0',
                        'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../filp/whoops',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'fruitcake/php-cors' => [
                        'pretty_version' => 'v1.3.0',
                        'version' => '1.3.0.0',
                        'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../fruitcake/php-cors',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'graham-campbell/result-type' => [
                        'pretty_version' => 'v1.1.3',
                        'version' => '1.1.3.0',
                        'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../graham-campbell/result-type',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/guzzle' => [
                        'pretty_version' => '7.10.0',
                        'version' => '7.10.0.0',
                        'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../guzzlehttp/guzzle',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/promises' => [
                        'pretty_version' => '2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../guzzlehttp/promises',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/psr7' => [
                        'pretty_version' => '2.8.0',
                        'version' => '2.8.0.0',
                        'reference' => '21dc724a0583619cd1652f673303492272778051',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../guzzlehttp/psr7',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/uri-template' => [
                        'pretty_version' => 'v1.0.5',
                        'version' => '1.0.5.0',
                        'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../guzzlehttp/uri-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'hamcrest/hamcrest-php' => [
                        'pretty_version' => 'v2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../hamcrest/hamcrest-php',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'iamcal/sql-parser' => [
                        'pretty_version' => 'v0.5',
                        'version' => '0.5.0.0',
                        'reference' => '644fd994de3b54e5d833aecf406150aa3b66ca88',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../iamcal/sql-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'illuminate/auth' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/broadcasting' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/bus' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/cache' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/collections' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/conditionable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/config' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/console' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/container' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/contracts' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/cookie' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/database' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/encryption' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/events' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/filesystem' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/hashing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/http' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/log' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/macroable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/mail' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/notifications' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/pagination' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/pipeline' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/queue' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/redis' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/routing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/session' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/support' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/testing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/translation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/validation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'illuminate/view' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v9.52.20',
                        ],
                    ],
                    'kodova/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'laravel/framework' => [
                        'pretty_version' => 'v9.52.20',
                        'version' => '9.52.20.0',
                        'reference' => '2bb6835af73fcf0d1d0bfb84af71cef236cb8609',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../laravel/framework',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/pint' => [
                        'pretty_version' => 'v1.24.0',
                        'version' => '1.24.0.0',
                        'reference' => '0345f3b05f136801af8c339f9d16ef29e6b4df8a',
                        'type' => 'project',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../laravel/pint',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/sail' => [
                        'pretty_version' => 'v1.45.0',
                        'version' => '1.45.0.0',
                        'reference' => '019a2933ff4a9199f098d4259713f9bc266a874e',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../laravel/sail',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/sanctum' => [
                        'pretty_version' => 'v3.3.3',
                        'version' => '3.3.3.0',
                        'reference' => '8c104366459739f3ada0e994bcd3e6fd681ce3d5',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../laravel/sanctum',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/serializable-closure' => [
                        'pretty_version' => 'v1.3.7',
                        'version' => '1.3.7.0',
                        'reference' => '4f48ade902b94323ca3be7646db16209ec76be3d',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../laravel/serializable-closure',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/tinker' => [
                        'pretty_version' => 'v2.10.1',
                        'version' => '2.10.1.0',
                        'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../laravel/tinker',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'lcobucci/clock' => [
                        'pretty_version' => '2.2.0',
                        'version' => '2.2.0.0',
                        'reference' => 'fb533e093fd61321bfcbac08b131ce805fe183d3',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../lcobucci/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'lcobucci/jwt' => [
                        'pretty_version' => '4.3.0',
                        'version' => '4.3.0.0',
                        'reference' => '4d7de2fe0d51a96418c0d04004986e410e87f6b4',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../lcobucci/jwt',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/commonmark' => [
                        'pretty_version' => '2.7.1',
                        'version' => '2.7.1.0',
                        'reference' => '10732241927d3971d28e7ea7b5712721fa2296ca',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../league/commonmark',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/config' => [
                        'pretty_version' => 'v1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../league/config',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem' => [
                        'pretty_version' => '3.30.0',
                        'version' => '3.30.0.0',
                        'reference' => '2203e3151755d874bb2943649dae1eb8533ac93e',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../league/flysystem',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem-local' => [
                        'pretty_version' => '3.30.0',
                        'version' => '3.30.0.0',
                        'reference' => '6691915f77c7fb69adfb87dcd550052dc184ee10',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../league/flysystem-local',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/mime-type-detection' => [
                        'pretty_version' => '1.16.0',
                        'version' => '1.16.0.0',
                        'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../league/mime-type-detection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mockery/mockery' => [
                        'pretty_version' => '1.6.12',
                        'version' => '1.6.12.0',
                        'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../mockery/mockery',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'monolog/monolog' => [
                        'pretty_version' => '2.10.0',
                        'version' => '2.10.0.0',
                        'reference' => '5cf826f2991858b54d5c3809bee745560a1042a7',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../monolog/monolog',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mtdowling/cron-expression' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '^1.0',
                        ],
                    ],
                    'myclabs/deep-copy' => [
                        'pretty_version' => '1.13.4',
                        'version' => '1.13.4.0',
                        'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../myclabs/deep-copy',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nesbot/carbon' => [
                        'pretty_version' => '2.73.0',
                        'version' => '2.73.0.0',
                        'reference' => '9228ce90e1035ff2f0db84b40ec2e023ed802075',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../nesbot/carbon',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/schema' => [
                        'pretty_version' => 'v1.2.5',
                        'version' => '1.2.5.0',
                        'reference' => '0462f0166e823aad657c9224d0f849ecac1ba10a',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../nette/schema',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/utils' => [
                        'pretty_version' => 'v4.0.8',
                        'version' => '4.0.8.0',
                        'reference' => 'c930ca4e3cf4f17dcfb03037703679d2396d2ede',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../nette/utils',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nikic/php-parser' => [
                        'pretty_version' => 'v5.6.1',
                        'version' => '5.6.1.0',
                        'reference' => 'f103601b29efebd7ff4a1ca7b3eeea9e3336a2a2',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../nikic/php-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nunomaduro/collision' => [
                        'pretty_version' => 'v6.4.0',
                        'version' => '6.4.0.0',
                        'reference' => 'f05978827b9343cba381ca05b8c7deee346b6015',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../nunomaduro/collision',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/larastan' => [
                        'pretty_version' => 'v2.11.2',
                        'version' => '2.11.2.0',
                        'reference' => '1aae902a5851c03dc1a58cbd9010a0c3ef8def63',
                        'type' => 'phpstan-extension',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../nunomaduro/larastan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/termwind' => [
                        'pretty_version' => 'v1.15.1',
                        'version' => '1.15.1.0',
                        'reference' => '8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../nunomaduro/termwind',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phar-io/manifest' => [
                        'pretty_version' => '2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => '54750ef60c58e43759730615a392c31c80e23176',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phar-io/manifest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phar-io/version' => [
                        'pretty_version' => '3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phar-io/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpoption/phpoption' => [
                        'pretty_version' => '1.9.4',
                        'version' => '1.9.4.0',
                        'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phpoption/phpoption',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpstan/phpstan' => [
                        'pretty_version' => '1.12.28',
                        'version' => '1.12.28.0',
                        'reference' => 'fcf8b71aeab4e1a1131d1783cef97b23a51b87a9',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phpstan/phpstan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-code-coverage' => [
                        'pretty_version' => '9.2.32',
                        'version' => '9.2.32.0',
                        'reference' => '85402a822d1ecf1db1096959413d35e1c37cf1a5',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phpunit/php-code-coverage',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-file-iterator' => [
                        'pretty_version' => '3.0.6',
                        'version' => '3.0.6.0',
                        'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phpunit/php-file-iterator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-invoker' => [
                        'pretty_version' => '3.1.1',
                        'version' => '3.1.1.0',
                        'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phpunit/php-invoker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-text-template' => [
                        'pretty_version' => '2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phpunit/php-text-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-timer' => [
                        'pretty_version' => '5.0.3',
                        'version' => '5.0.3.0',
                        'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phpunit/php-timer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/phpunit' => [
                        'pretty_version' => '9.6.25',
                        'version' => '9.6.25.0',
                        'reference' => '049c011e01be805202d8eebedef49f769a8ec7b7',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../phpunit/phpunit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'psr/clock' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../psr/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/clock-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/container' => [
                        'pretty_version' => '2.0.2',
                        'version' => '2.0.2.0',
                        'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../psr/container',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/container-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.1|2.0',
                        ],
                    ],
                    'psr/event-dispatcher' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../psr/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-client' => [
                        'pretty_version' => '1.0.3',
                        'version' => '1.0.3.0',
                        'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../psr/http-client',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-client-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-factory' => [
                        'pretty_version' => '1.1.0',
                        'version' => '1.1.0.0',
                        'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../psr/http-factory',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-factory-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-message' => [
                        'pretty_version' => '2.0',
                        'version' => '2.0.0.0',
                        'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../psr/http-message',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-message-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/log' => [
                        'pretty_version' => '3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../psr/log',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/log-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0.0 || 2.0.0 || 3.0.0',
                            1 => '1.0|2.0|3.0',
                        ],
                    ],
                    'psr/simple-cache' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../psr/simple-cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/simple-cache-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                        ],
                    ],
                    'psy/psysh' => [
                        'pretty_version' => 'v0.12.10',
                        'version' => '0.12.10.0',
                        'reference' => '6e80abe6f2257121f1eb9a4c55bf29d921025b22',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../psy/psysh',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ralouphie/getallheaders' => [
                        'pretty_version' => '3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => '120b605dfeb996808c31b6477290a714d356e822',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../ralouphie/getallheaders',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/collection' => [
                        'pretty_version' => '1.3.0',
                        'version' => '1.3.0.0',
                        'reference' => 'ad7475d1c9e70b190ecffc58f2d989416af339b4',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../ramsey/collection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/uuid' => [
                        'pretty_version' => '4.9.1',
                        'version' => '4.9.1.0',
                        'reference' => '81f941f6f729b1e3ceea61d9d014f8b6c6800440',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../ramsey/uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'rhumsaa/uuid' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '4.9.1',
                        ],
                    ],
                    'sebastian/cli-parser' => [
                        'pretty_version' => '1.0.2',
                        'version' => '1.0.2.0',
                        'reference' => '2b56bea83a09de3ac06bb18b92f068e60cc6f50b',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/cli-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/code-unit' => [
                        'pretty_version' => '1.0.8',
                        'version' => '1.0.8.0',
                        'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/code-unit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/code-unit-reverse-lookup' => [
                        'pretty_version' => '2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/code-unit-reverse-lookup',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/comparator' => [
                        'pretty_version' => '4.0.9',
                        'version' => '4.0.9.0',
                        'reference' => '67a2df3a62639eab2cc5906065e9805d4fd5dfc5',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/comparator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/complexity' => [
                        'pretty_version' => '2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => '25f207c40d62b8b7aa32f5ab026c53561964053a',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/complexity',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/diff' => [
                        'pretty_version' => '4.0.6',
                        'version' => '4.0.6.0',
                        'reference' => 'ba01945089c3a293b01ba9badc29ad55b106b0bc',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/diff',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/environment' => [
                        'pretty_version' => '5.1.5',
                        'version' => '5.1.5.0',
                        'reference' => '830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/environment',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/exporter' => [
                        'pretty_version' => '4.0.6',
                        'version' => '4.0.6.0',
                        'reference' => '78c00df8f170e02473b682df15bfcdacc3d32d72',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/exporter',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/global-state' => [
                        'pretty_version' => '5.0.8',
                        'version' => '5.0.8.0',
                        'reference' => 'b6781316bdcd28260904e7cc18ec983d0d2ef4f6',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/global-state',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/lines-of-code' => [
                        'pretty_version' => '1.0.4',
                        'version' => '1.0.4.0',
                        'reference' => 'e1e4a170560925c26d424b6a03aed157e7dcc5c5',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/lines-of-code',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-enumerator' => [
                        'pretty_version' => '4.0.4',
                        'version' => '4.0.4.0',
                        'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/object-enumerator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-reflector' => [
                        'pretty_version' => '2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/object-reflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/recursion-context' => [
                        'pretty_version' => '4.0.6',
                        'version' => '4.0.6.0',
                        'reference' => '539c6691e0623af6dc6f9c20384c120f963465a0',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/recursion-context',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/resource-operations' => [
                        'pretty_version' => '3.0.4',
                        'version' => '3.0.4.0',
                        'reference' => '05d5692a7993ecccd56a03e40cd7e5b09b1d404e',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/resource-operations',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/type' => [
                        'pretty_version' => '3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => '75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/type',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/version' => [
                        'pretty_version' => '3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../sebastian/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/backtrace' => [
                        'pretty_version' => '1.8.1',
                        'version' => '1.8.1.0',
                        'reference' => '8c0f16a59ae35ec8c62d85c3c17585158f430110',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../spatie/backtrace',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/flare-client-php' => [
                        'pretty_version' => '1.10.1',
                        'version' => '1.10.1.0',
                        'reference' => 'bf1716eb98bd689451b071548ae9e70738dce62f',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../spatie/flare-client-php',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/ignition' => [
                        'pretty_version' => '1.14.2',
                        'version' => '1.14.2.0',
                        'reference' => '5e11c11f675bb5251f061491a493e04a1a571532',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../spatie/ignition',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/laravel-ignition' => [
                        'pretty_version' => '1.7.0',
                        'version' => '1.7.0.0',
                        'reference' => 'b6d5c33cf0b8260d6540572af2d9bcf9182fe5fb',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../spatie/laravel-ignition',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'stella-maris/clock' => [
                        'pretty_version' => '0.1.7',
                        'version' => '0.1.7.0',
                        'reference' => 'fa23ce16019289a18bb3446fdecd45befcdd94f8',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../stella-maris/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/console' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => 'c3ebc83d031b71c39da318ca8b7a07ecc67507ed',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/console',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/css-selector' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => 'f1d00bddb83a4cb2138564b2150001cb6ce272b1',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/css-selector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/deprecation-contracts' => [
                        'pretty_version' => 'v3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => '26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/deprecation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/error-handler' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => 'c7df52182f43a68522756ac31a532dd5b1e6db67',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/error-handler',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => '2eaf8e63bc5b8cefabd4a800157f0d0c094f677a',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-contracts' => [
                        'pretty_version' => 'v3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => '7bc61cc2db649b4637d331240c5346dcc7708051',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/event-dispatcher-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.0|3.0',
                        ],
                    ],
                    'symfony/finder' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => '5cc9cac6586fc0c28cd173780ca696e419fefa11',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/finder',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-foundation' => [
                        'pretty_version' => 'v6.0.20',
                        'version' => '6.0.20.0',
                        'reference' => 'e16b2676a4b3b1fa12378a20b29c364feda2a8d6',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/http-foundation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-kernel' => [
                        'pretty_version' => 'v6.0.20',
                        'version' => '6.0.20.0',
                        'reference' => '6dc70833fd0ef5e861e17c7854c12d7d86679349',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/http-kernel',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mailer' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => 'cd60799210c488f545ddde2444dc1aa548322872',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/mailer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mime' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => 'd7052547a0070cbeadd474e172b527a00d657301',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/mime',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-ctype' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/polyfill-ctype',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-grapheme' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/polyfill-intl-grapheme',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-idn' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/polyfill-intl-idn',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-normalizer' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/polyfill-intl-normalizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-mbstring' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/polyfill-mbstring',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php80' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/polyfill-php80',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php81' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/polyfill-php81',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-uuid' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/polyfill-uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/process' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => '2114fd60f26a296cc403a7939ab91478475a33d4',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/process',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/routing' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => 'e56ca9b41c1ec447193474cd86ad7c0b547755ac',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/routing',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/service-contracts' => [
                        'pretty_version' => 'v3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => 'd78d39c1599bd1188b8e26bb341da52c3c6d8a66',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/service-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/string' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => 'd9e72497367c23e08bf94176d2be45b00a9d232a',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/string',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => '9c24b3fdbbe9fb2ef3a6afd8bbaadfd72dad681f',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/translation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-contracts' => [
                        'pretty_version' => 'v3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => 'acbfbb274e730e5a0236f619b6168d9dedb3e282',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/translation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.3|3.0',
                        ],
                    ],
                    'symfony/uid' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => '6499e28b0ac9f2aa3151e11845bdb5cd21e6bb9d',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/uid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/var-dumper' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => 'eb980457fa6899840fe1687e8627a03a7d8a3d52',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/var-dumper',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/yaml' => [
                        'pretty_version' => 'v6.0.19',
                        'version' => '6.0.19.0',
                        'reference' => 'deec3a812a0305a50db8ae689b183f43d915c884',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../symfony/yaml',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'theseer/tokenizer' => [
                        'pretty_version' => '1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../theseer/tokenizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'tijsverkoyen/css-to-inline-styles' => [
                        'pretty_version' => 'v2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../tijsverkoyen/css-to-inline-styles',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'vlucas/phpdotenv' => [
                        'pretty_version' => 'v5.6.2',
                        'version' => '5.6.2.0',
                        'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../vlucas/phpdotenv',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'voku/portable-ascii' => [
                        'pretty_version' => '2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../voku/portable-ascii',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'webmozart/assert' => [
                        'pretty_version' => '1.11.0',
                        'version' => '1.11.0.0',
                        'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
                        'type' => 'library',
                        'install_path' => '/workspaces/Tourxpedia/backend/vendor/composer/../webmozart/assert',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                ],
            ],
        ],
        'executedFilesHashes' => [
            '/workspaces/Tourxpedia/backend/vendor/nunomaduro/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
            'phar:///workspaces/Tourxpedia/backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
            'phar:///workspaces/Tourxpedia/backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
            'phar:///workspaces/Tourxpedia/backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
            'phar:///workspaces/Tourxpedia/backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
        ],
        'phpExtensions' => [
            0 => 'Core',
            1 => 'PDO',
            2 => 'Phar',
            3 => 'Reflection',
            4 => 'SPL',
            5 => 'SimpleXML',
            6 => 'Zend OPcache',
            7 => 'ctype',
            8 => 'curl',
            9 => 'date',
            10 => 'dom',
            11 => 'fileinfo',
            12 => 'filter',
            13 => 'hash',
            14 => 'iconv',
            15 => 'json',
            16 => 'libxml',
            17 => 'mbstring',
            18 => 'mysqlnd',
            19 => 'openssl',
            20 => 'pcre',
            21 => 'pdo_sqlite',
            22 => 'posix',
            23 => 'random',
            24 => 'readline',
            25 => 'session',
            26 => 'sodium',
            27 => 'sqlite3',
            28 => 'standard',
            29 => 'tokenizer',
            30 => 'xml',
            31 => 'xmlreader',
            32 => 'xmlwriter',
            33 => 'zlib',
        ],
        'stubFiles' => [
        ],
        'level' => '6',
    ],
    'projectExtensionFiles' => [
    ],
    'errorsCallback' => static function (): array {
        return [
        ];
    },
    'locallyIgnoredErrorsCallback' => static function (): array {
        return [
        ];
    },
    'linesToIgnore' => [
    ],
    'unmatchedLineIgnores' => [
    ],
    'collectedDataCallback' => static function (): array {
        return [
        ];
    },
    'dependencies' => [
        '/workspaces/Tourxpedia/backend/app/Console/Kernel.php' => [
            'fileHash' => '2b493eea706340b9fc77ec017ed947a6604fdef7',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Exceptions/Handler.php' => [
            'fileHash' => 'dde8b4b9586952b947a8cf785549dc7d71e0b75a',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Controllers/AuthController.php' => [
            'fileHash' => 'd4ed9b3e8cc18afbb87b8a4b4ce991bce11d0375',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Controllers/Controller.php' => [
            'fileHash' => '13bddc3dd3192f7c416428851a8e647002f48b11',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Controllers/AuthController.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Kernel.php' => [
            'fileHash' => '527eb71243400cd915867194d49c95b8358a11a5',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/Authenticate.php' => [
            'fileHash' => '3a9cf6fad1ad20f3a98374519faeafdd6fe6fa9d',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Kernel.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/EncryptCookies.php' => [
            'fileHash' => 'fcbbfaae9d7ac781cd043ee7ce2ee66800d075ee',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Kernel.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/JwtAuth.php' => [
            'fileHash' => '2045494904b910501ddd5525454974863d39b0d1',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Kernel.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => [
            'fileHash' => '3f1cc28f08b8a3a8bbd1495e187fc197110cdab1',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Kernel.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/RedirectIfAuthenticated.php' => [
            'fileHash' => '276ffce4444ab01431fa940ac0235670948e2af8',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Kernel.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/TrimStrings.php' => [
            'fileHash' => 'fdae9e792d68b2827446435ff17d6848726a1e81',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Kernel.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/TrustHosts.php' => [
            'fileHash' => '09cac94cf92d79c951b51470ac0dcb8d600e222b',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/TrustProxies.php' => [
            'fileHash' => '4c915478c380e43a2889f66130fe95f9b90ca5f0',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Kernel.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/ValidateSignature.php' => [
            'fileHash' => 'ef66937ccd20e6a189479dcc98e564cc72d4c92c',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Kernel.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Http/Middleware/VerifyCsrfToken.php' => [
            'fileHash' => 'f40416cadebf79cecb5ffaa1d7bed8d360f8addd',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Kernel.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Models/User.php' => [
            'fileHash' => '82086d7327875bacec2a0e5b2b5a6d71ddb89f7c',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Controllers/AuthController.php',
                1 => '/workspaces/Tourxpedia/backend/app/Http/Middleware/JwtAuth.php',
                2 => '/workspaces/Tourxpedia/backend/app/Providers/RouteServiceProvider.php',
                3 => '/workspaces/Tourxpedia/backend/database/factories/UserFactory.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Providers/AppServiceProvider.php' => [
            'fileHash' => '3ac3cc2d51ad9ac8a87692c3107fc1813b310714',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Providers/AuthServiceProvider.php' => [
            'fileHash' => '846578501ba6a808627be70848cbeafaa492c681',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Providers/BroadcastServiceProvider.php' => [
            'fileHash' => 'bae58bde4982baaf3929a3f53e0e6f2ad34bb50e',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Providers/EventServiceProvider.php' => [
            'fileHash' => 'dbbbb958761a0c9cba799b54e3036c0d3d027932',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/app/Providers/RouteServiceProvider.php' => [
            'fileHash' => '0c9bb756d199f22aaf91695bdbd890a8cddeba65',
            'dependentFiles' => [
                0 => '/workspaces/Tourxpedia/backend/app/Http/Middleware/RedirectIfAuthenticated.php',
            ],
        ],
        '/workspaces/Tourxpedia/backend/database/factories/UserFactory.php' => [
            'fileHash' => '5e66562f4fc468f6d71f577fff9b5a07c93d8c90',
            'dependentFiles' => [
            ],
        ],
        '/workspaces/Tourxpedia/backend/database/seeders/DatabaseSeeder.php' => [
            'fileHash' => 'b6e772ccdf206ba96f4f30137b7f518825d61346',
            'dependentFiles' => [
            ],
        ],
    ],
    'exportedNodesCallback' => static function (): array {
        return [
            '/workspaces/Tourxpedia/backend/app/Console/Kernel.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Console\\Kernel',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Console\\Kernel',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'schedule',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Define the application\'s command schedule.
     *
     * @return void
     */',
                                'namespace' => 'App\\Console',
                                'uses' => [
                                    'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
                                    'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'schedule',
                                    'type' => 'Illuminate\\Console\\Scheduling\\Schedule',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'commands',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register the commands for the application.
     *
     * @return void
     */',
                                'namespace' => 'App\\Console',
                                'uses' => [
                                    'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
                                    'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Exceptions/Handler.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Exceptions\\Handler',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Exceptions\\Handler',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'levels',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\\Throwable>, \\Psr\\Log\\LogLevel::*>
     */',
                                'namespace' => 'App\\Exceptions',
                                'uses' => [
                                    'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
                                    'throwable' => 'Throwable',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'dontReport',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\\Throwable>>
     */',
                                'namespace' => 'App\\Exceptions',
                                'uses' => [
                                    'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
                                    'throwable' => 'Throwable',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'dontFlash',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */',
                                'namespace' => 'App\\Exceptions',
                                'uses' => [
                                    'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
                                    'throwable' => 'Throwable',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        3 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'register',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */',
                                'namespace' => 'App\\Exceptions',
                                'uses' => [
                                    'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
                                    'throwable' => 'Throwable',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Controllers/AuthController.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\AuthController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'signup',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\JsonResponse',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'login',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\JsonResponse',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'me',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\JsonResponse',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Controllers/Controller.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Controller',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Routing\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
                        1 => 'Illuminate\\Foundation\\Bus\\DispatchesJobs',
                        2 => 'Illuminate\\Foundation\\Validation\\ValidatesRequests',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Kernel.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Kernel',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Http\\Kernel',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'middleware',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The application\'s global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */',
                                'namespace' => 'App\\Http',
                                'uses' => [
                                    'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'middlewareGroups',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The application\'s route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */',
                                'namespace' => 'App\\Http',
                                'uses' => [
                                    'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'routeMiddleware',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The application\'s route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */',
                                'namespace' => 'App\\Http',
                                'uses' => [
                                    'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/Authenticate.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\Authenticate',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Auth\\Middleware\\Authenticate',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'redirectTo',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return string|null
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'middleware' => 'Illuminate\\Auth\\Middleware\\Authenticate',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/EncryptCookies.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\EncryptCookies',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'except',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'middleware' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/JwtAuth.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\JwtAuth',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'handle',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'next',
                                    'type' => 'Closure',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/PreventRequestsDuringMaintenance.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\PreventRequestsDuringMaintenance',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'except',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/RedirectIfAuthenticated.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\RedirectIfAuthenticated',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'handle',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Closure(\\Illuminate\\Http\\Request): (\\Illuminate\\Http\\Response|\\Illuminate\\Http\\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \\Illuminate\\Http\\Response|\\Illuminate\\Http\\RedirectResponse
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
                                    'closure' => 'Closure',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'next',
                                    'type' => 'Closure',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                2 => \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'guards',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => true,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/TrimStrings.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\TrimStrings',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'except',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\TrimStrings',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/TrustHosts.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\TrustHosts',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Http\\Middleware\\TrustHosts',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'hosts',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'middleware' => 'Illuminate\\Http\\Middleware\\TrustHosts',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/TrustProxies.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\TrustProxies',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Http\\Middleware\\TrustProxies',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'proxies',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
                                    'request' => 'Illuminate\\Http\\Request',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'headers',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'middleware' => 'Illuminate\\Http\\Middleware\\TrustProxies',
                                    'request' => 'Illuminate\\Http\\Request',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/ValidateSignature.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\ValidateSignature',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'except',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The names of the query string parameters that should be ignored.
     *
     * @var array<int, string>
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'middleware' => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Http/Middleware/VerifyCsrfToken.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\VerifyCsrfToken',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'except',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'middleware' => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Models/User.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Models\\User',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Auth\\User',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Laravel\\Sanctum\\HasApiTokens',
                        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                        2 => 'Illuminate\\Notifications\\Notifiable',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fillable',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
                                'namespace' => 'App\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                                    'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                                    'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'hidden',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */',
                                'namespace' => 'App\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                                    'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                                    'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'casts',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
                                'namespace' => 'App\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                                    'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                                    'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Providers/AppServiceProvider.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Providers\\AppServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Support\\ServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'register',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register any application services.
     *
     * @return void
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Bootstrap any application services.
     *
     * @return void
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Providers/AuthServiceProvider.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Providers\\AuthServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'policies',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register any authentication / authorization services.
     *
     * @return void
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Providers/BroadcastServiceProvider.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Providers\\BroadcastServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Support\\ServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Bootstrap any application services.
     *
     * @return void
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Providers/EventServiceProvider.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Providers\\EventServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'listen',
                            ],
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'registered' => 'Illuminate\\Auth\\Events\\Registered',
                                    'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
                                    'event' => 'Illuminate\\Support\\Facades\\Event',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register any events for your application.
     *
     * @return void
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'registered' => 'Illuminate\\Auth\\Events\\Registered',
                                    'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
                                    'event' => 'Illuminate\\Support\\Facades\\Event',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'shouldDiscoverEvents',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'registered' => 'Illuminate\\Auth\\Events\\Registered',
                                    'sendemailverificationnotification' => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
                                    'event' => 'Illuminate\\Support\\Facades\\Event',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/app/Providers/RouteServiceProvider.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Providers\\RouteServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state([
                            'constants' => [
                                0 => \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state([
                                    'name' => 'HOME',
                                    'value' => '\'/home\'',
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'public' => true,
                            'private' => false,
                            'final' => false,
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
                                    'route' => 'Illuminate\\Support\\Facades\\Route',
                                ],
                                'constUses' => [
                                ],
                            ]),
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
                                    'route' => 'Illuminate\\Support\\Facades\\Route',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'configureRateLimiting',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Configure the rate limiters for the application.
     *
     * @return void
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'limit' => 'Illuminate\\Cache\\RateLimiting\\Limit',
                                    'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
                                    'route' => 'Illuminate\\Support\\Facades\\Route',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/database/factories/UserFactory.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Database\\Factories\\UserFactory',
                    'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
                        'namespace' => 'Database\\Factories',
                        'uses' => [
                            'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                            'str' => 'Illuminate\\Support\\Str',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'definition',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
                                'namespace' => 'Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'str' => 'Illuminate\\Support\\Str',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'unverified',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     *
     * @return static
     */',
                                'namespace' => 'Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'str' => 'Illuminate\\Support\\Str',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            '/workspaces/Tourxpedia/backend/database/seeders/DatabaseSeeder.php' => [
                0 => \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Database\\Seeders\\DatabaseSeeder',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => false,
                    'extends' => 'Illuminate\\Database\\Seeder',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'run',
                            'phpDoc' => \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Seed the application\'s database.
     *
     * @return void
     */',
                                'namespace' => 'Database\\Seeders',
                                'uses' => [
                                    'seeder' => 'Illuminate\\Database\\Seeder',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
        ];
    },
];
