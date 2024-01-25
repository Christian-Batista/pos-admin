<?php

namespace App\Http\Controllers\Products;

use App\Http\Requests\ProductRequest;
use App\Services\Products\ProductsService;

class ProductController
{
    public $productService;

    public function __construct(
        ProductsService $productService
    )
    {
        $this->productService = $productService;
    }
    public function create(ProductRequest $request)
    {
        dd($request->all());
        $response = $this->productService->storeProduct($request);
    }
}
