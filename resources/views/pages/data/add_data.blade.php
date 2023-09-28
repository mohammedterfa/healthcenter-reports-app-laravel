<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto" >


        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <div class="flex flex-col col-span-full  bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100">إدخال البيانات</h2>
                </header>

                <div id="dashboard-card-04-legend" class="px-5 py-3 flex justify-center">
                    <form class="sm:w-1/2 w-full" action="{{ route('store_data') }}" method="POST">@csrf
                        @include('alerts.success')
                        <div class="mb-6">
                            <label for="date" class="block mb-2 text-lg  font-medium text-gray-900 dark:text-white">التاريخ</label>
                            <input type="date" id="date" name="date" value="{{ old('date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            @error('date')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="disease" class="block mb-2 text-lg  font-medium text-gray-900 dark:text-white">المرض</label>
                            <select type="text" id="disease" name="disease" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  px-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="">إختيار المرض</option>
                                @foreach ($diseases as $disease)
                                    <option value="{{ $disease->id }}" @if(old('disease') == $disease->id ) selected @endif>{{ $disease->name }}</option>
                                @endforeach
                            </select>
                            @error('disease')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="examination" class="block mb-2 text-lg  font-medium text-gray-900 dark:text-white">حالة الفحص</label>
                            <select type="text" id="examination" name="examination" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  px-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="">إختيار الحالة</option>
                                <option value="1" class="text-green-600" @if(old('examination') == 1) selected @endif> + موجب</option>
                                <option value="0" class="text-red-600" @if(old('examination') == 0) selected @endif > - سالب</option>
                            </select>
                            @error('examination')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="mb-6">
                            <label for="cases_number" class="block mb-2 text-lg  font-medium text-gray-900 dark:text-white">عدد الحالات</label>
                            <input type="number" id="cases_number" value="{{ old('cases_number') }}" min="1" name="cases_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            @error('cases_number')
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
