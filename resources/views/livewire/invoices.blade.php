<div>
    <div class="h-screen xl:w-5/6 2xl:w-3/5 px-[20px] py-[20px] xl:px-0 xl:py-10 2xl:py-16 mx-auto overflow-hidden">
        <div class="flex flex-col md:flex-row gap-4 items-center justify-between mb-8 md:mb-4">
            <h1 class="text-[28px] font-bold text-[#30313d]">Invoices</h1>
            <div class="flex items-center gap-2">
                <button class="flex items-center gap-1 rounded-md text-[#353a44] text-sm font-semibold bg-transparent border border-[#d8dee4] focus:outline-none hover:border-[#99a5b8] focus:ring-4 focus:ring-gray-100 px-2 py-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 md:flex-1 whitespace-nowrap ...">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 393 393.99" style="enable-background:new 0 0 512 512" xml:space="preserve" class="h-3 w-3">
                        <g><path d="M368.313 0H17.05A16.5 16.5 0 0 0 2.344 8.96a16.732 16.732 0 0 0 1.3 17.415l128.688 181.281c.043.063.09.121.133.184a36.769 36.769 0 0 1 7.219 21.816v147.797a16.429 16.429 0 0 0 16.433 16.535c2.227 0 4.426-.445 6.48-1.297l72.313-27.574c6.48-1.976 10.781-8.09 10.781-15.453V229.656a36.774 36.774 0 0 1 7.215-21.816c.043-.063.09-.121.133-.184L381.723 26.367a16.717 16.717 0 0 0 1.3-17.406A16.502 16.502 0 0 0 368.313 0zM236.78 195.992a56.931 56.931 0 0 0-11.097 33.664v117.578l-66 25.164V229.656a56.909 56.909 0 0 0-11.102-33.664L23.648 20h338.07zm0 0" opacity="1" data-original="#000000" class=""/>
                        </g>
                    </svg> Filter</button>
                <button class="flex items-center gap-1 rounded-md text-[#353a44] text-sm font-semibold bg-transparent border border-[#d8dee4] focus:outline-none hover:border-[#99a5b8] focus:ring-4 focus:ring-gray-100 px-2 py-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 md:flex-1 whitespace-nowrap ...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" class="h-3 w-3">
                        <g clip-path="url(#clip0_1023_180)">
                        <path d="M411.444 88.1928L200.338 82.2614C194.745 82.2015 189.352 84.3408 185.32 88.2187C181.289 92.0966 178.942 97.4028 178.785 102.994C178.628 108.586 180.673 114.015 184.48 118.114C188.288 122.212 193.552 124.65 199.14 124.905L358.766 129.39L86.1364 387.118C82.0248 391.005 79.6257 396.366 79.4668 402.022C79.3079 407.677 81.4022 413.165 85.289 417.276C89.1758 421.388 94.5368 423.787 100.193 423.946C105.848 424.105 111.335 422.01 115.447 418.124L388.077 160.395L383.592 320.021C383.463 322.851 383.899 325.678 384.875 328.338C385.85 330.997 387.346 333.436 389.274 335.511C391.202 337.586 393.524 339.257 396.104 340.425C398.685 341.594 401.472 342.236 404.304 342.316C407.136 342.396 409.955 341.91 412.597 340.889C415.239 339.867 417.651 338.33 419.693 336.366C421.734 334.402 423.364 332.051 424.488 329.451C425.611 326.85 426.205 324.052 426.235 321.22L432.167 110.114C432.325 104.459 430.231 98.9731 426.344 94.8623C422.458 90.7516 417.099 88.3526 411.444 88.1928Z" />
                        </g>
                        <defs>
                        <clipPath id="clip0_1023_180">
                        <rect width="512" height="512" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                Export</button>
                <button class="flex items-center gap-1 rounded-md text-white text-sm font-semibold bg-[#586CCE] focus:outline-none focus:ring-4 focus:ring-gray-100 px-2 py-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 md:flex-1 whitespace-nowrap ...">+ Create Invoice</button>
            </div>
        </div>
        <div x-data="{ selectedTab: 'all_invoice' }" class="w-full">
            <div x-on:keydown.right.prevent="$focus.wrap().next()" x-on:keydown.left.prevent="$focus.wrap().previous()" class="flex gap-4 md:gap-8 overflow-x-auto border-b border-neutral-300 dark:border-neutral-700" role="tablist" aria-label="tab options">
                <button 
                x-on:click="selectedTab = 'all_invoice'" 
                x-bind:aria-selected="selectedTab === 'all_invoice'" 
                x-bind:tabindex="selectedTab === 'all_invoice' ? '0' : '-1'" 
                x-bind:class="selectedTab === 'all_invoice' ? 'active font-medium text-[#586CCE] border-b-2 border-[#586CCE] dark:border-white dark:text-white' : 'text-neutral-600 font-medium dark:text-neutral-300 dark:hover:border-b-neutral-300 dark:hover:text-white hover:border-b-2 hover:border-b-[#586CCE] hover:text-[#586CCE]'" 
                class="h-min pb-1 text-sm active:border-b-[#586CCE] active:text-[#586CCE] font-medium hover:font-medium" 
                type="button" 
                role="tab" 
                aria-controls="tabpanelAllInvoice" >
                    All Invoices
                </button>
                
                <button x-on:click="selectedTab = 'draft'" 
                x-bind:aria-selected="selectedTab === 'draft'" 
                x-bind:tabindex="selectedTab === 'draft' ? '0' : '-1'" 
                x-bind:class="selectedTab === 'draft' ? 'active font-medium text-[#586CCE] border-b-2 border-[#586CCE] dark:border-white dark:text-white' : 'text-neutral-600 font-medium dark:text-neutral-300 dark:hover:border-b-neutral-300 dark:hover:text-white hover:border-b-2 hover:border-b-[#586CCE] hover:text-[#586CCE]'" 
                class="h-min pb-1 text-sm active:border-b-[#586CCE] active:text-[#586CCE] font-medium hover:font-medium" 
                type="button" role="tab"
                 aria-controls="tabpanelDraft" >
                    Draft
                </button>
    
                <button x-on:click="selectedTab = 'outstanding'" 
                x-bind:aria-selected="selectedTab === 'outstanding'" 
                x-bind:tabindex="selectedTab === 'outstanding' ? '0' : '-1'" 
                x-bind:class="selectedTab === 'outstanding' ? 'active font-medium text-[#586CCE] border-b-2 border-[#586CCE] dark:border-white dark:text-white' : 'text-neutral-600 font-medium dark:text-neutral-300 dark:hover:border-b-neutral-300 dark:hover:text-white hover:border-b-2 hover:border-b-[#586CCE] hover:text-[#586CCE]'" 
                class="h-min pb-1 text-sm active:border-b-[#586CCE] active:text-[#586CCE] font-medium hover:font-medium" 
                type="button" role="tab" 
                aria-controls="tabpanelOutstanding">
                    Outstanding
                </button>
    
                <button x-on:click="selectedTab = 'past_due'" 
                x-bind:aria-selected="selectedTab === 'past_due'" 
                x-bind:tabindex="selectedTab === 'past_due' ? '0' : '-1'" 
                x-bind:class="selectedTab === 'past_due' ? 'active font-medium text-[#586CCE] border-b-2 border-[#586CCE] dark:border-white dark:text-white' : 'text-neutral-600 font-medium dark:text-neutral-300 dark:hover:border-b-neutral-300 dark:hover:text-white hover:border-b-2 hover:border-b-[#586CCE] hover:text-[#586CCE]'" 
                class="h-min pb-1 text-sm active:border-b-[#586CCE] active:text-[#586CCE] font-medium hover:font-medium" 
                type="button" 
                role="tab" 
                aria-controls="tabpanelPastdue" >
                    Past due
                </button>
    
                <button x-on:click="selectedTab = 'paid'" 
                x-bind:aria-selected="selectedTab === 'paid'" 
                x-bind:tabindex="selectedTab === 'paid' ? '0' : '-1'" 
                x-bind:class="selectedTab === 'paid' ? 'active font-medium text-[#586CCE] border-b-2 border-[#586CCE] dark:border-white dark:text-white' : 'text-neutral-600 font-medium dark:text-neutral-300 dark:hover:border-b-neutral-300 dark:hover:text-white hover:border-b-2 hover:border-b-[#586CCE] hover:text-[#586CCE]'" 
                class="h-min pb-1 text-sm active:border-b-[#586CCE] active:text-[#586CCE] font-medium hover:font-medium" 
                type="button" 
                role="tab" 
                aria-controls="tabpanelPaid">
                    Paid
                </button>
    
            </div>
            <div class="text-neutral-600 dark:text-neutral-300 h-[calc(100vh-164px)] xl:h-[calc(100vh-187px)] 2xl:h-[calc(100vh-242px)] overflow-y-auto mt-4 [&::-webkit-scrollbar]:w-0">
                <div x-cloak x-show="selectedTab === 'all_invoice'" id="tabpanelAllInvoice" role="tabpanel" aria-label="all_invoice">
                    <table class="w-full overflow-x-scroll lg:overflow-auto">
                        <thead>
                            <tr class="">
                                <th class="w-full xl:w-[18%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Amount</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Invoice Number</th>
                                <th class="xl:w-[43%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Customer</th>
                                <th class="xl:w-[5%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Due</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Created</th>
                                <th class="xl:w-[10%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr class="hover:bg-[#f5f6f8]" x-data="{ status: '{{ $invoice->status }}' }">
                                    <td class="text-left items-center text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">
                                        <div class="flex items-start lg:items-center flex-col lg:flex-row gap-1 lg:gap-3">
                                            <div class="flex items-center text-[12px] md:text-xs gap-1.5 lg:gap-3"> {{ $invoice->amount_with_currency }}
                                                <span>
                                                    <svg aria-hidden="true" width="14" height="14" class="h-3 w-3" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="⚙ as4o as4p as4q asal as7r as5j as5k ⚙1kve79q">
                                                        <path d="M8 1a.75.75 0 1 0 0 1.5c1.757 0 3.474.883 4.547 2.47.817 1.212.997 2.864.608 4.482-.287 1.192-.868 2.304-1.655 3.141V10.25a.75.75 0 0 0-1.5 0v4c0 .414.336.75.75.75h3.75a.75.75 0 0 0 0-1.5h-1.796c.93-1.034 1.584-2.343 1.91-3.697.46-1.912.288-4.024-.824-5.672C12.443 2.137 10.263 1 8 1ZM4 5.75a.75.75 0 0 0 1.5 0v-4A.75.75 0 0 0 4.75 1H1a.75.75 0 0 0 0 1.5h1.796c-.93 1.034-1.584 2.343-1.91 3.697-.46 1.912-.288 4.024.824 5.673C3.057 13.863 5.237 15 7.5 15a.75.75 0 0 0 0-1.5c-1.757 0-3.474-.883-4.547-2.47-.817-1.212-.997-2.864-.608-4.482.287-1.192.868-2.304 1.655-3.141V5.75Z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            
                                            <span x-show="status === 'draft'" class="bg-gray-100 text-gray-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-gray-700 dark:text-gray-300 inline-block lg:mt-0">Draft</span>
                                            <span x-show="status === 'outstanding'" class="bg-red-100 text-red-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-red-900 dark:text-red-300 inline-block lg:mt-0">Outstanding</span>
                                            <span x-show="status === 'paid'" class="bg-green-100 text-green-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-green-900 dark:text-green-300 inline-block lg:mt-0">Paid</span>
                                            <span x-show="status === 'past-due'" class="bg-yellow-100 text-yellow-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-yellow-900 dark:text-yellow-300 inline-block lg:mt-0">Past-due</span>
                                        </div>
                                        
                                    </td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->invoice_number }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->users->email }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->due_date ?? '--' }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ dateFormate($invoice->created_at) }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2 relative">
                                        <div x-data="{ open: false }" class="flex justify-center items-center text-left">
                                            <button @click="open = !open" class="text-2xl text-gray-700 -mt-3">
                                                ...
                                            </button>
                                            <div x-show="open" @click.away="open = false" x-cloak 
                                                class="absolute right-0 mt-2 bg-white border border-gray-300 rounded shadow-md w-48 z-10">
                                                <a href="#" data-action="mark_as_paid" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Paid
                                                </a>                                                
                                                <a href="#" data-action="mark_as_draft" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Draft
                                                </a>
                                                <a href="#" data-action="delete_row" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-red-700 hover:bg-gray-100">
                                                    Delete Invoice
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div x-cloak x-show="selectedTab === 'draft'" id="tabpanelDraft" role="tabpanel" aria-label="draft">
                    <table class="w-full overflow-x-scroll lg:overflow-auto">
                        <thead>
                            <tr class="">
                                <th class="w-full xl:w-[18%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Amount</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Invoice Number</th>
                                <th class="xl:w-[43%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Customer</th>
                                <th class="xl:w-[5%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Due</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Created</th>
                                <th class="xl:w-[10%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($draftInvoices as $invoice)
                                <tr class="hover:bg-[#f5f6f8]" x-data="{ status: '{{ $invoice->status }}' }">
                                    <td class="text-left items-center text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">
                                        <div class="flex items-start lg:items-center flex-col lg:flex-row gap-1 lg:gap-3">
                                            <div class="flex items-center text-[12px] md:text-xs gap-1.5 lg:gap-3"> {{ $invoice->amount_with_currency }}
                                                <span>
                                                    <svg aria-hidden="true" width="14" height="14" class="h-3 w-3" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="⚙ as4o as4p as4q asal as7r as5j as5k ⚙1kve79q">
                                                        <path d="M8 1a.75.75 0 1 0 0 1.5c1.757 0 3.474.883 4.547 2.47.817 1.212.997 2.864.608 4.482-.287 1.192-.868 2.304-1.655 3.141V10.25a.75.75 0 0 0-1.5 0v4c0 .414.336.75.75.75h3.75a.75.75 0 0 0 0-1.5h-1.796c.93-1.034 1.584-2.343 1.91-3.697.46-1.912.288-4.024-.824-5.672C12.443 2.137 10.263 1 8 1ZM4 5.75a.75.75 0 0 0 1.5 0v-4A.75.75 0 0 0 4.75 1H1a.75.75 0 0 0 0 1.5h1.796c-.93 1.034-1.584 2.343-1.91 3.697-.46 1.912-.288 4.024.824 5.673C3.057 13.863 5.237 15 7.5 15a.75.75 0 0 0 0-1.5c-1.757 0-3.474-.883-4.547-2.47-.817-1.212-.997-2.864-.608-4.482.287-1.192.868-2.304 1.655-3.141V5.75Z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            
                                            <span x-show="status === 'draft'" class="bg-gray-100 text-gray-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-gray-700 dark:text-gray-300 inline-block lg:mt-0">Draft</span>
                                            <span x-show="status === 'outstanding'" class="bg-red-100 text-red-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-red-900 dark:text-red-300 inline-block lg:mt-0">Outstanding</span>
                                            <span x-show="status === 'paid'" class="bg-green-100 text-green-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-green-900 dark:text-green-300 inline-block lg:mt-0">Paid</span>
                                            <span x-show="status === 'past-due'" class="bg-yellow-100 text-yellow-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-yellow-900 dark:text-yellow-300 inline-block lg:mt-0">Past-due</span>
                                        </div>
                                        
                                    </td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->invoice_number }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->users->email }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->due_date ?? '--' }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ dateFormate($invoice->created_at) }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2 relative">
                                        <div x-data="{ open: false }" class="flex justify-center items-center text-left">
                                            <button @click="open = !open" class="text-2xl text-gray-700 -mt-3">
                                                ...
                                            </button>
                                            <div x-show="open" @click.away="open = false" x-cloak 
                                                class="absolute right-0 mt-2 bg-white border border-gray-300 rounded shadow-md w-48 z-10">
                                                <a href="#" data-action="mark_as_paid" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Paid
                                                </a>                                                
                                                <a href="#" data-action="mark_as_draft" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Draft
                                                </a>
                                                <a href="#" data-action="delete_row" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-red-700 hover:bg-gray-100">
                                                    Delete Invoice
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div x-cloak x-show="selectedTab === 'outstanding'" id="tabpanelOutstanding" role="tabpanel" aria-label="outstanding">
                    <table class="w-full overflow-x-scroll lg:overflow-auto">
                        <thead>
                            <tr class="">
                                <th class="w-full xl:w-[18%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Amount</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Invoice Number</th>
                                <th class="xl:w-[43%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Customer</th>
                                <th class="xl:w-[5%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Due</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Created</th>
                                <th class="xl:w-[10%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($outstandingInvoices as $invoice)
                                <tr class="hover:bg-[#f5f6f8]" x-data="{ status: '{{ $invoice->status }}' }">
                                    <td class="text-left items-center text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">
                                        <div class="flex items-start lg:items-center flex-col lg:flex-row gap-1 lg:gap-3">
                                            <div class="flex items-center text-[12px] md:text-xs gap-1.5 lg:gap-3"> {{ $invoice->amount_with_currency }}
                                                <span>
                                                    <svg aria-hidden="true" width="14" height="14" class="h-3 w-3" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="⚙ as4o as4p as4q asal as7r as5j as5k ⚙1kve79q">
                                                        <path d="M8 1a.75.75 0 1 0 0 1.5c1.757 0 3.474.883 4.547 2.47.817 1.212.997 2.864.608 4.482-.287 1.192-.868 2.304-1.655 3.141V10.25a.75.75 0 0 0-1.5 0v4c0 .414.336.75.75.75h3.75a.75.75 0 0 0 0-1.5h-1.796c.93-1.034 1.584-2.343 1.91-3.697.46-1.912.288-4.024-.824-5.672C12.443 2.137 10.263 1 8 1ZM4 5.75a.75.75 0 0 0 1.5 0v-4A.75.75 0 0 0 4.75 1H1a.75.75 0 0 0 0 1.5h1.796c-.93 1.034-1.584 2.343-1.91 3.697-.46 1.912-.288 4.024.824 5.673C3.057 13.863 5.237 15 7.5 15a.75.75 0 0 0 0-1.5c-1.757 0-3.474-.883-4.547-2.47-.817-1.212-.997-2.864-.608-4.482.287-1.192.868-2.304 1.655-3.141V5.75Z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            
                                            <span x-show="status === 'draft'" class="bg-gray-100 text-gray-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-gray-700 dark:text-gray-300 inline-block lg:mt-0">Draft</span>
                                            <span x-show="status === 'outstanding'" class="bg-red-100 text-red-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-red-900 dark:text-red-300 inline-block lg:mt-0">Outstanding</span>
                                            <span x-show="status === 'paid'" class="bg-green-100 text-green-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-green-900 dark:text-green-300 inline-block lg:mt-0">Paid</span>
                                            <span x-show="status === 'past-due'" class="bg-yellow-100 text-yellow-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-yellow-900 dark:text-yellow-300 inline-block lg:mt-0">Past-due</span>
                                        </div>
                                        
                                    </td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->invoice_number }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->users->email }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->due_date ?? '--' }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ dateFormate($invoice->created_at) }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2 relative">
                                        <div x-data="{ open: false }" class="flex justify-center items-center text-left">
                                            <button @click="open = !open" class="text-2xl text-gray-700 -mt-3">
                                                ...
                                            </button>
                                            <div x-show="open" @click.away="open = false" x-cloak 
                                                class="absolute right-0 mt-2 bg-white border border-gray-300 rounded shadow-md w-48 z-10">
                                                <a href="#" data-action="mark_as_paid" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Paid
                                                </a>                                                
                                                <a href="#" data-action="mark_as_draft" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Draft
                                                </a>
                                                <a href="#" data-action="delete_row" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-red-700 hover:bg-gray-100">
                                                    Delete Invoice
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div x-cloak x-show="selectedTab === 'past_due'" id="tabpanelPastdue" role="tabpanel" aria-label="past_due">
                    <table class="w-full overflow-x-scroll lg:overflow-auto">
                        <thead>
                            <tr class="">
                                <th class="w-full xl:w-[18%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Amount</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Invoice Number</th>
                                <th class="xl:w-[43%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Customer</th>
                                <th class="xl:w-[5%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Due</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Created</th>
                                <th class="xl:w-[10%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pastDueInvoices as $invoice)
                                <tr class="hover:bg-[#f5f6f8]" x-data="{ status: '{{ $invoice->status }}' }">
                                    <td class="text-left items-center text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">
                                        <div class="flex items-start lg:items-center flex-col lg:flex-row gap-1 lg:gap-3">
                                            <div class="flex items-center text-[12px] md:text-xs gap-1.5 lg:gap-3"> {{ $invoice->amount_with_currency }}
                                                <span>
                                                    <svg aria-hidden="true" width="14" height="14" class="h-3 w-3" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="⚙ as4o as4p as4q asal as7r as5j as5k ⚙1kve79q">
                                                        <path d="M8 1a.75.75 0 1 0 0 1.5c1.757 0 3.474.883 4.547 2.47.817 1.212.997 2.864.608 4.482-.287 1.192-.868 2.304-1.655 3.141V10.25a.75.75 0 0 0-1.5 0v4c0 .414.336.75.75.75h3.75a.75.75 0 0 0 0-1.5h-1.796c.93-1.034 1.584-2.343 1.91-3.697.46-1.912.288-4.024-.824-5.672C12.443 2.137 10.263 1 8 1ZM4 5.75a.75.75 0 0 0 1.5 0v-4A.75.75 0 0 0 4.75 1H1a.75.75 0 0 0 0 1.5h1.796c-.93 1.034-1.584 2.343-1.91 3.697-.46 1.912-.288 4.024.824 5.673C3.057 13.863 5.237 15 7.5 15a.75.75 0 0 0 0-1.5c-1.757 0-3.474-.883-4.547-2.47-.817-1.212-.997-2.864-.608-4.482.287-1.192.868-2.304 1.655-3.141V5.75Z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            
                                            <span x-show="status === 'draft'" class="bg-gray-100 text-gray-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-gray-700 dark:text-gray-300 inline-block lg:mt-0">Draft</span>
                                            <span x-show="status === 'outstanding'" class="bg-red-100 text-red-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-red-900 dark:text-red-300 inline-block lg:mt-0">Outstanding</span>
                                            <span x-show="status === 'paid'" class="bg-green-100 text-green-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-green-900 dark:text-green-300 inline-block lg:mt-0">Paid</span>
                                            <span x-show="status === 'past-due'" class="bg-yellow-100 text-yellow-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-yellow-900 dark:text-yellow-300 inline-block lg:mt-0">Past-due</span>
                                        </div>
                                        
                                    </td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->invoice_number }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->users->email }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->due_date ?? '--' }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ dateFormate($invoice->created_at) }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2 relative">
                                        <div x-data="{ open: false }" class="flex justify-center items-center text-left">
                                            <button @click="open = !open" class="text-2xl text-gray-700 -mt-3">
                                                ...
                                            </button>
                                            <div x-show="open" @click.away="open = false" x-cloak 
                                                class="absolute right-0 mt-2 bg-white border border-gray-300 rounded shadow-md w-48 z-10">
                                                <a href="#" data-action="mark_as_paid" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Paid
                                                </a>                                                
                                                <a href="#" data-action="mark_as_draft" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Draft
                                                </a>
                                                <a href="#" data-action="delete_row" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-red-700 hover:bg-gray-100">
                                                    Delete Invoice
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div x-cloak x-show="selectedTab === 'paid'" id="tabpanelPaid" role="tabpanel" aria-label="paid">
                    <table class="w-full overflow-x-scroll lg:overflow-auto">
                        <thead>
                            <tr class="">
                                <th class="w-full xl:w-[18%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Amount</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Invoice Number</th>
                                <th class="xl:w-[43%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Customer</th>
                                <th class="xl:w-[5%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Due</th>
                                <th class="xl:w-[12%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2">Created</th>
                                <th class="xl:w-[10%] text-left text-[#353a44] text-sm font-semibold uppercase border-b pl-2 pr-3 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paidInvoices as $invoice)
                                <tr class="hover:bg-[#f5f6f8]" x-data="{ status: '{{ $invoice->status }}' }">
                                    <td class="text-left items-center text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">
                                        <div class="flex items-start lg:items-center flex-col lg:flex-row gap-1 lg:gap-3">
                                            <div class="flex items-center text-[12px] md:text-xs gap-1.5 lg:gap-3"> {{ $invoice->amount_with_currency }}
                                                <span>
                                                    <svg aria-hidden="true" width="14" height="14" class="h-3 w-3" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="⚙ as4o as4p as4q asal as7r as5j as5k ⚙1kve79q">
                                                        <path d="M8 1a.75.75 0 1 0 0 1.5c1.757 0 3.474.883 4.547 2.47.817 1.212.997 2.864.608 4.482-.287 1.192-.868 2.304-1.655 3.141V10.25a.75.75 0 0 0-1.5 0v4c0 .414.336.75.75.75h3.75a.75.75 0 0 0 0-1.5h-1.796c.93-1.034 1.584-2.343 1.91-3.697.46-1.912.288-4.024-.824-5.672C12.443 2.137 10.263 1 8 1ZM4 5.75a.75.75 0 0 0 1.5 0v-4A.75.75 0 0 0 4.75 1H1a.75.75 0 0 0 0 1.5h1.796c-.93 1.034-1.584 2.343-1.91 3.697-.46 1.912-.288 4.024.824 5.673C3.057 13.863 5.237 15 7.5 15a.75.75 0 0 0 0-1.5c-1.757 0-3.474-.883-4.547-2.47-.817-1.212-.997-2.864-.608-4.482.287-1.192.868-2.304 1.655-3.141V5.75Z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            
                                            <span x-show="status === 'draft'" class="bg-gray-100 text-gray-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-gray-700 dark:text-gray-300 inline-block lg:mt-0">Draft</span>
                                            <span x-show="status === 'outstanding'" class="bg-red-100 text-red-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-red-900 dark:text-red-300 inline-block lg:mt-0">Outstanding</span>
                                            <span x-show="status === 'paid'" class="bg-green-100 text-green-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-green-900 dark:text-green-300 inline-block lg:mt-0">Paid</span>
                                            <span x-show="status === 'past-due'" class="bg-yellow-100 text-yellow-800 text-xs capitalize font-medium px-1.5 py-0.5 rounded-[4px] dark:bg-yellow-900 dark:text-yellow-300 inline-block lg:mt-0">Past-due</span>
                                        </div>
                                        
                                    </td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->invoice_number }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->users->email }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ $invoice->due_date ?? '--' }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2">{{ dateFormate($invoice->created_at) }}</td>
                                    <td class="text-left text-[#353a44] text-sm font-normal uppercase border-b pl-2 pr-2 xl:pr-3 py-2 relative">
                                        <div x-data="{ open: false }" class="flex justify-center items-center text-left">
                                            <button @click="open = !open" class="text-2xl text-gray-700 -mt-3">
                                                ...
                                            </button>
                                            <div x-show="open" @click.away="open = false" x-cloak 
                                                class="absolute right-0 mt-2 bg-white border border-gray-300 rounded shadow-md w-48 z-10">
                                                <a href="#" data-action="mark_as_paid" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Paid
                                                </a>                                                
                                                <a href="#" data-action="mark_as_draft" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                                    Mark as Draft
                                                </a>
                                                <a href="#" data-action="delete_row" data-invoice-id="{{ $invoice->id }}" class="block w-full text-left px-4 py-2 text-red-700 hover:bg-gray-100">
                                                    Delete Invoice
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('[data-action="delete_row"]').forEach(function (element) {
            element.addEventListener('click', function () {
                Swal.fire({
                    text: 'Are you sure you want to remove?',
                    icon: 'warning',
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No',
                    customClass: {
                        confirmButton: 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800',
                        cancelButton: 'focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('delete_invoice', [this.getAttribute('data-invoice-id')]);
                    }
                });
            });
        });

        document.querySelectorAll('[data-action="mark_as_paid"]').forEach(function (element) {
            element.addEventListener('click', function () {
                Swal.fire({
                    text: 'Are you sure you want change mark as paid this invoice?',
                    icon: 'warning',
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No',
                    customClass: {
                        confirmButton: 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800',
                        cancelButton: 'focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('mark_as_paid', [this.getAttribute('data-invoice-id')]);
                    }
                });
            });
        });

        document.querySelectorAll('[data-action="mark_as_draft"]').forEach(function (element) {
            element.addEventListener('click', function () {
                Swal.fire({
                    text: 'Are you sure you want to remove?',
                    icon: 'warning',
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No',
                    customClass: {
                        confirmButton: 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800',
                        cancelButton: 'focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('mark_as_draft', [this.getAttribute('data-invoice-id')]);
                    }
                });
            });
        });
    </script>
</div>
