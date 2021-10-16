
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

<section class="overflow-hidden text-gray-700 body-font">
    <div class="container flex flex-wrap px-5 py-24 mx-auto">
      <div class="hidden mt-48 lg:w-1/4 lg:block">
        <div class="mt-px overflow-hidden border-t border-b border-l border-gray-300 rounded-tl-lg rounded-bl-lg">
          <p class="flex items-center justify-start h-12 px-4 -mt-px text-center text-gray-900 bg-gray-100">Fingerstache disrupt</p>
          <p class="flex items-center justify-start h-12 px-4 text-center text-gray-900">Franzen hashtag</p>
          <p class="flex items-center justify-start h-12 px-4 text-center text-gray-900 bg-gray-100">Tilde art party</p>
          <p class="flex items-center justify-start h-12 px-4 text-center text-gray-900">Banh mi cornhole</p>
          <p class="flex items-center justify-start h-12 px-4 text-center text-gray-900 bg-gray-100">Waistcoat squid hexagon</p>
          <p class="flex items-center justify-start h-12 px-4 text-center text-gray-900">Pinterest occupy authentic</p>
          <p class="flex items-center justify-start h-12 px-4 text-center text-gray-900 bg-gray-100">Brooklyn helvetica</p>
          <p class="flex items-center justify-start h-12 px-4 text-center text-gray-900">Long Feature Two</p>
          <p class="flex items-center justify-start h-12 px-4 text-center text-gray-900 bg-gray-100">Feature One</p>
        </div>
      </div>
      <div class="flex flex-wrap w-full border-gray-300 rounded-lg lg:w-3/4 lg:border">
        <div class="w-full mb-10 border-2 border-gray-300 rounded-lg lg:w-1/3 lg:mt-px lg:mb-0 lg:border-none lg:rounded-none">
          <div class="flex flex-col items-center justify-center h-48 px-2 text-center">
            <h3 class="tracking-widest">START</h3>
            <h2 class="mt-2 mb-4 text-5xl font-medium leading-none text-gray-900">Free</h2>
            <span class="text-sm text-gray-600">Next 3 months</span>
          </div>
          <p class="flex items-center justify-center h-12 px-2 -mt-px text-center text-gray-600 bg-gray-100 border-t border-gray-300">Schlitz single-origin</p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 px-6 leading-relaxed text-center text-gray-600">Feature</p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <div class="p-6 text-center border-t border-gray-300 rounded-bl-lg">
            <button class="flex items-center w-full px-4 py-2 mt-auto text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Button
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="mt-3 text-xs text-gray-500">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="relative w-full mb-10 border-2 border-indigo-500 rounded-lg lg:w-1/3 lg:-mt-px lg:mb-0">
          <span class="absolute top-0 right-0 px-3 py-1 text-xs tracking-widest text-white bg-indigo-500 rounded-bl">POPULAR</span>
          <div class="flex flex-col items-center justify-center h-48 px-2 text-center">
            <h3 class="tracking-widest">PRO</h3>
            <h2 class="flex items-center justify-center mt-2 mb-4 text-5xl font-medium leading-none text-gray-900">$38
              <span class="ml-1 text-base text-gray-600">/mo</span>
            </h2>
            <span class="text-sm text-gray-600">Charging $456 per year</span>
          </div>
          <p class="flex items-center justify-center h-12 px-2 -mt-px text-center text-gray-600 bg-gray-100 border-t border-gray-300">Schlitz single-origin</p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 leading-relaxed text-center text-gray-600">Feature</p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <div class="p-6 text-center border-t border-gray-300">
            <button class="flex items-center w-full px-4 py-2 mt-auto text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Button
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="mt-3 text-xs text-gray-500">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="w-full border-2 border-gray-300 rounded-lg lg:w-1/3 lg:mt-px lg:border-none lg:rounded-none">
          <div class="flex flex-col items-center justify-center h-48 px-2 text-center">
            <h3 class="tracking-widest">BUSINESS</h3>
            <h2 class="flex items-center justify-center mt-2 mb-4 text-5xl font-medium leading-none text-gray-900">$54
              <span class="ml-1 text-base text-gray-600">/mo</span>
            </h2>
            <span class="text-sm text-gray-600">Charging $648 per year</span>
          </div>
          <p class="flex items-center justify-center h-12 px-2 -mt-px text-center text-gray-600 bg-gray-100 border-t border-gray-300">Schlitz single-origin</p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 leading-relaxed text-center text-gray-600">Feature</p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 text-white bg-gray-500 rounded-full">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="flex items-center justify-center h-12 text-center text-gray-600 bg-gray-100">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <div class="p-6 text-center border-t border-gray-300">
            <button class="flex items-center w-full px-4 py-2 mt-auto text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Button
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="mt-3 text-xs text-gray-500"> Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
      </div>
    </div>
</section>
