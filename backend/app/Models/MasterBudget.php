<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBudget extends Model
{
    use HasFactory;

    /**
     * デフォルト値
     *
     * @var array
     */
    protected $attributes = [
        'group_id' => 0,
        'tag_id' => 0,
        'name' => 'ななし',
        'description' => null,
        'color_id' => null,
    ];

    /**
     * 複数代入可能
     *
     * @var array
     */
    protected $fillable = [
        'group_id',
        'tag_id',
        'name',
        'description',
        'color_id',
    ];
}
