<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto" >


        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <div class="flex flex-col col-span-full  bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100">تعديل بيانات</h2>
                </header>

                <div id="dashboard-card-04-legend" class="px-5 py-3 flex justify-center">
                    <form class="sm:w-1/2 w-full" action="{{ route('data.update', $data->id) }}" method="POST">@csrf
                        @include('alerts.success')
                        <div class="mb-6">
                            <label for="date" class="block mb-2 text-lg  font-medium text-gray-900 dark:text-white">التاريخ</label>
                            <input type="date" id="date" name="date" value="{{ $data->date }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            @error('date')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="disease" class="block mb-2 text-lg  font-medium text-gray-900 dark:text-white">المرض</label>
                            <select type="text" id="disease" name="disease" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  px-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="">إختيار المرض</option>
                                @foreach ($diseases as $disease)
                                    <option value="{{ $disease->id }}" @if($disease->id  == $data->disease ) selected @endif>{{ $disease->name }}</option>
                                @endforeach
                            </select>
                            @error('disease')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="positive" class="block mb-2 text-lg  font-medium text-gray-900 dark:text-white">عدد الحالات الموجبة</label>
                            <input type="number" id="positive" value="{{ $disease->positive }}" min="1" name="positive" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            @error('positive')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="mb-6">
                            <label for="negative" class="block mb-2 text-lg  font-medium text-gray-900 dark:text-white">عدد الحالات السالبة</label>
                            <input type="number" id="negative" value="{{$disease->negative}}" min="1" name="negative" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            @error('negative')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">تعديل</button>
                        <a href="{{ route('show_data') }}"  class="text-white bg-neutral-700 hover:bg-neutral-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-lg w-full sm:w-auto px-5 py-[7px] text-center dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800">رجوع</a>
                      </form>
                </div>

            </div>

        </div>

    </div>
</x-app-layout>
