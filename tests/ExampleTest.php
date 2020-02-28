<?php

namespace CaoMinhDuc\UiBuilder\Tests;

use Orchestra\Testbench\TestCase;
use CaoMinhDuc\UiBuilder\UiBuilderServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [UiBuilderServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
