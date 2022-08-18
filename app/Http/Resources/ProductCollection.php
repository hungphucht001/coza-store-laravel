<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public $collects = Product::class;
    public $preserveKeys = true;

    public function toArray($request)
    {
        return [
          'data' => $this->resource,
        ];
    }
    public function withResponse($request, $response)
    {
        $response->withHeaders([
            'Content-Type' => 'application/json',
            'X-Header-One' => 'Header Value',
            'X-Header-Two' => 'Header Value',
        ]);
        $response->setStatusCode(401);
    }

//    public function with($request)
//    {
//        return [
//            'meta' => [
//                'key' => 'value',
//            ],
//        ];
//    }
}
