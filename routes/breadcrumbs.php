<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

//Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
     $trail->push('Dashboard', route('dashboard'));
});

//Setting
Breadcrumbs::for('setting', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Setting');
});

    //User
    Breadcrumbs::for('user', function (BreadcrumbTrail $trail) {
        $trail->parent('setting');
        $trail->push('User', route('user.index'));
    });
    Breadcrumbs::for('edituser', function (BreadcrumbTrail $trail, $user) {
        $trail->parent('user');
        $trail->push('Edit', route('user.edit', $user));
    });
