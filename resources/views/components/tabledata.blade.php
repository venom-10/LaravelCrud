@props(['data'])

<tr class="bg-gray-700 text-gray-400">
    <td class="px-6 py-[10px]">{{ $data->name }}</td>
    <td class="px-6 py-[10px]">{{ $data->email }}</td>
    <td class="px-6 py-[10px]">{{ $data->gender }}</td>
    <td class="px-6 py-[10px]">{{ $data->state }}</td>
    <td class="px-6 py-[10px]">{{ $data->address }}</td>
    <td class="px-6 py-[10px]">{{ $data->dob }}</td>
    <td class="px-6 py-[10px] w-full flex gap-4 items-center justify-center mt-[10px]">
        <a href='/edit?id={{$data->id}}'
            class="text-gray-400 font-semibold hover:text-green-500">Edit</a>
        <button id="dropdownDefaultButton" data-dropdown-toggle="delete_Dropdown{{$data->id}}"
            class="relative font-semibold hover:text-red-600 ml-2"
            type="button">Delete</button>
        <div id="delete_Dropdown{{$data->id}}"
            class="hidden text-white bg-red-700 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            <a href='/delete?id={{$data->id}}' class="text-gray-50 hover:text-gray-200">Are you Sure</a>
        </div>
    </td>
    <td class="px-6 py-[10px] text-center"> <img class="w-10 h-10 rounded-full" src="{{ $data->imagepath ? asset('storage/uploads/'.$data->imagepath) : asset('assets/images/default.jpg') }}" alt="user photo"> </td>
</tr>