<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CRUD OPERATION</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

            <style>
                table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
                }
                
                td, th {
                  border: 1px solid #dddddd;
                  text-align: center;
                  padding: 8px;
                }
                
                tr:nth-child(even) {
                  background-color: #dddddd;
                }

                .btn {
                  display: inline-block;
                  font-weight: 400;
                  color: #6c757d;
                  text-align: center;
                  vertical-align: middle;
                  cursor: pointer;
                  -webkit-user-select: none;
                 -ms-user-select: none;
                  user-select: none;
                  background-color: transparent;
                  border: 1px solid transparent;
                  padding: 0.45rem 0.9rem;
                  font-size: .875rem;
                  line-height: 1.5;
                  border-radius: 0.15rem;
                  transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                }

                .btn-primary {
                    box-shadow: 0 0 0 rgba(102,88,221,.5);
                         }
               .btn-primary {
                      color: #fff;
                      background-color: #6658dd;
                      border-color: #6658dd;
                       }

                       .btn-danger {
                          box-shadow: 0 0 0 rgba(241,85,108,.5);
                                    }
                      .btn-danger {
                             color: #fff;
                             background-color: #f1556c;
                             border-color: #f1556c;
                            }

                            select {
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e);
    background-position: right 0.5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 6.5rem;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}

                            
                </style>
                
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.fn')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
              
                
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                

                <div class="p-12 text-gray-900">
                    <div class="p-4 text-gray-900" align="right">
                        <form action="" method="get">
                            <input type="search" name="keyword" placeholder="Search"/>
                            <button class="btn btn-primary">Search</button>
                        </form>
                    </div>

                    <table >
                        <tr>
                          <th>Name</th>
                          <th>Department Name</th>
                          <th>Result</th>
                        </tr>
                        @foreach ($students as $key=>$st)
                        <tr>
                          <td >{{$st->name}}</td>
                          <td >{{$st->department_name}}</td>
                          <td >GPA {{$st->gpa}}</td>
                        </tr>
                        @endforeach
                      </table>

                </div>
            </div>
        </div>
    </div>
                
            </main>
        </div>
    </body>
</html>