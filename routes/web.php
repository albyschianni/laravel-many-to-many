<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route :: get('/', [MainController :: class, 'home'])
    -> name('home');

Route :: get('/product', [MainController :: class, 'products'])
    -> name('product.home');

Route :: get('/product/create', [MainController :: class, 'productCreate'])
    -> name('product.create');

Route :: post('/product/create', [MainController :: class, 'productStore'])
    -> name('product.store');