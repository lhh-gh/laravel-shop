<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: SillyCat
 * Date: 2025-04-18
 * Time: 22:14
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['amount'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }
}
