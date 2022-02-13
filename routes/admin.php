<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Motoristas\MotoristasIndex;

Route::get('', function() {
    return view('admin.home');
})->name('admin');

Route::get('motoristas', MotoristasIndex::class)->middleware('auth')->name('motoristas.index');
