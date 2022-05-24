import $ from "jquery";

// {{url('delete-artikel/'.$artikel->id)}}
$('.btn-hps').on("click", function () {
    let hps = $(this).data('id');
    $.ajax({
        type: 'get',
        dataType: "json",
        url: `/delete-artikel/${hps}`,
        success: function (data) {
            $('#success-delete').text(data.status);
            setTimeout(() => {
                location.reload();
            }, 2000)
        }
    });
});
//notif close setTimeput
setTimeout(function () {
    $('.alert-ads').show();
}, 10000)

//headData
$(".post-thumbnail").on("click", function () {
    let dataId = $(this).data("id");
    let TitleArtikel = $('.post-content').find('.post-title');
    let ImageHead = $("#ImageHead");
    $.ajax({
        type: 'get',
        url: `/artikel/${dataId}`,
        dataType: 'json',
        success: function (res) {
            $(TitleArtikel).html(res.judul);
            $(ImageHead).attr("src", `storage/${res.gambar_besar}`);
        }
    })
});

//Action Notif Close 
$('#alert-ads').on('click', function () {
    $('.alert-ads').hide();
});

// Mengambil Data Dari DataBase 
// function ArticelUpdate() {
//     $.ajax({
//         type: "get",
//         dataType: 'json',
//         url: '/data',
//         success: function (data) {
//             $.each(data[0],function(key,val){
//                 return $('#text').prepend(`${key,val.isiutama}`)
//              })
//         }
//     })
// };
// ArticelUpdate();

// function Trending() {
//     $.ajax({
//         type: "get",
//         dataType: 'json',
//         url: '/data',
//         success: function (data) {
//             $.each(data[2],function(key,val){
//                 return $('#tranding').prepend(`<div class="col-12 col-md-4">
//                 <div class="single-post-area mb-80">
//                     <!-- Post Thumbnail -->
//                     <div class="post-thumbnail-top">
//                          <img src="storage/${key,val.gambar_besar}" alt="" class="w-full h-36 object-cover rounded-md">

//                         <!-- Video Duration -->
//                         <span class="video-duration">05.03</span>
//                     </div>

//                     <!-- Post Content -->
//                     <div class="post-content">
//                         <a href="#" class="post-cata cata-sm cata-success">Sports</a>
//                         <a href="single-post.html" class="post-title">${key,val.judul}</a>
//                         ${key,val.isiutama}
//                         <div class="post-meta d-flex">
//                             <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
//                             <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
//                             <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
//                         </div>
//                     </div>
//                 </div>
//             </div>`)
//              })
//         }
//     })
// };
// Trending();

// function HeadArticle() {
//     $.ajax({
//         type: "get",
//         dataType: 'json',
//         url: '/data',
//         success: function (data) {
//             $.each(data[2],function(key,val){
//                 return $('#tranding').prepend(`<div class="col-12 col-md-4">
//                 <div class="single-post-area mb-80">
//                     <!-- Post Thumbnail -->
//                     <div class="post-thumbnail-top">
//                          <img src="storage/${key,val.gambar_besar}" alt="" class="w-full h-36 object-cover">

//                         <!-- Video Duration -->
//                         <span class="video-duration">05.03</span>
//                     </div>

//                     <!-- Post Content -->
//                     <div class="post-content">
//                         <a href="#" class="post-cata cata-sm cata-success">Sports</a>
//                         <a href="single-post.html" class="post-title">${key,val.judul}</a>
//                         ${key,val.isiutama}
//                         <div class="post-meta d-flex">
//                             <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
//                             <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
//                             <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
//                         </div>
//                     </div>
//                 </div>
//             </div>`)
//              })
//         }
//     })
// };
//Mengambil Image 
// function HeadAds(){
//     $.ajax({
//         type: "get",
//         dataType: 'json',
//         url: '/data',
//         success: function (data) {
//                 return $('.Headadvertisement').prepend(``).$('#TitleAdvertisement').html(ata[1].gambar_besar)
//         }
//     })
// }
// HeadAds();

// Async/Await requirements: Latest Chrome/FF browser or Babel: https://babeljs.io/docs/plugins/transform-async-to-generator/
// Fetch requirements: Latest Chrome/FF browser or Github fetch polyfill: https://github.com/github/fetch

// async function
// async function fetchAsync () {
//     // await response of fetch call
//     let container = document.getElementById('HeadData');
//     let response = await fetch('/data');
//     // only proceed once promise is resolved
//     let data = await response.json();
//     // only proceed once second promise is resolved
//     data[0].forEach(element => {
//         return container.textContent = element.judul;
//     });
//   }
// fetchAsync();
