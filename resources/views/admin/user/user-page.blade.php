@extends('layouts.navbar')
@section('user-table')
<a href="/add-user">
    <span id="icon">add</span>
</a>
<div class="flex-1 p-8 md:mt-16 ">
    <div class="mx-auto container  rounded-sm">
        @if(session('status'))
        <div class="bg-emerald-600 border border-teal-400 text-white px-4 py-3 rounded relative my-3" role="alert"
            id="body-alert">
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
        @if(session('hapus'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative h-96" role="alert">
            <strong class="font-bold">{{ session('hapus')}}</strong>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </span>
        </div>
        @endif

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-center text-gray-500 bg-white">
                <thead class="text-xs text-gray-700 uppercase bg-slate-600">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gender
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Level
                        </th>
                        @can('edit user')
                        <th scope="col" class="px-6 py-3">
                            Edit
                        </th>
                        @endcan
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($dbuser as $user)
                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <img src="{{asset('storage/'. $user->profile_photo_path)}}" alt="" srcset="" class="w-10">
                        </th>
                        <td class="px-6 py-4">
                            {{$user->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->email}}
                        <td class="px-6 py-4">
                            {{$user->gender}}
                        </td>
                        <td class="px-6 py-4">
                            {{$user->level}}
                        </td>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2 justify-center items-center mr-3">
                                @can('edit user')
                                <a href="edit-user/{{$user->id}}" class="hover:text-green-600">Edit</a>
                                @endcan
                                @can('delete user')
                                <a href="delete-user/{{$user->id}}" class="hover:text-red-600">Delete</a>
                                @endcan
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- //paginate -->
        <!-- <div class="row"><div class="col-md-12"> </div> </div> -->
    </div>
</div>
@endsection