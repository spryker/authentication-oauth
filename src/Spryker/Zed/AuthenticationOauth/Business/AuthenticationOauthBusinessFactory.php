<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AuthenticationOauth\Business;

use Spryker\Zed\AuthenticationOauth\AuthenticationOauthDependencyProvider;
use Spryker\Zed\AuthenticationOauth\Business\Dependency\Facade\AuthenticationOauthToOauthFacadeInterface;
use Spryker\Zed\AuthenticationOauth\Business\Processor\AuthenticationOauth;
use Spryker\Zed\AuthenticationOauth\Business\Processor\AuthenticationOauthInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Spryker\Zed\AuthenticationOauth\AuthenticationOauthConfig getConfig()
 */
class AuthenticationOauthBusinessFactory extends AbstractBusinessFactory
{
    public function createAuthenticationOauth(): AuthenticationOauthInterface
    {
        return new AuthenticationOauth(
            $this->getOauthFacade(),
        );
    }

    public function getOauthFacade(): AuthenticationOauthToOauthFacadeInterface
    {
        return $this->getProvidedDependency(AuthenticationOauthDependencyProvider::FACADE_OAUTH);
    }
}
