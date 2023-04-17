<?php

namespace App\ProjectStuff;

use DateTime;
use App\ProjectStuff\Status;

class PaymentMethod
{
    private Status $status;
    private DateTime $dateTime;

    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function __construct()
    {
        $this->dateTime = new DateTime();
    }
}