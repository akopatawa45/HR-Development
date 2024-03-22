<x-app-layout>
    <div class="mt-5 flex justify-center">

        <div class="relative my-3 flex flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
            <h4
                class="text-blue-gray-900 block font-sans text-2xl font-semibold leading-snug tracking-normal antialiased">
                Add Job
            </h4>

            <form method="POST" action="{{ route('job.store') }}" class="mb-2 mt-8 w-80 max-w-screen-lg sm:w-96">
                @csrf
                <div class="mb-1 flex flex-col gap-6">
                    <h6
                        class="text-blue-gray-900 -mb-3 block font-sans text-base font-semibold leading-relaxed tracking-normal antialiased">
                        Job Title
                    </h6>
                    <div class="relative h-11 w-full min-w-[200px]">
                        <input type="text" name="name" placeholder="Type Here..."
                            class="border-blue-gray-200 !border-t-blue-gray-200 text-blue-gray-700 placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 disabled:bg-blue-gray-50 peer h-full w-full rounded-md border border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal outline outline-0 transition-all placeholder-shown:border focus:border-2 focus:border-gray-900 focus:!border-t-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0" />
                        <label
                            class="before:content[' '] after:content[' '] before:border-blue-gray-200 after:border-blue-gray-200 peer-placeholder-shown:text-blue-gray-500 peer-disabled:peer-placeholder-shown:text-blue-gray-500 pointer-events-none absolute -top-1.5 left-0 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mr-1 before:mt-[6.5px] before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-l before:border-t before:transition-all before:content-none after:pointer-events-none after:ml-1 after:mt-[6.5px] after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-r after:border-t after:transition-all after:content-none peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-l-2 peer-focus:before:border-t-2 peer-focus:before:!border-gray-900 peer-focus:after:border-r-2 peer-focus:after:border-t-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent"></label>
                    </div>

                    <button
                        class="mt-6 block w-full select-none rounded-lg bg-gray-900 px-6 py-3 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="submit">
                        Save
                    </button>
                    <p
                        class="mt-4 block text-center font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
                        <a href="{{ route('job.index') }}" class="font-medium text-gray-900">
                            Back
                        </a>
                    </p>
            </form>
        </div>

    </div>
</x-app-layout>
