<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Department Update') }}
        </h2>
    </x-slot>

    <div class="py-12" align="center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-sm">
                
               <div class="p-12 text-gray-900">
                    <form action="{{ route('department.update',$editData->id) }}" method="post">
                        @csrf
                        <input type="text" name="department_name" placeholder="Department Name" value="{{ $editData->department_name }}"><br><br>
                        <input type="submit" class="btn btn-primary submit-btn" value="UPDATE DEPARTMENT">
                      </form> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
