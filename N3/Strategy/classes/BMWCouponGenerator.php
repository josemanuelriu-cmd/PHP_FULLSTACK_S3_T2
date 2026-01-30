<?php
require_once 'CarCouponGeneratorInterface.php';
Class BMWCouponGenerator implements CarCouponGeneratorInterface
{
    private float $discount = 0;
    private bool $isHighSeason = false;
    private bool $bigStock = true;

    public function generateCoupon(string $carModel): string
    {
        return "BMW Coupon for {$carModel} with a {$this->discount}% discount";
    }
    public function addSeasonDiscount(): void
    {
        if(!$this->isHighSeason) {
            $this->discount += 5;
        }
    }
    public function addStockDiscount(): void
    {
        if($this->bigStock) {
            $this->discount += 7;
        }
    }
}