<?php

/*
 * This file is part of OAuth 2.0 Laravel.
 *
 * (c) Ahmet Oğuz Koruyucu <aokoruyucu@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace aokoruyucu\OAuth2Server\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the authorizer facade class.
 *
 * @see \aokoruyucu\OAuth2Server\Authorizer
 *
 * @author Ahmet Oğuz Koruyucu <aokoruyucu@gmail.com>
 */
class Authorizer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'oauth2-server.authorizer';
    }
}
