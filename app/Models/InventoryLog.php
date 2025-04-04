<?php

namespace App\Models;

use App\Models\Enums\InventoryLogType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryLog extends Model
{
    use HasFactory, SoftDeletes;
    protected $casts = [
        'type' => InventoryLogType::class,
    ];
    protected $fillable = [ 'user_id', 'note', 'total_cost', 'source'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function stock_entries(): HasMany
    {
        return $this->hasMany(StockEntry::class);
    }
}
