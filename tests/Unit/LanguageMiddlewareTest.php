<?php

use App\Http\Middleware\SetLanguage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

uses(TestCase::class);

it('sets the default locale', function () {
    session()->put('language', 'de');

    (new SetLanguage())->handle(new Request(), function ($request) {
        expect(app()->getLocale())->toBe('de');

        return new Response();
    });
});
