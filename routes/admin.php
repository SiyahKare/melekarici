<?php

if (config('backpack.base.setup_dashboard_routes')) {
    Route::get('dashboard', 'CustomAdminController@dashboard');
}

