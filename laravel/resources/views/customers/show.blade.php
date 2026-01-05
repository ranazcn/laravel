<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $customer->name }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
        .container { max-width: 500px; margin: 0 auto; }
        .card { background: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { margin-bottom: 20px; }
        .info { margin-bottom: 15px; }
        .label { font-weight: bold; }
        a { color: #007bff; text-decoration: none; margin-right: 10px; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>{{ $customer->name }} {{ $customer->surname }}</h1>

            <div class="info">
                <span class="label">Gender:</span> {{ $customer->gender }}
            </div>
            <div class="info">
                <span class="label">Birth Year:</span> {{ $customer->birthYear }}
            </div>

            <div>
                <a href="{{ route('customers.edit', $customer) }}">Edit</a>
                <a href="{{ route('customers.index') }}">Back</a>
            </div>
        </div>
    </div>
</body>
</html>
