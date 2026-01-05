<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
        .container { max-width: 500px; margin: 0 auto; }
        h1 { margin-bottom: 20px; }
        form { background: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .back { margin-top: 10px; }
        .back a { color: #007bff; text-decoration: none; }
        .error { color: red; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>NEW CUSTOMER</h1>

        <form action="{{ route('customers.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Adı:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')<span class="error">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="surname">Soyadı:</label>
                <input type="text" id="surname" name="surname" value="{{ old('surname') }}" required>
                @error('surname')<span class="error">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="gender">Cinsiyeti:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select...</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')<span class="error">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="birthYear">Doğum Yılı:</label>
                <input type="number" id="birthYear" name="birthYear" value="{{ old('birthYear') }}" required>
                @error('birthYear')<span class="error">{{ $message }}</span>@enderror
            </div>

            <button type="submit">Create</button>

            <div class="back">
                <a href="{{ route('customers.index') }}">Back to Customers</a>
            </div>
        </form>
    </div>
</body>
</html>
