<?php
require_once 'CarCouponGeneratorInterface.php';
Class MercedesCouponGenerator implements CarCouponGeneratorInterface
{
    private float $discount = 0;
    private bool $isHighSeason = false;
    private bool $bigStock = false;

    public function generateCoupon(string $carModel): string
    {
        return "Mercedes Coupon for {$carModel} with a {$this->discount}% discount";
    }
    public function addSeasonDiscount(): void
    {
        if(!$this->isHighSeason) {
            $this->discount += 4;
        }
    }
    public function addStockDiscount(): void
    {
        if($this->bigStock) {
            $this->discount += 10;
        }
    }
}