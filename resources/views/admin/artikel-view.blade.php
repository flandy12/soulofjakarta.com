@extends('layouts.index')
@section('add-artikel')
<main>
    <div class="lg:py-6 bg-gray-100 mx-8 my-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="title p-2 bg-amber-300 my-3 w-32 rounded-md text-white text-center border-2 border-amber-300">
                ADD Artikel</div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 lg:p-0 md:p-0">
                <div class="flex flex-col sm:m-8">
                    <form method="POST" action="{{url('add-artikel')}}" enctype="multipart/form-dbartikel">
                        @csrf
                        <div class="form-group mb-6">
                            <div class="col-span-6 my-3 sm:col-span-3">
                                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                                <select id="kategori" name="kategori" autocomplete="kategori-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                       @if($dbartikel->idartikelpart === 1){
                                        <option value="{{$dbartikel->idartikelpart}}" selected>Event</option>
                                        <option value="{{$dbartikel->idartikelpart + 1}} " >Lifestyle</option>
                                       }
                                       @else
                                       <option value="{{$dbartikel->idartikelpart}}" selected>Lifestyle</option>
                                       <option value="{{$dbartikel->idartikelpart -1}}" >Event</option>
                                       @endif
                                </select>
                            </div>
                            @error('Username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group mb-6">
                            <div class="col-span-6 my-3 sm:col-span-3">
                                <label for="level" class="block text-sm font-medium text-gray-700">Sub Kategori</label>
                                <select id="level" name="submenu" autocomplete="sub-kategori"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    $php ($i = 1 )
                                    @foreach($dbartikel as $data)
                                  
                                        <option value="">{{$data->idsubmenu}}</option>
                                     
                                    @endforeach                                                            
                                </select>
                            </div>
                            @error('Username')
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
</main>
@endsection