<?php

namespace App\Http\Controllers\Products;

use App\Http\Requests\ProductRequest;
use App\Services\Products\ProductsService;
use Illuminate\Http\JsonResponse;

class ProductController
{
    public $productService;

    public function __construct(
        ProductsService $productService
    )
    {
        $this->productService = $productService;
    }
    public function create(ProductRequest $request): JsonResponse
    {
        
        $response = $this->productService->storeProduct($request);

        return response()->json([
            "cod" => $response["cod"],
            "msg" => $response["msg"],
            "data" => $response["data"]
        ]);
    }
}
