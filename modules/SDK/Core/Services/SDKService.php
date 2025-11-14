<?php
declare(strict_types=1);

namespace Modules\SDK\Core\Services;

final class SDKService
{
    public function info(): string
    {
        return 'Module SDK loaded successfully.';
    }
}