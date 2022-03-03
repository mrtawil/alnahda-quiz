<?php

namespace App\Http\Services;

use App\Models\Claim;
use Illuminate\Http\Request;

class ClaimService
{
    protected $name;
    protected $email;
    protected $claim;

    public function __construct(Request $request)
    {
        $this->name = $request->input('name');
        $this->email = $request->input('email');

        if (!$this->name || !$this->email) {
            return;
        }

        $this->store();
    }

    public function setClaim($claim)
    {
        $this->claim = $claim;
    }

    public function claim(): Claim
    {
        return $this->claim;
    }

    public function store()
    {
        $claim = Claim::create([
            'name' => $this->name,
            'email' => $this->email,
            'coffee_shop' => $this->coffee_shop,
        ]);

        $this->setClaim($claim);
    }
}
