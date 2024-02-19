<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function pagePaiement() {
        return view('partials.page_paiement');
    }
}
