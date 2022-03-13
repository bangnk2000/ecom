<?php

namespace App\Repositories;

use App\Repositories\Contracts\User\UserContract;
use App\Models\User as User;
use Illuminate\Support\Carbon;

class UserRepository extends BaseRepository implements UserContract
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }
}
?>

