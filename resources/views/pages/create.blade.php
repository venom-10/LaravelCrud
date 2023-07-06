@extends('layout')
@section('title', 'Add a User')

@section('content')

    <div class="flex justify-start items-center flex-col h-full pt-10">

        <form class='w-1/2 relative' action='/user/create' method='POST' enctype='multipart/form-data'>
            @csrf
            <div class="relative z-0 w-full text-black mb-6 group">
                <input type="name" name="name"
                    class="block py-2.5 px-0 font-medium w-full bg-inherit text-md border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    autocomplete=off />
                <label for="name"
                    class="font-medium absolute text-base  text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:font-bold peer-focus:-translate-y-6">Name</label>
            </div>
            @error('name')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <div class="relative z-0 w-full mb-6 group">
                <input type="email" name="email"
                    class="block py-2.5 px-0 font-medium w-full text-md bg-inherit border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    autocomplete=off />
                <label for="email"
                    class="font-medium absolute text-base  text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:font-bold peer-focus:-translate-y-6">Email</label>
            </div>
            @error('email')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="state"
                    class="block py-2.5 px-0 font-medium w-full text-md bg-inherit border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    autocomplete=off />
                <label for="state"
                    class="font-medium absolute text-base  text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:font-bold peer-focus:-translate-y-6">State</label>
            </div>
            @error('state')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="address"
                    class="block py-2.5 px-0 font-medium w-full text-md bg-inherit border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    autocomplete=off />
                <label for="Address"
                    class="font-medium absolute text-base  text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:font-bold">Address</label>
            </div>
            @error('address')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <div class="relative z-0 w-full mb-6 group">
                <div class="relative w-[150px]">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input datepicker datepicker-format="dd/mm/yyyy" name='dob' type="text"
                        class="bg-transparent border-2 text-sm rounded-lg block w-full pl-10 p-2.5  border-gray-700 placeholder-gray-900 font-medium text-gray-900 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="DD/MM/YYYY" autocomplete=off>
                </div>
            </div>
            @error('dob')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <div class="relative z-0 w-full mb-6 group">
                <input
                    class="block w-full text-base  text-gray-400 border rounded-lg cursor-pointer focus:outline-none bg-gray-700 border-gray-600 placeholder-gray-400"
                    id="file_input" name='file' type="file">
            </div>
            @error('file')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <select name="gender" class='text-white w-max bg-blue-700 rounded-lg'>
                <option value="default" class=''>Gender</option>
                <option value="Male" class=''>Male</option>
                <option value="Female" class=''>Female</option>
                <option value="Other" class=''>Other</option>
            </select>
            <button type="submit"
                class="text-white absolute bottom-0 right-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-base  w-full sm:w-auto px-5 py-2.5 text-center focus:ring-blue-800">Submit</button>


        </form>
        @error('gender')
            <p class="text-red-500 relative right-[200px] text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>


@endsection
