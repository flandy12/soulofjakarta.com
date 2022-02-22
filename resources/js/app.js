require('./bootstrap');
import $, { data, parseJSON } from "jquery";
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(".post-thumbnail").on("click", function () {
    let dataId = $(this).data("id");
    let TitleArtikel = $('.post-content').find('.post-title');
    let ImageHead = $("#ImageHead");
    $.ajax({
        type : 'get',
        url : `/artikel/${dataId}`,
        dataType: 'json',
        success: function(res){
           $(TitleArtikel).html(res.judul);
           $(ImageHead).attr("src",`storage/${res.gambar_besar}`);
        }
    })
});

$('#close').on('click',function () {
    $('#body-alert').hide();
});

// $.ajax({
//     type : "get",
//     dataType:'json',
//     url :'artikel-hot/'+getID,
//     success : function($data){
//        $('#judul').html($data);
//     }
// })