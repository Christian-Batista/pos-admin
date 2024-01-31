<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class ProductsTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_system_can_store_products(): void
    {

        // Simula la carga de una imagen
        $image = UploadedFile::fake()->image('product_image.jpg');

        $product_request = [
            "product_name" => "product_name",
            "product_description" => "product_description",
            "product_price" => 55.30,
            "product_category" => "product_category",
            "product_stock" => 55,
            "product_provider" => "product_provider",
            "product_image" => $image,
            "product_state" =>"product_state",
            "product_review" => "product_review"
        ];
        $response = $this->postJson("api/products/create", $product_request);

        $response->assertStatus(201);

        $response->assertDatabaseHas("products", [
            "product_name" => $product_request["product_name"],
            "product_name" => $product_request["product_name"],
            "product_name" => $product_request["product_name"],
            "product_description" => $product_request["product_description"],
            "product_price" => $product_request["product_price"],
            "product_category" => $product_request["product_category"],
            "product_stock" => $product_request["product_stock"],
            "product_provider" => $product_request["product_provider"],
            "product_image" => $product_request["product_image"],
            "product_state" =>$product_request["product_state"],
            "product_review" => $product_request["product_review"]
        ]);

        $response->assertJson([
            "response" => [
                "cod" => "Prod-01",
                "msg" => "Product created succesfully",
            ],
        ]);
    }
}
