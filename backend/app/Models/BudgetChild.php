<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetChild extends Model
{
    use HasFactory;

    /**
     * デフォルト値
     *
     * @var array
     */
    protected $attributes = [
        'badget_id' => 0,
        'from_date' => 0,
        'to_date' => null,
        'price' => null,
        'description' => null,
    ];

    /**
     * 複数代入可能
     *
     * @var array
     */
    protected $fillable = [
        'badget_id',
        'from_date',
        'to_date',
        'price',
        'description',
    ];

    /**
     * 親予算
     */
    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }
}
