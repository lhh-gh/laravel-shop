<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: SillyCat
 * Date: 2025-04-18
 * Time: 21:18
 */

namespace App\Policies;


use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserAddressPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
  ///   授权策略类（Policy）来实现权限控制
    public function own(User $user, UserAddress $address): bool
    {
        return $address->user_id == $user->id;
    }
}
