<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Infrastructure\Repositories;

use Metinet\Domain\Users\User;
use Metinet\Domain\Users\UserNotFound;
use Metinet\Domain\Users\UserRepository;

class InMemoryUserRepository implements UserRepository
{
    private $users = [];

    public function save(User $user): void
    {
        if(!in_array($user,$this->users)) {
            $this->users[$user->getId()] = $user;
        }
        else{
            throw new Exception('User with ID : "%s" already exist',$user->getId());
        }
    }

    public function get($id): User
    {
        if (!isset($this->users[$id])) {

            throw new UserNotFound($id);
        }

        return $this->users[$id];
    }
}
