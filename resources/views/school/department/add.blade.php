<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Department Create') }}
        </h2>
    </x-slot>

    <div class="py-12" align="center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-sm">
                
               <div class="p-12 text-gray-900">
                    <form action="{{route('department.store')}}" method="post">
                        @csrf
                        <input type="text" name="department_name" placeholder="Department Name" required=""><br><br>
                        <input type="submit" class="btn btn-primary submit-btn" value="ADD DEPARTMENT">
                      </form> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
