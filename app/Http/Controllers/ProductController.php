<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class ProductController extends Controller
{
    public function show()
    {
        return '<h1>Liste des produits</h1>';

    }
    public function showDetail($id)
    {
        return '<h1>Fiche du produit </h1>'. $id;

    }

}
