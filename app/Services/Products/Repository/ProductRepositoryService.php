<?php

namespace App\Services\Products\Repository;

use App\Models\Product;

class ProductRepositoryService
{
    public function store($product)
    {
       return Product::create([
        "product_name" => $product->product_name,
        "product_description" => $product->product_description,
        "product_price" => $product->product_price,
        "product_category" => $product->product_category,
        "product_stock" => $product->product_stock,
        "product_provider" => $product->product_provider,
        "product_image" => $product->product_image,
        "product_state" => $product->product_state,
        "product_review" => $product->product_review
       ]);
    }

}
