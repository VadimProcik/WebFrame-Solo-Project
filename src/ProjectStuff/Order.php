<?php

namespace App\ProjectStuff;

class Order
{
    private string $cutOutSheet;
    private string $assmeblyDate;
    private string $fittingDate;
    private float $price;

    public function getCutOutSheet(): string
    {
        return $this->cutOutSheet;
    }

    public function setCutOutSheet(string $cutOutSheet): void
    {
        $this->cutOutSheet = $cutOutSheet;
    }

    public function getAssmeblyDate(): string
    {
        return $this->assmeblyDate;
    }

    public function setAssmeblyDate(string $assmeblyDate): void
    {
        $this->assmeblyDate = $assmeblyDate;
    }

    public function getFittingDate(): string
    {
        return $this->fittingDate;
    }

    public function setFittingDate(string $fittingDate): void
    {
        $this->fittingDate = $fittingDate;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }


}