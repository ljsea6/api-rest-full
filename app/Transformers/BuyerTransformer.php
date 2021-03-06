<?php

namespace App\Transformers;

use App\Buyer;
use League\Fractal\TransformerAbstract;

class BuyerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Buyer $buyer)
    {
        return [
            'identificador' => (int) $buyer->id,
            'nombre' => (string) $buyer->name,
            'correo' => (string) $buyer->email,
            'esVerificado' => (int) $buyer->verified,
            'fechaCreacion' => (string) $buyer->created_at,
            'fechaActualizacion' => (string) $buyer->updated_at,
            'fechaEliminacion' =>  isset($buyer->cancelled_at) ?  (string) $buyer->cancelled_at : null,
        ];
    }
}
