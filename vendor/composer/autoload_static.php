<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9aff06abb0feade90f529dd14ad4639
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JakubOnderka\\PhpConsoleHighlighter\\' => 35,
            'JakubOnderka\\PhpConsoleColor\\' => 29,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JakubOnderka\\PhpConsoleHighlighter\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-parallel-lint/php-console-highlighter/src',
        ),
        'JakubOnderka\\PhpConsoleColor\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-parallel-lint/php-console-color/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_core/classes',
        ),
    );

    public static $classMap = array (
        'JakubOnderka\\PhpParallelLint\\Application' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Application.php',
        'JakubOnderka\\PhpParallelLint\\ArrayIterator' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Settings.php',
        'JakubOnderka\\PhpParallelLint\\Blame' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Error.php',
        'JakubOnderka\\PhpParallelLint\\CheckstyleOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\ConsoleWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\Contracts\\SyntaxErrorCallback' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Contracts/SyntaxErrorCallback.php',
        'JakubOnderka\\PhpParallelLint\\Error' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Error.php',
        'JakubOnderka\\PhpParallelLint\\ErrorFormatter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/ErrorFormatter.php',
        'JakubOnderka\\PhpParallelLint\\Exception' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\FileWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\IWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\InvalidArgumentException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\JsonOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\Manager' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Manager.php',
        'JakubOnderka\\PhpParallelLint\\MultipleWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\NotExistsClassException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\NotExistsPathException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\NotImplementCallbackException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\NullWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\Output' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\ParallelLint' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/ParallelLint.php',
        'JakubOnderka\\PhpParallelLint\\Process\\GitBlameProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/GitBlameProcess.php',
        'JakubOnderka\\PhpParallelLint\\Process\\LintProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/LintProcess.php',
        'JakubOnderka\\PhpParallelLint\\Process\\PhpExecutable' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/PhpExecutable.php',
        'JakubOnderka\\PhpParallelLint\\Process\\PhpProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/PhpProcess.php',
        'JakubOnderka\\PhpParallelLint\\Process\\Process' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/Process.php',
        'JakubOnderka\\PhpParallelLint\\Process\\SkipLintProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/SkipLintProcess.php',
        'JakubOnderka\\PhpParallelLint\\RecursiveDirectoryFilterIterator' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Manager.php',
        'JakubOnderka\\PhpParallelLint\\Result' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Result.php',
        'JakubOnderka\\PhpParallelLint\\RunTimeException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\Settings' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Settings.php',
        'JakubOnderka\\PhpParallelLint\\SyntaxError' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Error.php',
        'JakubOnderka\\PhpParallelLint\\TextOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\TextOutputColored' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JsonSerializable' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/polyfill.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9aff06abb0feade90f529dd14ad4639::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9aff06abb0feade90f529dd14ad4639::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9aff06abb0feade90f529dd14ad4639::$classMap;

        }, null, ClassLoader::class);
    }
}
