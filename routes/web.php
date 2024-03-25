<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;


Route::get("/", Home::class)->name("home");
Route::get("/about", About::class)->name("about");

Route::get("contacts", Contact::class)->name("contact");

Route::get("stocks", App\Livewire\Stocks\Index::class)->name("sotcks.index");

Route::get("users/{user}", App\Livewire\Users\Show::class)->name("users.show");
