<?php

interface CarCouponGeneratorInterface 
{
    public function generateCoupon(string $carModel): string;
    public function addSeasonDiscount(): void;
    public function addStockDiscount(): void;
}