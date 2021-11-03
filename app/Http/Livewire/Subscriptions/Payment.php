<?php

namespace App\Http\Livewire\Subscriptions;

use App\Models\Plans;
use Illuminate\Http\Request;
use Livewire\Component;

class Payment extends Component
{
    public $data;
    public $name;
    protected $stripe;
    public $paymentmethod;



    protected  $rules= [
        'name' => 'required',
    ];

    function mount()
    {
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
    }


    public function render()
    {
        $data = ['intent' => auth()->user()->createSetupIntent()];
        return view('livewire.subscriptions.payment')->with($data)->extends('layouts.app');
    }

    public function paymentstore(Request $request, Plans $plan)
    {
        $this->validate();

        $plan = Plans::where('title', $request->plan->name)
        ->first();
        dd($plan);

        $request->user()->newSubscription('default', $plan->stripe_id) ->quantity(null)->create($request->token);

        return back();
    }
}
