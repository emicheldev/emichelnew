<a href=" {{ route('course_show',$course->slug) }} ">
    <div class="flex flex-col w-full px-2 sm:w-1/3 md:w-1/4 ">
        <img loading="lazy" class="w-full rounded-lg" src="{{ $course->image }}" alt="{{ $course->title }}">
        <span class="mt-2 text-sm font-bold text-gray-900 ">{{ $course->title }}</span>
        <div class="flex items-center text-xs">
        <div class="flex items-center mr-4 ">
            <svg width="13" height="14" viewBox="0 0 13 14" class="mr-2 "><path class="fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path></svg>
            <a class="" href=" {{ route('course_show',$course->slug) }} ">{{$course->episodes->count()}} Leçons </a>
        </div>
        <div class="flex items-center expanded-card-meta-length">
            <svg width="13" height="13" viewBox="0 0 13 13" class="mr-2 "><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path></svg>
            <span>{{ convertToHoursMins($course->episodes->sum('duration')) }}</span>
        </div>
        </div>
    </div>
</a>
