   @foreach($HeadArticle as $datas)
                        <li class="nav-item">
                                <a class="nav-link active" href="{{'artikel/'.$datas->id . '/detail'}}"data-name="lan">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail" data-id="{{$datas->id}}">
                                        <img src="{{asset('storage/'.$datas->gambar_besar)}}" alt="" class="w-full h-20 object-cover">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title-head">{{$datas->judul}}</h6>
                                        {{substr($datas->isiutama,0,20)}}
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 19</span>
                                        </div>
                                    </div>
                                </div>
                                </a>
                        </li>
                        @endforeach


                            @foreach($trending as $trendings)
                <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail-top">
                            <img src="{{asset('storage/'.$trendings->gambar_kecil)}}" alt="" class="single-feature-post-trending">

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                            <a href="single-post.html" class="post-title">{{$trendings->judul}}</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <img src="{{asset('storage/'.$HeadArticle[0]->gambar_besar)}}"  id="ImageHead" class="single-feature-post video-post bg-img">

                feature img
                    <img src="{{asset('storage/'.$FeatureArticle->gambar_besar)}}" class="single-feature-post video-post bg-img">




                         <div class="bg-white overflow-hidden shadow-xl grid content-center ">
            <div class="sm:m-8">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
                        <div class="h-3/6">
                            <table class="w-full">
                                <thead class="border-b">
                                    <tr>
                                        <!-- <x-table.user>No</x-table.user> -->
                                      
                                        <th scope="col"
                                            class="text-sm font-large text-gray-900 px-6 py-4 text-center username">
                                            Username
                                        </th>
                                        <th scope="col"
                                            class="gender text-sm font-large text-gray-900 px-6 py-4 text-center email">
                                            Email
                                        </th>

                                        <th scope="col"
                                            class="gender text-sm font-large text-gray-900 px-6 py-4 text-center">
                                            Gender
                                        </th>
                                        <th scope="col"
                                            class="text-sm font-large text-gray-900 px-6 py-4 text-center level">
                                            Level
                                        </th>
                                        <th scope="col" class="text-sm font-large text-gray-900 px-6 py-4 text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="h-32">
                                    @php($i = 1)
                                    @foreach($dbuser as $user)
                                    <tr class="bg-white border-b">
                                        
                                        <td class="image text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <img src="{{asset('storage/'.$user->profile_photo_path)}}"
                                                class="w-14  h-14 rounded-full my-5" /></td>
                                        </td>
                                        <td
                                            class="username text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$user->username}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap email">
                                            {{$user->email}}
                                        </td>
                                        <td class="gender text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$user->gender}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap level">
                                            {{$user->level}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <div class="flex space-x-2 justify-center items-center mr-3">
                                                <a href="edit-user/{{$user->id}}">
                                                    <button type="button"
                                                        class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                                                </a>
                                                <a href="delete-user/{{$user->id}}">
                                                    <button type="button"
                                                        class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                                                </a>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Role
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        Jane Cooper
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        jane.cooper@example.com
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                            <div class="text-sm text-gray-500">Optimization</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Admin
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



    //dasboard
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi {{Auth::user()->name}} !
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid content-center">
                <div class="grid grid-cols-3 gap-4 h-32">
                    <div class="bg-orange-400 text-center items-center rounded-md grid">
                        <h1 class="text-4xl">{{$dbuser->count()}}</h1>
                        <p>USER</p>
                    </div>
                    <div class="bg-emerald-300 text-center items-center rounded-md grid">
                        <h1 class="text-4xl">{{$dbartikel->count()}}</h1>
                         <p>ARTICLE</p>
                    </div>
                    <div class="bg-purple-500 text-center rounded-md ">IKLAN</div>
                </div>
                <div class="lg:grid grid-cols-2 gap-4 sm:block mt-5 h-96">
                    <div class="bg-gradient-to-r from-orange-300 to-rose-300 text-center items-center rounded-md">
                        <table class="grid ml-2 mr-2 justify-center sm:py-4">
                            <thead class="mt-10 sm:m-0 ">
                                <tr class="grid grid-cols-3 justify-items-center">
                                    <th scope="col"
                                        class="text-sm font-large text-gray-900 px-6 py-4 text-center username">
                                        Username
                                    </th>
                                    <th scope="col"
                                        class="gender text-sm font-large text-gray-900 px-6 py-4 text-center email">
                                        Email
                                    </th>

                                    <th scope="col" class="text-sm font-large text-gray-900 px-6 py-4 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white rounded-md">
                                @php($i = 1)
                                @foreach($dbuser as $user)
                                <tr class="grid grid-cols-3 justify-items-center">
                                    <td class="col image text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <img src="{{asset('storage/'.$user->profile_photo_path)}}"
                                            class="w-14  h-14 rounded-full " /></td>
                                    </td>

                                    <td class="col text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap email flex items-center">
                                        {{$user->email}}
                                    </td>

                                    <td class="col text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex items-center justify-center">
                                        <div class="flex space-x-2 justify-center items-center mr-3">
                                            <a href="edit-user/{{$user->id}}">
                                                <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                                            </a>
                                            <!-- <a href="delete-user/{{$user->id}}">
                                                <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                                            </a> -->
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="bg-gradient-to-b from-sky-400 to-sky-200 rounded-md ">
                        <table class="grid ml-2 mr-2 justify-center mt-11">
                            <thead class="">
                                <tr class="grid grid-cols-3 justify-items-center">
                                    <x-table.user>No</x-table.user>
                                    <x-table.user>Title</x-table.user>
                                    <!-- <x-table.user>Article source</x-table.user> -->
                                    <!-- <x-table.user>Post</x-table.user> -->

                                    <!-- <x-table.user>Status</x-table.user> -->
                                    <th scope="col" class="text-sm font-large text-gray-900 px-6 py-4 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($dbartikel as $artikel)
                                <tr class="grid grid-cols-3 justify-items-center bg-white rounded-md mt-2 py-2">
                                    <td class="whitespace-nowrap text-sm font-large text-gray-900 flex items-center">
                                        {{$i++}}</td>
                                    <td class="text-sm text-gray-900 font-light whitespace-nowrap flex items-center">
                                        {{substr($artikel->judul,0,50)}}
                                    </td>
                                    <!-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Cell
                                            </td> -->
                                    <!-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{$artikel->tanggal}}
                                    </td> -->
                                    <td class="text-sm text-gray-900 font-light whitespace-nowrap flex items-center">
                                        <div class="flex space-x-2 justify-center items-center mr-3">
                                            <a href="{{url('edit-artikel/'.$artikel->id)}}">
                                                <button type="button"
                                                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                                            </a>

                                            <!-- <a href="{{url('/delete-artikel/'.$artikel->id)}}">
                                                <button type="button"
                                                    class="inline-block btn-hps px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                                    data-id="{{$artikel->id}}">Delete
                                                </button>
                                            </a> -->

                                        </div>

                                    </td>
                                </tr>
                                
                                @endforeach
                        
                                
                            </tbody>
                        </table>
          
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-black p-6 border-b border-gray-300">
    
    <!-- logo -->
    <div class="flex-none w-72 flex flex-row items-center">
      <img src="{{asset('images/logo.svg')}}" class="w-60 flex-none">
     

      <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
        <i class="fad fa-list-ul"></i>
      </button>
    </div>
    <!-- end logo -->   
    
    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
      <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
      <!-- left -->
      <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-envelope-open-text"></i></a>        
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-comments-alt"></i></a>        
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-check-circle"></i></a>        
        <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900" href="#" title="email"><i class="fad fa-calendar-exclamation"></i></a>        
      </div>
      <!-- end left -->      

      <!-- right -->
      <div class="flex flex-row-reverse items-center"> 

        <!-- user -->
        <div class="dropdown relative md:static">

          <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
            <div class="w-8 h-8 overflow-hidden rounded-full">
              <img class="w-full h-full object-cover" src="img/user.svg" >
            </div> 

            <div class="ml-2 capitalize flex ">
              <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">moeSaid</h1>
              <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
            </div>                        
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-user-edit text-xs mr-1"></i> 
              edit my profile
            </a>     
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-inbox-in text-xs mr-1"></i> 
              my inbox
            </a>     
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-badge-check text-xs mr-1"></i> 
              tasks
            </a>     
            <!-- end item -->

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-comment-alt-dots text-xs mr-1"></i> 
              chats
            </a>     
            <!-- end item -->

            <hr>

            <!-- item -->
            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
              <i class="fad fa-user-times text-xs mr-1"></i> 
              log out
            </a>     
            <!-- end item -->

          </div>
        </div>
        <!-- end user -->

        <!-- notifcation -->
        <div class="dropdown relative mr-5 md:static">

          <button class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
            <i class="fad fa-bells"></i>               
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
            <!-- top -->
            <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
              <h1>notifications</h1>
              <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                <strong>5</strong>
              </div>
            </div>
            <hr>
            <!-- end top -->

            <!-- body -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                <i class="fad fa-birthday-cake text-sm"></i>
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">poll..</h1>
                  <p class="text-xs text-gray-500">text here also</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>4 min ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                <i class="fad fa-user-circle text-sm"></i>
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">mohamed..</h1>
                  <p class="text-xs text-gray-500">text here also</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>78 min ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                <i class="fad fa-images text-sm"></i>
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">new imag..</h1>
                  <p class="text-xs text-gray-500">text here also</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>65 min ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                <i class="fad fa-alarm-exclamation text-sm"></i>
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">time is up..</h1>
                  <p class="text-xs text-gray-500">text here also</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>1 min ago</p>
                </div>
              </div>

            </a>
            <!-- end item -->


            <!-- end body -->

            <!-- bottom -->
            <hr>
            <div class="px-4 py-2 mt-2">
              <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                view all
              </a>
            </div>
            <!-- end bottom -->            
          </div>
        </div>
        <!-- end notifcation -->

        <!-- messages -->
        <div class="dropdown relative mr-5 md:static">

          <button class="text-gray-500 menu-btn p-0 m-0 hover:text-gray-900 focus:text-gray-900 focus:outline-none transition-all ease-in-out duration-300">
            <i class="fad fa-comments"></i>               
          </button>

          <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

          <div class="menu hidden md:w-full md:right-0 rounded bg-white shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
            <!-- top -->
            <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
              <h1>messages</h1>
              <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                <strong>3</strong>
              </div>
            </div>
            <hr>
            <!-- end top -->

            <!-- body -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                <img class="w-full h-full object-cover" src="img/user1.jpg" alt="">
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">mohamed said</h1>
                  <p class="text-xs text-gray-500">yeah i know</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>4 min ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item --> 

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                <img class="w-full h-full object-cover" src="img/user2.jpg" alt="">
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">sull goldmen</h1>
                  <p class="text-xs text-gray-500">for sure</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>1 day ago</p>
                </div>
              </div>

            </a>
            <hr>
            <!-- end item -->

            <!-- item -->
            <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

              <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                <img class="w-full h-full object-cover" src="img/user3.jpg" alt="">
              </div>

              <div class="flex-1 flex flex-rowbg-green-100">
                <div class="flex-1">
                  <h1 class="text-sm font-semibold">mick</h1>
                  <p class="text-xs text-gray-500">is typing ....</p>
                </div>
                <div class="text-right text-xs text-gray-500">
                  <p>31 feb</p>
                </div>
              </div>

            </a>
            <!-- end item -->


            <!-- end body -->

            <!-- bottom -->
            <hr>
            <div class="px-4 py-2 mt-2">
              <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                view all
              </a>
            </div>
            <!-- end bottom -->            
          </div>
        </div>
        <!-- end messages -->               


      </div>
      <!-- end right -->
    </div>
    <!-- end navbar content -->

  </div>

  grid grid-cols-6 lg:grid-cols-6 sm:grid-cols-4 border-b py-0 text-center content-center


   @php($i = 1)
                @foreach($dbuser as $user)
    