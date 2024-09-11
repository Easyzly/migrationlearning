<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'done',
        'start_date',
        'end_date',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function to_do_lists(): HasMany
    {
        return $this->hasMany(To_do_list::class);
    }

    public function to_do_list_items(): HasManyThrough
    {
        return $this->hasManyTrough(To_do_list_item::class, To_do_list::class);
    }
}
