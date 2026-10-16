
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD - Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
            background: #f4f6f9;
            color: #222;
        }
        h1 { color: #c0392b; }
        a, button {
            display: inline-block;
            padding: 9px 13px;
            margin: 4px 2px;
            border: 0;
            border-radius: 5px;
            background: #c0392b;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }
        input, textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin: 7px 0 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .success {
            padding: 12px;
            background: #d4edda;
            margin: 12px 0;
        }
        .error { color: #b00020; }
    </style>
</head>
<body>
    <h1>Gestão de Produtos</h1>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</body>
</html>
