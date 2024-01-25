<?php

namespace App\Services\Products\Repository;

use App\Models\Product;

class ProductRepositoryService
{
    //store
    public function store($product)
    {
       return Product::create($product);
    }
    //delete
    //update
    //getAll
    //getById
}
