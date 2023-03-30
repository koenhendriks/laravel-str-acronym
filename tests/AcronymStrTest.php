<?php

use Illuminate\Support\Str;
use KoenHendriks\StrAcronym\StrServiceProvider;
use Orchestra\Testbench\TestCase;

class AcronymStrTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            StrServiceProvider::class,
        ];
    }

    public function testAcronym()
    {
        $this->assertSame('lidsa', Str::acronym('lorem ipsum dolor sit amet'));
        $this->assertSame('Life', Str::acronym('Laravel is freaking everywhere'));
        $this->assertSame('fB', Str::acronym('foo  Bar'));
        $this->assertSame('lpf', Str::acronym("laravel\t\tphp\n\nframework"));
        $this->assertSame('HW', (string) Str::of('hello world')->headline()->acronym());
    }
}
