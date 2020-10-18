<?php

declare(strict_types=1);

namespace app\models;

use mako\database\midgard\ORM;
use mako\database\midgard\traits\TimestampedTrait;

class Subscription extends ORM
{
    use TimestampedTrait;

    protected $assignable = [
        'endpoint',
        'publicKey',
        'authToken',
    ];

    protected $cast = [
        'endpoint'  => 'string',
        'publicKey' => 'string',
        'authToken' => 'string',
    ];

    public function __construct(string $endpoint, string $publicKey, string $authToken)
    {
        $this->endpoint = $endpoint;
        $this->publicKey = $publicKey;
        $this->authToken = $authToken;
    }
}
