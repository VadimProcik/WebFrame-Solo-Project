<?php

namespace App\ProjectStuff;

use DateTime;

class JobType
{
    private string $name;
    private DateTime $dateAllocated;

    public function __construct()
    {
        $this->dateAllocated = new DateTime();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDateAllocated(): DateTime
    {
        return $this->dateAllocated;
    }

    public function setDateAllocated(DateTime $dateAllocated): void
    {
        $this->dateAllocated = $dateAllocated;
    }

}