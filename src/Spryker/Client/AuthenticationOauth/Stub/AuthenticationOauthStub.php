<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\AuthenticationOauth\Stub;

use Generated\Shared\Transfer\GlueAuthenticationRequestTransfer;
use Generated\Shared\Transfer\GlueAuthenticationResponseTransfer;
use Spryker\Client\AuthenticationOauth\Dependency\Client\AuthenticationOauthToZedRequestClientInterface;

class AuthenticationOauthStub implements AuthenticationOauthStubInterface
{
    /**
     * @var \Spryker\Client\AuthenticationOauth\Dependency\Client\AuthenticationOauthToZedRequestClientInterface
     */
    protected $zedRequestClient;

    public function __construct(AuthenticationOauthToZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    public function authenticate(GlueAuthenticationRequestTransfer $glueAuthenticationRequestTransfer): GlueAuthenticationResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\GlueAuthenticationResponseTransfer $glueAuthenticationResponseTransfer */
        $glueAuthenticationResponseTransfer = $this->zedRequestClient->call(
            '/authentication-oauth/gateway/authenticate',
            $glueAuthenticationRequestTransfer,
        );

        return $glueAuthenticationResponseTransfer;
    }
}
