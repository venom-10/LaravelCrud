@extends('layout')
@section('title', 'Index')
@section('profile')
    @include('partials.profile')
@endsection
@section('content')

    <div class='w-full h-full px-[20px] pt-[80px]'>

        @if (count($allData) == 0)
            <h1>No data</h1>
        @else
            <div class='w-full flex relative'>
                @include('partials.search')
                <div class='absolute right-0 flex justify-end gap-6'>
                    @include('partials.manipulateNav')
                </div>
            </div>
            <div class="relative w-full overflow-x-auto shadow-md sm:rounded-lg">
                <table id='usertable' class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-900 uppercase bg-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gender
                            </th>
                            <th scope="col" class="px-6 py-3">
                                state
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                            <th scope="col" class="px-12 py-3">
                                DOB
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Image
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allData as $data)
                            <x-tabledata :data='$data' />
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('partials.paginateButton')
        @endif
    </div>


@endsection
