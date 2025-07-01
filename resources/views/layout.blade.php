<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .card {
            border: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .btn-custom {
            border-radius: 30px;
            padding: 8px 20px;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: #777;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('mahasiswa.index') }}">E-Learning App</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} E-Learning | Laravel Web2
    </footer>
</body>
</html>
