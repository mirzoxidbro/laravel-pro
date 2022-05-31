<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Http\Service\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends AbstractCRUDController
{

    public function __construct()
    {
        $this->service = new ProductService;
        $this->StoreRequestClass = new ProductStoreRequest;
        $this->UpdateRequestClass = new ProductUpdateRequest;

    }
}

