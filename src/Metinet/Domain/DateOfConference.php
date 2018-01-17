<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:48
 */

namespace Metinet\Domain;


class DateOfConference
{
    private $dateOfConference;

    public static function fromString(string $dateOfConference): self
    {
        return new self($dateOfConference);
    }

    public function toAge(): int
    {
        return (new \DateTimeImmutable('now'))->diff($this->dateOfConference)->y;
    }

    private function __construct(string $dateOfConference)
    {
        $dateOfConferenceAsDateTime = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', sprintf('%s 23:59:59', $dateOfConference));
        if ($dateOfConferenceAsDateTime < new \DateTimeImmutable('now')) {

            throw InvalidDateOfConference::mustNotBeInThePast();
        }

        $this->dateOfEvent = $dateOfConferenceAsDateTime;
    }

}