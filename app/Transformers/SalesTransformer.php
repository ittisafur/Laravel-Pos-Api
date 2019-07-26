<?php 

namespace App\Transformers;

use App\Model\Sales;
use League\Fractal\TransformerAbstract;

class SalesTransformer extends TransformerAbstract 
{
    public function transform(Sales $sales)
    {
        return [
            'id' => $sales->id,
            'product_id' => $sales->product_id,
            'customer_id' => $sales->customer_id,
            'discount' => $sales->discount,
            'published' => $sales->created_at->diffForHumans(),
            'updated' =>  $sales->updated_at->diffForHumans()         
        ];
    }
    
}