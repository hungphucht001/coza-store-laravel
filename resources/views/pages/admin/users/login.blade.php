<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="/assets/css/main/app.css" />
    <link rel="stylesheet" href="/assets/css/pages/auth.css" />
    <link
        rel="shortcut icon"
        href="/assets/images/logo/favicon.svg"
        type="image/x-icon"
    />
    <link
        rel="shortcut icon"
        href="/assets/images/logo/favicon.png"
        type="image/png"
    />
</head>

<body>
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h1 class="auth-title">Log in.</h1>

                <p class="auth-subtitle mb-5">
                    Login with your data that you are given.
                </p>

                <form method="post" action="{{route('post-login')}}">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input
                            name="username"
                            type="text"
                            class="form-control form-control-xl"
                            placeholder="Username"
                            value="{{ old('username') }}"
                        />
                        @error('username')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input
                            name="password"
                            type="password"
                            class="form-control form-control-xl"
                            placeholder="Password"
                        />
                        @error('password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault"
                        />

                        <label
                            class="form-check-label text-gray-600"
                            for="flexCheckDefault"
                        >
                            Keep me logged in
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                        Log in
                    </button>
                    @csrf
                </form>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right"></div>
        </div>
    </div>
</div>
</body>
</html>
