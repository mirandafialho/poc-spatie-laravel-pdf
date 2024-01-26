<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\LaravelPdf\Enums\Format;

class CreateUserPDFController extends Controller
{
    public function __invoke(User $user)
    {
        return Pdf::view('pdf.user', ['user' => $user])
            ->format(Format::A4)
            ->name($user->name . '_-_' . Carbon::now()->toString() . '.pdf');
    }
}
