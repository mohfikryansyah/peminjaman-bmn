<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-pallete-300 lg:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full pl-3 pb-4 overflow-y-auto">
        <ul class="space-y-2 font-semibold">
            <li>
                <a href="/dashboard"
                    class="{{ Request::is('dashboard') ? 'bg-emerald-700' : '' }} flex items-center p-2 text-gray-200 rounded-tl-xl rounded-bl-xl hover:bg-emerald-700 group">
                    <svg class="w-5 h-5 text-gray-200 transition duration-75 group-hover:text-gray-200"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            @role('ADMIN')
                <li>
                    <a href="{{ route('pinjam.daftar') }}"
                        class="{{ Request::is('dashboard/daftar-peminjam') ? 'bg-emerald-700' : '' }} flex items-center p-2 text-gray-200 rounded-tl-xl rounded-bl-xl hover:bg-emerald-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200 transition duration-75 group-hover:text-gray-200"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Peminjam</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/barang"
                        class="{{ Request::is('dashboard/barang') ? 'bg-emerald-700' : '' }} flex items-center p-2 text-gray-200 rounded-tl-xl rounded-bl-xl hover:bg-emerald-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200 transition duration-75 group-hover:text-gray-200"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Barang</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/barang/create"
                        class="{{ Request::is('dashboard/barang/create') ? 'bg-emerald-700' : '' }} flex items-center p-2 text-gray-200 rounded-tl-xl rounded-bl-xl hover:bg-emerald-700 group">

                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200 transition duration-75 group-hover:text-gray-200"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Add Barang</span>
                    </a>
                </li>
                @endrole

                @role('PEGAWAI')
                <li>
                    <a href="{{ route('pinjam.index') }}"
                        class="{{ Request::is('dashboard/piminjaman-barang') ? 'bg-emerald-700' : '' }} flex items-center p-2 text-gray-200 rounded-tl-xl rounded-bl-xl hover:bg-emerald-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200 transition duration-75 group-hover:text-gray-200"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor"
                            viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 448c0 35.3 28.7 64 64 64H224V384c0-17.7 14.3-32 32-32H384V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64V448zM171.3 75.3l-96 96c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l96-96c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6zm96 32l-160 160c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l160-160c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6zM384 384H256V512L384 384z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Form Peminjaman</span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('user.index') }}"
                        class="{{ Request::is('dashboard/piminjaman-barang-user') ? 'bg-emerald-700' : '' }} flex items-center p-2 text-gray-200 rounded-tl-xl rounded-bl-xl hover:bg-emerald-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200 transition duration-75 group-hover:text-gray-200"
                        aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" height="1em" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">History Peminjam</span>
                    </a>
                </li>
                @endrole
        </ul>
    </div>
</aside>
