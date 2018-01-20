<?php

namespace App\Transformers;

use App\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Category  $category)
    {
        return [
            'identificador' => (int) $category->id,
            'titulo' => (string) $category->name,
            'detaller' => (string) $category->description,
            'fechaCreacion' => (string) $category->created_at,
            'fechaActualizacion' => (string) $category->updated_at,
            'fechaEliminacion' =>  isset($category->cancelled_at) ?  (string) $category->cancelled_at : null,
        ];
    }
}
