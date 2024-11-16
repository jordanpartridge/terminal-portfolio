<?php

namespace JordanPartridge\TerminalPortfolio\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use JordanPartridge\TerminalPortfolio\TerminalPortfolioServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'JordanPartridge\\TerminalPortfolio\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            TerminalPortfolioServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_terminal-portfolio_table.php.stub';
        $migration->up();
        */
    }
}
