<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4NqePZi\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4NqePZi/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4NqePZi.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4NqePZi\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container4NqePZi\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '4NqePZi',
    'container.build_id' => '761e3857',
    'container.build_time' => 1569225242,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4NqePZi');
