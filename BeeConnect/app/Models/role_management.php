<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class role_management extends Model
{
    use HasFactory;
    protected $table = 'role_management';
    protected $fillable = ['role_name'];
    protected $hidden = ['ID'];
    public $timestamps = false;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
