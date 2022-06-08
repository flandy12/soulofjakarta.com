<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css" />
<link rel="stylesheet" href="{{asset('css/cropie.css')}}" />

<body>

    <div class="form-group row">
    <label for="logo" class="col-md-4 col-form-label text-md-right" style="background: "></label>

        <div class="col-md-6">
            <div>
                <div id="picture_wrp" class="logo_wrp">
                    <span id="label-click-here">Klik atau tarik logo perusahaan untuk diunggah (Tipe: JPG, JPEG, PNG,
                        Maks: 2 Mb) <span class="required_field">*</span></span>
                </div>
                <input class="image" name="file" type="file">
                <input type="hidden" id="image_type" value="square">
                <input type="hidden" id="widthViewPort" value="255">
                <input type="hidden" id="heightViewPort" value="145">
                <input type="hidden" id="widthBoundary" value="355">
                <input type="hidden" id="heightBoundary" value="245">
                <div id="image"></div>
                <input id="logo" class="image_value" name="logo" type="hidden">
            </div>
        </div>
    </div>
</body>

<script src="{{asset('js/cropie.js')}}"></script>

</html>