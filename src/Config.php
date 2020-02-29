<?php

namespace Spatie\EventServer;

class Config
{
    public ?string $storagePath = __DIR__ . '/../.storage';

    public string $listen = '127.0.0.1:8181';
}
