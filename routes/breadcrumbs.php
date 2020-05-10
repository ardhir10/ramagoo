<?php

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

// Users
Breadcrumbs::for('users', function ($trail) {
    $trail->push('Users List', route('admin.users'));
});

Breadcrumbs::for('users2', function ($trail) {
    $trail->parent('users');
    $trail->push('Users Create', route('admin.users'));
});


// Admins
Breadcrumbs::for('admins', function ($trail) {
    $trail->push('Admin List', route('admin.admins'));
});
Breadcrumbs::for('admins.create', function ($trail) {
    $trail->parent('admins');
    $trail->push('Create', route('admin.admins.create'));
});


// Admin Roles
Breadcrumbs::for('admin_roles', function ($trail) {
    $trail->push('Admin Role List', route('admin.admin_role'));
});

Breadcrumbs::for('admin_roles.create', function ($trail) {
    $trail->parent('admin_roles');
    $trail->push('Create', route('admin.admin_role.create'));
});

// Breadcrumbs::for('admin', function ($trail) {
//     $trail->parent('admins');
//     $trail->push('Admin Create', route('admin.admins'));
// });
