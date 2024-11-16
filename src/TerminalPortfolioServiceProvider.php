<?php

namespace JordanPartridge\TerminalPortfolio;

use JordanPartridge\TerminalPortfolio\Commands\TerminalPortfolioCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
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
            ->hasCommand(TerminalPortfolioCommand::class)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishAssets()
                    ->publishMigrations()
                    ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('jordanpartridge/terminal-portfolio');
            });
    }
}
