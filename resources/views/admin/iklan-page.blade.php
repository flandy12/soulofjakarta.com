@extends('layouts.index')
@section('iklan-table')
<main>
    <div class="max-w-7xl mx-auto my-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="border-b">
                                    <tr>
                                        <x-table.user>No</x-table.user>
                                        <x-table.user>Profile</x-table.user>
                                        <x-table.user>Name</x-table.user>
                                        <x-table.user>Email</x-table.user>
                                        <th scope="col" class="text-sm font-large text-gray-900 px-6 py-4 text-center">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-large text-gray-900">
                                            3</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Cell
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Cell
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Cell
                                        </td>
                                        <td class="flex justify-center">
                                            <div class="flex space-x-2 justify-center mr-3">
                                                <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                                            </div>
                                            <div class="flex space-x-2 justify-center">
                                                <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                                            </div>
                                    </tr>
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