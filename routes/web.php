<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Invoices;


Route::get('/', Invoices::class)->name('invoices');