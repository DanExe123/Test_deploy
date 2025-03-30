<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Livewire\Projects;
use App\Http\Livewire\About;
use App\Http\Livewire\Technologies;
use App\Http\Livewire\Contact;
use App\Http\Livewire\MyResources;
use App\Http\Livewire\AlpineLivewirepage;
use App\Http\Livewire\UITools;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



    
                // web pages
                Route::get('/projects', Projects::class)->name('projects');
                Route::get('/technologies', Technologies::class)->name('technologies');
                Route::get('/contact', Contact::class)->name('contact');
                Route::get('/about', About::class)->name('about');
                Route::get('/my-resources', MyResources::class)->name('my-resources');
                Route::get('/alpine-livewirepage', AlpineLivewirepage::class)->name('alpine-livewirepage');
                Route::get('/u-i-tools', UITools::class)->name('u-i-tools');







Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
