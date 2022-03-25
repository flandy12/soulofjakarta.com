@extends('layouts.navbar')
@section('body-dashboard')
<main>
    <div class="lg:py-6 bg-gray-100 mx-8 my-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="title p-2 bg-amber-300 my-3 w-32 rounded-md text-white text-center border-2 border-amber-300">
                ADD USER</div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 lg:p-0 md:p-0">
                <div class="flex flex-col sm:m-8">
                    <form method="POST" action="{{url('add-user')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-6">
                            <label for="Username" class="form-label inline-block mb-2 text-gray-700">Username</label>
                            <input type="text" class="form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="Username" aria-describedby="emailHelp" placeholder="Username" name="username">
                            @error('username')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="form-group mb-6">
                            <div class="col-span-6 my-3 sm:col-span-3">
                                <label for="kategori" class="block text-sm font-medium text-gray-700">Role</label>
                                <select id="kategori" name="kategori" autocomplete="kategori-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($kategori as $data)
                                        <option value="{{$data->id_article}}">{{$data->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <label for="FullName" class="form-label inline-block mb-2 text-gray-700">Nama
                                Lengkap</label>
                            <input type="text" class="form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="FullName" aria-describedby="emailHelp" placeholder="Nama Lengkap" name="name">
                            @error('name')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="form-group mb-6">
                            <label for="Date" class="form-label inline-block mb-2 text-gray-700">Tanggal
                                Lahir</label>
                            <input type="date" class="form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="Date" aria-describedby="emailHelp" placeholder="Enter Name" name="born">
                            @error('born')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="form-group mb-6">
                            <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Email
                                address</label>
                            <input type="email" class="form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
                                name="email">
                            <small id="emailHelp" class="block mt-1 text-xs text-gray-600">We'll never share your email
                                with anyone
                                else.</small>
                            @error('email')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-6">
                            <label for="exampleInputPassword1"
                                class="form-label inline-block mb-2 text-gray-700">Password</label>
                            <input type="password" class="form-control block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleInputPassword1" placeholder="Password" name="password">
                            @error('password')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-6">
                            <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">Jenis
                                Kelamin</label>
                            <div class="flex">
                                <div class="form-check form-check-inline mr-3">
                                    <input
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox" id="inlineCheckbox1" value="Pria" name="gender">
                                    <label class="form-check-label inline-block text-gray-800"
                                        for="inlineCheckbox1">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox" id="inlineCheckbox2" value="Wanita" name="gender">
                                    <label class="form-check-label inline-block text-gray-800"
                                        for="inlineCheckbox2">Wanita</label>
                                </div>

                            </div>
                            @error('gender')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-6">
                            <label for="exampleInputPassword1"
                                class="form-label inline-block mb-2 text-gray-700">Profile </label>
                            <div class="block">
                                <div class="mb-3 w-96 flex">
                                    <input class="form-control
                                    block
                                    w-full
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        type="file" id="formFile" name="profile_photo_path">
                                </div>
                                @error('profile_photo_path')
                                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="
                            px-6
                            py-2.5
                            bg-blue-600
                            text-white
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            rounded
                            shadow-md
                            hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-blue-800 active:shadow-lg
                            transition
                            duration-150
                            ease-in-out">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection