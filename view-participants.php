<?php         include('./db.php') ;



    $request_id = $_REQUEST['id'];
    
    $sql = "SELECT * FROM tbl_swimming WHERE s_id = '$request_id' limit 1";
    if ($query=$conn->query($sql)) {
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $gameTitle = $row['title'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./tailwind.css">
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>

</head>

<body class="">

    <div class="h-screen flex overflow-hidden bg-gray-100">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
            <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

            <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
            <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-800">
                <!--
        Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-shrink-0 flex items-center px-4">
                    <img class="h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
                        alt="Workflow">
                </div>
                <div class="mt-5 flex-1 h-0 overflow-y-auto">
                    <nav class="px-2 space-y-1">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#"
                            class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!--
              Heroicon name: outline/home

              Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
            -->
                            <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/users -->
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Team
                        </a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/folder -->
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            Projects
                        </a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/calendar -->
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Calendar
                        </a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/inbox -->
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                            Documents
                        </a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Reports
                        </a>
                    </nav>
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex-1 flex flex-col min-h-0">
                    <div class="flex items-center h-16 flex-shrink-0 px-4 bg-gray-900">
                        <img class="h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
                            alt="Workflow">
                    </div>
                    <div class="flex-1 flex flex-col overflow-y-auto">
                        <nav class="flex-1 px-2 py-4 bg-gray-800 space-y-1">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="index.php"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <!--
                Heroicon name: outline/home

                Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
              -->
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </a>

                            <a href="swimming.php"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <!-- Heroicon name: outline/users -->
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"
                                    class="h-6 w-6 mr-1">
                                    <path
                                        d="M 22.5 12 C 22.007813 12 21.589844 12.207031 21.167969 12.390625 C 21.011719 12.386719 20.855469 12.425781 20.714844 12.496094 L 8.980469 18.347656 C 8.8125 18.429688 8.671875 18.558594 8.578125 18.71875 C 7.671875 19.351563 7 20.3125 7 21.5 C 7 23.421875 8.578125 25 10.5 25 C 10.917969 25 11.269531 24.847656 11.628906 24.714844 C 11.785156 24.71875 11.941406 24.6875 12.082031 24.621094 L 21.203125 20.328125 L 23.414063 23.917969 L 7.582031 33.558594 C 3.734375 32.164063 1.679688 30.265625 1.679688 30.265625 C 1.480469 30.078125 1.21875 29.980469 0.945313 29.992188 C 0.539063 30.007813 0.183594 30.269531 0.046875 30.652344 C -0.0898438 31.035156 0.0195313 31.464844 0.320313 31.734375 C 0.320313 31.734375 2.789063 33.96875 7.242188 35.527344 C 7.335938 35.578125 7.4375 35.613281 7.542969 35.628906 C 9.867188 36.410156 12.695313 37 16 37 C 20.921875 37 24.386719 35.953125 27.371094 34.949219 C 30.351563 33.941406 32.8125 33 36 33 C 42.371094 33 48.457031 36.84375 48.457031 36.84375 C 48.925781 37.140625 49.542969 37.007813 49.84375 36.542969 C 50.140625 36.074219 50.007813 35.457031 49.542969 35.15625 C 49.542969 35.15625 43.160156 31 36 31 C 35.617188 31 35.246094 31.019531 34.878906 31.042969 C 34.949219 30.703125 35 30.355469 35 30 C 35 29.214844 34.699219 28.53125 34.378906 27.878906 C 34.382813 27.683594 34.328125 27.488281 34.222656 27.324219 L 25.421875 13.574219 C 25.417969 13.570313 25.414063 13.5625 25.410156 13.558594 C 24.785156 12.621094 23.707031 12 22.5 12 Z M 22.5 14 C 23.027344 14 23.476563 14.265625 23.746094 14.667969 L 32.1875 27.847656 L 32.542969 27.3125 C 32.324219 27.644531 32.316406 28.070313 32.53125 28.40625 C 32.828125 28.875 33 29.414063 33 30 C 33 30.476563 32.886719 30.917969 32.691406 31.3125 C 30.585938 31.699219 28.695313 32.386719 26.730469 33.050781 C 23.792969 34.046875 20.644531 35 16 35 C 13.820313 35 11.878906 34.730469 10.171875 34.324219 L 25.3125 25.105469 C 25.539063 24.964844 25.703125 24.742188 25.765625 24.484375 C 25.824219 24.222656 25.78125 23.949219 25.640625 23.722656 L 22.4375 18.515625 C 22.167969 18.085938 21.617188 17.921875 21.15625 18.136719 L 12.113281 22.394531 L 12.546875 23.261719 C 12.425781 23.019531 12.214844 22.839844 11.957031 22.753906 C 11.703125 22.671875 11.425781 22.695313 11.1875 22.820313 C 10.964844 22.9375 10.738281 23 10.5 23 C 9.65625 23 9 22.34375 9 21.5 C 9 20.894531 9.351563 20.394531 9.859375 20.152344 C 9.902344 20.132813 9.9375 20.109375 9.976563 20.085938 L 21.292969 14.441406 L 20.953125 14.363281 C 21.210938 14.421875 21.480469 14.375 21.703125 14.234375 C 21.945313 14.082031 22.207031 14 22.5 14 Z M 39.5 18 C 36.472656 18 34 20.472656 34 23.5 C 34 26.527344 36.472656 29 39.5 29 C 42.523438 29 45 26.527344 45 23.5 C 45 20.472656 42.523438 18 39.5 18 Z M 39.5 20 C 41.445313 20 43 21.554688 43 23.5 C 43 25.445313 41.445313 27 39.5 27 C 37.550781 27 36 25.449219 36 23.5 C 36 21.554688 37.554688 20 39.5 20 Z" />
                                </svg>
                                Swimming
                            </a>

                            <a href="track-and-field.php"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <!-- Heroicon name: outline/folder -->
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"
                                    class="h-6 w-6 mr-1">
                                    <path
                                        d="M 35 2 C 32.25 2 30 4.25 30 7 C 30 9.746094 32.25 12 35 12 C 37.75 12 40 9.746094 40 7 C 40 4.25 37.75 2 35 2 Z M 35 4 C 36.671875 4 38 5.332031 38 7 C 38 8.667969 36.671875 10 35 10 C 33.332031 10 32 8.667969 32 7 C 32 5.332031 33.332031 4 35 4 Z M 20 9 C 19.480469 9 18.992188 9.144531 18.574219 9.375 C 18.476563 9.40625 18.386719 9.453125 18.300781 9.507813 L 11.375 14.484375 C 11.253906 14.570313 11.152344 14.683594 11.082031 14.8125 C 10.457031 15.363281 10 16.105469 10 17 C 10 18.644531 11.355469 20 13 20 C 13.488281 20 13.871094 19.734375 14.277344 19.527344 C 14.488281 19.53125 14.699219 19.464844 14.871094 19.339844 L 20.457031 15.324219 L 23.171875 16.183594 L 18.90625 23.136719 C 18.859375 23.214844 18.820313 23.296875 18.796875 23.382813 C 18.359375 24.085938 18.0625 24.894531 18.015625 25.773438 C 17.992188 25.804688 17.972656 25.835938 17.953125 25.867188 L 14.691406 31 L 7.5 31 C 5.578125 31 4 32.578125 4 34.5 C 4 36.421875 5.578125 38 7.5 38 L 15.933594 38 C 17.550781 38 19.074219 37.210938 20.011719 35.890625 L 22.910156 31.796875 L 27.640625 34.714844 L 26.0625 42.820313 C 26.050781 42.886719 26.046875 42.957031 26.046875 43.027344 C 26.023438 43.179688 26 43.335938 26 43.5 C 26 45.421875 27.578125 47 29.5 47 C 30.957031 47 32.070313 46.011719 32.59375 44.734375 C 32.773438 44.582031 32.894531 44.378906 32.9375 44.148438 L 32.9375 44.144531 L 34.964844 33.476563 C 34.980469 33.398438 34.984375 33.316406 34.980469 33.234375 C 34.988281 33.164063 35 33.121094 35 33 C 35 32.269531 34.691406 31.636719 34.261719 31.121094 C 34.203125 30.980469 34.113281 30.859375 34.003906 30.761719 L 29.175781 26.484375 L 30.863281 23.152344 L 32.269531 26.25 C 32.300781 26.320313 32.339844 26.382813 32.382813 26.441406 C 32.894531 27.363281 33.875 28 35 28 L 42 28 C 43.644531 28 45 26.644531 45 25 C 45 23.355469 43.644531 22 42 22 L 36.664063 22 L 33.96875 15.578125 C 33.824219 14.339844 33.050781 13.332031 32.027344 12.695313 C 31.9375 12.5625 31.816406 12.449219 31.675781 12.371094 L 29.171875 10.972656 C 29.085938 10.925781 28.996094 10.890625 28.898438 10.871094 L 20.734375 9.089844 C 20.65625 9.074219 20.578125 9.066406 20.5 9.070313 C 20.339844 9.039063 20.191406 9 20 9 Z M 20 11 C 20.0625 11 20.140625 11.011719 20.25 11.039063 C 20.378906 11.070313 20.511719 11.078125 20.640625 11.0625 L 20.484375 11.082031 L 28.328125 12.796875 L 30.363281 13.929688 L 30.246094 13.566406 C 30.335938 13.835938 30.535156 14.054688 30.796875 14.167969 C 31.503906 14.472656 32 15.171875 32 16 C 32 16.347656 31.90625 16.667969 31.734375 16.972656 C 31.597656 17.210938 31.566406 17.488281 31.640625 17.75 L 31.53125 17.398438 L 27.046875 26.269531 C 26.839844 26.675781 26.933594 27.167969 27.277344 27.46875 L 32.484375 32.089844 L 32.40625 31.875 C 32.464844 32.023438 32.554688 32.160156 32.671875 32.265625 C 32.875 32.457031 33 32.707031 33 33 C 33 32.980469 32.996094 33.019531 32.984375 33.140625 C 32.960938 33.296875 32.980469 33.457031 33.03125 33.605469 L 32.949219 33.371094 L 31.128906 42.960938 L 31.953125 42.960938 C 31.472656 42.960938 31.058594 43.304688 30.96875 43.777344 C 30.839844 44.472656 30.242188 45 29.5 45 C 28.660156 45 28 44.339844 28 43.5 C 28 43.402344 28.011719 43.304688 28.03125 43.203125 C 28.03125 43.191406 28.035156 43.179688 28.035156 43.167969 L 29.734375 34.417969 C 29.8125 34.007813 29.632813 33.59375 29.277344 33.375 L 22.039063 28.90625 L 22.136719 29.292969 C 22.066406 29.011719 21.878906 28.777344 21.625 28.644531 C 20.660156 28.144531 20 27.164063 20 26 C 20 25.347656 20.210938 24.753906 20.570313 24.253906 C 20.746094 24.007813 20.804688 23.699219 20.722656 23.40625 L 20.832031 23.8125 L 25.542969 16.140625 C 25.703125 15.878906 25.734375 15.554688 25.628906 15.269531 C 25.519531 14.980469 25.285156 14.757813 24.992188 14.664063 L 20.582031 13.265625 C 20.28125 13.167969 19.953125 13.222656 19.699219 13.40625 L 13.800781 17.644531 C 13.742188 17.679688 13.6875 17.714844 13.636719 17.757813 C 13.453125 17.914063 13.242188 18 13 18 C 12.433594 18 12 17.566406 12 17 C 12 16.632813 12.191406 16.332031 12.484375 16.15625 C 12.535156 16.121094 12.585938 16.085938 12.628906 16.042969 C 12.632813 16.039063 12.636719 16.035156 12.640625 16.03125 L 19.277344 11.273438 L 19.089844 11.300781 C 19.222656 11.28125 19.351563 11.230469 19.46875 11.15625 C 19.628906 11.054688 19.804688 11 20 11 Z M 33.113281 18.703125 L 35.078125 23.386719 C 35.234375 23.757813 35.597656 24 36 24 L 42 24 C 42.566406 24 43 24.433594 43 25 C 43 25.566406 42.566406 26 42 26 L 35 26 C 34.59375 26 34.257813 25.761719 34.097656 25.421875 C 34.027344 25.269531 33.917969 25.136719 33.78125 25.039063 L 33.972656 25.167969 L 32.019531 20.859375 Z M 18.703125 28.417969 C 19.109375 29.070313 19.664063 29.625 20.308594 30.058594 C 20.390625 30.195313 20.503906 30.3125 20.640625 30.394531 L 21.207031 30.746094 L 18.378906 34.734375 C 17.816406 35.527344 16.90625 36 15.933594 36 L 7.5 36 C 6.660156 36 6 35.339844 6 34.5 C 6 33.660156 6.660156 33 7.5 33 L 15.242188 33 C 15.585938 33 15.902344 32.824219 16.085938 32.535156 Z" />
                                </svg>
                                Track and Field
                            </a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <!-- Heroicon name: outline/calendar -->
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Reports
                            </a>


                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="relative z-10 flex-shrink-0 flex h-16 py-3 bg-white shadow">

                <div class="flex-1 px-4 flex  justify-between">
                    <a href="swimming.php" type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Return
                    </a>

                </div>
            </div>

            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900">Participants of : <?php echo $gameTitle ?></h1>
                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

                        <div class="mt-5">
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                                <ul role="list" class="divide-y divide-gray-200">
                                    <?php 
                                
                                $sql1 = "SELECT * FROM tbl_swimpart WHERE s_id = '$request_id'";
                                if ($query=$conn->query($sql1)) {
                                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <li>
                                        <a href="#" class="block hover:bg-gray-50">
                                            <div class="flex items-center px-4 py-4 sm:px-6">
                                                <div class="min-w-0 flex-1 flex items-center">
                                                    <div class="flex-shrink-0">
                                                        <svg fill="#4a90e2" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 50 50" class="h-12 w-12">
                                                            <path
                                                                d="M 22.5 13 C 22.011719 13 21.554688 13.148438 21.171875 13.390625 L 21.160156 13.390625 L 9.429688 19.242188 L 9.429688 19.25 C 8.585938 19.648438 8 20.503906 8 21.5 C 8 22.882813 9.117188 24 10.5 24 C 10.917969 24 11.304688 23.886719 11.652344 23.707031 L 11.65625 23.71875 L 21.582031 19.042969 L 24.792969 24.25 L 8.832031 33.96875 C 4.179688 32.574219 1.679688 30.265625 1.679688 30.265625 C 1.480469 30.078125 1.21875 29.980469 0.945313 29.992188 C 0.539063 30.007813 0.183594 30.269531 0.046875 30.652344 C -0.0898438 31.035156 0.0195313 31.464844 0.320313 31.734375 C 0.320313 31.734375 6.085938 37 16 37 C 20.921875 37 24.386719 35.953125 27.371094 34.949219 C 30.351563 33.941406 32.8125 33 36 33 C 42.371094 33 48.457031 36.84375 48.457031 36.84375 C 48.925781 37.140625 49.542969 37.007813 49.84375 36.542969 C 50.140625 36.074219 50.007813 35.457031 49.542969 35.15625 C 49.542969 35.15625 43.160156 31 36 31 C 35.242188 31 34.527344 31.054688 33.832031 31.140625 C 33.941406 30.777344 34 30.394531 34 30 C 34 29.214844 33.765625 28.484375 33.375 27.871094 L 33.378906 27.859375 L 24.578125 14.113281 C 24.128906 13.441406 23.367188 13 22.5 13 Z M 40 18 C 37.238281 18 35 20.238281 35 23 C 35 25.761719 37.238281 28 40 28 C 42.761719 28 45 25.761719 45 23 C 45 20.238281 42.761719 18 40 18 Z" />
                                                        </svg>
                                                    </div>
                                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                        <div>
                                                            <div class="flex space-x-3">
                                                                <p class="text-sm font-medium text-indigo-600 truncate">
                                                                    Lane number : <?php echo $row['lane_number'] ?></p>
                                                                <button onclick="setId(<?php echo $row['sp_id'] ?>)"
                                                                    type="button"
                                                                    class="px-2 ml-3 hover:bg-indigo-600 hover:text-white rounded-full text-indigo-700 bg-indigo-100 focus:outline-none">Edit
                                                                    player name</button>
                                                            </div>
                                                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                                                <!-- Heroicon name: solid/mail -->


                                                                <?php 
                                                                    if ($row['part_name']) {
                                                                    ?>
                                                                <span
                                                                    class="truncate"><?php echo $row['part_name'] ?></span>
                                                                <?php
                                                                    }else{
                                                                    ?>
                                                                <span class="truncate">Player not defined</span>

                                                                <?php
                                                                    }
                                                               ?>

                                                            </p>
                                                        </div>
                                                        <div class="hidden md:block">
                                                            <div>
                                                                <p class="text-sm text-gray-900">
                                                                    Time :
                                                                    <time
                                                                        datetime="2020-01-07"><?php echo $row['swim_time'] ?></time>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button onclick="updateTimeModal(<?php echo $row['sp_id'] ?>)"
                                                        class="focus:ountline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <?php
                                    }
                                }
                            
                            ?>
                                </ul>
                            </div>

                        </div>

                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="relative my-5">
                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center">
                                <span class="px-3 bg-gray-100 text-lg font-medium text-gray-900">
                                    Ranking
                                </span>
                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="pt-3 pb-5 flex justify-start">
                                <a href="report-swimming.php?id=<?php echo $request_id  ?>" type="button"
                                    targer="_blank"
                                    class="inline-flex items-center px-3 py-2    text-sm leading-4 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Generate report
                                </a>
                            </div>


                            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                                <ul role="list" class="divide-y divide-gray-200">

                                    <?php 
                                     $ranking = "SELECT * , DENSE_RANK() OVER(ORDER BY swim_time ASC) as rank_number FROM tbl_swimpart where s_id = '$request_id' and swim_time != 'Null' ";
                                     if($query=$conn->query($ranking)){
                                        
                                        while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                            ?>

                                    <li>
                                        <a href="#" class="block hover:bg-gray-50">
                                            <div class="px-4 py-4 sm:px-6">
                                                <div class="flex items-center justify-between">
                                                    <p class="text-sm font-medium text-indigo-600 truncate">
                                                        Player name : <?php echo $row['part_name'] ?>
                                                    </p>
                                                    <div class="ml-2 flex-shrink-0 flex">
                                                        <p
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Rank : <?php echo $row['rank_number'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-2 sm:flex sm:justify-between">
                                                    <div class="sm:flex">
                                                        <p class="flex items-center text-sm text-gray-500">
                                                            <!-- Heroicon name: solid/users -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Time : <?php echo $row['swim_time'] ?>
                                                        </p>

                                                    </div>
                                                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">

                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>



                                    <?php


                                        }
                                    }
                                   
                                   ?>




                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </main>
        </div>



        <!-- update name modal -->
        <div id="updateNameModal" style="display:none" class="fixed z-10 inset-0 overflow-y-auto"
            aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div
                    class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                    <div>
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                            <!-- Heroicon name: outline/check -->
                            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                Update Player name
                            </h3>
                            <div class="mt-2">
                                <form action="#">
                                    <input type="hidden" id="temp" name="temp">
                                    <input name="newName" id="newName" type="text"
                                        class="ring-2 ring-indigo-600 p-2 rounded-md border-2 border-indigo-600 w-full"
                                        placeholder="Enter new playe name">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 flex space-x-3">
                        <button onclick="closeUpName()" type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                            Cancel
                        </button>
                        <button id="updateName" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                            Save
                        </button>

                    </div>
                </div>
            </div>
        </div>

        <!-- end update name modal -->

        <!-- update time modal -->
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div id="updateTimeModal" style="display:none" class="fixed z-10 inset-0 overflow-y-auto"
            aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div
                    class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                    <div>

                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                Enter time
                            </h3>
                            <div class="mt-2">
                                <form action="#">
                                    <input type="hidden" name="timeTo_id" id="timeTo_id">
                                    <div class="w-full flex space-x-2">
                                        <div class="mt-1  w-full flex space-x-1">
                                            <input type="number" name="hrs" id="hrs" value="0"
                                                class="shadow-sm p-2 ring-2 ring-indigo-600 focus:ring-indigo-500  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                placeholder="hrs">
                                            <label for="" class="mt-1">hrs</label>
                                        </div>
                                        <div class="mt-1  w-full flex space-x-1">
                                            <input type="number" name="mins" id="mins" value="0"
                                                class="shadow-sm p-2 ring-2 ring-indigo-600 focus:ring-indigo-500  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                placeholder="mins">
                                            <label for="" class="mt-1">mins</label>
                                        </div>
                                        <div class="mt-1  w-full flex space-x-1">
                                            <input type="number" name="secs" id="secs" value="0"
                                                class="shadow-sm p-2 ring-2 ring-indigo-600 focus:ring-indigo-500  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                placeholder="secs">
                                            <label for="" class="mt-1">sec</label>
                                        </div>
                                        <div class="mt-1  w-full flex space-x-1">
                                            <input type="number" name="ms" id="ms" value="0"
                                                class="shadow-sm p-2 ring-2 ring-indigo-600 focus:ring-indigo-500  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                placeholder="ms">
                                            <label for="" class="mt-1">ms</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 flex space-x-3">
                        <button onclick="closeTimeModal()" type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                            Cancel
                        </button>
                        <button id="saveTime" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- end update time modal -->
    </div>

    <script>
    function setId(tempId) {
        $('#updateNameModal').show();
        $('#temp').val(tempId);
    }

    function closeUpName() {
        $('#updateNameModal').hide();
        $('#temp').val("");
    }

    function updateTimeModal(playerId) {
        $('#updateTimeModal').show();
        $('#timeTo_id').val(playerId);
    }


    function closeTimeModal(plaerId) {
        $('#updateTimeModal').hide();
        $('#timeTo_id').val("");
    }
    window.addEventListener('DOMContentLoaded', (event) => {

        $(document).on('click', '#updateName', function(e) {
            e.preventDefault();

            let id = $('#temp').val();
            let name = $('#newName').val();

            if (id && name) {
                $.ajax({
                    type: 'POST',
                    url: './swimmingController.php',
                    data: {
                        opt: "updateName",
                        id: id,
                        name: name
                    },
                    success: function(response) {
                        alert(response);
                        location.reload(true);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            } else {
                alert('Failed : Try reloading the page');
            }

        });

        $(document).on('click', '#saveTime', function(e) {
            e.preventDefault();
            let id = $('#timeTo_id').val();
            let hrs = $('#hrs').val();
            let mins = $('#mins').val();
            let secs = $('#secs').val();
            let ms = $('#ms').val();

            if (hrs < 0 || mins < 0 || secs < 0 || ms < 0) {
                alert('Failed : Inputs are invalid')
            } else {
                if (hrs.length == 1) {
                    hrs = "0" + hrs;
                }
                if (mins.length == 1) {
                    mins = "0" + mins;
                }
                if (secs.length == 1) {
                    secs = "0" + secs;
                }
                if (ms.length == 1) {
                    ms = ms + "0";
                }

                if (hrs.length > 2 || mins.lenght > 2 || secs.length > 2) {
                    alert('Failed : Input Invalid');
                } else {
                    let time = hrs + ':' + mins + ':' + secs + ':' + ms;
                    $.ajax({
                        type: 'POST',
                        url: './swimmingController.php',
                        data: {
                            opt: "updateTime",
                            time: time,
                            id: id,
                        },
                        success: function(response) {
                            alert(response);
                            location.reload(true);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

            }



        });



    });
    </script>

</body>

</html>