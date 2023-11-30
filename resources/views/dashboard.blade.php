<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(auth()->user()->role->name == 'manager')
                        <span class="font-bold text-xl">Recevied Application</span>
                        <div class=''>
                            <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white mt-4">
                                <div class="flex w-full items-center justify-between border-b pb-3">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                                        <div class="text-lg font-bold text-slate-700">Joe Smith</div>
                                    </div>
                                    <div class="flex items-center space-x-8">
                                        <button
                                            class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">
                                            ID 5
                                        </button>
                                        <div class="text-xs text-neutral-500">22.11.2023</div>
                                    </div>
                                </div>

                                <div class="mt-4 mb-3">
                                    <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel, rhoncus
                                        neque?
                                    </div>
                                    <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum urna.
                                        Maecenas convallis dignissim turpis, non suscipit mauris interdum at. Morbi sed
                                        gravida nisl, a pharetra nulla. Etiam tincidunt turpis leo, ut mollis ipsum
                                        consectetur quis. Etiam faucibus est risus, ac condimentum mauris consequat nec.
                                        Curabitur eget feugiat massa
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between text-slate-500">
                                        client@gmail.com
                                        {{--                                        <div class="flex space-x-4 md:space-x-8">--}}
                                        {{--                                            <div--}}
                                        {{--                                                class="flex cursor-pointer items-center transition hover:text-slate-600">--}}
                                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5"--}}
                                        {{--                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor"--}}
                                        {{--                                                     stroke-width="2">--}}
                                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                                        {{--                                                          d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>--}}
                                        {{--                                                </svg>--}}
                                        {{--                                                <span>125</span>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div--}}
                                        {{--                                                class="flex cursor-pointer items-center transition hover:text-slate-600">--}}
                                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5"--}}
                                        {{--                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor"--}}
                                        {{--                                                     stroke-width="2">--}}
                                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                                        {{--                                                          d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>--}}
                                        {{--                                                </svg>--}}
                                        {{--                                                <span>4</span>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=''>
                            <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white mt-4">
                                <div class="flex w-full items-center justify-between border-b pb-3">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                                        <div class="text-lg font-bold text-slate-700">Joe Smith</div>
                                    </div>
                                    <div class="flex items-center space-x-8">
                                        <button
                                            class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">
                                            ID 5
                                        </button>
                                        <div class="text-xs text-neutral-500">22.11.2023</div>
                                    </div>
                                </div>

                                <div class="mt-4 mb-3">
                                    <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel, rhoncus
                                        neque?
                                    </div>
                                    <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum urna.
                                        Maecenas convallis dignissim turpis, non suscipit mauris interdum at. Morbi sed
                                        gravida nisl, a pharetra nulla. Etiam tincidunt turpis leo, ut mollis ipsum
                                        consectetur quis. Etiam faucibus est risus, ac condimentum mauris consequat nec.
                                        Curabitur eget feugiat massa
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between text-slate-500">
                                        client@gmail.com
                                        {{--                                        <div class="flex space-x-4 md:space-x-8">--}}
                                        {{--                                            <div--}}
                                        {{--                                                class="flex cursor-pointer items-center transition hover:text-slate-600">--}}
                                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5"--}}
                                        {{--                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor"--}}
                                        {{--                                                     stroke-width="2">--}}
                                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                                        {{--                                                          d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>--}}
                                        {{--                                                </svg>--}}
                                        {{--                                                <span>125</span>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div--}}
                                        {{--                                                class="flex cursor-pointer items-center transition hover:text-slate-600">--}}
                                        {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5"--}}
                                        {{--                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor"--}}
                                        {{--                                                     stroke-width="2">--}}
                                        {{--                                                    <path stroke-linecap="round" stroke-linejoin="round"--}}
                                        {{--                                                          d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>--}}
                                        {{--                                                </svg>--}}
                                        {{--                                                <span>4</span>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div
                            class='flex items-center'>
                            <div
                                class='w-full max-w-lg px-10 py-8 mx-auto bg-white dark:bg-slate-800 rounded-lg shadow-xl'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <form action="{{ route('applications.store')  }}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <h2 class="text-2xl font-bold dark:text-white">Submit your application</h2>
                                        <hr class="my-6">
                                        <label
                                            class="uppercase text-sm font-bold opacity-70 dark:text-white">Subject</label>
                                        <input required type="text" name="subject"
                                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 dark:text-black border-slate-200 focus:border-slate-600 focus:outline-none">
                                        <label
                                            class="uppercase text-sm font-bold opacity-70 dark:text-white">Phone</label>
                                        <input required type="text" name="phone"
                                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 dark:text-black border-slate-200 focus:border-slate-600 focus:outline-none"
                                               value="+998">
                                        <label
                                            class="uppercase text-sm font-bold opacity-70 dark:text-white">Message</label>
                                        <textarea required rows="5" name="message" type="text"
                                                  class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 dark:text-black border-slate-200 focus:border-slate-600 focus:outline-none"></textarea>
                                        <label class="uppercase text-sm font-bold opacity-70">File</label>
                                        <input type="file" name="file"
                                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 dark:text-black border-slate-200 focus:border-slate-600 focus:outline-none">
                                        <input type="submit"
                                               class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                                               value="Send">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
