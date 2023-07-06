<form action="/" >
    <button id="dropdownDefaultButton" data-dropdown-toggle="filterDropdown"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">Filter <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg></button>
    <!-- Dropdown menu -->
    <div id="filterDropdown"
        class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 bg-gray-900">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <button name='filter' value='name' type='submit'
                    class="block w-full px-4 py-2 text-base font-medium  text-gray-200 hover:bg-gray-100 hover:text-gray-800">by
                    Name</button>
            </li>
            <li>
                <button name='filter' value='email' type='submit'
                    class="block w-full px-4 py-2 text-base font-medium  text-gray-200 hover:bg-gray-100 hover:text-gray-800">by
                    Email</button>
            </li>
            <li>
                <button name='filter' value='address' type='submit'
                    class="block w-full px-4 py-2 text-base font-medium  text-gray-200 hover:bg-gray-100 hover:text-gray-800">by
                    Address</button>
            </li>
            <li>
                <button name='filter' value='DOB' type='submit'
                    class="block w-full px-4 py-2 text-base font-medium  text-gray-200 hover:bg-gray-100 hover:text-gray-800">by
                    Date of Birth</button>
            </li>
        </ul>
    </div>

</form>
<form action="multiselect.php" method='post'>
    <button id='multiselect' type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Multi
        Select</button>
</form>
<a type="button" href='./user/createform'
    class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add</a>
