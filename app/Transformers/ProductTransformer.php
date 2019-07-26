<?php 

namespace App\Transformers;

use App\Model\Product;
use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract 
{
    public function transform(Product $product)
    {
        return [
            'id' => $product->id,
            'name' => $product->name,
            'cat_id' => $product->cat_id,
            'buy_price' => $product->buy_price,
            'sale_price' => $product->sale_price,
            'stock' => $product->stock,
            'published' => $product->created_at->diffForHumans(),
            'updated' =>  $product->updated_at->diffForHumans()         
        ];
    }
    
}