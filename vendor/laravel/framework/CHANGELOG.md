# Release Notes for 9.x

## [Unreleased]()

## [v9.52.10]() - 2023-06-27

* Fix SES V2 Transport "reply to" addresses by @jacobmllr95 in 
* Fixes unable to use `trans()->has()` on JSON language files by @crynobone in 

## [v9.52.9]() - 2023-06-08

* Fixes usage of `Redis::many()` with empty array by @nunomaduro in 
* Fix PHPStan description of Closure returning a union type by @ondrejmirtes in 

## [v9.52.8]() - 2023-05-30

### Fixed
- Fixed escaped String for JSON_CONTAINS ([#47244]())

### Changed
- Send along value to InvalidPayloadException ([#47223]())


## [v9.52.7]() - 2023-04-25

### Changed
- Make rules method in FormRequest optional ([#46846]())


## [v9.52.6]() - 2023-04-18

### Fixed
- Fixed Cache::spy incompatibility with Cache::get ([#46689]())

### Changed
- Remove unnecessary parameters in creatable() and destroyable() methods in  Illuminate/Routing/PendingSingletonResourceRegistration class ([#46677]())
- Allow Event::assertListening to check for invokable event listeners ([#46683]())
- Return non-zero exit code for uncaught exceptions ([#46541]())
- Release lock for job implementing ShouldBeUnique that is dispatched afterResponse() ([#46806]())


## [v9.52.5]() - 2023-02-25

### Fixed
- Fixed `Illuminate/Foundation/Testing/Concerns/InteractsWithDatabase::expectsDatabaseQueryCount()` $connection parameter ([#46228]())
- PHP 8.0 fix for Closure jobs ([#46505]())
- Fix preg_split error when there is a slash in the attribute ([#46549]())

### Changed
- Allow WithFaker to be used when app is not bound ([#46529]())


## [v9.52.4]() - 2023-02-22

### Fixed
- Fixes constructable migrations ([#46223]())


## [v9.52.3]() - 2023-02-22

### Reverted
- Revert changes from `Arr::random()` ([cf3eb90]())


## [v9.52.2]() - 2023-02-21

### Fixed
- Fixed `Illuminate/Collections/Arr::shuffle()` with empty array ([0c6cae0]())


## [v9.52.1]() - 2023-02-21

### Changed
- Use secure randomness in Arr:random and Arr:shuffle ([#46105]())


## [v9.52.0]() - 2023-02-14

### Added
- Added methods to Enumerable contract ([#46021]())
- Added new mailer transport for AWS SES V2 API ([#45977]())
- Add S3 temporaryUploadUrl method to AwsS3V3Adapter ([#45753]())
- Add index hinting support to query builder ([#46063]())
- Add mailer name to data for SentMessage and MessageSending events ([#46079]())
- Added --pending option to migrate:status ([#46089]())

### Fixed
- Fixed pdo exception when rollbacking without active transaction ([#46017]())
- Fix duplicated columns on select ([#46049]())
- Fixes memory leak on anonymous migrations ([№46073]())
- Fixed race condition in locks issued by the file cache driver ([#46011]())

### Changed
- Allow choosing tables to truncate in `Illuminate/Foundation/Testing/DatabaseTruncation::truncateTablesForConnection()` ([#46025]())
- Update afterPromptingForMissingArguments method ([#46052]())
- Accept closure in bus assertion helpers ([#46075]())
- Avoid mutating the $expectedLitener between loops on Event::assertListening ([#46095]())


## [v9.51.0]() - 2023-02-07

### Added
- Added `Illuminate/Foundation/Testing/Concerns/InteractsWithDatabase::expectsDatabaseQueryCount()` ([#45932]())
- Added pending has-many-through and has-one-through builder ([#45894]())
- Added `Illuminate/Http/Client/PendingRequest::withUrlParameters()` ([#45982]())

### Fixed
- Fix: prevent duplicated content-type on HTTP client ([#45960]())
- Add missing php extensions in composer ([#45941]())

### Changed
- Command schedule:work minor features: schedule:run output file & environment specific verbosity ([#45949]())
- Added missing self reserved word to reservedNames array in `Illuminate/Console/GeneratorCommand.php` ([#46001]())
- pass value along to ttl callback in `Illuminate/Cache/Repository::remember()` ([#46006]())
- Make sure the lock_connection is used for schedule's withoutOverlapping() ([#45963]())


## [v9.50.2]() - 2023-02-02

### Fixed
- Fixed missing_with and missing_with_all validation ([#45913]())
- Fixes blade escaped tags issue ([#45928]())

### Changed
- Trims numeric validation values / parameters ([#45912]())
- Random function doesn't generate evenly distributed random chars ([#45916]())


## [v9.50.1]() - 2023-02-01

### Reverted
- Reverted ["Optimize destroy method"]() ([#45903]())

### Changed
- Allow scheme to be specified in `Illuminate/Mail/MailManager::createSmtpTransport()` ([68a8bfc]())
- Accept optional mode in `Illuminate/Filesystem/Filesystem::replace()` ([2664e7f]())


## [v9.50.0]() - 2023-02-01

### Added
- Added `Illuminate/Translation/Translator::stringable()` ([#45874]())
- Added `Illuminate/Foundation/Testing/DatabaseTruncation` ([#45726]())
- Added @style Blade directive ([#45887]())

### Reverted
- Reverted: ["Fix Illuminate Filesystem replace() leaves file executable"]() ([5ea388d]())

### Fixed
- Fixed LazyCollection::makeIterator() to accept non Generator Function ([#45881]())

### Changed
- Solve data to be dumped for separate schemes ([#45805]())


## [v9.49.0]() - 2023-01-31

### Added
- Added `Illuminate/Database/Schema/ForeignKeyDefinition::noActionOnDelete()` ([#45712]())
- Added new throw helper methods to the HTTP Client ([#45704]())
- Added configurable timezone support for WorkCommand output timestamps ([#45722]())
- Added support for casting arrays containing enums ([#45621]())
- Added "missing" validation rules ([#45717]())
- Added `/Illuminate/Database/Eloquent/SoftDeletes::forceDeleteQuietly()` ([#45737]())
- Added `Illuminate/Collections/Arr::sortDesc()` ([#45761]())
- Added CLI Prompts ([#45629](), [#45864]())
- Adds assertJsonIsArray and assertJsonIsObject for TestResponse ([#45731]())
- Added `Illuminate/Database/Eloquent/Relations/HasOneOrMany::createQuietly()` ([#45783]())
- Add validation rules: ascii_alpha, ascii_alpha_num, ascii_alpha_dash ([#45769]())
- Extract status methods to traits ([#45789]())
- Add "addRestoreOrCreate" extension to SoftDeletingScope ([#45754]())
- Added connection established event ([f850d99]())
- Add forceDeleting event to models ([#45836]())
- Add title tag in mail template ([#45859]())
- Added new methods to Collection ([#45839]())
- Add skip cancelled middleware ([#45869]())

### Fixed
- Fix flushdb on cluster for `PredisClusterConnection.php` ([#45544]())
- Fix blade tag issue with nested calls ([#45764]())
- Fix infinite loop in blade compiler ([#45780]())
- Fix ValidationValidator not to accept terminating newline ([#45790]())
- Fix stubs publish command generating incorrect controller stubs ([#45812]())
- fix: normalize route pipeline exception ([#45817]())
- Fix Illuminate Filesystem replace() leaves file executable ([#45856]())

### Changed
- Ensures channel name matches from start of string ([#45692]())
- Replace raw invisible characters in regex expressions with counterpart Unicode regex notations ([#45680]())
- Optimize destroy method ([#45709]())
- Unify prohibits behavior around prohibits_if ([#45723]())
- Removes dependency on bcmath ([#45729]())
- Allow brick/math 0.11 also ([#45762]())
- Optimize findMany of BelongsToMany ([#45745]())
- Ensure decimal rule handles large values ([#45693]())
- Backed enum support for @js ([#45862]())
- Restart syscalls for SIGALRM when worker times out a job ([#45871]())
- Ensure subsiquent calls to Mailable->to() overwrite previous entries ([#45885]())


## [v9.48.0]() - 2023-01-17

### Added
- Added `Illuminate/Database/Schema/Builder::withoutForeignKeyConstraints()` ([#45601]())
- Added `fragments()` \ `fragmentIf()` \ `fragmentsIf()` methods to `Illuminate/View/View.php` class ([#45656](), [#45669]())
- Added `incrementEach()` and `decrementEach()` to `Illuminate/Database/Query/Builder` ([#45577]())
- Added ability to drop an index when modifying a column ([#45513]())
- Allow to set HTTP client for mailers ([#45684]())
- Added 402 exception view ([#45682]())
- Added `notFound()` helper to Http Client response ([#45681]())

### Fixed
- Fixed decimal cast ([#45602]())

### Changed
- Ignore whitespaces/newlines when finding relations in model:show command ([#45608]())
- Fail queued job with a string messag ([#45625]())
- Allow fake() helper in unit tests ([#45624]())
- allow egulias/email-validator v4 ([#45649]())
- Force countBy method in EloquentCollection to return base collection ([#45663]())
- Allow for the collection of stubs to be published ([#45653]())


## [v9.47.0]() - 2023-01-10

### Added
- Added Support Lazy Collections in `BatchFake::add()` ([#45507]())
- Added Decimal to list of Numeric rules ([#45533]())
- Added `Illuminate/Routing/PendingSingletonResourceRegistration::destroyable()` ([#45549]())
- Added setVisible and setHidden to Eloquent Collection ([#45558]())

### Fixed
- Fix bound method contextual binding ([#45500]())
- Fixed Method explodeExplicitRule with regex rule ([#45555]())
- Fixed `Illuminate/Database/Query/Builder::whereIntegerInRaw()` ([#45584]())
- Fixes blade tags ([#45490]())

### Changed
- Return model when casting attribute ([#45539]())
- always show full path to migration in `Illuminate/Database/Console/Migrations/MigrateMakeCommand.php` ([9f6ff48]())
- Remove index name when adding primary key on MySQL ([#45515]())


## [v9.46.0]() - 2023-01-03

### Added
- Added Passthrough PATH variable to serve command ([#45402]())
- Added whenHas to JsonResource ([#45376]())
- Added ./fleet directory to .gitignore ([#45432]())
- Added unless to JsonResource ([#45419]())

### Fixed
- Fixed credentials check ([#45437]())
- Fixed decimal cast precision issue ([#45456](), [#45492]())
- Precognitive validation with nested arrays doesn't throw validation error ([#45405]())
- Fixed issue on which class to check increment and decrement methods for custom cast ([#45444]())

### Changed
- Update decimal validation rule to allow validation of signed numbers ([24a48b2]())
- Output only unique asset / preload tags in Vite ([#45404]())
- Optimize whereKey method in Query Builder ([#45453]())
- Remove extra code in Model.php to optimize performance ([#45476]())
- Exception Handler prepareResponse add previous Exception ([#45499]())


## [v9.45.1]() - 2022-12-21

### Revert
- Revert "fix single line @php statements to not be parsed as php blocks" ([#45389]())

### Changed
- Load schema to in memory database ([#45375]())


## [v9.45.0]() - 2022-12-20

### Added
- Allows the registration of custom, root-level anonymous component search paths. ([#45338](), [1ff0379]())
- Added decimal validation rule ([#45356](), [e89b2b0]())
- Added align property to button mail component ([#45362]())
- Added whereUlid(param) support for routing ([#45372]())

### Fixed
- Fixed single line @php statements to not be parsed as php blocks in BladeCompiler ([#45333]())
- Added missing code to set locale from model preferred locale in Maillable ([#45308]())

### Changed
- Vite: ability to prevent preload tag generation from attribute resolver callback ([#45283]())
- Deprecation Test Improvements ([#45317]())
- Do not allow nested arrays in whereIn method ([140c3a8]())
- Bump ramsey/uuid ([#45367]())


## [v9.44.0]() - 2022-12-15

### Added
- Added `Illuminate/Auth/GuardHelpers::forgetUser()` ([#45208]())
- Added sort option for schedule:list ([#45198]())
- Added `ascii` and `ulid` validation rules ([#45218]())
- Http client - allow to provide closure as "throwif" condition ([#45251]())
- Support '/' as a possible column name in database ([#45268]())
- Added Granular notifications queue connections ([#45264]())
- Add support for native rename/drop column commands ([#45258]())
- Add $encoding parameter to substr method ([#45300]())
- Use Macroable in Session facade ([#45310]())

### Fixed
- Fixed aliasing with cursor pagination ([#45188]())
- Fixed email verification request ([#45227]())
- Return 500 http error, instead of 200, when dotenv fails to load ([#45235]())
- Fixed bug on Job Batchs Table ([#45263]())
- Fixed schedule:list crash when call() is given class-string ([#45306]())
- Fixed Lack of Memory when failing a job with wrong variable passed on the method fail() ([#45291]())
- Fixed errors occurring when encrypted cookies has been tampered with ([#45313]())
- bug fix, change array_merge to array_replace to prevent reindex ([#45309]())

### Changed
- Allow BusFake to use custom BusRepository ([#45202]())
- Improved error logging for unmatched routes and route not found ([#45206]())
- Improve assertSeeText and assertDontSeeText test methods ([#45274]())
- Improved `Illuminate/Auth/SessionGuard::clearUserDataFromStorage()` ([#45305]())
- Allows shouldIgnoresDeprecationError() to be overriden ([#45299]())


## [v9.43.0]() - 2022-12-06

### Added
- Add support for eager loading specific columns to withWhereHas ([#45168]())
- Add Policies to Model Show Command ([#45153]())
- Added `Illuminate/Support/Stringable::whenIsUlid()` ([#45183]())

### Fixed
- Added missing reserved names in GeneratorCommand ([#45149]())

### Changed
- Allow to pass base64 key to env:encrypt command ([#45157]())
- Replace model:show searched value with correct FQCN ([#45160]())


## [v9.42.2]() - 2022-11-30

### Changed
- Improved stubs and `Illuminate/Routing/ResourceRegistrar::getResourceMethods()` ([6ddf3b0]())


## [v9.42.1]() - 2022-11-30

### Revert
- Revert "[9.x] Create new Json ParameterBag Instance when cloning Request" ([#45147]())

### Fixed
- Mailable : fixes strict comparison with int value ([#45138]())
- Address Dynamic Relation Resolver inconsiency issue with extended Models ([#45122]())


## [v9.42.0]() - 2022-11-29

### Added
- Added --rest option to queue:listen ([00a12e2](), [82fde9e]())
- Added `Illuminate/Support/Stringable::isUlid()` ([#45100]())
- Add news report_if and report_unless helpers functions ([#45093]())
- Add callback to resolve custom mutex name of schedule events ([#45126]())
- Add WorkOptions to WorkerStopping Event ([#45120]())
- Added `singleton` and `creatable` options to `Illuminate/Routing/Console/ControllerMakeCommand` ([#44872]())

### Fixed
- Fix pure enums validation ([#45121]())
- Prevent test issues with relations with the $touches property ([#45118]())
- Fix factory breaking when trying to determine whether a relation is empty ([#45135]())

### Changed
- Allow set command description via AsCommand attribute ([#45117]())
- Updated Mailable to prevent duplicated recipients ([#45119]())


## [v9.41.0]() - 2022-11-22

### Added
- Added `Illuminate/Validation/Rules/DatabaseRule::onlyTrashed()` ([#44989]())
- Add some class rules in class Rule ([#44998]())
- Added `Illuminate/View/ComponentAttributeBag::missing()` ([#45016]())
- Added `Illuminate/Http/Concerns/InteractsWithInput::whenMissing()` ([#45019]())
- Add isolation levels to SQL Server Connector ([#45023]())
- Fix php artisan serve with PHP_CLI_SERVER_WORKERS > 1 ([#45041]())
- Add ability to prune cancelled job batches ([#45034]())
- Adding option for custom manifest filename on Vite Facade ([#45007]())

### Fixed
- Fix deprecation warning when comparing a password against a NULL database password ([#44986](), [206e465]())
- Outlook web dark mode email layout fix ([#45024]())

### Changed
- Improves queue:work command output ([#44971]())
- Optimize Collection::containsStrict ([#44970]())
- Make name required in `Illuminate/Testing/TestResponse::assertRedirectToRoute()` ([98a0301]())
- Strip key, secret and token from root config options on aws clients ([#44979]())
- Allow customised implementation of the SendQueuedMailable job ([#45040]())
- Validate uuid before route binding query ([#44945]())


## [v9.40.1]() - 2022-11-15

### Added
- `Illuminate/Support/Lottery::fix()` ([7bade4f]())


## [v9.40.0]() - 2022-11-15

### Added
- Include Eloquent Model Observers in model:show command ([#44884]())
- Added "lowercase" validation rule ([#44883]())
- Introduce `Lottery` class ([#44894]())
- Added `/Illuminate/Testing/TestResponse::assertRedirectToRoute()` ([#44926]())
- Add uppercase validation rule ([#44918]())
- Added saveManyQuietly to the hasOneOrMany and belongsToMany relations ([#44913]())

### Fixed
- Fix HasAttributes::getMutatedAttributes for classes with constructor args ([#44829]())

### Changed
- Remove argument assignment for console ([#44888]())
- Pass $maxExceptions from mailable to underlying job when queuing ([#44903]())
- Make Vite::isRunningHot public ([#44900]())
- Add method to be able to override the exception context format ([#44895]())
- Add zero-width space to trimmed characters in TrimStrings middleware ([#44906]())
- Show error if key:generate artisan command fails ([#44927]())
- Update database version check for lock popping for PlanetScale ([#44925]())
- Move function withoutTrashed into DatabaseRule ([#44938]())
- Use write connection on Schema::getColumnListing() and Schema::hasTable() for MySQL and PostgreSQL ([#44946]())


## [v9.39.0]() - 2022-11-08

### Added
- Added template fragments to Blade ([#44774]())
- Added source file to Collection's dd method output ([#44793](), [d2e0e85]())
- Added `Illuminate/Support/Testing/Fakes/PendingBatchFake::dispatchAfterResponse()` ([#44815]())
- Added `Illuminate/Foundation/Testing/Concerns/InteractsWithDatabase::assertDatabaseEmpty()` ([#44810]())

### Fixed
- Fixed `InteractsWithContainer::withoutMix()` ([#44822]())

### Changed
- Update `UpCommand::handle` that must return int ([#44807]())
- Decouple database component from console component ([#44798]())
- Improve input argument parsing for commands ([#44662](), [#44826]())
- Added DatabaseBatchRepository to provides() in BusServiceProvider ([#44833]())
- Move reusable onNotSuccessfulTest functionality to TestResponse ([#44827]())
- Add CSP nonce to Vite reactRefresh inline script ([#44816]())
- Allow route group method to be chained ([#44825]())
- Remove __sleep() & __wakeup() from SerializesModels trait. ([#44847]())
- Handle SQLite without ENABLE_DBSTAT_VTAB enabled in `Illuminate/Database/Console/DatabaseInspectionCommand::getSqliteTableSize()` ([#44867]())
- Apply force flag when necessary in `Illuminate/Queue/Listener` ([#44862]())
- De-couple Console component from framework ([#44864]())
- Update Vite mock to return empty array for preloadedAssets ([#44858]())


## [v9.38.0]() - 2022-11-01

### Added
- Added `Illuminate/Routing/Route::flushController()` ([#44393]())
- Added `Illuminate/Session/Store::setHandler()` ([#44736]())
- Added dictionary to slug helper ([#44730]())
- Added ability to set middleware based on notifiable instance and channel ([#44767]())
- Added touchQuietly convenience method to Model ([#44722]())
- Added `Illuminate/Routing/Router::removeMiddlewareFromGroup()` ([#44780]())
- Allow queueable notifications to set maxExceptions ([#44773]())
- Make migrate command isolated ([#44743](), [ac3252a]())

### Fixed
- Fixed whenPivotLoaded(As) api resource methods when using Eloquent strict mode ([#44792]())
- Fixed components view error when using $attributes in parent view ([#44778]())
- Fixed problem with disregarding global scopes when using existOr and doesntExistOr methods on model query ([#44795]())

### Changed
- Recompiles views when necessary ([#44737]())
- Throw meaningful exception when broadcast connection not configured ([#44745]())
- Prevents booting of providers when running env:encrypt ([#44758]())
- Added nonce for preloaded assets ([#44747]())
- Inherit crossorigin attributes while preloading view ([#44800]())


## [v9.37.0]() - 2022-10-25

### Added
- Added optional verbose output when view caching ([#44673]())
- Allow passing closure to rescue $report parameter ([#44710]())
- Support preloading assets with Vite ([#44096]())
- Added `Illuminate/Mail/Mailables/Content::htmlString()` ([#44703]())

### Fixed
- Fixed model:show registering getAttribute() as a null accessor ([#44683]())
- Fix expectations for output assertions in PendingCommand ([#44723]())


## [v9.36.4]() - 2022-10-20

### Added
- Added rawValue to Database Query Builder (and Eloquent as wrapper) ([#44631]())
- Added TransactionCommitting ([#44608]())
- Added dontIncludeSource to CliDumper and HtmlDumper ([#44623]())
- Added `Illuminate/Filesystem/FilesystemAdapter::checksum()` ([#44660]())
- Added handlers for silently discarded and missing attribute violations ([#44664]())

### Reverted
- Reverted ["Let MustVerifyEmail to be used on models without id as primary key"]() ([#44672]())

### Changed
- Create new Json ParameterBag Instance when cloning Request ([#44671]())
- Prevents booting providers when running env:decrypt ([#44654]())


## [v9.36.3]() - 2022-10-19

### Reverted
- Reverts micro-optimization on view events ([#44653]())

### Fixed
- Fixes blade not forgetting compiled views on view:clear ([#44643]())
- Fixed `Illuminate/Database/Eloquent/Model::offsetExists()` ([#44642]())
- Forget component's cache and factory between tests ([#44648]())

### Changed
- Bump Testbench dependencies ([#44651]())


## [v9.36.2]() - 2022-10-18

### Fixed
- Ensures view creators and composers are called when * is present ([#44636]())


## [v9.36.1]() - 2022-10-18

### Fixed
- Fixes livewire components that were using createBladeViewFromString ([#pull]())


## [v9.36.0]() - 2022-10-18

### Added
- Added mailable assertions ([#44563](/44563))
- Added `Illuminate/Testing/TestResponse::assertContent()` ([#44580](/44580))
- Added to `Illuminate/Console/Concerns/InteractsWithIO::alert()` `$verbosity` param ([#44614](/44614))

### Optimization
- Makes blade components blazing fast ([#44487](/44487))

### Fixed
- Fixed `Illuminate/Filesystem/Filesystem::relativeLink()` ([#44519](/44519))
- Fixed for `model:show` failing with models that have null timestamp columns ([#44576](/44576))
- Allow Model::shouldBeStrict(false) to disable "strict mode" ([#44627](/44627))

### Changed
- Dont require a host for sqlite connections in php artisan db ([#44585](/44585))
- Let MustVerifyEmail to be used on models without id as primary key ([#44613]())
- Changed `Illuminate/Routing/Route::controllerMiddleware()` ([#44590](/44590))


## [v9.35.1]() - 2022-10-11

### Fixed
- Remove check for `$viewFactory->exists($component)` in `Illuminate/View/Compilers/ComponentTagCompiler::componentClass` ([7c6db00]())


## [v9.35.0]() - 2022-10-11

### Added
- Allow loading trashed models for resource routes ([#44405](/44405))
- Added `Illuminate/Database/Eloquent/Model::shouldBeStrict()` and other ([#44283](/44283))
- Controller middleware without resolving controller ([#44516](/44516))
- Alternative Mailable Syntax ([#44462](/44462))

### Fixed
- Fix issue with aggregates (withSum, etc.) for pivot columns on self-referencing many-to-many relations ([#44286](/44286))
- Fixes issue using static class properties as blade attributes ([#44473](/44473))
- Traversable should have priority over JsonSerializable in EnumerateValues ([#44456](/44456))
- Fixed `make:cast --inbound` so it's a boolean option, not value ([#44505](/44505))

### Changed
- Testing methods. Making error messages with json_encode more readable ([#44397](/44397))
- Have 'Model::withoutTimestamps()' return the callback's return value ([#44457](/44457))
- only load trashed models on relevant routes ([#44478](/44478))
- Adding additional PHP extensions to shouldBlockPhpUpload Function ([#44512](/44512))
- Register cutInternals casters for particularly noisy objects ([#44514](/44514))
- Use get methods to access application locale ([#44521](/44521))
- return only on non empty response from channels ([09d53ee](), [3944a3e]())
- Correct channel matching ([#44531](/44531))
- Migrate mail components ([#44527](/44527))


## [v9.34.0]() - 2022-10-04

### Added
- Short attribute syntax for Self Closing Blade Components ([#44413](/44413))
- Adds support for PHP's BackedEnum to be "rendered" on blade views ([#44445](/44445))

### Fixed
- Fixed Precognition headers for Symfony responses ([#44424](/44424))
- Allow to create databases with dots ([#44436](/44436))
- Fixes dd source on windows ([#44451](/44451))

### Changed
- Adds error output to db command when missing host ([#44394](/44394))
- Changed `Illuminate/Database/Schema/ForeignIdColumnDefinition::constrained()` ([#44425](/44425))
- Allow maintenance mode events to be listened to in closure based listeners ([#44417](/44417))
- Allow factories to recycle multiple models of a given typ ([#44328](/44328))
- Improves dd clickable link on multiple editors and docker environments ([#44406](/44406))


## [v9.33.0]() - 2022-09-30

### Added
- Added `Illuminate/Support/Testing/Fakes/MailFake::cc()` ([#44319](/44319))
- Added Ignore Case of Str::contains and Str::containsAll to Stringable contains and containsAll ([#44369](/44369))
- Added missing morphs methods for the ULID support ([#44364](/44364))
- Introduce Laravel Precognition ([#44339](/44339))
- Added `Illuminate/Routing/Route::flushController()` ([#44386](/44386))

### Fixed
- Fixes memory leak on PHPUnit's Annotations registry ([#44324](/44324), [#44336](/44336))
- Fixed `Illuminate/Filesystem/FilesystemAdapter::url()` with config `prefix` ([#44330](/44330))
- Fixed the "Implicit conversion from float to int loses precision" error in Timebox Class ([#44357](/44357))

### Changed
- Improves dd source on compiled views ([#44347](/44347))
- Only prints source on dd calls from dump.php ([#44367](/44367))
- Ensures a Carbon version that supports PHP 8.2 ([#44374](/44374))


## [v9.32.0]() - 2022-09-27

### Added
- New env:encrypt and env:decrypt commands ([#44034](/44034))
- Share WithoutOverlapping key across jobs ([#44227](/44227))
- Add missing citext type mapping to `Illuminate/Database/Console/DatabaseInspectionCommand::$typeMappings` ([#44237](/44237))
- Short attribute syntax for Blade Components ([#44217](/44217))
- Adds source file to dd function output ([#44211](/44211))
- Add methods to get request data as integer or float ([#44239](/44239))
- Adds Eloquent User Provider query handler ([#44226](/44226))
- Added `Illuminate/Support/Testing/Fakes/BusFake::dispatchFakeBatch()` ([#44176](/44176))
- Added methods to cast Stringables ([#44238](/44238))
- Added `Illuminate/Routing/UrlGenerator::withKeyResolver()` ([#44254](/44254))
- Add a hook to the serialisation of collections ([#44272](/44272))
- Allow enum route bindings to have default values ([#44255](/44255))
- Added benchmark utility class ([b4293d7](), [#44297](/44297))
- Added `Illuminate/Console/Scheduling/ManagesFrequencies::everyOddHour()` ([#44288](/44288))

### Fixed
- Fix incrementing string keys ([#44247](/44247))
- Fix bug in Fluent Class with named arguments in migrations ([#44251](/44251))
- Fix "about" command caching report ([#44305](/44305))
- Fixes memory leaks ([#44306](/44306), [#44307](/44307))

### Changed
- Patch for timeless timing attack vulnerability in user login ([#44069](/44069))
- Refactor: register commands in artisan service ([#44257](/44257))
- Allow factories to recycle models with for method ([#44265](/44265))
- Use dedicated method for placeholder replacement in validator ([#44296](/44296))


## [v9.31.0]() - 2022-09-20

### Added
- Added unique deferrable initially deferred constants for PostgreSQL ([#44127](/44127))
- Request lifecycle duration handler ([#44122](/44122))
- Added Model::withoutTimestamps(...) ([#44138](/44138))
- Added manifestHash function to Illuminate\Foundation\Vite ([#44136](/44136))
- Added support for operator <=> in `/Illuminate/Collections/Traits/EnumeratesValues::operatorForWhere()` ([#44154](/44154))
- Added that Illuminate/Database/Connection::registerDoctrineType() can accept object as well as classname for new doctrine type ([#44149](/44149))
- Added Fake Batches ([#44104](/44104), [#44173](/44173))
- Added `Model::getAppends()` ([#44180](/44180))
- Added missing Str::wrap() static method ([#44207](/44207))
- Added require `symfony/uid` ([#44202](/44202)) 
- Make Vite macroable ([#44198](/44198))

### Fixed
- Async fix in `Illuminate/Http/Client/PendingRequest` ([#44179](/44179))
- Fixes artisan serve command with PHP_CLI_SERVER_WORKERS environment variable ([#44204](/44204))
- Fixed `InteractsWithDatabase::castAsJson($value)` incorrectly handles SQLite Database ([#44196](/44196))

### Changed
- Improve Blade compilation exception messages ([#44134](/44134))
- Improve test failure output ([#43943](/43943))
- Prompt to create MySQL db when migrating ([#44153](/44153))
- Improve UUID and ULID support for Eloquent ([#44146](/44146))


## [v9.30.1]() - 2022-09-15

### Added
- Allow using a model instance in place of nested model factories ([#44107](/44107))
- Added UUID and ULID support for Eloquent ([#44074](/44074))
- Implement except method for fake classes to define what should not be faked ([#44117](/44117))
- Added interacts with queue middleware to send queued mailable ([#44124](/44124))
- Added new exception string to `Illuminate/Database/DetectsLostConnections` ([#44121](/44121))

### Fixed
- Fixed BC from [Passing event into viaQueue and viaConnection of Queued Listener](/44080) ([#44137](/44137))

### Changed
- Enhance column modifying ([#44101](/44101))
- Allow to define which jobs should be actually dispatched when using Bus::fake ([#44106](/44106))


## [v9.30.0]() - 2022-09-13

### Added
- Added stop_buffering config option to logger ([#44071](/44071))
- Added read-only filesystem adapter decoration as a config option ([#44079](/44079))
- Added scoped filesystem driver ([#44105](/44105))
- Add force option to all make commands ([#44100](/44100))

### Fixed
- Fixed QueryBuilder whereNot with array conditions ([#44083](/44083))

### Changed
- Passing event into viaQueue and viaConnection of Queued Listener ([#44080](/44080))
- Improve testability of batched jobs ([#44075](/44075))
- Allow any kind of whitespace in cron expression ([#44110](/44110))


## [v9.29.0]() - 2022-09-09

### Added
- Added RequiredIfAccepted validation rule ([#44035](/44035))
- Added `Illuminate/Foundation/Vite::assetPath()` ([#44037](/44037))
- Added ability to discard Eloquent Model changes ([#43772](/43772))
- Added ability to determine if attachments exist to `Illuminate/Mail/Mailable` ([#43967](/43967))
- Added `Illuminate/Support/Testing/Fakes/BusFake::assertNothingBatched()` ([#44056](/44056))

### Reverted
- Reverted [Fixed RoueGroup::merge to format merged prefixes correctly](/44011). ([#44072](/44072))

### Fixed
- Avoid Passing null to parameter exception on PHP 8.1 ([#43951](/43951))
- Align Remember Me Cookie Duration with CookieJar expiration ([#44026](/44026))
- Fix Stringable typehints with Enumerable ([#44030](/44030))
- Fixed middleware "SetCacheHeaders" with file responses ([#44063](/44063))

### Changed
- Don't use locks for queue job popping for PlanetScale's MySQL-compatible Vitess engine ([#44027](/44027))
- Avoid matching 'use' in custom Stub templates in `Illuminate/Console/GeneratorCommand.php` ([#44049](/44049))


## [v9.28.0]() - 2022-09-06

### Added
- Added view data assertions to TestView ([#43923](/43923))
- Added `Illuminate/Routing/Redirector::getIntendedUrl()` ([#43938](/43938))
- Added Eloquent mode to prevent prevently silently discarding fills for attributes not in $fillable ([#43893](/43893))
- Added `Illuminate/Testing/PendingCommand::assertOk()` ([#43968](/43968))
- Make Application macroable ([#43966](/43966))
- Introducing Signal Traps ([#43933](/43933))
- Allow registering instances of commands ([#43986](/43986))
- Support Enumerable in Stringable ([#44012](/44012))

### Fixed
- Fixed RoueGroup::merge to format merged prefixes correctly. ([#44011](/44011))
- Fixes providesTemporaryUrls on AwsS3V3Adapter ([#44009](/44009))
- Fix ordering of stylesheets when using @vite ([#43962](/43962))

### Changed
- Allow invokable rules to specify custom messsages ([#43925](/43925))
- Support objects like GMP for custom Model casts ([#43959](/43959))
- Default 404 message on denyAsNotFound ([#43901](/43901))
- Changed `Illuminate/Container/Container::resolvePrimitive()` for isVariadic() ([#43985](/43985))
- Allow validator messages to use nested arrays ([#43981](/43981))
- Ensure freezeUuids always resets UUID creation after exception in callback ([#44018](/44018))


## [v9.27.0]() - 2022-08-30

### Added
- Add getter and setter for connection in the DatabaseBatchRepository class ([#43869](/43869))

### Fixed
- Fix for potential bug with non-backed enums ([#43842](/43842))
- Patch nested array validation rule regression bug ([#43897](/43897))
- Fix registering event listeners with array callback ([#43890](/43890))

### Changed
- Explicitly add column name to SQLite query in `Illuminate/Database/Console/DatabaseInspectionCommand::getSqliteTableSize()` ([#43832](/43832))
- Allow broadcast on demand notifications ([d2b1446]())
- Make Vite::hotFile() public ([#43875](/43875))
- Prompt to create sqlite db when migrating ([#43867](/43867))
- Call prepare() on HttpException responses ([#43895](/43895))
- Make the model:prune command easier to extend ([#43919](/43919))


## [v9.26.1]() - 2022-08-23

### Revert
- Revert "[9.x] Add statusText for an assertion message" ([#43831](/43831))

### Fixed
- Fixed `withoutVite` ([#43826](/43826))


## [v9.26.0]() - 2022-08-23

### Added
- Adding support for non-backed enums in Models ([#43728](/43728))
- Added vite asset url helpers ([#43702](/43702))
- Added Authentication keyword for SqlServerConnector.php ([#43757](/43757))
- Added support for additional where* methods to route groups ([#43731](/43731))
- Added min_digits and max_digits validation ([#43797](/43797))
- Added closure support to dispatch conditionals in bus ([#43784](/43784))
- Added configurable paths to Vite ([#43620](/43620))

### Fixed
- Fix unique lock release for broadcast events ([#43738](/43738))
- Fix empty collection class serialization ([#43758](/43758))
- Fixes creation of deprecations channel ([#43812](/43812))

### Changed
- Improve display of failures for assertDatabaseHas ([#43736](/43736))
- Always use the write PDO connection to read the just stored pending batch in bus ([#43737](/43737))
- Move unique lock release to method ([#43740](/43740))
- Remove timeoutAt fallback from Job base class ([#43749](/43749))
- Convert closures to arrow functions ([#43778](/43778))
- Use except also in `Illuminate/Routing/Middleware/ValidateSignature::handle()` ([e554d47]())
- Adjust forever time for cookies ([#43806](/43806))
- Make string padding UTF-8 safe ([f1762ed]())


## [v9.25.1]() - 2022-08-16

### Fixes
- [Fixed typos]() 


## [v9.25.0]() - 2022-08-16

### Added
- Added whenNotExactly to Stringable ([#43700](/43700))
- Added ability to Model::query()->touch() to mass update timestamps ([#43665](/43665))

### Fixed
- Prevent error in db/model commands when using unsupported columns ([#43635](/43635))
- Fixes ensureDependenciesExist runtime error ([#43626](/43626))
- Null value for auto-cast field caused deprication warning in php 8.1 ([#43706](/43706))
- db:table command properly handle table who doesn't exist ([#43669](/43669))

### Changed
- Handle assoc mode within db commands ([#43636](/43636))
- Allow chunkById on Arrays, as well as Models ([#43666](/43666))
- Allow for int value parameters to whereMonth() and whereDay() ([#43668](/43668))
- Cleaning up old if-else statement ([#43712](/43712))
- Ensure correct 'integrity' value is used for css assets ([#43714](/43714))


## [v9.24.0]() - 2022-08-09

### Added
- New db:show, db:table and db:monitor commands ([#43367](/43367))
- Added validation doesnt_end_with rule ([#43518](/43518))
- Added `Illuminate/Database/Eloquent/SoftDeletes::restoreQuietly()` ([#43550](/43550))
- Added mergeUnless to resource ConditionallyLoadsAttributes trait ([#43567](/43567))
- Added `Illuminate/Support/Testing/Fakes/NotificationFake::sentNotifications()` ([#43558](/43558))
- Added `implode` to `Passthru` in `Illuminate/Database/Eloquent/Builder.php` ([#43574](/43574))
- Make Config repository macroable ([#43598](/43598))
- Add whenNull to ConditionallyLoadsAtrribute trait ([#43600](/43600))
- Extract child route model relationship name into a method ([#43597](/43597))

### Revert
- Reverted [Added `whereIn` to  `Illuminate/Routing/RouteRegistrar::allowedAttributes`](/43509) ([#43523](/43523))

### Fixed
- Fix unique locking on broadcast events ([#43516](/43516))
- Fixes the issue of running docs command on windows ([#43566](/43566), [#43585](/43585))
- Fixes output when running db:seed or using --seed in migrate commands ([#43593](/43593))

### Changed
- Gracefully fail when unable to locate expected binary on the system for artisan docs command ([#43521](/43521))
- Improve output for some Artisan commands ([#43547](/43547))
- Alternative database name in Postgres DSN, allow pgbouncer aliased databases to continue working on 9.x ([#43542](/43542))
- Allow @class() for component tags ([#43140](/43140))
- Attribute Cast Performance Improvements ([#43554](/43554))
- Queue worker daemon should also listen for SIGQUIT ([#43607](/43607))
- Keep original keys when using Collection->sortBy() with an array of sort operations ([#43609](/43609))


## [v9.23.0]() - 2022-08-02

### Added
- Added whereNot method to Fluent JSON testing matchers ([#43383](/43383))
- Added deleteQuietly method to Model and use arrow func for related methods ([#43447](/43447))
- Added conditionable trait to Filesystem adapters ([#43450](/43450))
- Introduce artisan docs command ([#43357](/43357))
- Added Support CSP nonce, SRI, and arbitrary attributes with Vite ([#43442](/43442))
- Support conditionables that get condition from target object ([#43449](/43449))
- Added `whereIn` to  `Illuminate/Routing/RouteRegistrar::allowedAttributes` ([#43509](/43509))

### Fixed
- Prevent redis crash when large number of jobs are scheduled for a specific time ([#43310](/43310))

### Changed
- Make Command components Factory extensible ([#43439](/43439))
- Solve Blade component showing quote formatted for the console ([#43446](/43446))
- Improves output capture from serve command ([#43461](/43461))
- Allow terser singleton bindings ([#43469](/43469))


## [v9.22.1]() - 2022-07-26

### Added
- Added unique locking to broadcast events ([#43416](/43416))

### Fixed
- Fixes Artisan serve command on Windows ([#43437](/43437))


## [v9.22.0]() - 2022-07-26

### Added
- Added ability to attach an array of files in MailMessage ([#43080](/43080))
- Added conditional lines to MailMessage ([#43387](/43387))
- Add support for multiple hash algorithms to `Illuminate/Filesystem/Filesystem::hash()` ([#43407](/43407))

### Fixed
- Fixes for model:show when attribute default is an enum ([#43370](/43370))
- Fixed DynamoDB locks with 0 seconds duration ([#43365](/43365))
- Fixed overriding global locale ([#43426](/43426))

### Changed
- Round milliseconds in console output runtime ([#43400](/43400))
- Improves serve Artisan command ([#43375](/43375))


## [v9.21.6]() - 2022-07-22

### Revert
- Revert ["Protect against ambiguous columns"](/43278) ([#43362](/43362))

### Fixed
- Fixes default attribute value when using enums on model:show ([#43360](/43360))


## [v9.21.5]() - 2022-07-21

### Added
- Adds fluent File validation rule ([#43271](/43271))

### Revert
- Revert ["Prevent double throwing chained exception on sync queue"](/42950) ([#43354](/43354))


### Changed
- Allow section payload to be lazy in the "about" command ([#43329](/43329))


## [v9.21.4]() - 2022-07-21

### Added
- Added `Illuminate/Filesystem/FilesystemAdapter::supportsTemporaryUrl()` ([#43317](/43317))

### Fixed
- Fixes confirm component default value ([#43334](/43334))

### Changed
- Improves console output when command not found ([#43323](/43323))


## [v9.21.3]() - 2022-07-20

### Fixed
- Fixes usage of Migrator without output ([#43326](/43326))


## [v9.21.2]() - 2022-07-20

### Fixed
- Fixes queue:monitor command dispatching QueueBusy ([#43320](/43320))
- Ensure relation names are properly "snaked" in JsonResource::whenCounted() method ([#43322](/43322))
- Fixed Bootstrap 5 pagination ([#43319](/43319))


## [v9.21.1]() - 2022-07-20

### Added
- Added "Logs" driver to the about command ([#43307](/43307))
- Allows to install doctrine/dbal from model:show command ([#43288](/43288))
- Added to stub publish command flag that restricts to only existing files ([#43314](/43314))

### Fixed
- Fixes for model:show command ([#43301](/43301))

### Changed
- Handle varying composer -V output ([#43286](/43286))
- Replace resolve() with app() for Lumen compatible ([#43312](/43312))
- Allow using backed enums as route parameters ([#43294](/43294))


## [v9.21.0]() - 2022-07-19

### Added
- Added inspiring quote ([#43180](/43180), [#43189](/43189))
- Introducing a fresh new look for Artisan ([#43065](/43065))
- Added whenCounted to JsonResource ([#43101](/43101))
- Artisan model:show command ([#43156](/43156))
- Artisan `about` Command ([#43147](/43147), [51b5eda](), [#43225](/43225), [#43276](/43276))
- Adds enum casting to Request ([#43239](/43239))

### Revert
- Revert ["Fix default parameter bug in routes"](/42942) ([#43208](/43208))
- Revert route change PR ([#43255](/43255))

### Fixed
- Fix transaction attempts counter for sqlsrv ([#43176](/43176))

### Changed
- Make assertDatabaseHas failureDescription more multibyte character friendly ([#43181](/43181))
- ValidationException summarize only when use strings ([#43177](/43177))
- Improve mode function in collection ([#43240](/43240))
- clear Facade resolvedInstances in queue worker resetScope callback ([#43215](/43215))
- Improves queue:work command ([#43252](/43252))
- Remove null default attributes names when UPDATED_AT or CREATED_AT is null at Model::replicate ([#43279](/43279))
- Protect against ambiguous columns ([#43278](/43278))
- Use readpast query hint instead of holdlock for sqlsrv database queue ([#43259](/43259))
- Vendor publish flag that restricts to only existing files ([#43212](/43212))


## [v9.20.0]() - 2022-07-13

### Added
- Added quote from Mustafa Kemal Atatürk ([#43022](/43022))
- Allow Collection random() to accept a callable ([#43028](/43028))
- Added `Str::inlineMarkdown()` ([#43126](/43126))
- Allow authorization responses to specify HTTP status codes ([#43097](/43097))
- Added required directive ([#43103](/43103))
- Added replicateQuietly to Model ([#43141](/43141))
- Added ignore param to ValidateSignature middleware ([#43160](/43160))

### Fixed
- Fixed forceCreate on MorphMany not returning newly created object ([#42996](/42996))
- Fixed missing return in `Illuminate/Mail/Attachment::fromStorageDisk()` ([#43023](/43023))
- Fixed inconsistent content type when using ResponseSequence ([#43051](/43051))
- Prevent double throwing chained exception on sync queue ([#42950](/42950))
- Avoid matching multi-line imports in GenerateCommand stub templates ([#43093](/43093))

### Changed
- Disable Column Statistics for php artisan schema:dump on MariaDB ([#43027](/43027))
- Bind a Vite Null Object to the Container instead of a Closure in `Illuminate/Foundation/Testing/Concerns/InteractsWithContainer::withoutVite()` ([#43040](/43040))
- Early return when message format is the default in `Illuminate/Support/MessageBag::transform()` ([#43149](/43149))


## [v9.19.0]() - 2022-06-28

### Added
- Add new allowMaxRedirects method to PendingRequest ([#42902](/42902))
- Add support to detect dirty encrypted model attributes ([#42888](/42888))
- Added Vite ([#42785](/42785))

### Fixed
- Fixed bug on forceCreate on a MorphMay relationship not including morph type ([#42929](/42929))
- Fix default parameter bug in routes ([#42942](/42942))
- Handle cursor paginator when no items are found ([#42963](/42963))
- Fix undefined constant error when use slot name as key of object ([#42943](/42943))
- Fix BC break for Log feature tests ([#42987](/42987))

### Changed
- Allow instance of Enum pass Enum Rule ([#42906](/42906))


## [v9.18.0]() - 2022-06-21

### Added
- Improve file attachment for mail and notifications ([#42563](/42563))
- Introduce Invokable validation classes ([#42689](/42689))
- Predis v2.0 ([#42577](/42577))
- Added `Illuminate/View/Compilers/Concerns/CompilesConditionals::compileReadonly()` ([#42717](/42717))
- Apply where's from union query builder in cursor pagination ([#42651](/42651))
- Added ability to define "with" relations as a nested array ([#42690](/42690))
- Added ability to set backoff in broadcast events ([#42737](/42737))
- Added host(), httpHost(), schemeAndHttpHost() to Request ([#42797](/42797))
- Allow invokable rules to push messages to nested (or other) attributes ([#42801](/42801))
- Adds compilePushIf and compileEndpushIf functions to View compiler ([#42762](/42762))
- Added: Allow removing token during tests ([#42841](/42841))
- Added predefined_constants to reservedNames array in `Illuminate/Console/GeneratorCommand` ([#42832](/42832))
- Handle collection creation around a single enum ([#42839](/42839))
- Allow for nullable morphs in whereNotMorphedT ([#42878](/42878))
- Introduce a fake() helper to resolve faker singletons, per locale ([#42844](/42844))
- Allow handling cumulative query duration limit per DB connection ([#42744](/42744))
- Add invokable option to make rule command ([#42742](/42742))

### Fixed
- Fix deprecation error in the route:list command ([#42704](/42704))
- Fixed Request offsetExists without routeResolver ([#42754](/42754))
- Fixed: Loose comparison causes the value not to be saved ([#42793](/42793))
- Fixed: Fix database session driver keeps resetting CSRF token ([#42782](/42782))
- Fixed: Arr::map - Fix map-by-reference w/ built-ins ([#42815](/42815))
- Fixed league/flysystem suggest ([#42872](/42872))

### Changed
- Start session in TestResponse to allow marshalling of error bag from JSON ([#42710](/42710))
- Rename methods in `Illuminate/Broadcasting/BroadcastManager` ([753e9fd]())
- Avoid throwing on invalid mime-type in `Illuminate/Filesystem/FilesystemAdapter::mimeType()` ([#42761](/42761))
- Do not resolve already set headers in `Illuminate/Filesystem/FilesystemAdapter` ([#42760](/42760))
- Standardise invokable rule translation functionality ([#42873](/42873))
- Clear cast cache when setting attributes using arrow ([#42852](/42852))


## [v9.17.0]() - 2022-06-07

### Added
- Added Illuminate/Database/Eloquent/Builder::withoutEagerLoad() ([#42641](/42641))
- Allow random string generation to be controlled ([#42669](/42669))
- Adds doesnt_start_with validation ([#42683](/42683), [de35bf2]())
- Added quarterlyOn cron schedule frequency command ([#42692](/42692))

### Fixed
- Free reserved memory before handling fatal errors ([#42630](/42630), [#42646](/42646))
- Prevent $mailer being reset when testing mailables that implement ShouldQueue ([#42695](/42695))
- Added checks for Pusher 7.1 preps ([#42632](/42632))
- Fixed grouping for user authorization ([#42664](/42664))

### Changed
-  Allow assertions against pushed string based pushed jobs ([#42676](/42676))


## [v9.16.0]() - 2022-06-02

### Added
- Added Eloquent withWhereHas method ([#42597](/42597))
- User authentication for Pusher ([#42531](/42531))
- Added additional uuid testing helpers ([#42619](/42619))

### Fixed
- Fix queueable notification's ID overwritten ([#42581](/42581))
- Handle undefined array key error in route ([#42606](/42606))

### Deprecated
- Illuminate/Routing/Redirector::home() ([#42600](/42600))


## [v9.15.0]() - 2022-05-31

### Added
- Added --only-vendor option to route:list command ([#42549](/42549))
- Added `Illuminate/Http/Client/PendingRequest::throwUnless()` ([#42556](/42556))
- Added `Illuminate/Support/Str::isJson()` ([#42545](/42545))
- Added `Illuminate/Filesystem/Filesystem::isEmptyDirectory()` ([#42559](/42559))
- Added `Add counts to route:list command` ([#42551](/42551))
- Support kebab case for slot name shortcut ([#42574](/42574))

### Revered
- Revert digits changes in validation ([c113768](), [#42562](/42562))

### Fixed
- Fix getting '0' from route parameter in Authorize middleware ([#42582](/42582))

### Changed
- Retain the original attribute value during validation of an array key with a dot for correct failure message ([#42395](/42395))
- Allow bootable test traits to teardown ([#42521](/42521))
- Pass thrown exception to $sleepMilliseconds closure in retry helper ([#42532](/42532))
- Make HasTimestamps::updateTimestamps chainable ([#42533](/42533))
- Remove meaningless parameter in `Illuminate/View/Concerns/ManagesEvents` ([#42546](/42546))
- Map integer parameter to parameter name when resolving binding field ([#42571](/42571))
- Conditionable should return HigherOrderWhenProxy only when the args number is exactly 1 ([#42555](/42555))


## [v9.14.1]() - 2022-05-25

### Added
- Model::whereRelation add callback function ([#42491](/42491))
- Add Conditionable Trait to Illuminate\Support\Carbon ([#42500](/42500))

### Fixed
- Fix afterCommit and DatabaseTransactions ([#42502](/42502))
- Fixed regression when only some route parameters are scoped ([#42517](/42517))


## [v9.14.0]() - 2022-05-24

### Added
- Added ability to add table comments for MySQL and Postgres ([#42401](/42401))
- Added dynamic trashed factory state ([#42414](/42414))
- Added Illuminate/Collections/Arr::prependKeysWith() ([#42448](/42448))
- Added bootable traits to TestCase ([#42394](/42394))

### Fixed
- Fix clone issue on updateOrCreate and firstOrCreate ([#42434](/42434))
- Prevent double sanitized key in RateLimiter@tooManyAttempts ([#42462](/42462))
- Add flush handler to output buffer for streamed test response (bugfix) ([#42481](/42481))

### Changed
- Adds attaches a concise error message to SES exceptions ([#42426](/42426))
- Use duplicate instead of createFromBase to clone request when routes are cached ([#42420](/42420))
- Use model route key when route parameter does not specifiy custom binding field but a different parameter does ([#42425](/42425))
- Adds ability to have paginate() $perPage parameter as callable with access to $total ([#42429](/42429))
- Extract ServeCommand env list to static property ([#42444](/42444))
- Use route parameters in view ([#42461](/42461))


## [v9.13.0]() - 2022-05-17

### Added
- Added Illuminate/Collections/Traits/EnumeratesValues::value() ([#42257](/42257))
- Added new TestResponse helper: assertJsonMissingPath ([#42361](/42361))
- Added Illuminate/Support/Testing/Fakes/NotificationFake::assertCount() ([#42366](/42366))
- Added new DetectLostConnections ([#42377](/42377), [#42382](/42382))
- Added Illuminate/Testing/TestResponse::collect() ([#42384](/42384))
- Added full callable support to schedule:list ([#42400](/42400))
- Added `Illuminate/Collections/Arr::map()` ([#42398](/42398))

### Fixed
- Fixed PruneCommand finding its usage within other traits ([#42350](/42350))
- Fix assert that exception is thrown without message ([#42360](/42360))

### Changed
- Skip parameter parsing for raw post body in HTTP Client ([#42364](/42364))
- Consistency between digits and digits_between validation rules ([#42358](/42358))
- Corrects the use of "failed_jobs" instead of "job_batches" in BatchedTableCommand ([#42389](/42389))
- Update email.blade.php ([#42388](/42388))
- Remove old monolog 1.x compat code ([#42392](/42392))
- SesTransport: use correct Tags argument ([#42390](/42390))
- Implement robust handling of forwarding of exception codes ([#42393](/42393))


## [v9.12.2]() - 2022-05-11

### Fixed
- Factory fails to eval models and factories when returned from closure ([#42344](/42344))

### Changed
- Added is_string check to QueriesRelationships@requalifyWhereTables ([#42341](/42341))


## [v9.12.1]() - 2022-05-10

### Fixed
- Fix TypeError in DeadlockException ([#42337](/42337))
- Fixed type mismatch on Pusher::validate_channels() ([#42340](/42340))

### Changed
- Add custom segments on "remember me" for session rebuild ([#42316](/42316))


## [v9.12.0]() - 2022-05-10

### Added

- Added closure based exceptions testing ([#42155](/42155))
- Allow forcing requests made via the Http client to be faked ([#42230](/42230))
- Added 'throwIf' method to PendingRequest ([#42260](/42260))
- Allow passing key/value arrays to getArguments and getOptions ([#42268](/42268))
- Add whereNotMorphedTo, orWhereNotMorphedTo ([#42264](/42264))
- Add method to extend localeArray generation ([#42275](/42275))
- Added ability to set delay per channel based on notifiable instance ([#42239](/42239))
- Added Illuminate/Pagination/CursorPaginator::onLastPage() ([#42301](/42301))
- Added findOr method to Query/Builder ([#42290](/42290))

### Fixed

- Fix too many channels with pusher broadcasting ([#42287](/42287))
- Fix Str::Mask() for repeating chars ([#42295](/42295))
- Fix EventFake::assertListening() for asserting string-based observer listeners ([#42289](/42289))
- Fixed Loose comparison causes the value not to be saved ([#41337](/41337))
- Fix multiple dots for digits_between rule ([#42330](/42330))

### Changed

- Enable to modify HTTP Client request headers when using beforeSending() callback ([#42244](/42244))
- Make throttle lock acquisition retry configurable for concurrency limiter ([#42242](/42242))
- Defers expanding callables on Factories ([#42241](/42241))
- Add wherehas soft deleting scopes ([#42100](/42100))
- Improve password checks ([#42248](/42248))
- Set relation parent key when using forceCreate on HasOne and HasMany relations ([#42281](/42281))
- Make sure the prefix override behaviours are the same between phpredis and predis drivers ([#42279](/42279))
- Share logging context across channels and stacks ([#42276](/42276))

## [v9.11.0]() - 2022-05-03

### Added

- Added Illuminate/Collections/Arr::join() ([#42197](/42197))
- Added has and missing methods to ValidatedInput ([#42184](/42184))
- Added deprecation stack trace config option ([#42235](/42235))

### Fixed

- Fix deprecation issue with translator and empty rules ([#42216](/42216), [#42213](/42213))

### Changed

- Improve EventFake::assertListening() support for subscribers ([#42193](/42193))

## [v9.10.1]() - 2022-04-28

### Revert

- Revert of ["Illuminate/Routing/Router::middlewareGroup() will support array of the middlewares"](/42004) ([7563912]())

## [v9.10.0]() - 2022-04-27

### Added

- Add the ability to use alias when performing upsert via MySQL ([#42053](/42053))
- Illuminate/Routing/Router::middlewareGroup() will support array of the middlewares ([#42004](/42004), [e6b84fb]())
- Added Missing AsCommand attribute on schedule:list ([#42069](/42069))
- Add the beforeRefreshingDatabase function to the Testing/RefreshDatabase trait ([#42073](/42073))
- Added doesntExpectOutputToContain assertion method ([#42096](/42096))
- Added a findOr method to Eloquent ([#42092](/42092))
- Allow extension in `Illuminate/View/Compilers/Compiler.php` ([68e41fd]())
- Support 'IS' and 'IS NOT' PostgreSQL operators ([#42123](/42123))
- Added `str` and `string` methods to Illuminate/Http/Concerns/InteractsWithInput ([c9d34b7]())
- Added methods to append and prepend jobs to existing chain ([#42138](/42138))

### Fixes

- Make it so non-existent jobs run down the failed path instead of crashing ([#42079](/42079))
- Fix schedule:work command Artisan binary name ([#42083](/42083))
- Fix TrimStrings middleware with non-UTF8 characters ([#42065](/42065))
- Copy locale and defaultLocale from original request in Request::createFrom() ([#42080](/42080))
- Fix ViewErrorBag for JSON session serialization ([#42090](/42090))
- Fix array keys from cached routes in CompiledRouteCollection::getRoutesByMethod() ([#42078](/42078))
- Fix json_last_error issue with JsonResponse::setData ([#42125](/42125))
- Fix bug in BelongsToMany where non-related rows are returned ([#42087](/42087))
- Fix HasAttributes::mutateAttributeForArray when accessing non-cached attribute ([#42130](/42130))

### Changed

- Make password rule errors translatable ([#42060](/42060))
- Redesign of the event:list Command. ([#42068](/42068))
- Changed event:list command ([#42084](/42084))
- Throw LostDbConnectionException instead of LogicException ([#42102](/42102))
- Throw deadlock exception ([#42129](/42129))
- Support Arr::forget() for nested ArrayAccess objects ([#42142](/42142))
- Allow Illuminate/Collections/Enumerable::jsonSerialize() to return other types ([#42133](/42133))
- Update schedule:list colouring output  ([#42153](%5B#42153%5D(/42153))

## [v9.9.0]() - 2022-04-19

### Added

- Add getAllTables support for SQLite and SQLServer schema builders ([#41896](/41896))
- Added withoutEagerLoads() method to Builder ([#41950](/41950))
- Added 'throw' method to PendingRequest ([#41953](/41953))
- Configurable pluralizer language and uncountables ([#41941](/41941))

### Fixed

- Fixed Error in Illuminate/Routing/Exceptions/StreamedResponseException ([#41955](/41955))
- Fix PHP warnings when rendering long blade string ([#41956](/41956))
- Fix ExcludeIf regression to use Closure over is_callable() ([#41969](/41969))
- Fixes applying replacements to multi-level localization arrays ([#42022](/42022))

### Changed

- Improved Illuminate/Foundation/Http/Middleware/TrimStrings.php and Str::squish() ([#41949](/41949), [#41971](/41971))
- Use config session domain for maintenance cookie ([#41961](/41961))
- Revert lazy command forcing ([#41982](/41982))

## [v9.8.1]() - 2022-04-12

### Reverted

- Revert "Standardize withCount() & withExists() eager loading aggregates ([#41943](/41943))

## [v9.8.0]() - 2022-04-12

### Added

- Added inbound option to CastMakeCommand ([#41838](/41838))
- Added a way to retrieve the first column of the first row from a query ([#41858](/41858))
- Make DatabaseManager Macroable ([#41868](/41868))
- Improve Str::squish() ([#41877](/41877), [#41924](/41924))
- Added option to disable cached view ([#41859](/41859))
- Make Connection Class Macroable ([#41865](/41865))
- Added possibility to discover anonymous Blade components in other folders ([#41637](/41637))
- Added `Illuminate/Database/Eloquent/Factories/Factory::set()` ([#41890](/41890))
- Added multibyte support to string padding helper functions ([#41899](/41899))
- Allow to use custom log level in exception handler reporting ([#41925](/41925))

### Fixed

- Illuminate/Support/Stringable::exactly() with Stringable value ([#41846](/41846))
- Fixed afterCommit and RefreshDatabase ([#41782](/41782))
- Fix null name for email address in `Illuminate/Mail/Message` ([#41870](/41870))
- Fix seeder property for in-memory tests ([#41869](/41869))
- Fix empty paths for server.php ([#41933](/41933))
- Fix ExcludeIf constructor ([#41931](/41931))

### Changed

- Set custom host to the serve command with environment variable ([#41831](/41831))
- Add handling of object being passed into old method in Model ([#41842](/41842))
- Catch permission exception when creating directory ([#41871](/41871))
- Restore v8 behaviour of base query for relations ([#41918](/41918), [#41923](/41923))
- Standardize withCount() & withExists() eager loading aggregates ([#41914](/41914))

## [v9.7.0]() - 2022-04-05

### Added

- Make whereBelongsTo accept Collection ([#41733](/41733))
- Database queries containing JSON paths support array index braces ([#41767](/41767))
- Fire event before route matched ([#41765](/41765))
- Added to `Illuminate/Http/Resources/ConditionallyLoadsAttributes::whenNotNull` method ([#41769](/41769))
- Added "whereIn" route parameter constraint method ([#41794](/41794))
- Added `Illuminate/Queue/BeanstalkdQueue::bulk()` ([#41789](/41789))
- Added `Illuminate/Queue/SqsQueue::bulk()` ([#41788](/41788))
- Added String::squish() helper ([#41791](/41791))
- Added query builder method whereJsonContainsKey() ([#41802](/41802))
- Enable dispatchAfterResponse for batch ([#41787](/41787))

### Fixed

- Factory generation fixes ([#41688](/41688))
- Fixed Http Client throw boolean parameter of retry method ([#41762](/41762), [#41792](/41792))
- Ignore empty redis username string in PhpRedisConnector ([#41773](/41773))
- Fixed support of nullable type for AsArrayObject/AsCollection ([#41797](/41797), [05846e7]())
- Fixed adding jobs from iterable to the pending batch ([#41786](/41786))
- Http client: fix retry handling of connection exception ([#41811](/41811))

### Changed

- Enable batch jobs delay for database queue ([#41758](/41758))
- Enable batch jobs delay for redis queue ([#41783](/41783))
- Http client: dispatch "response received" event for every retry attempt ([#41793](/41793))
- Http Client: provide pending request to retry callback ([#41779](/41779))
- Allow non length limited strings and char for postgresql ([#41800](/41800))
- Revert some Carbon::setTestNow() removals ([#41810](/41810))
- Allow cleanup of databases when using parallel tests ([#41806](/41806))

## [v9.6.0]() - 2022-03-29

### Added

- Added whenTableHasColumn and whenTableDoesntHaveColumn on Schema Builder ([#41517](/41517))
- Added Illuminate/Mail/Mailable::hasSubject() ([#41575](/41575))
- Added `Illuminate/Filesystem/Filesystem::hasSameHash()` ([#41586](/41586))

### Fixed

- Fixed deprecation warning in `Str::exists()` ([d39d92d]())
- Fix artisan make:seeder command nested namespace and class name problem ([#41534](/41534))
- Fixed Illuminate/Redis/Connections/PhpRedisConnection::handle() ([#41546](/41546))
- Stop throwing LazyLoadingViolationException for recently created model instances ([#41549](/41549))
- Close doctrineConnection on disconnect ([#41584](/41584))

### Changed

- Make throttle lock acquisition retry time configurable ([#41516](/41516))
- Allows object instead of array when adding to PendingBatch ([#41475](/41475))
- Exactly match scheduled command --name in schedule:test ([#41528](/41528))
- Handle Symfony defaultName deprecation ([#41555](/41555), [#41595](/41595))
- Improve ScheduleListCommand ([#41552](/41552), [#41535](/41535), [#41494](/41494))
- Remove useless if statement in Str::mask() ([#41570](/41570))

## [v9.5.1]() - 2022-03-15

### Reverted

- Revert "Fix the guard instance used." ([#41491](/41491))

## [v9.5.0]() - 2022-03-15

### Added

- Added callback support on implode Collection method. ([#41405](/41405))
- Added `Illuminate/Filesystem/FilesystemAdapter::assertDirectoryEmpty()` ([#41398](/41398))
- Implement email "metadata" for SesTransport ([#41422](/41422))
- Make assertPath() accepts Closure ([#41409](/41409))
- Added callable support to operatorForWhere on Collection ([#41414](/41414), [#41424](/41424))
- Added partial queue faking ([#41425](/41425))
- Added --name option to schedule:test command ([#41439](/41439))
- Define `Illuminate/Database/Eloquent/Concerns/HasRelationships::newRelatedThroughInstance()` ([#41444](/41444))
- Added `Illuminate/Support/Stringable::wrap()` ([#41455](/41455))
- Adds "freezeTime" helper for tests ([#41460](/41460))
- Allow for callables with beforeSending in`Illuminate/Http/Client/PendingRequest.php::runBeforeSendingCallbacks()` ([#41489](/41489))

### Fixed

- Fixed deprecation warnings from route:list when filtering on name or domain ([#41421](/41421))
- Fixes HTTP::pool response when a URL returns a null status code ([#41412](/41412))
- Fixed recaller name resolution in `Illuminate/Session/Middleware/AuthenticateSession.php` ([#41429](/41429))
- Fixed the guard instance used in /Illuminate/Session/Middleware/AuthenticateSession.php ([#41447](/41447))
- Fixed route:list --except-vendor hiding Route::view() & Route::redirect() ([#41465](/41465))

### Changed

- Add null typing to connection property in \Illuminate\Database\Eloquent\Factories\Factory ([#41418](/41418))
- Update reserved names in GeneratorCommand ([#41441](/41441))
- Redesign php artisan schedule:list Command ([#41445](/41445))
- Extend eloquent higher order proxy properties ([#41449](/41449))
- Allow passing named arguments to dynamic scopes ([#41478](/41478))
- Throw if tag is passed but is not supported in `Illuminate/Encryption/Encrypter.php` ([#41479](/41479))
- Update PackageManifest::$vendorPath initialisation for cases, when composer vendor dir is not in project director ([#41463](/41463))

## [v9.4.1]() - 2022-03-08

### Fixed

- Fixed version of laravel

## [v9.4.0]() - 2022-03-08

### Added

- Support modifying a char column type ([#41320](/41320))
- Add "Mutex" column to 'schedule:list' command ([#41338](/41338))
- Allow eloquent whereNot() and orWhereNot() to work on column and value ([#41296](/41296))
- Allow VerifyCsrfToken's CSRF cookie to be extended ([#41342](/41342))
- Added `soleValue()` to query builder ([#41368](/41368))
- Added `lcfirst()` to `Str` and `Stringable` ([#41384](/41384))
- Added retryUntil method to queued mailables ([#41393](/41393))

### Fixed

- Fixed middleware sorting for authenticating sessions ([50b46db]())
- Fixed takeUntilTimeout method of LazyCollection ([#41354](/41354), [#41370](/41370))
- Fixed directory for nested markdown files for mailables ([#41366](/41366))
- Prevent serializing default values of queued jobs ([#41348](/41348))
- Fixed get() and head() in `Illuminate/Http/Client/PendingRequest.php` ([a54f481]())

### Changed

- Don't use global tap helper ([#41326](/41326))
- Allow chaining of `Illuminate/Console/Concerns/InteractsWithIO::newLine` ([#41327](/41327))
- set destinations since bcc missing from raw message in Mail SesTransport ([8ca43f4]())

## [v9.3.1]() - 2022-03-03

### Added

- Optionally cascade thrown Flysystem exceptions by @driesvints in /41308

### Changed

- Allow overriding transport type on Mailgun transporter by @jnoordsij in /41309
- Change how Laravel handles strict morph map with pivot classes by @crynobone in /41304

### Fixed

- $job can be an object in some methods by @villfa in /41244
- Fix docblock on Batch class by @yoeriboven in /41295
- Correct `giveConfig` param doc by @Neol3108 in /41314
- Fix MySqlSchemaState does not add --ssl-ca to mysql cli  by @DeepDiver1975 in /41315
- Do not prepend baseUrl to absolute urls by @JaZo in /41307
- Fixes getting the trusted proxies IPs from the configuration file by @nunomaduro in /41322

## [v9.3.0 (2022-03-02)]()

### Added

- Add NotificationFake::assertNothingSentTo() by @axlon ([#41232](/41232))
- Support --ssl-ca on schema load and dump by @DeepDiver1975 ([#40931](/40931))
- Add whereNot() to Query Builder and Eloquent Builder by @marcovo ([#41096](/41096))
- Added support for index and position placeholders in array validation messages by @Bird87ZA ([#41123](/41123))
- Add resource binding by @aedart ([#41233](/41233))
- Add ability to push additional pipes onto a pipeline via chain($pipes) by @stevebauman ([#41256](/41256))
- Add option to filter out routes defined in vendor packages in route:list command by @amiranagram ([#41254](/41254))

### Fixed

- Query PostgresBuilder fixes for renamed config 'search_path' by @derekmd ([#41215](/41215))
- Improve doctypes for Eloquent Factory guessing methods by @bastien-phi ([#41245](/41245))
- Fix Conditional::when and Conditional::unless when called with invokable by @bastien-phi ([#41270](/41270))
- Improves Support\Collection reduce method type definition by @fdalcin ([#41272](/41272))
- Fix inconsistent results of firstOrNew() when using withCasts() by @Attia-Ahmed ([#41257](/41257))
- Fix implicitBinding and withTrashed route with child with no SoftDeletes trait by @stein-j ([#41282](/41282))

### Changed

- Unset Connection Resolver extended callback by @emrancu ([#41216](/41216))
- Update Mailgun transport type by @driesvints ([#41255](/41255))

## [v9.2.0 (2022-02-22)]()

### Added

- Added `Illuminate/Database/Eloquent/Casts/Attribute::make()` ([#41014](/41014))
- Added `Illuminate/Collections/Arr::keyBy()` ([#41029](/41029))
- Added expectsOutputToContain to the PendingCommand. ([#40984](/40984))
- Added ability to supply HTTP client methods with JsonSerializable instances ([#41055](/41055))
- Added `Illuminate/Filesystem/AwsS3V3Adapter::getClient()` ([#41079](/41079))
- Added Support for enum in Builder::whereRelation ([#41091](/41091))
- Added X headers when using Mail::alwaysTo ([#41101](/41101))
- Added of support Bitwise operators in query ([#41112](/41112))
- Integrate Laravel CORS into framework ([#41137](/41137))
- Added `Illuminate/Support/Str::betweenFirst()` ([#41144](/41144))
- Allow specifiying custom messages for Rule objects ([#41145](/41145))

### Fixed

- Fixed Queue Failed_jobs insert issue with Exception contain UNICODE ([#41020](/41020))
- Fixes attempt to log deprecations on mocks ([#41057](/41057))
- Fixed loadAggregate not correctly applying casts ([#41050](/41050))
- Do not transform JsonSerializable instances to array in HTTP client methods ([#41077](/41077))
- Fix parsing config('database.connections.pgsql.search_path') ([#41088](/41088))
- Eloquent: firstWhere returns Object instead of NULL ([#41099](/41099))
- Fixed updated with provided qualified updated_at ([#41133](/41133))
- Fix setPriority Call for MailChannel ([#41120](/41120))
- Fixed route:list command output ([#41177](/41177))
- Fix database migrations $connection property ([#41161](/41161))

### Changed

- Cursor pagination: convert original column to expression ([#41003](/41003))
- Cast $perPage to integer on Paginator ([#41073](/41073))
- Restore S3 client extra options ([#41097](/41097))
- Use `latest()` within `notifications()` in `Illuminate/Notifications/HasDatabaseNotifications.php` ([#41095](/41095))
- Remove duplicate queries to find batch ([#41121](/41121))
- Remove redundant check in FormRequest::validated() ([#41115](/41115))
- Illuminate/Support/Facades/Storage::fake() changed ([#41113](/41113))
- Use coalesce equal as provided by PHP >= 7.4 ([#41174](/41174))
- Simplify some conditions with is_countable() ([#41168](/41168))
- Pass AWS temporary URL options to createPresignedRequest method ([#41156](/41156))
- Let Multiple* exceptions hold the number of records and items found ([#41164](/41164))

## [v9.1.0 (2022-02-15)]()

### Added

- Added the ability to use the uniqueFor method for Jobs by @andrey-helldar in /40974
- Add filtering of route:list by domain by @Synchro in /40970
- Added dropForeignIdFor method to match foreignIdFor method by @bretto36 in /40950
- Adds `Str::excerpt` by @nunomaduro in /41000
- Make:model --morph flag to generate MorphPivot model by @michael-rubel in /41011
- Add doesntContain to higher order proxies by @edemots in /41034

### Changed

- Improve types on model factory methods by @axlon in /40902
- Add support for passing array as the second parameter for the group method. by @hossein-zare in /40945
- Makes `ExceptionHandler::renderForConsole` internal on contract by @nunomaduro in /40956
- Put the error message at the bottom of the exceptions by @nshiro in /40886
- Expose next and previous cursor of cursor paginator by @gdebrauwer in /41001

### Fixed

- Fix FTP root config by @driesvints in /40939
- Allows tls encryption to be used with port different than 465 with starttls by @nicolalazzaro in /40943
- Catch suppressed deprecation logs by @nunomaduro in /40942
- Fix typo in method documentation by @shadman-ahmed in /40951
- Patch regex rule parsing due to `Rule::forEach()` by @stevebauman in /40941
- Fix replacing request options by @driesvints in /40954
- Fix `MessageSent` event by @driesvints in /40963
- Add firstOr() function to BelongsToMany relation by @r-kujawa in /40828
- Fix `isRelation()` failing to check an `Attribute` by @rodrigopedra in /40967
- Fix default pivot attributes by @iamgergo in /40947
- Fix enum casts arrayable behaviour by @diegotibi in /40885
- Solve exception error: Undefined array key "", in artisan route:list command by @manuglopez in /41031
- Fix Duplicate Route Namespace by @moisish in /41021
- Fix the error message when no routes are detected by @LukeTowers in /41017
- Fix mails with tags and metadata are not queuable by @joostdebruijn in /41028

## [v9.0.2 (2022-02-10)]()

### Added

- Add disabled directive by @belzaaron in /40900

### Changed

- Widen the type of `Collection::unique` `$key` parameter by @NiclasvanEyk in /40903
- Makes `ExceptionHandler::renderForConsole` internal by @nunomaduro in /40936
- Removal of Google Font integration from default exception templates by @bashgeek in /40926
- Allow base JsonResource class to be collected by @jwohlfert23 in /40896

### Fixed

- Fix Support\Collection reject method type definition by @joecampo in /40899
- Fix SpoofCheckValidation namespace change by @eduardor2k in /40923
- Fix notification email recipient by @driesvints in /40921
- Fix publishing visibility by @driesvints in /40918
- Fix Mailable->priority() by @giggsey in /40917

## [v9.0.1 (2022-02-09)]()

### Changed

- Improves `Support\Collection` each method type definition by @zingimmick in /40879

### Fixed

- Update Mailable.php by @rentalhost in /40868
- Switch to null coalescing operator in Conditionable by @inxilpro in /40888
- Bring back old return behaviour by @ankurk91 in /40880

## [v9.0.0 (2022-02-08)]()

Check the upgrade guide in the [Official Laravel Upgrade Documentation](). Also you can see some release notes in the [Official Laravel Release Documentation]().
