<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PDFController extends Controller
{
    public function generate(){
        $users = User::all();
        // dd($users);
        $pdf = Pdf::loadView('template.pdf', ['users'=>$users]);
        return $pdf->download('user1.pdf');
    }
}
