<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEPpA3NF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEPpA3NF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEPpA3NF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEPpA3NF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEPpA3NF\App_KernelDevDebugContainer([
    'container.build_hash' => 'EPpA3NF',
    'container.build_id' => '8ae15c2f',
    'container.build_time' => 1673215110,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEPpA3NF');
