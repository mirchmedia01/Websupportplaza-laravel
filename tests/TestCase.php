<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Uri;

abstract class TestCase extends BaseTestCase
{
    /**
     * Turn the given URI into a fully-qualified URL, preserving trailing slashes.
     *
     * @param  Uri|string  $uri
     * @return string
     */
    protected function prepareUrlForRequest($uri)
    {
        $hasTrailingSlash = is_string($uri) && str_ends_with($uri, '/') && $uri !== '/';

        $url = parent::prepareUrlForRequest($uri);

        return $hasTrailingSlash ? $url.'/' : $url;
    }
}
