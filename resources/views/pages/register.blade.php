@extends('layout')
@section('title', 'Register')


@section('content')
    <div id="signin" class="flex justify-center h-full">
        <form class="w-1/2 pt-10" action="/register" method="Post">
            @csrf
            <div class="mb-6">
                <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name='name' id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     autocomplete=off>
            </div>
            @error('name')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@crud.com"  autocomplete=off>
            </div>
            @error('email')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    password</label>
                <input type="password" name='password' id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     autocomplete=off>
            </div>
            @error('password')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <div class="mb-6">
                <label for="cpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                    password</label>
                <input type="cpassword" name='cpassword' id="cpassword"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     autocomplete=off>
            </div>
            @error('cpassword')
                <p class="text-red-500 text-xs -mt-5 mb-2">{{ $message }}</p>
            @enderror
            <div class="w-full relative flex">
                <a href="/loginForm">
                    <p class="text-xs underline text-blue-700 hover:text-red-500 mt-6">Already register?</p>
                </a>
                <button type="submit"
                    class="text-white sm:absolute sm:right-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
            </div>
        </form>
    </div>
@endsection
