<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class To_do_list_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'note',
        'done',
        'start_date',
        'end_date',
        'priority',
        'to_do_list_id',
        'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function to_do_list(): BelongsTo
    {
        return $this->belongsTo(To_do_list::class);
    }
}
