<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Product;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// List Products
Breadcrumbs::for('products.index', function (BreadcrumbTrail $trail) {
    $trail->push('Productos', route('products.index'));
});

// View Product
Breadcrumbs::for('products.show', function (BreadcrumbTrail $trail, Product $product) {
    $trail->parent('products.index');
    $trail->push($product->name, route('products.show', ['product' => $product]));
});

// Edit Product
Breadcrumbs::for('products.edit', function (BreadcrumbTrail $trail, Product $product) {
    $trail->parent('products.show', $product);
    $trail->push('Editar', route('products.edit', ['product' => $product]));
});

// New Product
Breadcrumbs::for('products.create', function (BreadcrumbTrail $trail) {
    $trail->parent('products.index');
    $trail->push('Crear Producto', route('products.create'));
});

// Login
Breadcrumbs::for('login', function (BreadcrumbTrail $trail) {
    $trail->push('Iniciar sesión', route('login'));
});

// Change Password
Breadcrumbs::for('change-password', function (BreadcrumbTrail $trail) {
    $trail->push('Cambiar contraseña', route('changePassword'));
});