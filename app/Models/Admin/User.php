<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models\Admin
 * @version March 19, 2020, 7:49 am UTC
 *
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string name
 * @property string prenom
 * @property string structure
 * @property integer telephone
 * @property string remember_token
 */
class User extends Model {

    use SoftDeletes;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];
    public $fillable = [
        'email',
        'email_verified_at',
        'password',
        'name',
        'prenom',
        'structure',
        'telephone',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'name' => 'string',
        'prenom' => 'string',
        'structure' => 'string',
        'telephone' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required|unique:users',
        'password' => 'required|confirmed',
        'name' => 'required',
        'prenom' => 'required',
        'structure' => 'required',
        'telephone' => 'required'
    ];

    public function assignRole($role) {
        return $this->roles()->attach($role);
    }

    public function syncRoles(...$roles) {
        $this->roles()->detach();
        return $this->assignRole($roles);
    }

    public function setRoleIdAttribute($input) {
        $this->attributes['role_id'] = $input ? $input : null;
    }

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function roles() {

        return $this->belongsToMany(Role::class);
    }

}
