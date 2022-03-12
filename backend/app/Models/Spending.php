<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    use HasFactory;

    /**
     * デフォルト値
     *
     * @var array
     */
    protected $attributes = [
        'badget_group_id' => 0,
        'badget_id' => 0,
        'badget_child_id' => 0,
        'price' => 0,
        'spend_at' => null,
        'log_generation' => null,
        'description' => null,
    ];

    /**
     * 複数代入可能
     *
     * @var array
     */
    protected $fillable = [
        'badget_group_id',
        'badget_id',
        'badget_child_id',
        'price',
        'spend_at',
        'log_generation',
        'description',
    ];
}
