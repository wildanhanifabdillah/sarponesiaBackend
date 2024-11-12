<link rel="stylesheet" type="text/css" href="{{ asset('css/LoginPageUser.css') }}" />

<body class="flex-column">
<section class="login-page-user welcomeSection">
    <div class="flexRow">
        <div class="flexColumn">
            <h1 class="title">Reset your password</h1>

            <div class="mx-auto max-w-screen-sm card">
                <form action="{{ route('password.update') }}" method="post">
                    @csrf

                    <!-- Token Reset Password -->
                    <input type="hidden" name="token" value="{{ $token }}">

                    <!-- Input Field for Email -->
                    <div class="mb-4">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" 
                               class="input @error('email') ring-red-500 @enderror">

                        <!-- Error Message for Email -->
                        @error('email')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Field for Password -->
                    <div class="mb-4">
                        <label for="password">Password</label>
                        <input type="password" name="password" 
                               class="input @error('password') ring-red-500 @enderror">

                        <!-- Error Message for Password -->
                        @error('password')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Field for Confirm Password -->
                    <div class="mb-8">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" 
                               class="input @error('password') ring-red-500 @enderror">
                    </div>

                    <!-- Submit Button -->
                    <button class="btn">Reset Password</button>
                </form>
            </div>
        </div>
        <img class="welcomeImage" src="/assets/c1ae8a2aea691a6114fc609fb781c377.png" alt="alt text" />
    </div>
</section>
</body>
