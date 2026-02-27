<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zagusha - Property & Promotion</title>

    <!-- Example: Link your template CSS with Laravel asset helper -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sailor.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <!-- Add all other CSS from your list here the same way -->
</head>
<body>

    <h1 style="text-align:center; color: #007bff; margin-top: 100px;">
        WELCOME TO ZAGUSHA ON RENDER!
    </h1>
    <p style="text-align:center; font-size: 1.2rem;">
        Deployment successful. Assets should load now.
    </p>

    <!-- Paste your Sailor template's main HTML content here -->
    <!-- For example, hero section, nav, sliders, etc. from index.html -->
    <!-- Start with a simple div to test -->
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h2>Test Section</h2>
                <p>If you see styles/sliders, assets are working!</p>
            </div>
        </div>
    </div>

    <!-- JS files at bottom -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <!-- Add the rest: validate.js, purecounter_vanilla.js, imagesloaded.pkgd.min.js, isotope.pkgd.min.js, sailor.js, main.js -->
    <script>
        // Optional: Init scripts if needed
        AOS.init();
    </script>
</body>
</html>