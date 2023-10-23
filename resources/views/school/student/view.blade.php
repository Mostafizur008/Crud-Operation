<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students View') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                

                <div class="p-12 text-gray-900">
                    <div class="p-4 text-gray-900" align="left">
                        <form action="" method="get">
                            <input type="search" name="keyword" placeholder="Search"/>
                            <button class="btn btn-primary">Search</button>
                        </form>
                    </div>

                    <div class="p-4 text-gray-900" align="right">
                        <a href="{{route('student.add')}}" class="btn btn-primary" >Add Student</a>
                    </div>

                    <table >
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Department Name</th>
                          <th>Batch Name</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($students as $key=>$st)
                        <tr>
                          <td >#{{$key+1}}</td>
                          <td >{{$st->name}}</td>
                          <td >{{$st->departmentName}}</td>
                          <td >{{$st->batch_name}}</td>
                          <td >
                            <a href="{{ route('student.edit',$st->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('student.delete',$st->id) }}" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>




