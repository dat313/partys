<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

Route::get('/', [InvitationController::class, 'wizard']);
Route::post('/send', [InvitationController::class, 'send']);
