if($('#image_demo').length > 0) {
	var croppie_data = {
	    enableExif: true,
	    viewport: {
	        width: $("#widthViewPort").val(),
	        height: $("#heightViewPort").val(),
	        type: $("#image_type").val(),
	    },
	    boundary: {
	        width: $("#witdhBoundary").val(),
	        height: $("#heightBoundary").val(),
	    },
	    maxZoom: 1,
	    enableOrientation: true,
	};

	$image_crop = $('#image_demo').croppie(croppie_data);

	$('.vanilla-rotate').on('click', function(ev) {
	    $image_crop.croppie('rotate', parseInt($(this).data('deg')));
	});


	$(document).on("click", ".crop_image", function() {
	    $image_crop.croppie('result', {
	        type: 'canvas',
	        size: 'viewport'
	    }).then(function(response) {
	        $(".image_value").val(response);
	        $('#uploadimageModal').modal('hide');
	        $('#picture_wrp').css('background-image', 'url(' + response + ')').addClass('hasImage');
	        $("#label-click-here").hide();
	    })
	});

	$('.image').on('change', function() {
	    var file = this.files[0];
	    fileObject = file;
	    $(this).val('');

	    var reader = new FileReader();
        reader.onload = function (event) {
            $image_crop.croppie('bind', {
                url: event.target.result,
            }).then(function() {
                if($("#validateSetZoom").val() === 'true')
                    $('.cr-slider').attr({'min':0.1, 'max':0.5});
            });
        }
        reader.readAsDataURL(file);
        $('#uploadimageModal').modal('show');
	});

	$('#picture_wrp').addClass('dragging').removeClass('dragging');

	$('#picture_wrp').on('dragover', function() {
	    $('#picture_wrp').addClass('dragging')
	}).on('dragleave', function() {
	    $('#picture_wrp').removeClass('dragging')
	}).on('drop', function(e) {
	    $('#picture_wrp').removeClass('dragging hasImage');

	    if (e.originalEvent) {
	        var file = e.originalEvent.dataTransfer.files[0];
	        fileObject = file;
	        var reader = new FileReader();
            reader.onload = function (event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function(){
                    if($("#validateSetZoom").val() === 'true')
                        $('.cr-slider').attr({'min':3, 'max':4});
                });
            }
            reader.readAsDataURL(file);
            $('#uploadimageModal').modal('show');
	    }
	});

	$('#picture_wrp').on("click", function(e) {
		$('.image').click();
	});
}

window.addEventListener("dragover", function(e) {
    e = e || event;
    e.preventDefault();
}, false);

window.addEventListener("drop", function(e) {
    e = e || event;
    e.preventDefault();
}, false);