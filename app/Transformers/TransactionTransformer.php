<?php

namespace App\Transformers;

use App\Transaction;
use League\Fractal\TransformerAbstract;

class TransactionTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Transaction $transaction)
    {
        return [
            'identificador' => (int) $transaction->id,
            'cantidad' => (string) $transaction->quantity,
            'comprador' => (int) $transaction->buyer_id,
            'producto' => (int) $transaction->product_id,
            'fechaCreacion' => (string) $transaction->created_at,
            'fechaActualizacion' => (string) $transaction->updated_at,
            'fechaEliminacion' =>  isset($transaction->cancelled_at) ?  (string) $transaction->cancelled_at : null,
        ];
    }
}
