@extends('admin.index')

@push('cssScript')
<link rel="stylesheet" href="{{ asset('css/cropie.css').'?id='.now()->format('s') }}">
@endpush

@section('Add-Article')
<div class="content-wrapper">
        <div id="uploadimageModal" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Unggah dan Crop Gambar</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 text-center">
                                <div id="image_demo" style="width: 350px; margin-top: 30px"></div>
                            </div>
                            <div class="col-md-4" id="btn-crop-wrap">
                                <button class="btn btn-success crop_image">Crop</button>
                                <button class="btn btn-info vanilla-rotate" data-deg="-90">Putar Kiri</button>
                                <button class="btn btn-warning vanilla-rotate" data-deg="90">Putar Kanan</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="card-title card-title-dash">Add Article</h4>
                                <p class="card-subtitle card-subtitle-dash">You have
                                    50+ new requests</p>
                            </div>

                        </div>
                        <form>
                            <div class="form-group mb-6 text-black">
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
                                    focus:text-gray-700  focus:border-blue-600 focus:outline-none" id="judul"
                                    aria-describedby="judul" placeholder="Judul Artikel" name="Judul">
                                @error('Judul')
                                <div
                                    class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <div>
                                    <div id="picture_wrp" class="logo_wrp">
                                        <span id="label-click-here">Klik atau tarik logo perusahaan untuk diunggah
                                            (Tipe:
                                            JPG, JPEG, PNG, Maks: 2 Mb) <span class="required_field">*</span></span>
                                    </div>
                                    <input class="image" name="file" type="file" accept=".jpeg,.png,.jpg">
                                    <input type="hidden" id="image_type" value="square">
                                    <input type="hidden" id="widthViewPort" value="355">
                                    <input type="hidden" id="heightViewPort" value="245">
                                    <input type="hidden" id="widthBoundary" value="455">
                                    <input type="hidden" id="heightBoundary" value="345">
                                    <div id="image"></div>
                                    <input id="logo" class="image_value" name="logo" type="hidden">
                                </div>
                            </div>
                            <div class="form-group  text-black">
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
                        " id="exampleFormControlTextarea1" rows="3" placeholder="Your message"
                                        name="Artikel_Utama"></textarea>
                                    @error('Artikel_Utama')
                                    <div
                                        class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
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
                        " id="exampleFormControlTextarea2" rows="3" placeholder="Your message"
                                        name="Artikel_Body"></textarea>
                                    @error('Artikel_Body')
                                    <div
                                        class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
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
                                <div
                                    class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </form>
                        <div class="value-image">
                            <img id="image" src="">
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    @endsection

    @push('jsScript')
    <script src="{{ asset('js/cropie.js').'?id='.now()->format('s') }}"></script>
    <script src="{{ asset('js/crop.js').'?id='.now()->format('s') }}"></script>
    @endpush