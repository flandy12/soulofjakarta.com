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