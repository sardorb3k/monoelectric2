@section('title', 'Pages')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Japanese International University</title>
</head>

<body>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <div class="card-body">
                    <picture>
                        <source srcset="https://jiuuni.uz/uploads/1669369359-footer.png" media="(prefers-color-scheme: dark)">
                        <img src="https://jiuuni.uz/uploads/1669369359-logo.png">
                    </picture>
                    <form method="POST" action="{{ route('get-voucher.store') }}" class="form-validate"
                        novalidate="novalidate" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">To'liq ismingiz</span>
                            </label>
                            <input type="text" placeholder="Sardor Sattorov" name="fullname" maxlength="40"
                                class="input input-bordered" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Pasport seriya</span>
                            </label>
                            <input type="text" placeholder="AB" maxlength="2" name="pseries"
                                class="input input-bordered" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Pasport raqam</span>
                            </label>
                            <input type="text" placeholder="1234567" maxlength="7" name="pnumber"
                                class="input input-bordered" />
                        </div>
                        @if (session('success') || session('error'))
                            <div class="alert @if (session('error')) alert-error @endif shadow-lg">
                                <div>
                                    <span>{{ session('success') }} {{ session('error') }}</span>
                                </div>
                            </div>
                        @endif

                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Vaucher olish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
