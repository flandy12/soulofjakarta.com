<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi {{Auth::user()->name}} !
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid content-center">
                <div class="grid grid-cols-3 gap-4 h-32">
                    <div class="bg-orange-400 text-center items-center rounded-md grid">
                        <h1 class="text-4xl">{{$dbuser->count()}}</h1>
                        <p>USER</p>
                    </div>
                    <div class="bg-emerald-300 text-center items-center rounded-md grid">
                        <h1 class="text-4xl">{{$dbartikel->count()}}</h1>
                         <p>ARTICLE</p>
                    </div>
                    <div class="bg-purple-500 text-center rounded-md ">IKLAN</div>
                </div>
                <div class="grid grid-cols-2 gap-4  mt-5 h-96">
                    <div class="bg-gradient-to-r from-orange-300 to-rose-300 text-center items-center rounded-md">
                        <table class="grid ml-2 mr-2 justify-center mt-11">
                            <thead class="mt-10">
                                <tr class="grid grid-cols-3 ">
                                    <th scope="col"
                                        class="text-sm font-large text-gray-900 px-6 py-4 text-center username">
                                        Username
                                    </th>
                                    <th scope="col"
                                        class="gender text-sm font-large text-gray-900 px-6 py-4 text-center email">
                                        Email
                                    </th>

                                    <th scope="col" class="text-sm font-large text-gray-900 px-6 py-4 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white rounded-md mx-7">
                                @php($i = 1)
                                @foreach($dbuser as $user)
                                <tr class="grid grid-cols-3 ">
                                    <td class="col image text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <img src="{{asset('storage/'.$user->profile_photo_path)}}"
                                            class="w-14  h-14 rounded-full " /></td>
                                    </td>

                                    <td class="col text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap email flex items-center">
                                        {{$user->email}}
                                    </td>

                                    <td class="col text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex items-center justify-center">
                                        <div class="flex space-x-2 justify-center items-center mr-3">
                                            <a href="edit-user/{{$user->id}}">
                                                <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                                            </a>
                                            <!-- <a href="delete-user/{{$user->id}}">
                                                <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                                            </a> -->
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="bg-gradient-to-b from-sky-400 to-sky-200 rounded-md ">
                        <table class="grid ml-2 mr-2 justify-center mt-11">
                            <thead class="">
                                <tr class="grid grid-cols-3 justify-items-center">
                                    <x-table.user>No</x-table.user>
                                    <x-table.user>Title</x-table.user>
                                    <!-- <x-table.user>Article source</x-table.user> -->
                                    <!-- <x-table.user>Post</x-table.user> -->

                                    <!-- <x-table.user>Status</x-table.user> -->
                                    <th scope="col" class="text-sm font-large text-gray-900 px-6 py-4 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($dbartikel as $artikel)
                                <tr class="grid grid-cols-3 justify-items-center bg-white rounded-md mt-2 py-2">
                                    <td class="whitespace-nowrap text-sm font-large text-gray-900 flex items-center">
                                        {{$i++}}</td>
                                    <td class="text-sm text-gray-900 font-light whitespace-nowrap flex items-center">
                                        {{substr($artikel->judul,0,50)}}
                                    </td>
                                    <!-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Cell
                                            </td> -->
                                    <!-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{$artikel->tanggal}}
                                    </td> -->
                                    <td class="text-sm text-gray-900 font-light whitespace-nowrap flex items-center">
                                        <div class="flex space-x-2 justify-center items-center mr-3">
                                            <a href="{{url('edit-artikel/'.$artikel->id)}}">
                                                <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                                            </a>

                                            <!-- <a href="{{url('/delete-artikel/'.$artikel->id)}}">
                                                <button type="button"
                                                    class="inline-block btn-hps px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                                    data-id="{{$artikel->id}}">Delete
                                                </button>
                                            </a> -->

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
</x-app-layout>