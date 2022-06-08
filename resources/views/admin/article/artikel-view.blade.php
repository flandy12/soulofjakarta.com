@extends('layouts.navbar')
@section('add-artikel')

<div class="lg:py-6 w-3/4 bg-gray-100 mx-8 my-3">
    <div class="w-full">
        <div class="title p-2 my-3 w-32 rounded-md text-black text-center border-2 border-amber-300">
            Edit Artikel</div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 lg:p-0 md:p-0">
            <div class="w-full">
                <form method="POST" action="{{url('update-artikel/'.$dbartikel->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-6">
                        <div class="col-span-6 my-3 sm:col-span-3">
                            <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select id="kategori" name="kategori" autocomplete="kategori-name"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                @foreach($categorys as $category)
                                <option value="{{ $category->id_article }}"
                                    {{($dbartikel->id_category === $category->id_article ? 'selected' : '')}}>
                                    {{$category->nama}}</option>
                                @endforeach

                            </select>
                        </div>

                        @error('Username')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group mb-6">
                            <div class="col-span-6 my-3 sm:col-span-3">
                                <label for="level" class="block text-sm font-medium text-gray-700">Sub
                                    Kategori</label>
                                <select id="kategori" name="subkategori" autocomplete="kategori-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                    @foreach($subkategoris as $subkategori)
                                    <option value="{{ $subkategori->id_sub_category }}"
                                        {{($dbartikel->id_sub_category === $subkategori->id_sub_category ? 'selected' : '')}}>
                                        {{$subkategori->nama}}</option>
                                    @endforeach

                                </select>
                            </div>


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
                                id="judul" aria-describedby="judul" placeholder="Judul Artikel" name="judul"
                                value="{{$dbartikel->judul}}">
                            @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
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
                        " id="exampleFormControlTextarea1" rows="3" placeholder="Your message" name="artikel_main"
                                    value=>{{$dbartikel->isiutama}}</textarea>
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
                        " id="exampleFormControlTextarea2" rows="3" placeholder="Your message" name="artikel_isi"
                                    value=>{{$dbartikel->isi}}></textarea>
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
                                id="tagline" aria-describedby="tagline" placeholder="Tagline" name="tagline"
                                value="{{$dbartikel->tagline}}">
                            @error('tagline')
                            <div class="alert alert-danger">{{ $message }}</div>
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
                                id="tag" aria-describedby="tagline" placeholder="Tag" name="tag"
                                value="{{$dbartikel->tag}}">
                            @error('tag')
                            <div class="alert alert-danger">{{ $message }}</div>
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
                                id="tempat" aria-describedby="tempat" placeholder="Lokasi" name="tempat"
                                value="{{$dbartikel->tempat}}">
                            @error('tempat')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group mb-6">
                            <label for="sumber-gambar" class="form-label inline-block mb-2 text-gray-700">Sumber
                                gambar</label>
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
                                id="sumber-gambar" aria-describedby="sumber-gambar" placeholder="Sumber gambar"
                                name="Sumber" value="{{$dbartikel->sumbergambar}}">
                            @error('Born')
                            <div class="alert alert-danger">{{ $message }}</div>
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
@endsection