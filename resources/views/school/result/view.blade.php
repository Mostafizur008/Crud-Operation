<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Result View') }}
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
                        <a href="{{route('result.add')}}" class="btn btn-primary" >Add Result</a>
                    </div>

                    <table >
                        <tr>
                          <th>ID</th>
                          <th>Student Name</th>
                          <th>Result</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($results as $key=>$st)
                        <tr>
                          <td >#{{$key+1}}</td>
                          <td >{{$st->studentName}}</td>
                          <td >GPA {{$st->gpa}}</td>
                          <td >{{$st->date}}</td>
                          <td >
                            <a href="{{ route('result.edit',$st->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('result.delete',$st->id) }}" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
