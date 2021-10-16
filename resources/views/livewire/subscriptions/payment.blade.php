<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Checkout page') }}</div>

                <div class="card-body">
                    <form id="payment-form" wire:submit.prevent="paymentstore" method="POST">
                        @csrf
                        <input type="hidden" name="plan" id="plan" wire::model='plan' value="{{ request('plan') }}">
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" name="name" id="card-holder-name" class="form-control" value="{{ request('title') }}" wire:model='name' placeholder="Name on the card">
                        </div>
                        <div class="form-group">
                            <label for="">Card details</label>
                            <div id="card-element"></div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100" id="card-button" data-secret="{{ $intent->client_secret }}">Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe('{{ config('STRIPE_KEY') }}');

    const elements = stripe.elements()
    const cardElement = elements.create('card')

    cardElement.mount('#card-element')

    const form = document.getElementById('payment-form')
    const cardBtn = document.getElementById('card-button')
    const cardHolderName = document.getElementById('card-holder-name')

    form.addEventListener('submit', async (e) => {
        e.preventDefault()

        cardBtn.disabled = true
        const { setupIntent, error } = await stripe.confirmCardSetup(
            cardBtn.dataset.secret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: cardHolderName.value
                    }
                }
            }
        )

        if(error) {
            cardBtn.disable = false
        } else {
            let token = document.createElement('input')

            token.setAttribute('type', 'hidden')
            token.setAttribute('name', 'token')
            token.setAttribute('value', setupIntent.payment_method)

            form.appendChild(token)

            form.submit();
        }
    })
</script>
