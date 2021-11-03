<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Checkout page') }}</div>

                <div class="card-body">
                    <form id="payment-form" wire:submit.prevent="paymentstore" method="POST">
                        @csrf
                        <input type="hidden" name="lookup_key" value="price_1J5ZrLBi0TS7ftGzUyIF8SEU" />

                        <label class="block">
                            <span>Card holder name</span>
                            <input id="card-holder-name" placeholder="Jane Doe">
                        </label>

                        <label class="block">
                            <span>Your card</span>
                            <!-- Stripe Elements Placeholder -->
                            <div wire:ignore id="card-element"></div>
                            <div id="error-wrapper"></div>
                        </label>

                        <button type="submit" id="card-button" data-secret="{{ $intent->client_secret }}">
                            Register card
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>

            const stripe = Stripe('{{config('services.stripe.key')}}')
            const elements = stripe.elements()
            const cardElement = elements.create('card')

            cardElement.mount('#card-element')

            const cardHolderName = document.getElementById('card-holder-name')
            const cardButton = document.getElementById('card-button')
            const clientSecret = cardButton.dataset.secret

            cardButton.addEventListener('click', async (e) => {
                const {setupIntent, error} = await stripe.confirmCardSetup(clientSecret, {
                    payment_method: {
                        card: cardElement, billing_details: {name: cardHolderName.value},
                    },
                })

                if (error) {
                    let errorWrapper = document.getElementById('error-wrapper')
                    errorWrapper.textContent = error.error
                    console.info(error)
                } else {
                    console.info(setupIntent.payment_method)
                    @this.set('paymentmethod', setupIntent.payment_method)
                }
            })

    </script>
@endpush
