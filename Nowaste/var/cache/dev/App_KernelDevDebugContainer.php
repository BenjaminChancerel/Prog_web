<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXIXjWiD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXIXjWiD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXIXjWiD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXIXjWiD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXIXjWiD\App_KernelDevDebugContainer([
    'container.build_hash' => 'XIXjWiD',
    'container.build_id' => 'fd4c2309',
    'container.build_time' => 1610034258,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXIXjWiD');
