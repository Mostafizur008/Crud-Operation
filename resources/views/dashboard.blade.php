<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Department View') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                

                <div class="p-12 text-gray-900">

                    <div class="p-4 text-gray-900" align="right">
                        <a href="{{route('department.add')}}" class="btn btn-primary" >Add Department</a>
                    </div>

                    <table >
                        <tr>
                          <th>ID</th>
                          <th>Department</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($allData as $key=>$dp)
                        <tr>
                          <td >#{{$key+1}}</td>
                          <td >{{ $dp->department_name }}</td>
                          <td >
                            <a href="{{ route('department.edit',$dp->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('department.delete',$dp->id) }}" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
