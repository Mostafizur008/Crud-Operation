<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 text-gray-900">
    
                    
                        <div class="card">
    
                        <form action="{{route('student.store')}}" method="post" >
                                @csrf 
    
                            <div class="card-body">
    
                           
                                <div class="form-row">
    
                                    <div class="form-group col-md-4 mb-0" align="center">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"  placeholder="Student Name">
                                        </div>
                                    </div> <br/>
    
    
                                    <div class="form-group col-md-4 mb-0" align="center">
                                        <select name="department_id" class="form-control form select2">

                                            <option value="" selected="" disabled="">Chose One</option>
                                        @foreach ($department as $at)
     
                                        <option value="{{$at->id}}">{{$at->department_name}}</option>
                                            
                                        @endforeach 
                                        </select>

                                        </div>
                                    </div>
                          <br/>
                          <div class="form-group col-md-6 mb-0" align="center">
                            <div class="form-group">
                                <input type="text" name="batch_name" class="form-control"  placeholder="Batch Name">
                            </div>
                        </div> <br/>
                                
                       
                                </div>
                            
                                <div class="form-footer mt-4" align="center">
                                    <input class="btn btn-primary submit-btn" type="submit" value="ADD STUDENT">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-md-12 col-xl-1">
                        <div class="card">
                           
                        </div>
                     
                        </div>
    
    
        </div>
    </div>


</x-app-layout>