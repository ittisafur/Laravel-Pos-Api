<?php 

namespace App\Transformers;

use App\Model\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract 
{
    public function transform(Category $category)
    {
        return [
            'id' => $category->id,
            'name' => $category->name,
            'published' => $category->created_at->diffForHumans(),
            'updated' =>  $category->updated_at->diffForHumans()
        ];
    }
    
}