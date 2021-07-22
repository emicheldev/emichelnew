
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subscription Plans') }}</div>

                <div class="card-body">
                    @foreach($plans as $plan)
                        <div>
                            <a href="{{ route('payments', ['plan' => $plan->identifier]) }}">{{$plan->title}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
