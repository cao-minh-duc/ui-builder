<?php

namespace CaoMinhDuc\UiBuilder\Tests;

use NunoMaduro\LaravelMojito\InteractsWithViews;
use Orchestra\Testbench\TestCase as BaseTestCase;
use CaoMinhDuc\UiBuilder\UiBuilderServiceProvider;

class TestCase extends BaseTestCase
{
    use InteractsWithViews;

    public function setUp(): void
    {
        parent::setUp();
    }
    protected function getPackageProviders($app)
    {
        return [UiBuilderServiceProvider::class];
    }
}
