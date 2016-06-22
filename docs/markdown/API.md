# Package

## Table of Contents

* [ArrayKeywords](#arraykeywords)
    * [__construct](#__construct)
    * [setLanguage](#setlanguage)
    * [getFeatureKeywords](#getfeaturekeywords)
    * [getBackgroundKeywords](#getbackgroundkeywords)
    * [getScenarioKeywords](#getscenariokeywords)
    * [getOutlineKeywords](#getoutlinekeywords)
    * [getExamplesKeywords](#getexampleskeywords)
    * [getGivenKeywords](#getgivenkeywords)
    * [getWhenKeywords](#getwhenkeywords)
    * [getThenKeywords](#getthenkeywords)
    * [getAndKeywords](#getandkeywords)
    * [getButKeywords](#getbutkeywords)
    * [getStepKeywords](#getstepkeywords)
* [ArrayLoader](#arrayloader)
    * [supports](#supports)
    * [load](#load)
* [ArrayLoaderTest](#arrayloadertest)
    * [testSupports](#testsupports)
    * [testLoadEmpty](#testloadempty)
    * [testLoadFeatures](#testloadfeatures)
    * [testLoadScenarios](#testloadscenarios)
    * [testLoadOutline](#testloadoutline)
    * [testOutlineExamples](#testoutlineexamples)
    * [testLoadBackground](#testloadbackground)
    * [testLoadSteps](#testloadsteps)
    * [testLoadStepArguments](#testloadsteparguments)
    * [testSingleFeatureArray](#testsinglefeaturearray)
* [BackgroundNode](#backgroundnode)
    * [__construct](#__construct-1)
    * [getNodeType](#getnodetype)
    * [getTitle](#gettitle)
    * [hasSteps](#hassteps)
    * [getSteps](#getsteps)
    * [getKeyword](#getkeyword)
    * [getLine](#getline)
* [CachedArrayKeywords](#cachedarraykeywords)
    * [__construct](#__construct-2)
    * [setLanguage](#setlanguage-1)
    * [getFeatureKeywords](#getfeaturekeywords-1)
    * [getBackgroundKeywords](#getbackgroundkeywords-1)
    * [getScenarioKeywords](#getscenariokeywords-1)
    * [getOutlineKeywords](#getoutlinekeywords-1)
    * [getExamplesKeywords](#getexampleskeywords-1)
    * [getGivenKeywords](#getgivenkeywords-1)
    * [getWhenKeywords](#getwhenkeywords-1)
    * [getThenKeywords](#getthenkeywords-1)
    * [getAndKeywords](#getandkeywords-1)
    * [getButKeywords](#getbutkeywords-1)
    * [getStepKeywords](#getstepkeywords-1)
* [CachedArrayKeywordsTest](#cachedarraykeywordstest)
    * [translationTestDataProvider](#translationtestdataprovider)
    * [testTranslation](#testtranslation)
* [CacheException](#cacheexception)
* [CucumberKeywords](#cucumberkeywords)
    * [__construct](#__construct-3)
    * [setLanguage](#setlanguage-2)
    * [getFeatureKeywords](#getfeaturekeywords-2)
    * [getBackgroundKeywords](#getbackgroundkeywords-2)
    * [getScenarioKeywords](#getscenariokeywords-2)
    * [getOutlineKeywords](#getoutlinekeywords-2)
    * [getExamplesKeywords](#getexampleskeywords-2)
    * [getGivenKeywords](#getgivenkeywords-2)
    * [getWhenKeywords](#getwhenkeywords-2)
    * [getThenKeywords](#getthenkeywords-2)
    * [getAndKeywords](#getandkeywords-2)
    * [getButKeywords](#getbutkeywords-2)
    * [getStepKeywords](#getstepkeywords-2)
* [CucumberKeywordsTest](#cucumberkeywordstest)
    * [translationTestDataProvider](#translationtestdataprovider-1)
    * [testTranslation](#testtranslation-1)
* [DirectoryLoader](#directoryloader)
    * [setBasePath](#setbasepath)
    * [__construct](#__construct-4)
    * [supports](#supports-1)
    * [load](#load-1)
* [DirectoryLoaderTest](#directoryloadertest)
    * [testSupports](#testsupports-1)
    * [testUndefinedFileLoad](#testundefinedfileload)
    * [testBasePath](#testbasepath)
    * [testDefinedFileLoad](#testdefinedfileload)
* [ExampleNode](#examplenode)
    * [__construct](#__construct-5)
    * [getNodeType](#getnodetype-1)
    * [getKeyword](#getkeyword-1)
    * [getTitle](#gettitle-1)
    * [hasTag](#hastag)
    * [hasTags](#hastags)
    * [getTags](#gettags)
    * [hasSteps](#hassteps-1)
    * [getSteps](#getsteps-1)
    * [getTokens](#gettokens)
    * [getLine](#getline-1)
* [ExampleNodeTest](#examplenodetest)
    * [testCreateExampleSteps](#testcreateexamplesteps)
    * [testCreateExampleStepsWithArguments](#testcreateexamplestepswitharguments)
* [ExampleTableNode](#exampletablenode)
    * [__construct](#__construct-6)
    * [getNodeType](#getnodetype-2)
    * [getHash](#gethash)
    * [getColumnsHash](#getcolumnshash)
    * [getRowsHash](#getrowshash)
    * [getTable](#gettable)
    * [getRows](#getrows)
    * [getLines](#getlines)
    * [getRow](#getrow)
    * [getColumn](#getcolumn)
    * [getRowLine](#getrowline)
    * [getRowAsString](#getrowasstring)
    * [getRowAsStringWithWrappedValues](#getrowasstringwithwrappedvalues)
    * [getTableAsString](#gettableasstring)
    * [getLine](#getline-2)
    * [__toString](#__tostring)
    * [getIterator](#getiterator)
    * [getKeyword](#getkeyword-2)
* [FeatureNode](#featurenode)
    * [__construct](#__construct-7)
    * [getNodeType](#getnodetype-3)
    * [getTitle](#gettitle-2)
    * [hasDescription](#hasdescription)
    * [getDescription](#getdescription)
    * [hasTag](#hastag-1)
    * [hasTags](#hastags-1)
    * [getTags](#gettags-1)
    * [hasBackground](#hasbackground)
    * [getBackground](#getbackground)
    * [hasScenarios](#hasscenarios)
    * [getScenarios](#getscenarios)
    * [getKeyword](#getkeyword-3)
    * [getLanguage](#getlanguage)
    * [getFile](#getfile)
    * [getLine](#getline-3)
* [FileCache](#filecache)
    * [__construct](#__construct-8)
    * [isFresh](#isfresh)
    * [read](#read)
    * [write](#write)
* [FileCacheTest](#filecachetest)
    * [testIsFreshWhenThereIsNoFile](#testisfreshwhenthereisnofile)
    * [testIsFreshOnFreshFile](#testisfreshonfreshfile)
    * [testIsFreshOnOutdated](#testisfreshonoutdated)
    * [testCacheAndRead](#testcacheandread)
    * [testBrokenCacheRead](#testbrokencacheread)
* [Gherkin](#gherkin)
    * [addLoader](#addloader)
    * [addFilter](#addfilter)
    * [setFilters](#setfilters)
    * [setBasePath](#setbasepath-1)
    * [load](#load-2)
    * [resolveLoader](#resolveloader)
* [GherkinFileLoader](#gherkinfileloader)
    * [setBasePath](#setbasepath-2)
    * [__construct](#__construct-9)
    * [setCache](#setcache)
    * [supports](#supports-2)
    * [load](#load-3)
* [GherkinFileLoaderTest](#gherkinfileloadertest)
    * [testSupports](#testsupports-2)
    * [testLoad](#testload)
    * [testParsingUncachedFeature](#testparsinguncachedfeature)
    * [testParsingCachedFeature](#testparsingcachedfeature)
    * [testBasePath](#testbasepath-1)
* [GherkinTest](#gherkintest)
    * [testLoader](#testloader)
    * [testNotFoundLoader](#testnotfoundloader)
    * [testLoaderFiltersFeatures](#testloaderfiltersfeatures)
    * [testSetFiltersOverridesAllFilters](#testsetfiltersoverridesallfilters)
    * [testSetBasePath](#testsetbasepath)
* [KeywordsDumper](#keywordsdumper)
    * [__construct](#__construct-10)
    * [setKeywordsDumperFunction](#setkeywordsdumperfunction)
    * [dumpKeywords](#dumpkeywords)
    * [dump](#dump)
* [KeywordsDumperTest](#keywordsdumpertest)
    * [testEnKeywordsDumper](#testenkeywordsdumper)
    * [testRuKeywordsDumper](#testrukeywordsdumper)
    * [testRuKeywordsCustomKeywordsDumper](#testrukeywordscustomkeywordsdumper)
    * [testExtendedVersionDumper](#testextendedversiondumper)
* [Lexer](#lexer)
    * [__construct](#__construct-11)
    * [analyse](#analyse)
    * [getLanguage](#getlanguage-1)
    * [getAdvancedToken](#getadvancedtoken)
    * [deferToken](#defertoken)
    * [predictToken](#predicttoken)
    * [takeToken](#taketoken)
* [LexerException](#lexerexception)
* [LineFilter](#linefilter)
    * [__construct](#__construct-12)
    * [isFeatureMatch](#isfeaturematch)
    * [isScenarioMatch](#isscenariomatch)
    * [filterFeature](#filterfeature)
* [LineFilterTest](#linefiltertest)
    * [testIsFeatureMatchFilter](#testisfeaturematchfilter)
    * [testIsScenarioMatchFilter](#testisscenariomatchfilter)
    * [testFilterFeatureScenario](#testfilterfeaturescenario)
    * [testFilterFeatureOutline](#testfilterfeatureoutline)
* [LineRangeFilter](#linerangefilter)
    * [__construct](#__construct-13)
    * [isFeatureMatch](#isfeaturematch-1)
    * [isScenarioMatch](#isscenariomatch-1)
    * [filterFeature](#filterfeature-1)
* [LineRangeFilterTest](#linerangefiltertest)
    * [featureLineRangeProvider](#featurelinerangeprovider)
    * [testIsFeatureMatchFilter](#testisfeaturematchfilter-1)
    * [scenarioLineRangeProvider](#scenariolinerangeprovider)
    * [testIsScenarioMatchFilter](#testisscenariomatchfilter-1)
    * [testFilterFeatureScenario](#testfilterfeaturescenario-1)
    * [testFilterFeatureOutline](#testfilterfeatureoutline-1)
* [MemoryCache](#memorycache)
    * [isFresh](#isfresh-1)
    * [read](#read-1)
    * [write](#write-1)
* [MemoryCacheTest](#memorycachetest)
    * [testIsFreshWhenThereIsNoFile](#testisfreshwhenthereisnofile-1)
    * [testIsFreshOnFreshFile](#testisfreshonfreshfile-1)
    * [testIsFreshOnOutdated](#testisfreshonoutdated-1)
    * [testCacheAndRead](#testcacheandread-1)
* [NameFilter](#namefilter)
    * [filterFeature](#filterfeature-2)
    * [__construct](#__construct-14)
    * [isFeatureMatch](#isfeaturematch-2)
    * [isScenarioMatch](#isscenariomatch-2)
* [NameFilterTest](#namefiltertest)
    * [testFilterFeature](#testfilterfeature)
    * [testIsFeatureMatchFilter](#testisfeaturematchfilter-2)
    * [testIsScenarioMatchFilter](#testisscenariomatchfilter-2)
* [NarrativeFilter](#narrativefilter)
    * [filterFeature](#filterfeature-3)
    * [__construct](#__construct-15)
    * [isFeatureMatch](#isfeaturematch-3)
    * [isScenarioMatch](#isscenariomatch-3)
* [NarrativeFilterTest](#narrativefiltertest)
    * [testIsFeatureMatchFilter](#testisfeaturematchfilter-3)
* [NodeException](#nodeexception)
* [OutlineNode](#outlinenode)
    * [__construct](#__construct-16)
    * [getNodeType](#getnodetype-4)
    * [getTitle](#gettitle-3)
    * [hasTag](#hastag-2)
    * [hasTags](#hastags-2)
    * [getTags](#gettags-2)
    * [hasSteps](#hassteps-2)
    * [getSteps](#getsteps-2)
    * [hasExamples](#hasexamples)
    * [getExampleTable](#getexampletable)
    * [getExamples](#getexamples)
    * [getKeyword](#getkeyword-4)
    * [getLine](#getline-4)
* [OutlineNodeTest](#outlinenodetest)
    * [testCreatesExamplesForExampleTable](#testcreatesexamplesforexampletable)
    * [testCreatesEmptyExamplesForEmptyExampleTable](#testcreatesemptyexamplesforemptyexampletable)
    * [testCreatesEmptyExamplesForNoExampleTable](#testcreatesemptyexamplesfornoexampletable)
* [Parser](#parser)
    * [__construct](#__construct-17)
    * [parse](#parse)
* [ParserException](#parserexception)
* [ParserExceptionsTest](#parserexceptionstest)
    * [testStepRightAfterFeature](#teststeprightafterfeature)
    * [testTextInBackground](#testtextinbackground)
    * [testTextInScenario](#testtextinscenario)
    * [testAmbigiousLanguage](#testambigiouslanguage)
    * [testEmptyOutline](#testemptyoutline)
    * [testWrongTagPlacement](#testwrongtagplacement)
    * [testBackgroundWithTag](#testbackgroundwithtag)
    * [testEndlessPyString](#testendlesspystring)
    * [testWrongStepType](#testwrongsteptype)
    * [testMultipleBackgrounds](#testmultiplebackgrounds)
    * [testMultipleFeatures](#testmultiplefeatures)
* [ParserTest](#parsertest)
    * [parserTestDataProvider](#parsertestdataprovider)
    * [testParser](#testparser)
* [PathsFilter](#pathsfilter)
    * [filterFeature](#filterfeature-4)
    * [__construct](#__construct-18)
    * [isFeatureMatch](#isfeaturematch-4)
    * [isScenarioMatch](#isscenariomatch-4)
* [PathsFilterTest](#pathsfiltertest)
    * [testIsFeatureMatchFilter](#testisfeaturematchfilter-4)
* [PyStringNode](#pystringnode)
    * [__construct](#__construct-19)
    * [getNodeType](#getnodetype-5)
    * [getStrings](#getstrings)
    * [getRaw](#getraw)
    * [__toString](#__tostring-1)
    * [getLine](#getline-5)
* [PyStringNodeTest](#pystringnodetest)
    * [testGetStrings](#testgetstrings)
    * [testGetRaw](#testgetraw)
* [RoleFilter](#rolefilter)
    * [filterFeature](#filterfeature-5)
    * [__construct](#__construct-20)
    * [isFeatureMatch](#isfeaturematch-5)
    * [isScenarioMatch](#isscenariomatch-5)
* [RoleFilterTest](#rolefiltertest)
    * [testIsFeatureMatchFilter](#testisfeaturematchfilter-5)
    * [testFeatureRolePrefixedWithAn](#testfeatureroleprefixedwithan)
* [ScenarioNode](#scenarionode)
    * [__construct](#__construct-21)
    * [getNodeType](#getnodetype-6)
    * [getTitle](#gettitle-4)
    * [hasTag](#hastag-3)
    * [hasTags](#hastags-3)
    * [getTags](#gettags-3)
    * [hasSteps](#hassteps-3)
    * [getSteps](#getsteps-3)
    * [getKeyword](#getkeyword-5)
    * [getLine](#getline-6)
* [StepNode](#stepnode)
    * [__construct](#__construct-22)
    * [getNodeType](#getnodetype-7)
    * [getType](#gettype)
    * [getKeyword](#getkeyword-6)
    * [getKeywordType](#getkeywordtype)
    * [getText](#gettext)
    * [hasArguments](#hasarguments)
    * [getArguments](#getarguments)
    * [getLine](#getline-7)
* [StepNodeTest](#stepnodetest)
    * [testThatStepCanHaveOnlyOneArgument](#testthatstepcanhaveonlyoneargument)
* [TableNode](#tablenode)
    * [__construct](#__construct-23)
    * [getNodeType](#getnodetype-8)
    * [getHash](#gethash-1)
    * [getColumnsHash](#getcolumnshash-1)
    * [getRowsHash](#getrowshash-1)
    * [getTable](#gettable-1)
    * [getRows](#getrows-1)
    * [getLines](#getlines-1)
    * [getRow](#getrow-1)
    * [getColumn](#getcolumn-1)
    * [getRowLine](#getrowline-1)
    * [getRowAsString](#getrowasstring-1)
    * [getRowAsStringWithWrappedValues](#getrowasstringwithwrappedvalues-1)
    * [getTableAsString](#gettableasstring-1)
    * [getLine](#getline-8)
    * [__toString](#__tostring-2)
    * [getIterator](#getiterator-1)
* [TableNodeTest](#tablenodetest)
    * [testConstructorExpectsSameNumberOfColumnsInEachRow](#testconstructorexpectssamenumberofcolumnsineachrow)
    * [testHashTable](#testhashtable)
    * [testIterator](#testiterator)
    * [testRowsHashTable](#testrowshashtable)
    * [testLongRowsHashTable](#testlongrowshashtable)
    * [testGetRows](#testgetrows)
    * [testGetLines](#testgetlines)
    * [testGetRow](#testgetrow)
    * [testGetColumn](#testgetcolumn)
    * [testGetRowWithLineNumbers](#testgetrowwithlinenumbers)
    * [testGetTable](#testgettable)
    * [testGetRowLine](#testgetrowline)
    * [testGetRowAsString](#testgetrowasstring)
    * [testGetTableAsString](#testgettableasstring)
* [TagFilter](#tagfilter)
    * [filterFeature](#filterfeature-6)
    * [__construct](#__construct-24)
    * [isFeatureMatch](#isfeaturematch-6)
    * [isScenarioMatch](#isscenariomatch-6)
* [TagFilterTest](#tagfiltertest)
    * [testFilterFeature](#testfilterfeature-1)
    * [testIsFeatureMatchFilter](#testisfeaturematchfilter-6)
    * [testIsScenarioMatchFilter](#testisscenariomatchfilter-3)
* [YamlFileLoader](#yamlfileloader)
    * [setBasePath](#setbasepath-3)
    * [__construct](#__construct-25)
    * [supports](#supports-3)
    * [load](#load-4)
* [YamlFileLoaderTest](#yamlfileloadertest)
    * [testSupports](#testsupports-3)
    * [testLoadAddition](#testloadaddition)

## ArrayKeywords

Array initializable keywords holder.

$keywords = new Behat\Gherkin\Keywords\ArrayKeywords(array(
    'en' => array(
        'feature'          => 'Feature',
        'background'       => 'Background',
        'scenario'         => 'Scenario',
        'scenario_outline' => 'Scenario Outline|Scenario Template',
        'examples'         => 'Examples|Scenarios',
        'given'            => 'Given',
        'when'             => 'When',
        'then'             => 'Then',
        'and'              => 'And',
        'but'              => 'But'
    ),
    'ru' => array(
        'feature'          => 'Функционал',
        'background'       => 'Предыстория',
        'scenario'         => 'Сценарий',
        'scenario_outline' => 'Структура сценария',
        'examples'         => 'Значения',
        'given'            => 'Допустим',
        'when'             => 'Если',
        'then'             => 'То',
        'and'              => 'И',
        'but'              => 'Но'
    )
));

* Full name: \Behat\Gherkin\Keywords\ArrayKeywords
* This class implements: \Behat\Gherkin\Keywords\KeywordsInterface


### __construct

Initializes holder with keywords.

```php
ArrayKeywords::__construct( array $keywords )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keywords` | **array** | Keywords array |




---

### setLanguage

Sets keywords holder language.

```php
ArrayKeywords::setLanguage( string $language )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$language` | **string** | Language name |




---

### getFeatureKeywords

Returns Feature keywords (splitted by "|").

```php
ArrayKeywords::getFeatureKeywords(  ): string
```







---

### getBackgroundKeywords

Returns Background keywords (splitted by "|").

```php
ArrayKeywords::getBackgroundKeywords(  ): string
```







---

### getScenarioKeywords

Returns Scenario keywords (splitted by "|").

```php
ArrayKeywords::getScenarioKeywords(  ): string
```







---

### getOutlineKeywords

Returns Scenario Outline keywords (splitted by "|").

```php
ArrayKeywords::getOutlineKeywords(  ): string
```







---

### getExamplesKeywords

Returns Examples keywords (splitted by "|").

```php
ArrayKeywords::getExamplesKeywords(  ): string
```







---

### getGivenKeywords

Returns Given keywords (splitted by "|").

```php
ArrayKeywords::getGivenKeywords(  ): string
```







---

### getWhenKeywords

Returns When keywords (splitted by "|").

```php
ArrayKeywords::getWhenKeywords(  ): string
```







---

### getThenKeywords

Returns Then keywords (splitted by "|").

```php
ArrayKeywords::getThenKeywords(  ): string
```







---

### getAndKeywords

Returns And keywords (splitted by "|").

```php
ArrayKeywords::getAndKeywords(  ): string
```







---

### getButKeywords

Returns But keywords (splitted by "|").

```php
ArrayKeywords::getButKeywords(  ): string
```







---

### getStepKeywords

Returns all step keywords (Given, When, Then, And, But).

```php
ArrayKeywords::getStepKeywords(  ): string
```







---

## ArrayLoader

From-array loader.



* Full name: \Behat\Gherkin\Loader\ArrayLoader
* This class implements: \Behat\Gherkin\Loader\LoaderInterface


### supports

Checks if current loader supports provided resource.

```php
ArrayLoader::supports( mixed $resource ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | Resource to load |




---

### load

Loads features from provided resource.

```php
ArrayLoader::load( mixed $resource ): array&lt;mixed,\Behat\Gherkin\Node\FeatureNode&gt;
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | Resource to load |




---

## ArrayLoaderTest





* Full name: \Tests\Behat\Gherkin\Loader\ArrayLoaderTest
* Parent class: 


### testSupports



```php
ArrayLoaderTest::testSupports(  )
```







---

### testLoadEmpty



```php
ArrayLoaderTest::testLoadEmpty(  )
```







---

### testLoadFeatures



```php
ArrayLoaderTest::testLoadFeatures(  )
```







---

### testLoadScenarios



```php
ArrayLoaderTest::testLoadScenarios(  )
```







---

### testLoadOutline



```php
ArrayLoaderTest::testLoadOutline(  )
```







---

### testOutlineExamples



```php
ArrayLoaderTest::testOutlineExamples(  )
```







---

### testLoadBackground



```php
ArrayLoaderTest::testLoadBackground(  )
```







---

### testLoadSteps



```php
ArrayLoaderTest::testLoadSteps(  )
```







---

### testLoadStepArguments



```php
ArrayLoaderTest::testLoadStepArguments(  )
```







---

### testSingleFeatureArray



```php
ArrayLoaderTest::testSingleFeatureArray(  )
```







---

## BackgroundNode

Represents Gherkin Background.



* Full name: \Behat\Gherkin\Node\BackgroundNode
* This class implements: \Behat\Gherkin\Node\ScenarioLikeInterface


### __construct

Initializes background.

```php
BackgroundNode::__construct( null|string $title, array&lt;mixed,\Behat\Gherkin\Node\StepNode&gt; $steps, string $keyword, integer $line )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **null&#124;string** |  |
| `$steps` | **array<mixed,\Behat\Gherkin\Node\StepNode>** |  |
| `$keyword` | **string** |  |
| `$line` | **integer** |  |




---

### getNodeType

Returns node type string

```php
BackgroundNode::getNodeType(  ): string
```







---

### getTitle

Returns background title.

```php
BackgroundNode::getTitle(  ): null|string
```







---

### hasSteps

Checks if background has steps.

```php
BackgroundNode::hasSteps(  ): Boolean
```







---

### getSteps

Returns background steps.

```php
BackgroundNode::getSteps(  ): array&lt;mixed,\Behat\Gherkin\Node\StepNode&gt;
```







---

### getKeyword

Returns background keyword.

```php
BackgroundNode::getKeyword(  ): string
```







---

### getLine

Returns background declaration line number.

```php
BackgroundNode::getLine(  ): integer
```







---

## CachedArrayKeywords

File initializable keywords holder.

$keywords = new Behat\Gherkin\Keywords\CachedArrayKeywords($file);

* Full name: \Behat\Gherkin\Keywords\CachedArrayKeywords
* Parent class: \Behat\Gherkin\Keywords\ArrayKeywords


### __construct

Initializes holder with file.

```php
CachedArrayKeywords::__construct( string $file )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | Cached array path |




---

### setLanguage

Sets keywords holder language.

```php
CachedArrayKeywords::setLanguage( string $language )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$language` | **string** | Language name |




---

### getFeatureKeywords

Returns Feature keywords (splitted by "|").

```php
CachedArrayKeywords::getFeatureKeywords(  ): string
```







---

### getBackgroundKeywords

Returns Background keywords (splitted by "|").

```php
CachedArrayKeywords::getBackgroundKeywords(  ): string
```







---

### getScenarioKeywords

Returns Scenario keywords (splitted by "|").

```php
CachedArrayKeywords::getScenarioKeywords(  ): string
```







---

### getOutlineKeywords

Returns Scenario Outline keywords (splitted by "|").

```php
CachedArrayKeywords::getOutlineKeywords(  ): string
```







---

### getExamplesKeywords

Returns Examples keywords (splitted by "|").

```php
CachedArrayKeywords::getExamplesKeywords(  ): string
```







---

### getGivenKeywords

Returns Given keywords (splitted by "|").

```php
CachedArrayKeywords::getGivenKeywords(  ): string
```







---

### getWhenKeywords

Returns When keywords (splitted by "|").

```php
CachedArrayKeywords::getWhenKeywords(  ): string
```







---

### getThenKeywords

Returns Then keywords (splitted by "|").

```php
CachedArrayKeywords::getThenKeywords(  ): string
```







---

### getAndKeywords

Returns And keywords (splitted by "|").

```php
CachedArrayKeywords::getAndKeywords(  ): string
```







---

### getButKeywords

Returns But keywords (splitted by "|").

```php
CachedArrayKeywords::getButKeywords(  ): string
```







---

### getStepKeywords

Returns all step keywords (Given, When, Then, And, But).

```php
CachedArrayKeywords::getStepKeywords(  ): string
```







---

## CachedArrayKeywordsTest





* Full name: \Tests\Behat\Gherkin\Keywords\CachedArrayKeywordsTest
* Parent class: \Tests\Behat\Gherkin\Keywords\KeywordsTest


### translationTestDataProvider



```php
CachedArrayKeywordsTest::translationTestDataProvider(  )
```







---

### testTranslation



```php
CachedArrayKeywordsTest::testTranslation( string $language, array $etalon, array $features )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$language` | **string** | language name |
| `$etalon` | **array** | etalon features (to test against) |
| `$features` | **array** | array of parsed feature(s) |




---

## CacheException

Cache exception.



* Full name: \Behat\Gherkin\Exception\CacheException
* Parent class: 
* This class implements: \Behat\Gherkin\Exception\Exception


## CucumberKeywords

Cucumber-translations reader.

$keywords = new Behat\Gherkin\Keywords\CucumberKeywords($i18nYmlPath);

* Full name: \Behat\Gherkin\Keywords\CucumberKeywords
* Parent class: \Behat\Gherkin\Keywords\ArrayKeywords


### __construct

Initializes holder with yaml string OR file.

```php
CucumberKeywords::__construct( string $yaml )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$yaml` | **string** | Yaml string |




---

### setLanguage

Sets keywords holder language.

```php
CucumberKeywords::setLanguage( string $language )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$language` | **string** | Language name |




---

### getFeatureKeywords

Returns Feature keywords (splitted by "|").

```php
CucumberKeywords::getFeatureKeywords(  ): string
```







---

### getBackgroundKeywords

Returns Background keywords (splitted by "|").

```php
CucumberKeywords::getBackgroundKeywords(  ): string
```







---

### getScenarioKeywords

Returns Scenario keywords (splitted by "|").

```php
CucumberKeywords::getScenarioKeywords(  ): string
```







---

### getOutlineKeywords

Returns Scenario Outline keywords (splitted by "|").

```php
CucumberKeywords::getOutlineKeywords(  ): string
```







---

### getExamplesKeywords

Returns Examples keywords (splitted by "|").

```php
CucumberKeywords::getExamplesKeywords(  ): string
```







---

### getGivenKeywords

Returns Feature keywords (splitted by "|").

```php
CucumberKeywords::getGivenKeywords(  ): string
```







---

### getWhenKeywords

Returns When keywords (splitted by "|").

```php
CucumberKeywords::getWhenKeywords(  ): string
```







---

### getThenKeywords

Returns Then keywords (splitted by "|").

```php
CucumberKeywords::getThenKeywords(  ): string
```







---

### getAndKeywords

Returns And keywords (splitted by "|").

```php
CucumberKeywords::getAndKeywords(  ): string
```







---

### getButKeywords

Returns But keywords (splitted by "|").

```php
CucumberKeywords::getButKeywords(  ): string
```







---

### getStepKeywords

Returns all step keywords (Given, When, Then, And, But).

```php
CucumberKeywords::getStepKeywords(  ): string
```







---

## CucumberKeywordsTest





* Full name: \Tests\Behat\Gherkin\Keywords\CucumberKeywordsTest
* Parent class: \Tests\Behat\Gherkin\Keywords\KeywordsTest


### translationTestDataProvider



```php
CucumberKeywordsTest::translationTestDataProvider(  )
```







---

### testTranslation



```php
CucumberKeywordsTest::testTranslation( string $language, array $etalon, array $features )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$language` | **string** | language name |
| `$etalon` | **array** | etalon features (to test against) |
| `$features` | **array** | array of parsed feature(s) |




---

## DirectoryLoader

Directory contents loader.



* Full name: \Behat\Gherkin\Loader\DirectoryLoader
* Parent class: \Behat\Gherkin\Loader\AbstractFileLoader


### setBasePath

Sets base features path.

```php
DirectoryLoader::setBasePath( string $path )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Base loader path |




---

### __construct

Initializes loader.

```php
DirectoryLoader::__construct( \Behat\Gherkin\Gherkin $gherkin )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$gherkin` | **\Behat\Gherkin\Gherkin** | Gherkin manager |




---

### supports

Checks if current loader supports provided resource.

```php
DirectoryLoader::supports( mixed $path ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | Resource to load |




---

### load

Loads features from provided resource.

```php
DirectoryLoader::load( string $path ): array&lt;mixed,\Behat\Gherkin\Node\FeatureNode&gt;
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Resource to load |




---

## DirectoryLoaderTest





* Full name: \Tests\Behat\Gherkin\Loader\DirectoryLoaderTest
* Parent class: 


### testSupports



```php
DirectoryLoaderTest::testSupports(  )
```







---

### testUndefinedFileLoad



```php
DirectoryLoaderTest::testUndefinedFileLoad(  )
```







---

### testBasePath



```php
DirectoryLoaderTest::testBasePath(  )
```







---

### testDefinedFileLoad



```php
DirectoryLoaderTest::testDefinedFileLoad(  )
```







---

## ExampleNode

Represents Gherkin Outline Example.



* Full name: \Behat\Gherkin\Node\ExampleNode
* This class implements: \Behat\Gherkin\Node\ScenarioInterface


### __construct

Initializes outline.

```php
ExampleNode::__construct( string $title, array&lt;mixed,string&gt; $tags, array&lt;mixed,\Behat\Gherkin\Node\StepNode&gt; $outlineSteps, array&lt;mixed,string&gt; $tokens, integer $line )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **string** |  |
| `$tags` | **array<mixed,string>** |  |
| `$outlineSteps` | **array<mixed,\Behat\Gherkin\Node\StepNode>** |  |
| `$tokens` | **array<mixed,string>** |  |
| `$line` | **integer** |  |




---

### getNodeType

Returns node type string

```php
ExampleNode::getNodeType(  ): string
```







---

### getKeyword

Returns node keyword.

```php
ExampleNode::getKeyword(  ): string
```







---

### getTitle

Returns example title.

```php
ExampleNode::getTitle(  ): string
```







---

### hasTag

Checks if outline is tagged with tag.

```php
ExampleNode::hasTag( string $tag ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **string** |  |




---

### hasTags

Checks if outline has tags (both inherited from feature and own).

```php
ExampleNode::hasTags(  ): Boolean
```







---

### getTags

Returns outline tags (including inherited from feature).

```php
ExampleNode::getTags(  ): array&lt;mixed,string&gt;
```







---

### hasSteps

Checks if outline has steps.

```php
ExampleNode::hasSteps(  ): Boolean
```







---

### getSteps

Returns outline steps.

```php
ExampleNode::getSteps(  ): array&lt;mixed,\Behat\Gherkin\Node\StepNode&gt;
```







---

### getTokens

Returns example tokens.

```php
ExampleNode::getTokens(  ): array&lt;mixed,string&gt;
```







---

### getLine

Returns outline declaration line number.

```php
ExampleNode::getLine(  ): integer
```







---

## ExampleNodeTest





* Full name: \Tests\Behat\Gherkin\Node\ExampleNodeTest
* Parent class: 


### testCreateExampleSteps



```php
ExampleNodeTest::testCreateExampleSteps(  )
```







---

### testCreateExampleStepsWithArguments



```php
ExampleNodeTest::testCreateExampleStepsWithArguments(  )
```







---

## ExampleTableNode

Represents Gherkin Outline Example Table.



* Full name: \Behat\Gherkin\Node\ExampleTableNode
* Parent class: \Behat\Gherkin\Node\TableNode


### __construct

Initializes example table.

```php
ExampleTableNode::__construct( array $table, string $keyword )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **array** | Table in form of [$rowLineNumber => [$val1, $val2, $val3]] |
| `$keyword` | **string** |  |




---

### getNodeType

Returns node type string

```php
ExampleTableNode::getNodeType(  ): string
```







---

### getHash

Returns table hash, formed by columns (ColumnsHash).

```php
ExampleTableNode::getHash(  ): array
```







---

### getColumnsHash

Returns table hash, formed by columns.

```php
ExampleTableNode::getColumnsHash(  ): array
```







---

### getRowsHash

Returns table hash, formed by rows.

```php
ExampleTableNode::getRowsHash(  ): array
```







---

### getTable

Returns numerated table lines.

```php
ExampleTableNode::getTable(  ): array
```

Line numbers are keys, lines are values.





---

### getRows

Returns table rows.

```php
ExampleTableNode::getRows(  ): array
```







---

### getLines

Returns table definition lines.

```php
ExampleTableNode::getLines(  ): array
```







---

### getRow

Returns specific row in a table.

```php
ExampleTableNode::getRow( integer $index ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **integer** | Row number |




---

### getColumn

Returns specific column in a table.

```php
ExampleTableNode::getColumn( integer $index ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **integer** | Column number |




---

### getRowLine

Returns line number at which specific row was defined.

```php
ExampleTableNode::getRowLine( integer $index ): integer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **integer** |  |




---

### getRowAsString

Converts row into delimited string.

```php
ExampleTableNode::getRowAsString( integer $rowNum ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rowNum` | **integer** | Row number |




---

### getRowAsStringWithWrappedValues

Converts row into delimited string.

```php
ExampleTableNode::getRowAsStringWithWrappedValues( integer $rowNum, callable $wrapper ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rowNum` | **integer** | Row number |
| `$wrapper` | **callable** | Wrapper function |




---

### getTableAsString

Converts entire table into string

```php
ExampleTableNode::getTableAsString(  ): string
```







---

### getLine

Returns line number at which table was started.

```php
ExampleTableNode::getLine(  ): integer
```







---

### __toString

Converts table into string

```php
ExampleTableNode::__toString(  ): string
```







---

### getIterator

Retrieves a hash iterator.

```php
ExampleTableNode::getIterator(  ): \Iterator
```







---

### getKeyword

Returns example table keyword.

```php
ExampleTableNode::getKeyword(  ): string
```







---

## FeatureNode

Represents Gherkin Feature.



* Full name: \Behat\Gherkin\Node\FeatureNode
* This class implements: \Behat\Gherkin\Node\KeywordNodeInterface, \Behat\Gherkin\Node\TaggedNodeInterface


### __construct

Initializes feature.

```php
FeatureNode::__construct( null|string $title, null|string $description, array&lt;mixed,string&gt; $tags, null|\Behat\Gherkin\Node\BackgroundNode $background = null, array&lt;mixed,\Behat\Gherkin\Node\ScenarioInterface&gt; $scenarios, string $keyword, string $language, null|string $file, integer $line )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **null&#124;string** |  |
| `$description` | **null&#124;string** |  |
| `$tags` | **array<mixed,string>** |  |
| `$background` | **null&#124;\Behat\Gherkin\Node\BackgroundNode** |  |
| `$scenarios` | **array<mixed,\Behat\Gherkin\Node\ScenarioInterface>** |  |
| `$keyword` | **string** |  |
| `$language` | **string** |  |
| `$file` | **null&#124;string** |  |
| `$line` | **integer** |  |




---

### getNodeType

Returns node type string

```php
FeatureNode::getNodeType(  ): string
```







---

### getTitle

Returns feature title.

```php
FeatureNode::getTitle(  ): null|string
```







---

### hasDescription

Checks if feature has a description.

```php
FeatureNode::hasDescription(  ): Boolean
```







---

### getDescription

Returns feature description.

```php
FeatureNode::getDescription(  ): null|string
```







---

### hasTag

Checks if feature is tagged with tag.

```php
FeatureNode::hasTag( string $tag ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **string** |  |




---

### hasTags

Checks if feature has tags.

```php
FeatureNode::hasTags(  ): Boolean
```







---

### getTags

Returns feature tags.

```php
FeatureNode::getTags(  ): array&lt;mixed,string&gt;
```







---

### hasBackground

Checks if feature has background.

```php
FeatureNode::hasBackground(  ): Boolean
```







---

### getBackground

Returns feature background.

```php
FeatureNode::getBackground(  ): null|\Behat\Gherkin\Node\BackgroundNode
```







---

### hasScenarios

Checks if feature has scenarios.

```php
FeatureNode::hasScenarios(  ): Boolean
```







---

### getScenarios

Returns feature scenarios.

```php
FeatureNode::getScenarios(  ): array&lt;mixed,\Behat\Gherkin\Node\ScenarioInterface&gt;
```







---

### getKeyword

Returns feature keyword.

```php
FeatureNode::getKeyword(  ): string
```







---

### getLanguage

Returns feature language.

```php
FeatureNode::getLanguage(  ): string
```







---

### getFile

Returns feature file.

```php
FeatureNode::getFile(  ): null|string
```







---

### getLine

Returns feature declaration line number.

```php
FeatureNode::getLine(  ): integer
```







---

## FileCache

File cache.

Caches feature into a file.

* Full name: \Behat\Gherkin\Cache\FileCache
* This class implements: \Behat\Gherkin\Cache\CacheInterface


### __construct

Initializes file cache.

```php
FileCache::__construct( string $path )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path to the folder where to store caches. |




---

### isFresh

Checks that cache for feature exists and is fresh.

```php
FileCache::isFresh( string $path, integer $timestamp ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Feature path |
| `$timestamp` | **integer** | The last time feature was updated |




---

### read

Reads feature cache from path.

```php
FileCache::read( string $path ): \Behat\Gherkin\Node\FeatureNode
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Feature path |




---

### write

Caches feature node.

```php
FileCache::write( string $path, \Behat\Gherkin\Node\FeatureNode $feature )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Feature path |
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature instance |




---

## FileCacheTest





* Full name: \Tests\Behat\Gherkin\Cache\FileCacheTest
* Parent class: 


### testIsFreshWhenThereIsNoFile



```php
FileCacheTest::testIsFreshWhenThereIsNoFile(  )
```







---

### testIsFreshOnFreshFile



```php
FileCacheTest::testIsFreshOnFreshFile(  )
```







---

### testIsFreshOnOutdated



```php
FileCacheTest::testIsFreshOnOutdated(  )
```







---

### testCacheAndRead



```php
FileCacheTest::testCacheAndRead(  )
```







---

### testBrokenCacheRead



```php
FileCacheTest::testBrokenCacheRead(  )
```







---

## Gherkin

Gherkin manager.



* Full name: \Behat\Gherkin\Gherkin


### addLoader

Adds loader to manager.

```php
Gherkin::addLoader( \Behat\Gherkin\Loader\LoaderInterface $loader )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loader` | **\Behat\Gherkin\Loader\LoaderInterface** | Feature loader |




---

### addFilter

Adds filter to manager.

```php
Gherkin::addFilter( \Behat\Gherkin\Filter\FeatureFilterInterface $filter )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **\Behat\Gherkin\Filter\FeatureFilterInterface** | Feature filter |




---

### setFilters

Sets filters to the parser.

```php
Gherkin::setFilters( array&lt;mixed,\Behat\Gherkin\Filter\FeatureFilterInterface&gt; $filters )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filters` | **array<mixed,\Behat\Gherkin\Filter\FeatureFilterInterface>** |  |




---

### setBasePath

Sets base features path.

```php
Gherkin::setBasePath( string $path )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Loaders base path |




---

### load

Loads & filters resource with added loaders.

```php
Gherkin::load( mixed $resource, array&lt;mixed,\Behat\Gherkin\Filter\FeatureFilterInterface&gt; $filters = array() ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | Resource to load |
| `$filters` | **array<mixed,\Behat\Gherkin\Filter\FeatureFilterInterface>** | Additional filters |




---

### resolveLoader

Resolves loader by resource.

```php
Gherkin::resolveLoader( mixed $resource ): \Behat\Gherkin\Loader\LoaderInterface
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | Resource to load |




---

## GherkinFileLoader

Gherkin *.feature files loader.



* Full name: \Behat\Gherkin\Loader\GherkinFileLoader
* Parent class: \Behat\Gherkin\Loader\AbstractFileLoader


### setBasePath

Sets base features path.

```php
GherkinFileLoader::setBasePath( string $path )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Base loader path |




---

### __construct

Initializes loader.

```php
GherkinFileLoader::__construct( \Behat\Gherkin\Parser $parser, \Behat\Gherkin\Cache\CacheInterface $cache = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\Behat\Gherkin\Parser** | Parser |
| `$cache` | **\Behat\Gherkin\Cache\CacheInterface** | Cache layer |




---

### setCache

Sets cache layer.

```php
GherkinFileLoader::setCache( \Behat\Gherkin\Cache\CacheInterface $cache )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\Behat\Gherkin\Cache\CacheInterface** | Cache layer |




---

### supports

Checks if current loader supports provided resource.

```php
GherkinFileLoader::supports( mixed $path ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | Resource to load |




---

### load

Loads features from provided resource.

```php
GherkinFileLoader::load( string $path ): array&lt;mixed,\Behat\Gherkin\Node\FeatureNode&gt;
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Resource to load |




---

## GherkinFileLoaderTest





* Full name: \Tests\Behat\Gherkin\Loader\GherkinFileLoaderTest
* Parent class: 


### testSupports



```php
GherkinFileLoaderTest::testSupports(  )
```







---

### testLoad



```php
GherkinFileLoaderTest::testLoad(  )
```







---

### testParsingUncachedFeature



```php
GherkinFileLoaderTest::testParsingUncachedFeature(  )
```







---

### testParsingCachedFeature



```php
GherkinFileLoaderTest::testParsingCachedFeature(  )
```







---

### testBasePath



```php
GherkinFileLoaderTest::testBasePath(  )
```







---

## GherkinTest





* Full name: \Tests\Behat\Gherkin\GherkinTest
* Parent class: 


### testLoader



```php
GherkinTest::testLoader(  )
```







---

### testNotFoundLoader



```php
GherkinTest::testNotFoundLoader(  )
```







---

### testLoaderFiltersFeatures



```php
GherkinTest::testLoaderFiltersFeatures(  )
```







---

### testSetFiltersOverridesAllFilters



```php
GherkinTest::testSetFiltersOverridesAllFilters(  )
```







---

### testSetBasePath



```php
GherkinTest::testSetBasePath(  )
```







---

## KeywordsDumper

Gherkin keywords dumper.



* Full name: \Behat\Gherkin\Keywords\KeywordsDumper


### __construct

Initializes dumper.

```php
KeywordsDumper::__construct( \Behat\Gherkin\Keywords\KeywordsInterface $keywords )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keywords` | **\Behat\Gherkin\Keywords\KeywordsInterface** | Keywords instance |




---

### setKeywordsDumperFunction

Sets keywords mapper function.

```php
KeywordsDumper::setKeywordsDumperFunction( callable $mapper )
```

Callable should accept 2 arguments (array $keywords and Boolean $isShort)


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mapper` | **callable** | Mapper function |




---

### dumpKeywords

Defaults keywords dumper.

```php
KeywordsDumper::dumpKeywords( array $keywords, Boolean $isShort ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keywords` | **array** | Keywords list |
| `$isShort` | **Boolean** | Is short version |




---

### dump

Dumps keyworded feature into string.

```php
KeywordsDumper::dump( string $language, Boolean $short = true ): string|array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$language` | **string** | Keywords language |
| `$short` | **Boolean** | Dump short version |


**Return Value:**

String for short version and array of features for extended



---

## KeywordsDumperTest





* Full name: \Tests\Behat\Gherkin\Keywords\KeywordsDumperTest
* Parent class: 


### testEnKeywordsDumper



```php
KeywordsDumperTest::testEnKeywordsDumper(  )
```







---

### testRuKeywordsDumper



```php
KeywordsDumperTest::testRuKeywordsDumper(  )
```







---

### testRuKeywordsCustomKeywordsDumper



```php
KeywordsDumperTest::testRuKeywordsCustomKeywordsDumper(  )
```







---

### testExtendedVersionDumper



```php
KeywordsDumperTest::testExtendedVersionDumper(  )
```







---

## Lexer

Gherkin lexer.



* Full name: \Behat\Gherkin\Lexer


### __construct

Initializes lexer.

```php
Lexer::__construct( \Behat\Gherkin\Keywords\KeywordsInterface $keywords )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keywords` | **\Behat\Gherkin\Keywords\KeywordsInterface** | Keywords holder |




---

### analyse

Sets lexer input.

```php
Lexer::analyse( string $input, string $language = &#039;en&#039; )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | Input string |
| `$language` | **string** | Language name |




---

### getLanguage

Returns current lexer language.

```php
Lexer::getLanguage(  ): string
```







---

### getAdvancedToken

Returns next token or previously stashed one.

```php
Lexer::getAdvancedToken(  ): array
```







---

### deferToken

Defers token.

```php
Lexer::deferToken( array $token )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **array** | Token to defer |




---

### predictToken

Predicts for number of tokens.

```php
Lexer::predictToken(  ): array
```







---

### takeToken

Constructs token with specified parameters.

```php
Lexer::takeToken( string $type, string $value = null ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | Token type |
| `$value` | **string** | Token value |




---

## LexerException





* Full name: \Behat\Gherkin\Exception\LexerException
* Parent class: 
* This class implements: \Behat\Gherkin\Exception\Exception


## LineFilter

Filters scenarios by definition line number.



* Full name: \Behat\Gherkin\Filter\LineFilter
* This class implements: \Behat\Gherkin\Filter\FilterInterface


### __construct

Initializes filter.

```php
LineFilter::__construct( string $filterLine )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterLine` | **string** | Line of the scenario to filter on |




---

### isFeatureMatch

Checks if Feature matches specified filter.

```php
LineFilter::isFeatureMatch( \Behat\Gherkin\Node\FeatureNode $feature ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature instance |




---

### isScenarioMatch

Checks if scenario or outline matches specified filter.

```php
LineFilter::isScenarioMatch( \Behat\Gherkin\Node\ScenarioInterface $scenario ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scenario` | **\Behat\Gherkin\Node\ScenarioInterface** | Scenario or Outline node instance |




---

### filterFeature

Filters feature according to the filter and returns new one.

```php
LineFilter::filterFeature( \Behat\Gherkin\Node\FeatureNode $feature ): \Behat\Gherkin\Node\FeatureNode
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** |  |




---

## LineFilterTest





* Full name: \Tests\Behat\Gherkin\Filter\LineFilterTest
* Parent class: \Tests\Behat\Gherkin\Filter\FilterTest


### testIsFeatureMatchFilter



```php
LineFilterTest::testIsFeatureMatchFilter(  )
```







---

### testIsScenarioMatchFilter



```php
LineFilterTest::testIsScenarioMatchFilter(  )
```







---

### testFilterFeatureScenario



```php
LineFilterTest::testFilterFeatureScenario(  )
```







---

### testFilterFeatureOutline



```php
LineFilterTest::testFilterFeatureOutline(  )
```







---

## LineRangeFilter

Filters scenarios by definition line number range.



* Full name: \Behat\Gherkin\Filter\LineRangeFilter
* This class implements: \Behat\Gherkin\Filter\FilterInterface


### __construct

Initializes filter.

```php
LineRangeFilter::__construct( string $filterMinLine, string $filterMaxLine )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterMinLine` | **string** | Minimum line of a scenario to filter on |
| `$filterMaxLine` | **string** | Maximum line of a scenario to filter on |




---

### isFeatureMatch

Checks if Feature matches specified filter.

```php
LineRangeFilter::isFeatureMatch( \Behat\Gherkin\Node\FeatureNode $feature ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature instance |




---

### isScenarioMatch

Checks if scenario or outline matches specified filter.

```php
LineRangeFilter::isScenarioMatch( \Behat\Gherkin\Node\ScenarioInterface $scenario ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scenario` | **\Behat\Gherkin\Node\ScenarioInterface** | Scenario or Outline node instance |




---

### filterFeature

Filters feature according to the filter.

```php
LineRangeFilter::filterFeature( \Behat\Gherkin\Node\FeatureNode $feature ): \Behat\Gherkin\Node\FeatureNode
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** |  |




---

## LineRangeFilterTest





* Full name: \Tests\Behat\Gherkin\Filter\LineRangeFilterTest
* Parent class: \Tests\Behat\Gherkin\Filter\FilterTest


### featureLineRangeProvider



```php
LineRangeFilterTest::featureLineRangeProvider(  )
```







---

### testIsFeatureMatchFilter



```php
LineRangeFilterTest::testIsFeatureMatchFilter(  $filterMinLine,  $filterMaxLine,  $expected )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterMinLine` | **** |  |
| `$filterMaxLine` | **** |  |
| `$expected` | **** |  |




---

### scenarioLineRangeProvider



```php
LineRangeFilterTest::scenarioLineRangeProvider(  )
```







---

### testIsScenarioMatchFilter



```php
LineRangeFilterTest::testIsScenarioMatchFilter(  $filterMinLine,  $filterMaxLine,  $expectedNumberOfMatches )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterMinLine` | **** |  |
| `$filterMaxLine` | **** |  |
| `$expectedNumberOfMatches` | **** |  |




---

### testFilterFeatureScenario



```php
LineRangeFilterTest::testFilterFeatureScenario(  )
```







---

### testFilterFeatureOutline



```php
LineRangeFilterTest::testFilterFeatureOutline(  )
```







---

## MemoryCache

Memory cache.

Caches feature into a memory.

* Full name: \Behat\Gherkin\Cache\MemoryCache
* This class implements: \Behat\Gherkin\Cache\CacheInterface


### isFresh

Checks that cache for feature exists and is fresh.

```php
MemoryCache::isFresh( string $path, integer $timestamp ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Feature path |
| `$timestamp` | **integer** | The last time feature was updated |




---

### read

Reads feature cache from path.

```php
MemoryCache::read( string $path ): \Behat\Gherkin\Node\FeatureNode
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Feature path |




---

### write

Caches feature node.

```php
MemoryCache::write( string $path, \Behat\Gherkin\Node\FeatureNode $feature )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Feature path |
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature instance |




---

## MemoryCacheTest





* Full name: \Tests\Behat\Gherkin\Cache\MemoryCacheTest
* Parent class: 


### testIsFreshWhenThereIsNoFile



```php
MemoryCacheTest::testIsFreshWhenThereIsNoFile(  )
```







---

### testIsFreshOnFreshFile



```php
MemoryCacheTest::testIsFreshOnFreshFile(  )
```







---

### testIsFreshOnOutdated



```php
MemoryCacheTest::testIsFreshOnOutdated(  )
```







---

### testCacheAndRead



```php
MemoryCacheTest::testCacheAndRead(  )
```







---

## NameFilter

Filters scenarios by feature/scenario name.



* Full name: \Behat\Gherkin\Filter\NameFilter
* Parent class: \Behat\Gherkin\Filter\SimpleFilter


### filterFeature

Filters feature according to the filter.

```php
NameFilter::filterFeature( \Behat\Gherkin\Node\FeatureNode $feature ): \Behat\Gherkin\Node\FeatureNode
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** |  |




---

### __construct

Initializes filter.

```php
NameFilter::__construct( string $filterString )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterString` | **string** | Name filter string |




---

### isFeatureMatch

Checks if Feature matches specified filter.

```php
NameFilter::isFeatureMatch( \Behat\Gherkin\Node\FeatureNode $feature ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature instance |




---

### isScenarioMatch

Checks if scenario or outline matches specified filter.

```php
NameFilter::isScenarioMatch( \Behat\Gherkin\Node\ScenarioInterface $scenario ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scenario` | **\Behat\Gherkin\Node\ScenarioInterface** | Scenario or Outline node instance |




---

## NameFilterTest





* Full name: \Tests\Behat\Gherkin\Filter\NameFilterTest
* Parent class: 


### testFilterFeature



```php
NameFilterTest::testFilterFeature(  )
```







---

### testIsFeatureMatchFilter



```php
NameFilterTest::testIsFeatureMatchFilter(  )
```







---

### testIsScenarioMatchFilter



```php
NameFilterTest::testIsScenarioMatchFilter(  )
```







---

## NarrativeFilter

Filters features by their narrative using regular expression.



* Full name: \Behat\Gherkin\Filter\NarrativeFilter
* Parent class: \Behat\Gherkin\Filter\SimpleFilter


### filterFeature

Filters feature according to the filter.

```php
NarrativeFilter::filterFeature( \Behat\Gherkin\Node\FeatureNode $feature ): \Behat\Gherkin\Node\FeatureNode
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** |  |




---

### __construct

Initializes filter.

```php
NarrativeFilter::__construct( string $regex )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$regex` | **string** |  |




---

### isFeatureMatch

Checks if Feature matches specified filter.

```php
NarrativeFilter::isFeatureMatch( \Behat\Gherkin\Node\FeatureNode $feature ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature instance |




---

### isScenarioMatch

Checks if scenario or outline matches specified filter.

```php
NarrativeFilter::isScenarioMatch( \Behat\Gherkin\Node\ScenarioInterface $scenario ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scenario` | **\Behat\Gherkin\Node\ScenarioInterface** | Scenario or Outline node instance |




---

## NarrativeFilterTest





* Full name: \Tests\Behat\Gherkin\Filter\NarrativeFilterTest
* Parent class: \Tests\Behat\Gherkin\Filter\FilterTest


### testIsFeatureMatchFilter



```php
NarrativeFilterTest::testIsFeatureMatchFilter(  )
```







---

## NodeException





* Full name: \Behat\Gherkin\Exception\NodeException
* Parent class: 
* This class implements: \Behat\Gherkin\Exception\Exception


## OutlineNode

Represents Gherkin Outline.



* Full name: \Behat\Gherkin\Node\OutlineNode
* This class implements: \Behat\Gherkin\Node\ScenarioInterface


### __construct

Initializes outline.

```php
OutlineNode::__construct( null|string $title, array&lt;mixed,string&gt; $tags, array&lt;mixed,\Behat\Gherkin\Node\StepNode&gt; $steps, \Behat\Gherkin\Node\ExampleTableNode $table, string $keyword, integer $line )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **null&#124;string** |  |
| `$tags` | **array<mixed,string>** |  |
| `$steps` | **array<mixed,\Behat\Gherkin\Node\StepNode>** |  |
| `$table` | **\Behat\Gherkin\Node\ExampleTableNode** |  |
| `$keyword` | **string** |  |
| `$line` | **integer** |  |




---

### getNodeType

Returns node type string

```php
OutlineNode::getNodeType(  ): string
```







---

### getTitle

Returns outline title.

```php
OutlineNode::getTitle(  ): null|string
```







---

### hasTag

Checks if outline is tagged with tag.

```php
OutlineNode::hasTag( string $tag ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **string** |  |




---

### hasTags

Checks if outline has tags (both inherited from feature and own).

```php
OutlineNode::hasTags(  ): Boolean
```







---

### getTags

Returns outline tags (including inherited from feature).

```php
OutlineNode::getTags(  ): array&lt;mixed,string&gt;
```







---

### hasSteps

Checks if outline has steps.

```php
OutlineNode::hasSteps(  ): Boolean
```







---

### getSteps

Returns outline steps.

```php
OutlineNode::getSteps(  ): array&lt;mixed,\Behat\Gherkin\Node\StepNode&gt;
```







---

### hasExamples

Checks if outline has examples.

```php
OutlineNode::hasExamples(  ): Boolean
```







---

### getExampleTable

Returns examples table.

```php
OutlineNode::getExampleTable(  ): \Behat\Gherkin\Node\ExampleTableNode
```







---

### getExamples

Returns list of examples for the outline.

```php
OutlineNode::getExamples(  ): array&lt;mixed,\Behat\Gherkin\Node\ExampleNode&gt;
```







---

### getKeyword

Returns outline keyword.

```php
OutlineNode::getKeyword(  ): string
```







---

### getLine

Returns outline declaration line number.

```php
OutlineNode::getLine(  ): integer
```







---

## OutlineNodeTest





* Full name: \Tests\Behat\Gherkin\Node\OutlineNodeTest
* Parent class: 


### testCreatesExamplesForExampleTable



```php
OutlineNodeTest::testCreatesExamplesForExampleTable(  )
```







---

### testCreatesEmptyExamplesForEmptyExampleTable



```php
OutlineNodeTest::testCreatesEmptyExamplesForEmptyExampleTable(  )
```







---

### testCreatesEmptyExamplesForNoExampleTable



```php
OutlineNodeTest::testCreatesEmptyExamplesForNoExampleTable(  )
```







---

## Parser

Gherkin parser.

$lexer  = new Behat\Gherkin\Lexer($keywords);
$parser = new Behat\Gherkin\Parser($lexer);
$featuresArray = $parser->parse('/path/to/feature.feature');

* Full name: \Behat\Gherkin\Parser


### __construct

Initializes parser.

```php
Parser::__construct( \Behat\Gherkin\Lexer $lexer )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lexer` | **\Behat\Gherkin\Lexer** | Lexer instance |




---

### parse

Parses input & returns features array.

```php
Parser::parse( string $input, string $file = null ): \Behat\Gherkin\Node\FeatureNode|null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | Gherkin string document |
| `$file` | **string** | File name |




---

## ParserException





* Full name: \Behat\Gherkin\Exception\ParserException
* Parent class: 
* This class implements: \Behat\Gherkin\Exception\Exception


## ParserExceptionsTest





* Full name: \Tests\Behat\Gherkin\ParserExceptionsTest
* Parent class: 


### testStepRightAfterFeature



```php
ParserExceptionsTest::testStepRightAfterFeature(  )
```







---

### testTextInBackground



```php
ParserExceptionsTest::testTextInBackground(  )
```







---

### testTextInScenario



```php
ParserExceptionsTest::testTextInScenario(  )
```







---

### testAmbigiousLanguage



```php
ParserExceptionsTest::testAmbigiousLanguage(  )
```







---

### testEmptyOutline



```php
ParserExceptionsTest::testEmptyOutline(  )
```







---

### testWrongTagPlacement



```php
ParserExceptionsTest::testWrongTagPlacement(  )
```







---

### testBackgroundWithTag



```php
ParserExceptionsTest::testBackgroundWithTag(  )
```







---

### testEndlessPyString



```php
ParserExceptionsTest::testEndlessPyString(  )
```







---

### testWrongStepType



```php
ParserExceptionsTest::testWrongStepType(  )
```







---

### testMultipleBackgrounds



```php
ParserExceptionsTest::testMultipleBackgrounds(  )
```







---

### testMultipleFeatures



```php
ParserExceptionsTest::testMultipleFeatures(  )
```







---

## ParserTest





* Full name: \Tests\Behat\Gherkin\ParserTest
* Parent class: 


### parserTestDataProvider



```php
ParserTest::parserTestDataProvider(  )
```







---

### testParser



```php
ParserTest::testParser( string $fixtureName )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fixtureName` | **string** | name of the fixture |




---

## PathsFilter

Filters features by their paths.



* Full name: \Behat\Gherkin\Filter\PathsFilter
* Parent class: \Behat\Gherkin\Filter\SimpleFilter


### filterFeature

Filters feature according to the filter.

```php
PathsFilter::filterFeature( \Behat\Gherkin\Node\FeatureNode $feature ): \Behat\Gherkin\Node\FeatureNode
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** |  |




---

### __construct

Initializes filter.

```php
PathsFilter::__construct( array&lt;mixed,string&gt; $paths )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array<mixed,string>** | List of approved paths |




---

### isFeatureMatch

Checks if Feature matches specified filter.

```php
PathsFilter::isFeatureMatch( \Behat\Gherkin\Node\FeatureNode $feature ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature instance |




---

### isScenarioMatch

Checks if scenario or outline matches specified filter.

```php
PathsFilter::isScenarioMatch( \Behat\Gherkin\Node\ScenarioInterface $scenario ): false
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scenario` | **\Behat\Gherkin\Node\ScenarioInterface** | Scenario or Outline node instance |


**Return Value:**

This filter is designed to work only with features



---

## PathsFilterTest





* Full name: \Tests\Behat\Gherkin\Filter\PathsFilterTest
* Parent class: \Tests\Behat\Gherkin\Filter\FilterTest


### testIsFeatureMatchFilter



```php
PathsFilterTest::testIsFeatureMatchFilter(  )
```







---

## PyStringNode

Represents Gherkin PyString argument.



* Full name: \Behat\Gherkin\Node\PyStringNode
* This class implements: \Behat\Gherkin\Node\ArgumentInterface


### __construct

Initializes PyString.

```php
PyStringNode::__construct( array $strings, integer $line )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strings` | **array** | String in form of [$stringLine] |
| `$line` | **integer** | Line number where string been started |




---

### getNodeType

Returns node type.

```php
PyStringNode::getNodeType(  ): string
```







---

### getStrings

Returns entire PyString lines set.

```php
PyStringNode::getStrings(  ): array
```







---

### getRaw

Returns raw string.

```php
PyStringNode::getRaw(  ): string
```







---

### __toString

Converts PyString into string.

```php
PyStringNode::__toString(  ): string
```







---

### getLine

Returns line number at which PyString was started.

```php
PyStringNode::getLine(  ): integer
```







---

## PyStringNodeTest





* Full name: \Tests\Behat\Gherkin\Node\PyStringNodeTest
* Parent class: 


### testGetStrings



```php
PyStringNodeTest::testGetStrings(  )
```







---

### testGetRaw



```php
PyStringNodeTest::testGetRaw(  )
```







---

## RoleFilter

Filters features by their actors role.



* Full name: \Behat\Gherkin\Filter\RoleFilter
* Parent class: \Behat\Gherkin\Filter\SimpleFilter


### filterFeature

Filters feature according to the filter.

```php
RoleFilter::filterFeature( \Behat\Gherkin\Node\FeatureNode $feature ): \Behat\Gherkin\Node\FeatureNode
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** |  |




---

### __construct

Initializes filter.

```php
RoleFilter::__construct( string $role )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$role` | **string** | Approved role wildcard |




---

### isFeatureMatch

Checks if Feature matches specified filter.

```php
RoleFilter::isFeatureMatch( \Behat\Gherkin\Node\FeatureNode $feature ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature instance |




---

### isScenarioMatch

Checks if scenario or outline matches specified filter.

```php
RoleFilter::isScenarioMatch( \Behat\Gherkin\Node\ScenarioInterface $scenario ): false
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scenario` | **\Behat\Gherkin\Node\ScenarioInterface** | Scenario or Outline node instance |


**Return Value:**

This filter is designed to work only with features



---

## RoleFilterTest





* Full name: \Tests\Behat\Gherkin\Filter\RoleFilterTest
* Parent class: \Tests\Behat\Gherkin\Filter\FilterTest


### testIsFeatureMatchFilter



```php
RoleFilterTest::testIsFeatureMatchFilter(  )
```







---

### testFeatureRolePrefixedWithAn



```php
RoleFilterTest::testFeatureRolePrefixedWithAn(  )
```







---

## ScenarioNode

Represents Gherkin Scenario.



* Full name: \Behat\Gherkin\Node\ScenarioNode
* This class implements: \Behat\Gherkin\Node\ScenarioInterface


### __construct

Initializes scenario.

```php
ScenarioNode::__construct( null|string $title, array $tags, array&lt;mixed,\Behat\Gherkin\Node\StepNode&gt; $steps, string $keyword, integer $line )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **null&#124;string** |  |
| `$tags` | **array** |  |
| `$steps` | **array<mixed,\Behat\Gherkin\Node\StepNode>** |  |
| `$keyword` | **string** |  |
| `$line` | **integer** |  |




---

### getNodeType

Returns node type string

```php
ScenarioNode::getNodeType(  ): string
```







---

### getTitle

Returns scenario title.

```php
ScenarioNode::getTitle(  ): null|string
```







---

### hasTag

Checks if scenario is tagged with tag.

```php
ScenarioNode::hasTag( string $tag ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **string** |  |




---

### hasTags

Checks if scenario has tags (both inherited from feature and own).

```php
ScenarioNode::hasTags(  ): Boolean
```







---

### getTags

Returns scenario tags (including inherited from feature).

```php
ScenarioNode::getTags(  ): array
```







---

### hasSteps

Checks if scenario has steps.

```php
ScenarioNode::hasSteps(  ): Boolean
```







---

### getSteps

Returns scenario steps.

```php
ScenarioNode::getSteps(  ): array&lt;mixed,\Behat\Gherkin\Node\StepNode&gt;
```







---

### getKeyword

Returns scenario keyword.

```php
ScenarioNode::getKeyword(  ): string
```







---

### getLine

Returns scenario declaration line number.

```php
ScenarioNode::getLine(  ): integer
```







---

## StepNode

Represents Gherkin Step.



* Full name: \Behat\Gherkin\Node\StepNode
* This class implements: \Behat\Gherkin\Node\NodeInterface


### __construct

Initializes step.

```php
StepNode::__construct( string $keyword, string $text, array&lt;mixed,\Behat\Gherkin\Node\ArgumentInterface&gt; $arguments, integer $line, string $keywordType = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyword` | **string** |  |
| `$text` | **string** |  |
| `$arguments` | **array<mixed,\Behat\Gherkin\Node\ArgumentInterface>** |  |
| `$line` | **integer** |  |
| `$keywordType` | **string** |  |




---

### getNodeType

Returns node type string

```php
StepNode::getNodeType(  ): string
```







---

### getType

Returns step keyword in provided language (Given, When, Then, etc.).

```php
StepNode::getType(  ): string
```



* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.




---

### getKeyword

Returns step keyword in provided language (Given, When, Then, etc.).

```php
StepNode::getKeyword(  ): string
```







---

### getKeywordType

Returns step type keyword (Given, When, Then, etc.).

```php
StepNode::getKeywordType(  ): string
```







---

### getText

Returns step text.

```php
StepNode::getText(  ): string
```







---

### hasArguments

Checks if step has arguments.

```php
StepNode::hasArguments(  ): Boolean
```







---

### getArguments

Returns step arguments.

```php
StepNode::getArguments(  ): array&lt;mixed,\Behat\Gherkin\Node\ArgumentInterface&gt;
```







---

### getLine

Returns step declaration line number.

```php
StepNode::getLine(  ): integer
```







---

## StepNodeTest





* Full name: \Tests\Behat\Gherkin\Node\StepNodeTest
* Parent class: 


### testThatStepCanHaveOnlyOneArgument



```php
StepNodeTest::testThatStepCanHaveOnlyOneArgument(  )
```







---

## TableNode

Represents Gherkin Table argument.



* Full name: \Behat\Gherkin\Node\TableNode
* This class implements: \Behat\Gherkin\Node\ArgumentInterface, \IteratorAggregate


### __construct

Initializes table.

```php
TableNode::__construct( array $table )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **array** | Table in form of [$rowLineNumber => [$val1, $val2, $val3]] |




---

### getNodeType

Returns node type.

```php
TableNode::getNodeType(  ): string
```







---

### getHash

Returns table hash, formed by columns (ColumnsHash).

```php
TableNode::getHash(  ): array
```







---

### getColumnsHash

Returns table hash, formed by columns.

```php
TableNode::getColumnsHash(  ): array
```







---

### getRowsHash

Returns table hash, formed by rows.

```php
TableNode::getRowsHash(  ): array
```







---

### getTable

Returns numerated table lines.

```php
TableNode::getTable(  ): array
```

Line numbers are keys, lines are values.





---

### getRows

Returns table rows.

```php
TableNode::getRows(  ): array
```







---

### getLines

Returns table definition lines.

```php
TableNode::getLines(  ): array
```







---

### getRow

Returns specific row in a table.

```php
TableNode::getRow( integer $index ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **integer** | Row number |




---

### getColumn

Returns specific column in a table.

```php
TableNode::getColumn( integer $index ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **integer** | Column number |




---

### getRowLine

Returns line number at which specific row was defined.

```php
TableNode::getRowLine( integer $index ): integer
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **integer** |  |




---

### getRowAsString

Converts row into delimited string.

```php
TableNode::getRowAsString( integer $rowNum ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rowNum` | **integer** | Row number |




---

### getRowAsStringWithWrappedValues

Converts row into delimited string.

```php
TableNode::getRowAsStringWithWrappedValues( integer $rowNum, callable $wrapper ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rowNum` | **integer** | Row number |
| `$wrapper` | **callable** | Wrapper function |




---

### getTableAsString

Converts entire table into string

```php
TableNode::getTableAsString(  ): string
```







---

### getLine

Returns line number at which table was started.

```php
TableNode::getLine(  ): integer
```







---

### __toString

Converts table into string

```php
TableNode::__toString(  ): string
```







---

### getIterator

Retrieves a hash iterator.

```php
TableNode::getIterator(  ): \Iterator
```







---

## TableNodeTest





* Full name: \Tests\Behat\Gherkin\Node\TableNodeTest
* Parent class: 


### testConstructorExpectsSameNumberOfColumnsInEachRow



```php
TableNodeTest::testConstructorExpectsSameNumberOfColumnsInEachRow(  )
```







---

### testHashTable



```php
TableNodeTest::testHashTable(  )
```







---

### testIterator



```php
TableNodeTest::testIterator(  )
```







---

### testRowsHashTable



```php
TableNodeTest::testRowsHashTable(  )
```







---

### testLongRowsHashTable



```php
TableNodeTest::testLongRowsHashTable(  )
```







---

### testGetRows



```php
TableNodeTest::testGetRows(  )
```







---

### testGetLines



```php
TableNodeTest::testGetLines(  )
```







---

### testGetRow



```php
TableNodeTest::testGetRow(  )
```







---

### testGetColumn



```php
TableNodeTest::testGetColumn(  )
```







---

### testGetRowWithLineNumbers



```php
TableNodeTest::testGetRowWithLineNumbers(  )
```







---

### testGetTable



```php
TableNodeTest::testGetTable(  )
```







---

### testGetRowLine



```php
TableNodeTest::testGetRowLine(  )
```







---

### testGetRowAsString



```php
TableNodeTest::testGetRowAsString(  )
```







---

### testGetTableAsString



```php
TableNodeTest::testGetTableAsString(  )
```







---

## TagFilter

Filters scenarios by feature/scenario tag.



* Full name: \Behat\Gherkin\Filter\TagFilter
* Parent class: \Behat\Gherkin\Filter\ComplexFilter


### filterFeature

Filters feature according to the filter.

```php
TagFilter::filterFeature( \Behat\Gherkin\Node\FeatureNode $feature ): \Behat\Gherkin\Node\FeatureNode
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** |  |




---

### __construct

Initializes filter.

```php
TagFilter::__construct( string $filterString )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterString` | **string** | Name filter string |




---

### isFeatureMatch

Checks if Feature matches specified filter.

```php
TagFilter::isFeatureMatch( \Behat\Gherkin\Node\FeatureNode $feature ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature instance |




---

### isScenarioMatch

Checks if scenario or outline matches specified filter.

```php
TagFilter::isScenarioMatch( \Behat\Gherkin\Node\FeatureNode $feature, \Behat\Gherkin\Node\ScenarioInterface $scenario ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$feature` | **\Behat\Gherkin\Node\FeatureNode** | Feature node instance |
| `$scenario` | **\Behat\Gherkin\Node\ScenarioInterface** | Scenario or Outline node instance |




---

## TagFilterTest





* Full name: \Tests\Behat\Gherkin\Filter\TagFilterTest
* Parent class: 


### testFilterFeature



```php
TagFilterTest::testFilterFeature(  )
```







---

### testIsFeatureMatchFilter



```php
TagFilterTest::testIsFeatureMatchFilter(  )
```







---

### testIsScenarioMatchFilter



```php
TagFilterTest::testIsScenarioMatchFilter(  )
```







---

## YamlFileLoader

Yaml files loader.



* Full name: \Behat\Gherkin\Loader\YamlFileLoader
* Parent class: \Behat\Gherkin\Loader\AbstractFileLoader


### setBasePath

Sets base features path.

```php
YamlFileLoader::setBasePath( string $path )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Base loader path |




---

### __construct



```php
YamlFileLoader::__construct(  )
```







---

### supports

Checks if current loader supports provided resource.

```php
YamlFileLoader::supports( mixed $path ): Boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | Resource to load |




---

### load

Loads features from provided resource.

```php
YamlFileLoader::load( string $path ): array&lt;mixed,\Behat\Gherkin\Node\FeatureNode&gt;
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Resource to load |




---

## YamlFileLoaderTest





* Full name: \Tests\Behat\Gherkin\Loader\YamlFileLoaderTest
* Parent class: 


### testSupports



```php
YamlFileLoaderTest::testSupports(  )
```







---

### testLoadAddition



```php
YamlFileLoaderTest::testLoadAddition(  )
```







---



--------
> This document was automatically generated from source code comments on 2016-06-23 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
