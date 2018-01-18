<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Domain\Users;

interface UserRepository
{
    public function save(User $user): void;
    public function get($id): User;
}
