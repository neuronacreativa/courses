<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRM6NqjX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__ . '/ContainerRM6NqjX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRM6NqjX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRM6NqjX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRM6NqjX\App_KernelDevDebugContainer([
    'container.build_hash' => 'RM6NqjX',
    'container.build_id' => '16057e90',
    'container.build_time' => 1624055682,
], __DIR__ . \DIRECTORY_SEPARATOR);
