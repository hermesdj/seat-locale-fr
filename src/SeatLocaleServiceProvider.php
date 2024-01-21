<?php

namespace Seat\HermesDj\Locale;

use Seat\Services\AbstractSeatPlugin;

class SeatLocaleServiceProvider extends AbstractSeatPlugin
{
    public function boot() {
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang/', 'allianceindustry');
    }

    public function getName(): string
    {
        return "Seat Locale French Plugin";
    }

    public function getPackageRepositoryUrl(): string
    {
        return "https://github.com/hermesdj/seat-locale-fr";
    }

    public function getPackagistPackageName(): string
    {
        return "seat-locale-fr";
    }

    public function getPackagistVendorName(): string
    {
        return "hermesdj";
    }
}