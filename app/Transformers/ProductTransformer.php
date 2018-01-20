<?php

namespace App\Transformers;

use App\Product;
use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Product $product)
    {
        return [
            'identificador' => (int) $product->id,
            'titulo' => (string) $product->name,
            'detalles' => (string) $product->description,
            'disponibles' => (int) $product->quantity,
            'estado' => (string) $product->state,
            'image' => url("img/{$product->image}"),
            'vendedor' => $product->seller_id,
            'fechaCreacion' => (string) $product->created_at,
            'fechaActualizacion' => (string) $product->updated_at,
            'fechaEliminacion' =>  isset($product->cancelled_at) ?  (string) $product->cancelled_at : null,
        ];
    }
}
