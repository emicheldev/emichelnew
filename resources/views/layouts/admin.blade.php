@extends('layouts.base')

@section('body')

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            @include('includes.admin.sidebar')
            
            <div class="flex-1 flex flex-col overflow-hidden">
                @include('includes.admin.header')

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
@endsection