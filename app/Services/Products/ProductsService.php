<?php

namespace App\Services\Products;

use App\Http\Requests\ProductRequest;
use App\Services\Products\Repository\ProductRepositoryService;

class ProductsService
{
    protected $repository;

    public function __construct(
        ProductRepositoryService $repository
    )
    {
        $this->repository = $repository;
    }
    //crear 
    public function storeProduct(ProductRequest $product)
    {
        dd($product->all());
    }
}
