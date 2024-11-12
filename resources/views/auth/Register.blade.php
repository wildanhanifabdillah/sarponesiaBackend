<link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />

<body class="flex-column">

<section class="login-page-user welcomeSection">
    <div class="flexRow">
        <div class="flexColumn">
            <h1 class="heroTitle">Buat Akun Baru</h1>
            <h2 class="accountInfoInstruction">Isikan informasi akun anda dengan benar untuk dapat mendaftar.</h2>

            <!-- Registration Form -->
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Display validation errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Input fields for name, email, password, and confirm password -->
                <input type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <input type="password" name="password" placeholder="Kata Sandi" required>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>

                <!-- Submit button -->
                <input type="submit" name="register" value="Daftar">

            </form>

            <p class="accountCreationPromptText">
                <span>Sudah memiliki akun? </span>
                <a href="{{ route('login') }}" class="accountCreationPromptLink">Masuk</a>
            </p>
        </div>
        <img class="welcomeImage" src="/assets/c1ae8a2aea691a6114fc609fb781c377.png" alt="alt text" />
    </div>
</section>

</body>
