@props(['status'])

@if ($status=='1')
<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
    Active
</span>
@else

<span class="text-xs relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
    <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
    Desactive
</span>
@endif
