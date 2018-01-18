<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Domain\Users;

class UserNotFound extends \Exception
{
    public function __construct($id)
    {
        parent::__construct(sprintf('User with id "%s" not found.', $id));
    }
}
