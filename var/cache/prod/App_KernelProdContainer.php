<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTR2NENx\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTR2NENx/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerTR2NENx.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerTR2NENx\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerTR2NENx\App_KernelProdContainer([
    'container.build_hash' => 'TR2NENx',
    'container.build_id' => '9df564bf',
    'container.build_time' => 1669642545,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTR2NENx');
