<?php

namespace App\ProjectStuff;

use DateTime;

class AllocatedJob
{
    private DateTime $givenDate;
    private DateTime $completedDate;
    private string $jobType;

    public function __construct()
    {
        $this->givenDate = new DateTime();
        $this->completedDate = new DateTime();
    }

    public function getGivenDate(): DateTime
    {
        return $this->givenDate;
    }

    public function setGivenDate(DateTime $givenDate): void
    {
        $this->givenDate = $givenDate;
    }

    public function getCompletedDate(): DateTime
    {
        return $this->completedDate;
    }

    public function setCompletedDate(DateTime $completedDate): void
    {
        $this->completedDate = $completedDate;
    }

    public function getJobType(): string
    {
        return $this->jobType;
    }

    public function setJobType(string $jobType): void
    {
        $this->jobType = $jobType;
    }



}
