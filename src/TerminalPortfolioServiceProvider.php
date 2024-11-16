<?php

namespace JordanPartridge\TerminalPortfolio;

use JordanPartridge\TerminalPortfolio\Commands\TerminalPortfolioCommand;
use JordanPartridge\TerminalPortfolio\Components\Terminal;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TerminalPortfolioServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('terminal-portfolio')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_terminal_portfolio_table')
            ->hasCommand(TerminalPortfolioCommand::class);
    }

    public function boot(): void
    {
        $this->loadViewComponentsAs('', [
            Terminal::class,
        ]);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'terminal');

        Livewire::component('terminal', Terminal::class);
    }
}
