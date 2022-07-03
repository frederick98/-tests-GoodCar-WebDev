<!DOCTYPE html>
<html style="font-size: 16px;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Page Title -->
        <title>Good Car Test Development - @yield('title')</title>
        <!-- Meta Title -->
        @yield('metaTitle')
        <!-- Meta Keyword -->
        @yield('metaKeyword')
        <!-- Meta Description -->
        @yield('metaDesc')

        <!-- Styling -->
        @yield('css')
        <style>
            .fixed-top {
                position: fixed;
            }

            .navbar-expand-sm .navbar-nav {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                width: 100%;
            }

            .nav-item {
                text-align: center;
                padding: 0.25em;
                background-color: #ffffff;
                margin: 1px;
            }

            .container-fluid {
                margin-top: 100px;
            }

            #le-fluid-de-container {
                margin-top: 0px;
            }

            .nav-bar-item:hover {
                color: #a9ca31;
            }

            .footer footer {
                padding-top: 32px;
                padding-bottom: 40px;
                color: #ffffff;
                background-color: #2a1b6a;
            }
        </style>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">
        <link rel="stylesheet" id="u-theme-google-font" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
        <link rel="stylesheet" id="u-page-google-font" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" media="screen" />  

        <!-- Script -->
        @yield('script_head')
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body data-home-page="" data-home-page-title="Homepage">
        <!-- Header Section -->
        @include('layouts.navbar')

        <!-- Content Section -->
        @yield('content')

        <!-- Body Script Section -->
        @yield('script_body')

        <!-- Footer Section -->
        @include('layouts.footer')
    </body>
</html>