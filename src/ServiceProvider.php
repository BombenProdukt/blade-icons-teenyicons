<?php

declare(strict_types=1);

namespace BombenProdukt\BladeIcons\Teenyicons;

use BombenProdukt\BladeIcons\Facades\IconFamilyRegistry;
use BombenProdukt\BladeIcons\IconFamily;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            IconFamily::fromDirectory('teenyicons', __DIR__ . '/../resources/svg'),
        );
    }
}
