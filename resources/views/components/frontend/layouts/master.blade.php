 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ $title }}</title>
     <link rel="icon" type="image/x-icon" href="{{ asset('img/Wayzaway_logo.png') }}">


     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
         integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">


     <!-- Add this before closing </body> tag -->

     <script src="https://unpkg.com/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



     <script src="https://kit.fontawesome.com/496c26838e.js" crossorigin="anonymous"></script>
     <style>
         body {
             background: hsl(0, 100%, 100%);
             font-family: 'Varela Round', sans-serif;
         }


         /* alert message */
         #alert-wrapper {
             position: fixed;
             top: 20px;
             right: 20px;
             z-index: 9999;
         }

         #alert-message {
             display: none;
             position: relative;
             padding: 12px 20px;
             border-radius: 5px;
             background-color: #28a745;
             color: #fff;
         }

         .progress-bar {
             position: absolute;
             bottom: 0;
             left: 0;
             width: 100%;
             height: 4px;
             background-color: hsl(0, 90%, 49%);
             display: none;
         }


         .form-inline {
             display: inline-block;
         }

         .navbar-header.col {
             padding: 0 !important;
         }

         .navbar {
             background: #ffffff;
             padding-left: 16px;
             padding-right: 16px;
             position: relative;
             top: 0;
             left: 0;
             right: 0;
             border-bottom: 1px solid #d6d6d6;
             box-shadow: 0 0 4px rgba(0, 0, 0, .1);
         }

         /* Add padding or margin to the content below the navbar to prevent overlap */
         /* You can use either padding-top or margin-top, depending on your layout */
         /* Choose one option based on how you want the layout to look */
         /* Option 1: Padding-top */
         /* This adds padding to the top of the content area to push it below the fixed navbar */
         .content {
             padding-top: 64px;
             /* Adjust the value as needed to match the height of your navbar */
         }

         /* Option 2: Margin-top */
         /* This adds margin to the top of the content area to push it below the fixed navbar */
         .content {
             margin-top: 64px;
             /* Adjust the value as needed to match the height of your navbar */
         }


         .nav-link {
             margin: 0 5px;
         }

         .nav-link img {
             border-radius: 50%;
             width: 36px;
             height: 36px;
             margin: -8px 0;
             float: left;
             margin-right: 10px;
         }

         .navbar .navbar-brand {
             color: #555;
             padding-left: 0;
             font-size: 20px;
             padding-right: 50px;
             font-family: 'Raleway', sans-serif;
         }

         .navbar .navbar-brand b {
             font-weight: bold;
             color: #eb5844;
         }

         .navbar .navbar-nav a:hover,
         .navbar .navbar-nav a:focus {
             color: #f08373 !important;
         }

         .navbar .navbar-nav a.active,
         .navbar .navbar-nav a.active:hover {
             color: #eb5844 !important;
             background: transparent !important;
         }

         .search-box {
             position: relative;
         }

         .search-box input.form-control {
             padding-right: 35px;
             border-radius: 0;
             padding-left: 0;
             border-width: 0 0 1px 0;
             box-shadow: none;
         }

         .search-box input.form-control:focus {
             border-color: #f08373;
         }

         .search-box .input-group-text {
             min-width: 35px;
             border: none;
             background: transparent;
             position: absolute;
             right: 0;
             z-index: 9;
             padding: 7px 0 7px 7px;
             height: 100%;
         }

         .search-box i {
             color: #a0a5b1;
             font-size: 19px;
         }

         .navbar .nav-item i {
             font-size: 18px;
         }

         .navbar .dropdown-item i {
             font-size: 16px;
             min-width: 22px;
         }

         .navbar .nav-item.show>a {
             background: none !important;
         }

         .navbar .dropdown-menu {
             border-radius: 1px;
             border-color: #e5e5e5;
             box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
         }

         .navbar .dropdown-menu a {
             color: #777;
             padding: 8px 20px;
             line-height: normal;
             font-size: 15px;
         }

         .navbar .navbar-form {
             margin-right: 0;
             margin-left: 0;
             border: 0;
         }

         @media (min-width: 992px) {
             .form-inline .input-group {
                 width: 250px;
                 margin-right: 30px;
             }
         }

         @media (max-width: 991px) {
             .form-inline {
                 display: block;
                 margin-bottom: 10px;
                 margin-top: 0;
             }

             .input-group {
                 width: 100%;
             }
         }

         .card {
             box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
         }
     </style>
     @stack('profile_style')
 </head>

 <body>

     {{-- header include --}}

     <x-frontend.layouts.partials.header />

     {{ $slot }}

     <x-frontend.layouts.partials.footer />
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
         integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
     </script>
 </body>

 </html>
