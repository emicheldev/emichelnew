<!--Subscribe-->
<div class="container mx-auto px-4">
  <div class="font-sans bg-indigo-700 rounded-lg shadow-md text-center text-white">
    <div class=" bg-cover bg-right bg-no-repeat py-10" style="background-image: url(images/bg_newletter.svg);">
      <h2 class="font-bold break-normal text-xl md:text-3xl">
        Abonnez-vous à ma newsletter 👨‍💻
      </h2>
      <h3
        class="font-light break-normal text-sm md:text-base"
      >
      Recevez les derniers messages directement dans votre boîte de réception
      </h3>
      <div class="w-full text-center pt-4">
        <form action="https://buttondown.email/api/emails/embed-subscribe/emichel" 
        method="post"
        target="popupwindow"
        onsubmit="window.open('https://buttondown.email/emichel', 'popupwindow')"
        >
          <div
            class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center"
          >
            <input
              id="bd-email"
              type="email"
              name="email"
              placeholder="youremail@example.com"
              class="flex-1 mt-4 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none"
            />
            <input type="hidden" value="1" name="embed"></input>
            <button
              type="submit"
              class="flex-1 mt-4 block md:inline-block appearance-none bg-teal-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-teal-400"
            >
              S'abonner
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Subscribe-->