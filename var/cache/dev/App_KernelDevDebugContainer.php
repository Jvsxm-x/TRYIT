<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5lu7T45\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5lu7T45/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5lu7T45.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5lu7T45\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5lu7T45\App_KernelDevDebugContainer([
    'container.build_hash' => '5lu7T45',
    'container.build_id' => '27c1e533',
    'container.build_time' => 1731455271,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container5lu7T45');