<span class="block w-full rounded-md shadow-sm">
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out']) }}>
        {{ $slot }}
    </button>
</span>


