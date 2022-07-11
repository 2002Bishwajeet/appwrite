<?php

namespace Appwrite\Auth\OAuth2;

use Appwrite\Auth\OAuth2\Evernote;

class EvernoteSandbox extends Evernote
{
    protected string $environment = 'sandbox';

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'evernoteSandbox';
    }
}
