<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

/*
 * Vorbereitet für spätere Ausbaustufen (noch nicht implementiert):
 *  - Registrierung/Login:  routes/auth.php
 *  - Admin-Freischaltung:  routes/admin.php (App\Http\Controllers\Admin)
 *  - Bestellungen:         routes/orders.php
 */
