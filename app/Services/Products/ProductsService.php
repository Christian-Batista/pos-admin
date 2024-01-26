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
    /**
     * Method to create a Product
     * 
     * 
     */
    public function storeProduct($product)
    {
        // try {
            $productStored = $this->repository->store($product);

            return [
                "cod" => "codigo",
                "msg" => "Product Succesfully stored",
                "data" => $productStored
            ];
        // } catch(\Exception $error) {
        //     return $error->getMessage();
        // }
    }
}
