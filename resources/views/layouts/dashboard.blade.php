<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.0.3') }}">
    <script src="{{ asset('assets/js/autonumeric.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.inputmask.min.js') }}"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Title -->
    <title>@yield('title')</title>
</head>

<body class="nk-body npc-invest bg-lighter ">
    <div class="nk-app-root">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            @include('components.dashboard.header')
            <!-- content @s -->
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            @include('components.dashboard.footer')
        </div>

        {{-- <script src="https://cdn.tiny.cloud/1/f621rdntwghfuxxff5ftwjjq4v18jdy3cvosoh12hl0x1vgk/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect anchor',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | anchor',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                extended_valid_elements: 'span',
                mergetags_list: [{
                        value: 'First.Name',
                        title: 'First Name'
                    },
                    {
                        value: 'Email',
                        title: 'Email'
                    },
                ]
            });
        </script> --}}
        <script src="{{ asset('assets/js/bundle.js?ver=3.0.3') }}"></script>
        <script src="{{ asset('assets/js/scripts.js?ver=3.0.3') }}"></script>
        <script src="{{ asset('assets/js/charts/gd-invest.js?ver=3.0.3') }}"></script>
        {{-- <script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script> --}}
</body>

</html>
