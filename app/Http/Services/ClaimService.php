<?php

namespace App\Http\Services;

use App\Models\Claim;
use Illuminate\Http\Request;

class ClaimService
{
    protected $name;
    protected $email;
    protected $coffee_shop;
    protected $claim;
    protected $coffee_shops;

    public function __construct(Request $request)
    {
        $this->name = $request->input('name');
        $this->email = $request->input('email');
        $this->coffee_shop = $request->input('coffee_shop');
        $this->coffee_shops = collect(config('alnahda.coffee_shops'));

        if (!$this->name || !$this->email || !$this->coffee_shop) {
            return;
        }

        $this->store();
    }

    public function setClaim($claim)
    {
        $this->claim = $claim;
    }

    public function setCoffeeShop($coffee_shop)
    {
        $this->coffee_shop = $coffee_shop;
    }

    public function claim(): Claim
    {
        return $this->claim;
    }

    public function coffeeShop()
    {
        return $this->coffee_shop;
    }

    public function store()
    {
        $claim = Claim::create([
            'name' => $this->name,
            'email' => $this->email,
            'coffee_shop' => $this->coffee_shop,
        ]);

        $voucher_number = 1;
        $claim_latest = Claim::where('coffee_shop', $this->coffee_shop)->whereNotNull('voucher_number')->latest()->first();
        if ($claim_latest) {
            $voucher_number = $claim_latest->voucher_number + 1;
        }

        $claim->voucher_number = $voucher_number;
        $claim->save();

        $coffee_shop_info = $this->coffee_shops->where('value', $this->coffee_shop)->firstOrFail();

        $this->setClaim($claim);
        $this->setCoffeeShop($coffee_shop_info);
    }
}
