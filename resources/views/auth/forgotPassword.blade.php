<link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />

<body class="flex-column">
<section class="login-page-user welcomeSection">
    <div class="flexRow">
        <div class="flexColumn">
            <h1 class="heroTitle">Lupa Kata Sandi?</h1>
            <h2 class="accountInfoInstruction">Masukkan alamat email Anda untuk menerima tautan reset kata sandi.</h2>

            <!-- Reset Password Form -->
            <form action="{{ route('password.request') }}" method="POST" x-data="formSubmit" @submit.prevent="submit">
                @csrf

                <!-- Session Message -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Input Field for Email -->
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                           class="input @error('email') ring-red-500 @enderror" required>

                    <!-- Error Message for Email -->
                    @error('email')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button x-ref="btn" class="btn">Kirim Tautan Reset</button>
            </form>

            <p class="accountCreationPromptText">
                <span>Ingat kata sandi? </span>
                <a href="{{ route('login') }}" class="accountCreationPromptLink">Masuk</a>
            </p>
        </div>
        <img class="welcomeImage" src="/assets/c1ae8a2aea691a6114fc609fb781c377.png" alt="alt text" />
    </div>
</section>
</body>
