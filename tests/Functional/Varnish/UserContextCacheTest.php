<?php

/*
 * This file is part of the FOSHttpCache package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\HttpCache\Tests\Functional\Varnish;

use FOS\HttpCache\ProxyClient\Varnish;
use FOS\HttpCache\Tests\VarnishTestCase;
use Guzzle\Http\Exception\ClientErrorResponseException;

/**
 * @group webserver
 * @group varnish
 */
class UserContextCacheTest extends UserContextTestCase
{
    protected function getConfigFile()
    {
        return './tests/Functional/Fixtures/varnish/user_context_cache.vcl';
    }

    /**
     * {@inheritDoc}
     */
    protected function assertContextCache($status)
    {
        $this->assertEquals('HIT', $status);
    }
}