<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SnapTalk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Body with animated gradient background */
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(270deg, #0d6efd, #6f42c1, #20c997, #ffc107);
            background-size: 800% 800%;
            animation: gradientAnimation 15s ease infinite;
            height: 100vh;
            color: #fff;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Overlay for better readability */
        .overlay {
            background: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        /* Hero content styling */
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
            padding: 0 20px;
        }

        h1.display-5 {
            font-size: 3rem;
            font-weight: 700;
        }

        h1 span.text-primary {
            color: #ffc107; /* Highlight "Talk" */
        }

        p.lead {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        /* Button styles */
        .btn-custom {
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        @media (min-width: 992px) {
            h1.display-5 {
                font-size: 4rem;
            }
            p.lead {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
<div class="overlay"></div>

<div class="hero-content d-flex flex-column justify-content-center align-items-center min-vh-100">
    <h1 class="display-5">
        Snap <span class="text-primary">Talk</span>
    </h1>
    <p class="lead">
        SnapTalk is a simple chat application that lets you connect with friends and family in real time.
    </p>
    <div class="d-flex gap-3 flex-wrap justify-content-center">
        @if(Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-primary btn-custom">Home</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-custom">Log in</a>
                @if(Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-custom">Register</a>
                @endif
            @endauth
        @endif
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
