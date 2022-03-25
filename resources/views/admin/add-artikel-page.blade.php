@extends('layouts.index')
@section('add-artikel')
<main>
    <div class="lg:py-6 bg-gray-100 mx-8 my-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="title p-2 bg-amber-300 my-3 w-32 rounded-md text-white text-center border-2 border-amber-300">
                ADD Artikel</div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 lg:p-0 md:p-0">
                <div class="flex flex-col sm:m-8">
                    <form method="POST" action="{{url('add-artikel')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-6">
                            <div class="col-span-6 my-3 sm:col-span-3">
                                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                                <select id="kategori" name="kategori" autocomplete="kategori-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($kategori as $data)
                                        <option value="{{$data->id_article}}">{{$data->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <div class="col-span-6 my-3 sm:col-span-3">
                                <label for="level" class="block text-sm font-medium text-gray-700">Sub Kategori</label>
                                <select id="level" name="submenu" autocomplete="sub-kategori"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($subkategori as $data_sub)
                                       <option value="{{$data_sub->id_sub_category}}">{{$data_sub->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('Username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group mb-6">
                            <label for="judul" class="form-label inline-block mb-2 text-gray-700">Judul</label>
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
                                id="judul" aria-describedby="judul" placeholder="Judul Artikel" name="Judul">
                            @error('Judul')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="form-group mb-6">
                            <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">Foto
                                Artikel </label>
                            <div class="flex">
                                <div class="mb-3 w-96">
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
                                        type="file" id="formFile" name="Image_Artikel">
                                </div>
                            </div>
                            @error('Image_Artikel')
                                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                  {{ $message }}
                                 </div>
                            @enderror
                        </div>
                        <div class="form-group mb-6">
                            <div class="mb-3 xl:w-full md:96">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label inline-block mb-2 text-gray-700">Isi Utama</label>
                        <textarea class="
                            form-control
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
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        " id="exampleFormControlTextarea1" rows="3" placeholder="Your message" name="Artikel_Utama"></textarea>
                            @error('Artikel_Utama')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                  {{ $message }}
                                 </div>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <div class="mb-3 xl:w-full md:96">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label inline-block mb-2 text-gray-700">Isi Artikel</label>
                                <textarea class="
                            form-control
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
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        " id="exampleFormControlTextarea2" rows="3" placeholder="Your message" name="Artikel_Body"></textarea>
                             @error('Artikel_Body')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                  {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group mb-6">
                            <label for="tagline" class="form-label inline-block mb-2 text-gray-700">Tagline</label>
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
                                id="tagline" aria-describedby="tagline" placeholder="Tagline" name="Tagline">
                            @error('Tagline')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                  {{ $message }}
                                 </div>
                            @enderror

                        </div>
                        <div class="form-group mb-6">
                            <label for="tag" class="form-label inline-block mb-2 text-gray-700">Tag</label>
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
                                id="tag" aria-describedby="tagline" placeholder="Tag" name="Tag">
                            @error('Tag')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                  {{ $message }}
                                 </div>
                            @enderror

                        </div>
                        <div class="form-group mb-6">
                            <label for="tempat" class="form-label inline-block mb-2 text-gray-700">Tempat</label>
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
                                id="tempat" aria-describedby="tempat" placeholder="Tempat" name="Tempat">
                            @error('Tempat')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                  {{ $message }}
                                 </div>
                            @enderror

                        </div>
                        <div class="form-group mb-6">
                            <label for="sumber-gambar" class="form-label inline-block mb-2 text-gray-700">Sumber gambar</label>
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
                                id="sumber-gambar" aria-describedby="sumber-gambar" placeholder="Sumber Gambar  " name="Sumber_Gambar">
                            @error('Sumber_Gambar')
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                  {{ $message }}
                                 </div>
                            @enderror

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