<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\role_management;
use App\Models\connection_req;
use App\Models\master_organization;
use App\Models\master_major;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['role_id', 'major_id', 'region_id', 'org_id', 'hobby1', 'hobby2', 'first_name', 'last_name', 'email', 'student_id', 'gender', 'image', 'password', 'instagram', 'whatsapp'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(): HasOne
    {
        return $this->hasOne(role_management::class);
    }
    public function major(): HasOne
    {
        return $this->hasOne(master_major::class);
    }
    public function region(): HasOne
    {
        return $this->hasOne(master_region::class);
    }
    public function organization(): HasOne
    {
        return $this->hasOne(master_organization::class);
    }
    public function connection(): HasMany
    {
        return $this->hasMany(connection_req::class);
    }

}
