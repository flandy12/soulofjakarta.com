@extends('layouts.index')
@section('artikel-table')
<div class="icon">
    <a href="/add-artikel"><x-icon-add/></a>
</div>
<main>
<div class="lg:py-32 bg-gray-100 mx-8 my-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col sm:m-8">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto h-3/6">
                            <table class="w-full h-3/6">
                                <thead class="border-b">
                                    <tr>
                                        <x-table.user>No</x-table.user>
                                        <x-table.user>Title</x-table.user>
                                        <x-table.user>Article source</x-table.user>
                                        <x-table.user>Post</x-table.user>
                                        <x-table.user>Made By</x-table.user>
                                        <x-table.user>Status</x-table.user>
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
                                            Cell
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Cell
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Cell
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Cell
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <button type="button"
                                                class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Hold</button>
                                        </td>
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
    </div>
</main>
@endsection