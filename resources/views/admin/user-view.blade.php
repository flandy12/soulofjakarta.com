<x-app-layout>
    <div class="container mx-auto p-7">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            This information will be displayed publicly so be careful what you share.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="/update-user/{{$user->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">


                                <div class="mt-1 flex items-center">
                                    <!-- Profile Photo -->
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <div x-data="{photoName: null, photoPreview: null}"
                                        class="col-span-6 sm:col-span-4">
                                        <!-- Profile Photo File Input -->
                                        <input type="file" class="hidden" wire:model="photo" x-ref="photo"
                                            name="Profile" x-on:change="
                                            photoName = $refs.photo.files[0].name;
                                            const reader = new FileReader();
                                            reader.onload = (e) => {
                                                photoPreview = e.target.result;
                                            };
                                            reader.readAsDataURL($refs.photo.files[0]);" />

                                        <x-jet-label for="photo" value="{{ __('Photo') }}" />

                                        <!-- Current Profile Photo -->
                                        <div class="mt-2" x-show="! photoPreview">
                                            <img src="{{asset('storage/'.$user->profile_photo_path)}}" alt="{{ $user->name }}"
                                                class="rounded-full h-20 w-20 object-cover">
                                        </div>

                                        <!-- New Profile Photo Preview -->
                                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                                            <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                                x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                            </span>
                                        </div>

                                        <x-jet-secondary-button class="mt-2 mr-2" type="button"
                                            x-on:click.prevent="$refs.photo.click()">
                                            {{ __('Select A New Photo') }}
                                        </x-jet-secondary-button>

                                        <x-jet-input-error for="photo" class="mt-2" />
                                    </div>
                                    @endif

                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Use a permanent address where you can receive mail.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="/update/personal/information/{{$user->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="username"
                                        class="block text-sm font-medium text-gray-700">Username</label>
                                    <input type="text" name="Username" id="username"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Username" value="{{$user->username}}">
                                </div>

                                <div class="col-span-6 my-3 sm:col-span-4 ">
                                    <label for="username"
                                        class="block text-sm font-medium text-gray-700">Fullname</label>
                                    <input type="text" name="FullName" id="username"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Full Name" value="{{$user->name}}">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <input type="text" name="Email" id="email-address" autocomplete="email"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        value="{{$user->email}}">
                                </div>
                                <div class="col-span-6 my-3 sm:col-span-4 ">
                                    <label for="born"
                                        class="block text-sm font-medium text-gray-700">Born </label>
                                    <input type="date" name="Born" id="born"
                                        min="1800-01-01"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"  max="2031-12-31"
                                        value="{{$user->born}}">
                                </div>
                                <div class="col-span-6 my-3 sm:col-span-3">
                                    <label for="level" class="block text-sm font-medium text-gray-700">level</label>
                                    <select id="level" name="Level" autocomplete="level-name"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="Administrator">Administrator</option>
                                        <option  value="Redaktur">Redaktur</option>
                                        <option  value="User">User</option>
                                    </select>
                                </div>
                                <div class="col-span-6 my-3 sm:col-span-3">
                            <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">Jenis
                                Kelamin</label>
                            <div class="flex">
                                @if($user->gender === 'Pria')
                                <div class="form-check form-check-inline mr-3">
                                    <input
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox" checked id="inlineCheckbox1" value="Pria" name="Gender">
                                    <label class="form-check-label inline-block text-gray-800"
                                        for="inlineCheckbox1">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox" id="inlineCheckbox2" value="Wanita" name="Gender">
                                    <label class="form-check-label inline-block text-gray-800"
                                        for="inlineCheckbox2">Wanita</label>
                                </div>
                                @elseif($user->gender === 'Wanita')
                                <div class="form-check form-check-inline mr-3">
                                    <input
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox" id="inlineCheckbox1" value="Pria" name="Gender">
                                    <label class="form-check-label inline-block text-gray-800"
                                        for="inlineCheckbox1">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox"checked id="inlineCheckbox2" value="Wanita" name="Gender">
                                    <label class="form-check-label inline-block text-gray-800"
                                        for="inlineCheckbox2">Wanita</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline mr-3">
                                    <input
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox" id="inlineCheckbox1" value="Pria" name="Gender">
                                    <label class="form-check-label inline-block text-gray-800"
                                        for="inlineCheckbox1">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                        type="checkbox" id="inlineCheckbox2" value="Wanita" name="Gender">
                                    <label class="form-check-label inline-block text-gray-800"
                                        for="inlineCheckbox2">Wanita</label>
                                </div>          
                                @endif
                            </div>
                            @error('Gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>                
                                <div class="col-span-6">
                                    <label for="street-address" class="block text-sm font-medium text-gray-700">Street
                                        address</label>
                                    <input type="text" name="street-address" id="street-address"
                                        autocomplete="street-address"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 my-3 sm:col-span-3 lg:col-span-2">
                                    <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                        Postal code</label>
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    </div>
</x-app-layout>