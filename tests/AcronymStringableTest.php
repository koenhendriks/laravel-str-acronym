<?php

use KoenHendriks\StrAcronym\StrServiceProvider;
use Orchestra\Testbench\TestCase;
use Illuminate\Support\Stringable;

class AcronymStringableTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            StrServiceProvider::class,
        ];
    }

    protected function stringable(string $string = ''): Stringable
    {
        return new Stringable($string);
    }

    public function testAcronym()
    {
        $this->assertSame('lidsa', (string) $this->stringable('lorem ipsum dolor sit amet')->acronym());
        $this->assertSame('l.i.d.s.a', (string) $this->stringable('lorem ipsum dolor sit amet')->acronym('.')->rtrim('.'));
    }
}
