<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Illuminate\Database\Query\Builder where()
 * @method static \Illuminate\Database\Eloquent\Model|object|static|null find()
 */
class Budget extends Model
{
    use HasFactory;

    /**
     * デフォルト値
     *
     * @var array
     */
    protected $attributes = [
        'group_id' => 0,
        'master_badget_id' => 0,
        'tag_id' => 0,
        'price' => 0,
        'from_date' => null,
        'to_date' => null,
        'description' => null,
    ];

    /**
     * 複数代入可能
     *
     * @var array
     */
    protected $fillable = [
        'group_id',
        'master_badget_id',
        'tag_id',
        'price',
        'from_date',
        'to_date',
        'description',
    ];
}
