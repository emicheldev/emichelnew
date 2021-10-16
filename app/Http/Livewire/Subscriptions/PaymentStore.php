<?php

namespace App\Http\Livewire\Subscriptions;

use App\Models\Plans;
use Livewire\Component;
use Illuminate\Http\Request;



class PaymentStore extends Component
{
    public $card_na;
    public $expiry_month;
    public $expiry_year;
    public $cvv;

    protected  $rules= [
        'card_no' => 'required',
        'expiry_month' => 'required',
        'expiry_year' => 'required',
        'cvv' => 'required',
    ];

    public function render(Request $request, Plans $plan)
    {


        $this->validate();

        $plan = Plans::where('identifier', $request->plan)
        ->orWhere('identifier', 'basic')
        ->first();
        dd($plan);

        $request->user()->newSubscription('default', $plan->stripe_id) ->quantity(null)->create($request->token);

        return back();
    }
}
