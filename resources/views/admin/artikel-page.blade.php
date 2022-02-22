@extends('layouts.index')
@section('artikel-table')
<div class="icon">
    <a href="/add-artikel"><x-icon-add/></a>
</div>
<main>
<div class="lg:py-32 bg-gray-100 mx-8 my-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
     <!-- <a href="{{route('trash')}}"><div class="bg-red-500 p-2 my-2 w-28 rounded">Trash Artikel</div></a> -->
     @if(session('status'))
        <div class="bg-emerald-400 border border-teal-400 text-white px-4 py-3 rounded relative my-3" role="alert" id="body-alert">
            <strong class="font-bold">{{ session('status')}}</strong>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20" id="close">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </span>
        </div>
        @endif
        <div class="bg-white shadow-xl sm:rounded-lg">
            <div class="flex flex-col sm:m-8">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              
                    <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto h-3/6">
                           
                            <table class="w-full h-3/6">
                                <thead class="border-b">
                                    <tr>
                                        <x-table.user>No</x-table.user>
                                        <x-table.user>Title</x-table.user>
                                        <!-- <x-table.user>Article source</x-table.user> -->
                                        <x-table.user>Post</x-table.user>
                                     
                                        <!-- <x-table.user>Status</x-table.user> -->
                                        <th scope="col" class="text-sm font-large text-gray-900 px-6 py-4 text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach($dbartikel as $artikel)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-large text-gray-900">
                                            {{$i++}}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$artikel->judul}}
                                        </td>
                                        <!-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Cell
                                        </td> -->
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$artikel->tanggal}}
                                        </td>
                                      
                                        <!-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <button type="button"
                                                class="inline-block px-6 py-2.5 bg-red-300 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Hold</button>
                                        </td> -->
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <div class="flex space-x-2 justify-center items-center mr-3">
                                               <a href="{{url('edit-artikel/'.$artikel->id)}}">
                                                    <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                                               </a>
                                               <a href="{{url('delete-artikel/'.$artikel->id)}}">
                                               <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                                               </a>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection