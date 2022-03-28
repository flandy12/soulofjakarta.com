@extends('layouts.navbar')
@section('artikel-table')
<div class="icon">
    <a href="/add-artikel">
        <x-icon-add /></a>
</div>
<div class="flex-1 p-10 mt-16 ">
    <div class="mx-auto container  rounded-sm">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <!-- <a href="{{route('trash')}}"><div class="bg-red-500 p-2 my-2 w-28 rounded">Trash Artikel</div></a> -->
                @if(session('status'))
                <div class="bg-emerald-400 border border-teal-400 text-white px-4 py-3 rounded relative my-3"
                    role="alert" id="body-alert">
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
                <div class="success-delete" id="success-delete"></div>
                <div class="bg-white h-full shadow-xl sm:rounded-lg">
                    <div class="flex flex-col sm:m-8">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">

                            <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
                                <div class="overflow-x-auto h-3/6">

                                    <table class="w-full text-sm text-center text-gray-500 bg-white h-3/6">
                                        <thead class="border-b ">
                                            <tr>
                                                <x-table.user>No</x-table.user>
                                                <x-table.user>Title</x-table.user>
                                                <!-- <x-table.user>Article source</x-table.user> -->
                                                <x-table.user>Post</x-table.user>

                                                <!-- <x-table.user>Status</x-table.user> -->
                                                <th scope="col"
                                                    class="text-sm font-large px-6 py-4 text-center">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach($dbartikel as $artikel)
                                            <tr class="border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-large text-gray-900">
                                                    {{$i++}}</td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{substr($artikel->judul,0,50)}}
                                                </td>
                                                <!-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Cell
                                            </td> -->
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{$artikel->tanggal}}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    <div class="flex space-x-2 justify-center items-center mr-3">
                                                        <a href="{{url('edit-artikel/'.$artikel->id)}}">
                                                            <button type="button"
                                                                class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                                                        </a>

                                                        <a href="{{url('/delete-artikel/'.$artikel->id)}}">
                                                               <button type="button"
                                                                    class="inline-block btn-hps px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                                                    >Delete
                                                                </button>
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
            </div>
           
            <div class="w-full">
                <!-- category -->
                <div class="category">
                    <div class="success-delete" id="success-delete"></div>

                    <div class="bg-white shadow-xl sm:rounded-lg  lg:py-3 ">
                        <div class="flex flex-col sm:m-8">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
                                    <div class="overflow-x-auto text-lg lg:text-lg sm:text-xs p-3">
                                        <form class="" method="POST" action="{{url('/add/category')}}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid mb-6">
                                                <div>
                                                    <label
                                                        class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        Category
                                                    </label>
                                                </div>
                                                <div class="w-full">
                                                    <input
                                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                                        id="inline-full-name" type="text" name="nama_category">
                                                        @error('nama_category')
                                                        <p class="text-red-500 font-bold">{{ $message }}</p>    
                                                        @enderror
                                                </div>
                                            </div>
                                            @role('Administrator')
                                            <div class="md:flex md:items-center">
                                                <div class="md:w-full">
                                                    <button
                                                        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded w-full sm:text-xs"
                                                        type="submit">
                                                        Add Catergory
                                                    </button>
                                                </div>
                                            </div>
                                            @endrole
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- sub category -->
                <div class="sub-category">
                    <div class="success-delete" id="success-delete"></div>

                    <div class="bg-white shadow-xl sm:rounded-lg  lg:py-3 my-7">
                        <div class="flex flex-col sm:m-8">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
                                    <div class="overflow-x-auto text-lg lg:text-lg block sm:text-xs p-3">
                                        <form class="" method="POST" action="{{url('/add/subcategory')}}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid mb-6">
                                                <div class="">
                                                    <label
                                                        class="block text-gray-500 md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        Sub Category
                                                    </label>
                                                </div>
                                                <div>
                                                    <input
                                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                                        id="inline-full-name" type="text" name="nama">
                                                    @error('nama')
                                                    <p class="text-red-500 font-bold">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                            </div>
                                            @role('Administrator')
                                            <div class="md:flex md:items-center">
                                                <div class="md:w-full">
                                                    <button
                                                        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded w-full sm:text-xs"
                                                        type="submit">
                                                        Add Sub Category
                                                    </button>
                                                </div>
                                            </div>
                                            @endrole
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection