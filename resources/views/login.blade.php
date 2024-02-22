@extends('layouts.login')
@section('content')

<body>
    <div class="selamat-datang">
        <h2 class="selamat-datang1">INFAQ WIKRAMA<br /></h2>
        <h1 class="selamat-datang2">Selamat datang di Infaq Wikrama</h1>

    </div>
    <div class="login-container">
        <div class="form-container">
            <a href="/" class="btn-get-started scrollto"><i class="bi bi-arrow-left" style="font-weight: bold;"></i></a>
            <div class="selamat-datang-di-wikrama-berinfaq">
                <span>
                    <span class="selamat-datang-di-wikrama-berinfaq-span">Masuk untuk memulai<br /></span>
                    <span class="selamat-datang-di-wikrama-berinfaq-span2">INFAQ WIKRAMA</span>
                </span>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-container">
                    <label for="username">Username</label>
                    <div class="input-boxes">
                        <div class="input-box">
                            <img src="{{ asset('assets/img/At.png') }}"
                                style="width: 25px; height: auto; margin-right: 10px;">
                            <input type="text" id="username" style="font-size: 13px;" name="username"
                                placeholder="Ketik Username" required>
                        </div>
                    </div>
                </div>
                <div class="input-container">
                    <label for="username">Password</label>
                    <div class="input-boxes2">
                        <div class="input-box">
                            <img src="{{ asset('assets/img/Unlock.png') }}"
                                style="width: 25px; height: auto; margin-right: 10px;">
                            <input type="password" id="password" style="font-size: 13px;" name="password"
                                placeholder="Ketik Password" required>
                            <i id="togglePassword" class="fa-regular fa-eye toggle-password"
                                onclick="togglePasswordVisibility()"></i>
                        </div>
                    </div>
                </div>

                <button type="submit" value="submit" style="font-size: 14px;">Masuk</button>
            </form>
        </div>
    </div>
</body>

@endsection
