
<section class="px-6 py-5 bg-blue-100 border-b border-blue-500 h-36" >
    <div class="flex justify-end max-w-6xl px-5 mx-auto md:flex">
            <div class="w-full md:w-1/2">
                <div class="max-w-lg">
                    <h1 class="text-xl font-black text-blue-600 uppercase md:text-2xl">{{ $category->name }}</h1>
                    <p class="text-base text-gray-600 ">
                        {{ $category->description }}
                    </p>
                </div>
            </div>
            <div class="flex justify-end mt-6 md:mt-0 md:w-1/2">
                <p class="h-28 w-28">{!! $category->icon !!}</p>
            </div>
    </div>
</section>

<section class="text-gray-700 body-font">
    <div class="max-w-6xl px-5 py-10 mx-auto ">
      <div class="-my-8">
        <div class="flex flex-wrap py-8 text-sm">
          <div class="w-full">
            <div class="flex flex-wrap gap-y-8">
              @foreach ($courses as $course )
                @include('includes.course_card')

              @endforeach

            </div>

          </div>
        </div>
      </div>
    </div>
</section>
