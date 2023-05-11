<?php

namespace Tester\Test\Controllers;

use Illuminate\Http\Request;
use Tester\Test\Test;

class TestController
{
    public function __invoke(Test $test) {
        $quote = $test->index();
        return view('test::index', compact('quote'));
    }
}