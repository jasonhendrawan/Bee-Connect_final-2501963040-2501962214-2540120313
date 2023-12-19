<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class master_organization extends Model
{
    use HasFactory;
    protected $table = 'master_organization';
    protected $fillable = ['org_name'];
    protected $hidden = ['ID'];
    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
