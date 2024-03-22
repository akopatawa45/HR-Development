<x-app-layout>
    <div class="ml-3 mt-4 flex p-4">
        <h1 class="m-5">Department List</h1>
        <button
            class="ml-3 select-none rounded-lg bg-white px-6 py-3 text-center align-middle font-sans text-xs font-bold uppercase text-black shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button">
            Add
        </button>
    </div>
    <div
        class="bg-gray relative mt-4 flex h-full w-full flex-col overflow-scroll rounded-xl bg-clip-border text-gray-700 shadow-md">
        <table class="w-full min-w-max table-auto text-center">
            <thead>
                <tr>
                    <th class="border-blue-gray-100 bg-blue-gray-50 border-b p-4">
                        <p
                            class="text-blue-gray-900 block font-sans text-sm font-normal leading-none antialiased opacity-70">
                            Department Name
                        </p>
                    </th>
                    <th class="border-blue-gray-100 bg-blue-gray-50 border-b p-4">
                        <p
                            class="text-blue-gray-900 block font-sans text-sm font-normal leading-none antialiased opacity-70">
                            Date Created
                        </p>
                    </th>
                    <th class="border-blue-gray-100 bg-blue-gray-50 border-b p-4">
                        <p
                            class="text-blue-gray-900 block font-sans text-sm font-normal leading-none antialiased opacity-70">
                            Action
                        </p>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-blue-gray-50 border-b p-4">
                        <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-normal antialiased">
                            Human Resource
                        </p>
                    </td>
                    <td class="border-blue-gray-50 border-b p-4">
                        <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-normal antialiased">
                            23/03/24
                        </p>
                    </td>
                    <td class="border-blue-gray-50 border-b p-4">
                        <a href="#"
                            class="text-blue-gray-900 block font-sans text-sm font-medium leading-normal antialiased">
                            Edit
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
