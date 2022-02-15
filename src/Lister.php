<?php

declare(strict_types=1);

namespace Changelog\ReleaseLister;

use Illuminate\Support\Collection;

interface Lister
{
    public function byUser(string $uuid, ?array $options): Collection;

    public function byTeam(string $uuid, ?array $options): Collection;
}
