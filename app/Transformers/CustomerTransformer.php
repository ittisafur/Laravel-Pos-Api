<?php 

namespace App\Transformers;

use App\Model\Customer;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract 
{
    public function transform(Customer $customer)
    {
        return [
            'id' => $customer->id,
            'name' => $customer->name,
            'email' => $customer->email,
            'phone' => $customer->cell_number,
            'published' => $customer->created_at->diffForHumans(),
            'updated' =>  $customer->updated_at->diffForHumans()         
        ];
    }
    
}