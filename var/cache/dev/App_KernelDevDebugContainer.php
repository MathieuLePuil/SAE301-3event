<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL1c2LVx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL1c2LVx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerL1c2LVx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerL1c2LVx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerL1c2LVx\App_KernelDevDebugContainer([
    'container.build_hash' => 'L1c2LVx',
    'container.build_id' => 'e9c21426',
    'container.build_time' => 1669995384,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerL1c2LVx');
