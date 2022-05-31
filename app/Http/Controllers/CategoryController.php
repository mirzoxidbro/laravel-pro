<?php

namespace App\Http\Controllers;

use App\Http\Service\ProductCategoryService;
use App\Http\Requests\ProductCategory\ProductCategoryStoreRequest;
use App\Http\Requests\ProductCategory\ProductCategoryUpdateRequest;
use App\Models\Category;

class CategoryController extends AbstractCRUDController
{

    public function __construct()
    {
        $this->service = new ProductCategoryService;
        $this->StoreRequestClass = new ProductCategoryStoreRequest;
        $this->UpdateRequestClass = new ProductCategoryUpdateRequest;

    }

}
