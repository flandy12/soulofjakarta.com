@extends('layouts.navbar')
    <!-- start sidebar -->
    @yield('sidebar')
    <!-- end sidbar -->
    @section('body-dashboard')
    <!-- strat content -->
    <div class=" flex-1 p-6 md:mt-16">


        <!-- General Report -->
        <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


            <!-- card -->
            <div class="report-card">
                <div class="card">
                    <div class="card-body flex flex-col">

                        <!-- top -->
                        <div class="flex flex-row justify-between items-center">
                            <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
                            <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                12%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5 num-4 text-gray-500">{{$dbAds->count()}}</h1>
                            <p>total ads</p>
                        </div>
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
            </div>
            <!-- end card -->


            <!-- card -->
            <div class="report-card">
                <div class="card">
                    <div class="card-body flex flex-col">

                        <!-- top -->
                        <div class="flex flex-row justify-between items-center">
                            <div class="h6 text-red-700 fad fa-store"></div>
                            <span class="rounded-full text-white badge bg-red-400 text-xs">
                                6%
                                <i class="fal fa-chevron-down ml-1"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5 num-4 text-gray-500">{{$dbartikel->count()}}</h1>
                            <p>total article</p>
                        </div>
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
            </div>
            <!-- end card -->


            <!-- card -->
            <div class="report-card">
                <div class="card">
                    <div class="card-body flex flex-col">

                        <!-- top -->
                        <div class="flex flex-row justify-between items-center">
                            <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                            <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                72%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5 num-4 text-gray-500">{{$dbuser->count()}}</h1>
                            <p>total user</p>
                        </div>
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
            </div>
            <!-- end card -->


            <!-- card -->
            <div class="report-card">
                <div class="card">
                    <div class="card-body flex flex-col">

                        <!-- top -->
                        <div class="flex flex-row justify-between items-center">
                            <div class="h6 text-green-700 fad fa-users"></div>
                            <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                150%
                                <i class="fal fa-chevron-up ml-1"></i>
                            </span>
                        </div>
                        <!-- end top -->

                        <!-- bottom -->
                        <div class="mt-8">
                            <h1 class="h5 num-4"></h1>
                            <p>new Visitor</p>
                        </div>
                        <!-- end bottom -->

                    </div>
                </div>
                <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
            </div>
            <!-- end card -->


        </div>
        <!-- End General Report -->

        <!-- strat Analytics -->
        <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1 ">

            <!-- update section -->
            <div class="card border-teal-400 shadow-md text-gray-700">
                <div class="card-body flex flex-row">

                    <!-- image -->
                    <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                        <img src="{{asset('storage/'.Auth::user()->profile_photo_path)}}" alt="img title">
                    </div>
                    <!-- end image -->

                    <!-- info -->
                    <div class="py-2 ml-10 ">
                        <h1 class="h6 text-gray-600">Welcome ,  {{ Auth::user()->name }}!</h1>
                        <p class="text-gray-600 text-xs">You've finished all of your tasks for this week.</p>

                        
                    </div>
                    <!-- end info -->

                </div>
            </div>
            <!-- end update section -->

            <!-- carts -->
            <div class="flex flex-col">

                <!-- charts -->
                <div class="grid grid-cols-2 gap-6 h-full">

                    <div class="card">
                        <div class="py-3 px-4 flex flex-row justify-between">
                            <h1 class="h6">
                                <span class="num-4"></span>k
                                <p>page view</p>
                            </h1>

                            <div
                                class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                                <i class="fad fa-eye"></i>
                            </div>
                        </div>
                        <div class="analytics_1"></div>
                    </div>

                    <div class="card">
                        <div class="py-3 px-4 flex flex-row justify-between">
                            <h1 class="h6">
                                <span class="num-2"></span>k
                                <p>Unique Users</p>
                            </h1>

                            <div
                                class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                                <i class="fad fa-users-crown"></i>
                            </div>
                        </div>
                        <div class="analytics_1"></div>
                    </div>

                </div>
                <!-- charts    -->

            </div>
            <!-- end charts -->


        </div>
        <!-- end Analytics -->


        <!-- start numbers -->
        <div class="grid grid-cols-5 gap-6 xl:grid-cols-2">

            <!-- card -->
            <div class="card mt-6">
                <div class="card-body flex items-center">

                    <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                        <i class="fad fa-wallet"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold"><span class="num-2"></span> Sales</h1>
                        <p class="text-xs"><span class="num-2"></span> payments</p>
                    </div>

                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="card mt-6">
                <div class="card-body flex items-center">

                    <div class="px-3 py-2 rounded bg-green-600 text-white mr-3">
                        <i class="fad fa-shopping-cart"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold"><span class="num-2"></span> Orders</h1>
                        <p class="text-xs"><span class="num-2"></span> items</p>
                    </div>

                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="card mt-6 xl:mt-1">
                <div class="card-body flex items-center">

                    <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
                        <i class="fad fa-blog"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold"><span class="num-2"></span> posts</h1>
                        <p class="text-xs"><span class="num-2"></span> active</p>
                    </div>

                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="card mt-6 xl:mt-1">
                <div class="card-body flex items-center">

                    <div class="px-3 py-2 rounded bg-red-600 text-white mr-3">
                        <i class="fad fa-comments"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold"><span class="num-2"></span> comments</h1>
                        <p class="text-xs"><span class="num-2"></span> approved</p>
                    </div>

                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="card mt-6 xl:mt-1 xl:col-span-2">
                <div class="card-body flex items-center">

                    <div class="px-3 py-2 rounded bg-pink-600 text-white mr-3">
                        <i class="fad fa-user"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold"><span class="num-2"></span> memebrs</h1>
                        <p class="text-xs"><span class="num-2"></span> online</p>
                    </div>

                </div>
            </div>
            <!-- end card -->

        </div>
        <!-- end nmbers -->

        <!-- start quick Info -->
        <div class="grid grid-cols-3 gap-6 mt-6 xl:grid-cols-1">


            <!-- Browser Stats -->
            <div class="card">
                <div class="card-header">User All</div>

                @foreach($dbuser as $user)
                <!-- brawser -->
                <div class="p-6 flex flex-row justify-between items-center text-gray-600 border-b">
                    <div class="flex items-center">
                        <i class="fab fa-chrome mr-4"></i>
                        <h1 class="text-gray-600">{{$user->name}}</h1>
                    </div>
                    <div>
                        <span class="num-2"></span>{{$user->email}}
                    </div>
                </div>
                <!-- end brawser -->
                @endforeach

            </div>
            <!-- end Browser Stats -->

            <!-- Start Recent Sales -->
            <div class="card col-span-2 xl:col-span-1">
                <div class="card-header">Article All</div>

                <table class="table-auto w-full text-left">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-r"></th>
                            <th class="px-4 py-2 border-r">Title</th>
                            <th class="px-4 py-2 border-r">Created</th>
                            <th class="px-4 py-2">Upload</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">

                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i
                                    class="fad fa-circle"></i></td>
                            <td class="border border-l-0 px-4 py-2">Lightning to USB-C Adapter Lightning.</td>
                            <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                            <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes
                                ago</td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i
                                    class="fad fa-circle"></i></td>
                            <td class="border border-l-0 px-4 py-2">Apple iPhone 8.</td>
                            <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                            <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes
                                ago</td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i
                                    class="fad fa-circle"></i></td>
                            <td class="border border-l-0 px-4 py-2">Apple MacBook Pro.</td>
                            <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                            <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes
                                ago</td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500"><i
                                    class="fad fa-circle"></i></td>
                            <td class="border border-l-0 px-4 py-2">Samsung Galaxy S9.</td>
                            <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                            <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes
                                ago</td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i
                                    class="fad fa-circle"></i></td>
                            <td class="border border-l-0 px-4 py-2">Samsung Galaxy S8 256GB.</td>
                            <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                            <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes
                                ago</td>
                        </tr>
                        <tr>
                            <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i
                                    class="fad fa-circle"></i></td>
                            <td class="border border-l-0 border-b-0 px-4 py-2">apple watch.</td>
                            <td class="border border-l-0 border-b-0 px-4 py-2">$<span class="num-2"></span></td>
                            <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2"><span class="num-2"></span>
                                minutes ago</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- End Recent Sales -->


        </div>
        <!-- end quick Info -->


    </div>
    <!-- end content -->
@endsection

