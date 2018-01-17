<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:47
 */

namespace Metinet\Domain;


class InvalidDateOfConference extends \Exception
{
    public static function mustNotBeInThePast(): self
    {
        return new self('Conference cannot be in the past');
    }
}