<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto" >


        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <div class="flex flex-col col-span-full  bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100">إضافة مرض جديد</h2>
                </header>

                <div id="dashboard-card-04-legend" class="px-5 py-3 flex justify-center">
                    <form class="sm:w-1/2 w-full" action="{{ route('disease.store') }}" method="POST">@csrf
                        @include('alerts.success')
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-lg  font-medium text-gray-900 dark:text-white">إسم المرض</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            @error('name')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">حفظ</button>
                      </form>
                </div>

            </div>

        </div>

    </div>
</x-app-layout>
