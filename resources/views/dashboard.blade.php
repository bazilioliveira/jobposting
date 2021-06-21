<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="card">
                        <div class="card-header">
                            Job Title
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is the description for the job posting.</p>
                            <p class="card-text">City / Salary $$$</p>
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
