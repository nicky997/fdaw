<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXZIRNxD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXZIRNxD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXZIRNxD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXZIRNxD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXZIRNxD\App_KernelDevDebugContainer([
    'container.build_hash' => 'XZIRNxD',
    'container.build_id' => '9b479e32',
    'container.build_time' => 1606932170,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXZIRNxD');
