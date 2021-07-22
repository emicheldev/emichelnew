@extends('layouts.base')

@section('body')

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            @include('includes.admin.sidebar')
            
            <div class="flex flex-col flex-1 overflow-hidden">
                @include('includes.admin.header')

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container px-6 py-8 mx-auto">
                        @if (session()->has('success'))
                            <div class="p-4 text-green-600 bg-green-300">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="p-4 text-red-600 bg-red-300">
                                {{Session::get('error')}}
                            </div>
                        @endif
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
@endsection