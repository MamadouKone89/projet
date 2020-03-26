<?php

namespace App\Repositories\Admin;

use App\Models\Admin\User;
use App\Repositories\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories\Admin
 * @version March 19, 2020, 7:49 am UTC
*/

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
