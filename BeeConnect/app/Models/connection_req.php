<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class connection_req extends Model
{
    use HasFactory;
    protected $table = 'connection_req';
    protected $fillable = ['user_id', 'connector_id', 'status'];
    protected $hidden = ['ID'];
    public $timestamps = false;

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
