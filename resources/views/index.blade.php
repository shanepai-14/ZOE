<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- font awesome --}}
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
   
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
</head>

<body class="">


    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ZOE</span>
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dropdown<svg
                                            class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="doubleDropdown"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Overview</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                                                    downloads</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Billing</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Rewards</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('generate') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Generate</a>
                    </li>
                    <li>
                        <a href="#" id="printButton"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Print</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- printing --}}

    <div class="content">
        <div class="wrapper">
            <div id="header">
                <table>
                    <thead>
                        <tr>
                            <td id="logo">
                                {{-- <div id="img"> --}}
                                    <img src="{{ asset('images/logo.jpg') }}" alt="">
                            </td>
                            <td id="logo2">
                                <p id="p1">DZJV 1458</p>
                                <p id="p2">RADYO</p>
                                <p id="p3">CALABARZON</p>
                                <p id="p4">address here dwadaw</p>
                            </td>
                            <td id="icons">
                                <p><i class="fa-solid fa-location-dot"></i> #143 Barangay Parian, Calamba City, Laguna.</p>
                                <p><i class="fa-solid fa-envelope"></i> radyocalabarzon@dzjv.com.ph</p>
                                <p><i class="fa-solid fa-phone"></i> (0906)468-114 / (0906)682-1336</p>
                            </td>
                            <td id="title">
                                <h1>STATEMENT OF</h1>
                                <h1>ACCOUNT</h1>
                            </td>
                        </tr>
                    </thead>
                </table>
    
            </div>
            <div class="date">
                <p>Date: <span id="d">04 March 2024</span></p>
            </div>

            <div id="section-2">
                <div id="s-2-a">
                    <h1 id="s-title">ACCOUNT DETAILS</h1>
                    <div id="ad-1" class="ad-content-gray">
                        Contract No.
                    </div>
                    <div id="ad-2" class="ad-content">
                        20202-123
                    </div>
                    <div id="ad-3" class="ad-content-gray">
                        Account Holder
                    </div>
                    <div id="ad-4" class="ad-content">
                        <p>PTR. JANE DOE</p>
                        <p>District Pastor</p>
                        <p>Jesus is Lord Church</p>
                        <p>Somewhere Laguna</p>
                    </div>
                </div>
                <div id="s-2-b">
                    <h1 id="s-title">SERVICE DETAILS</h1>
                    <div id="s2-icons">
                        <span><i class="fa-solid fa-circle"></i> dwadawd</span>
                        <span><i class="fa-regular fa-circle"></i> dwadawd</span>
                        <span><i class="fa-regular fa-circle"></i> dwadawd</span>
                    </div>
                    <div class="s2-content">
                        <span>SUBJECT:</span>
                        <span id="content-right">dwadwadawdaw</span>
                    </div>
                    <div class="s2-content">
                        <span>SCHEDULED OF BROADCAST:</span>
                        <span id="content-right">dwadwadawdaw</span>
                    </div>
                    <div id="pob">
                        <span>Period of broadcast</span>
                    </div>
                    <div class="s2-content">
                        <span>START OF BROADCAST:</span>
                        <span id="content-right">dwadwadawdaw</span>
                    </div>
                    <div class="s2-content">
                        <span>END OF BROADCAST:</span>
                        <span id="content-right">dwadwadawdaw</span>
                    </div>
                    <div id="br">
                        <span>Billing Rate:</span>
                        <span>1,000.00</span>
                    </div>
                </div>
            </div>

            <div id="section-3">
                <div class="s3">
                    <h1>Recent Payments</h1>
                    <div id="payments">
                        <p>26 January 2024 - 4,000.00 (at the station)</p>
                    </div>
                </div>
                <div class="s3">
                    <h1>Billing and Payment Schedule</h1>
                    <table id="bps">
                        <tbody>
                            @for ($i = 1; $i <= 12; $i++)
                                @if ($i === 1)
                                <tr class="bpstr completed">
                                    <td class="bpstd">{{ $i }}st Billing</td>
                                    <td class="bpstd">January 5,12,19,26,2024</td>
                                    <td class="bpstd">4,000.00</td>
                                </tr>
                                @elseif ($i <= 3 && $i !== 1)
                                    <tr class="bpstr pending">
                                        <td class="bpstd"><i class="fa-solid fa-play"></i> {{ $i }}st Billing</td>
                                        <td class="bpstd">January 5,12,19,26,2024</td>
                                        <td class="bpstd">4,000.00</td>
                                    </tr>
                                @else
                                    <tr class="bpstr">
                                        <td class="bpstd">{{ $i }}st Billing</td>
                                        <td class="bpstd">January 5,12,19,26,2024</td>
                                        <td class="bpstd">4,000.00</td>
                                    </tr>
                                @endif
                                
                            @endfor
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="section-4">
                <div class="s4">
                    <h1>Notice</h1>
                    <ul>
                        <li>Please be reminded that we are bounded by a <b>"Pay Before Broadcast"</b> Policy.</li>
                        <li>Please priority to pay the scheduled billing.</li>
                        <li>Please assure that you settle your bill on or before the specified due dates.</li>
                    </ul>
                </div>
            </div>
            <div id="section-5">
                <div class="s5">
                    <h1>You can pay your bills at</h1>
                </div>
                
            </div>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#printButton').click(function() {
                // Clone the content div
                var $printContent = $('.content').clone();

                // Create a new window and append the cloned content
                var $printWindow = window.open('', '_blank');
                $printWindow.document.open();
                $printWindow.document.write(`<head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <title>Print</title>

                    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
                    <link rel="stylesheet" href="./css/print.css">
                </head>
                <body>`);
                $printWindow.document.write($printContent.html());
                $printWindow.document.write('</body></html>');
                $printWindow.document.close();

                // Print the new window
                setTimeout(() => {
                    $printWindow.print();
                }, 1000);
               
            })
        })
    </script>
</body>

</html>
