<?php

namespace LaravelRotEbal\GovNova\Tests;

use Orchestra\Testbench\TestCase;
use LaravelRotEbal\GovNova\GovNovaServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [GovNovaServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
