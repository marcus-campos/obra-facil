<?php

namespace App\Http\Controllers\eCommerce\Products;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function show()
    {
        return view('pages.ecommerce.products.products')->with(['title' => 'Produtos', 'system' => 'Deliveryzi', 'section' => 'eCommerce', 'page' => 'Produtos']);
    }
}
