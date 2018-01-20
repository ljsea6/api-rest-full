<?php

namespace App\Transformers;

use App\Seller;
use League\Fractal\TransformerAbstract;

class SellerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Seller $seller)
    {
        return [
            'identificador' => (int) $seller->id,
            'nombre' => (string) $seller->name,
            'correo' => (string) $seller->email,
            'esVerificado' => (int) $seller->verified,
            'fechaCreacion' => (string) $seller->created_at,
            'fechaActualizacion' => (string) $seller->updated_at,
            'fechaEliminacion' =>  isset($selle->cancelled_at) ?  (string) $seller->cancelled_at : null,
        ];
    }
}
