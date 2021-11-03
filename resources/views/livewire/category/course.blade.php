


<section class="container px-6 mx-auto my-10">
    <div class="flex flex-col items-center justify-center px-4 py-6 mt-6 text-gray-100 bg-indigo-700 rounded-lg sm:py-6 lg:py-10 sm:px-6 lg:px-12">
            <p class="w-12 h-12 text-red-300 ">{!! $category->icon !!}</p>
            <h1 class="mb-2 text-2xl font-bold leading-snug uppercase sm:text-6xl text-secondary">{{ $category->name }}</h1>
            <p class="mb-6 sm:text-lg lg:pr-12">{{ $category->description }}</p>
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
