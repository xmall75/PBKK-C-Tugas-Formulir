<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body>
    <div class="container m-auto mt-16">
        <form action="/form" method="POST" class="p-3" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" class="rounded" id="email" placeholder="rep@rep.com" name="email" />
                @error('email')
                {{message}}
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="password">Password</label>
                <input type="password" class="rounded" id="password" placeholder="Password" name="password" />
                @error('email')
                {{message}}
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="name">Name</label>
                <input type="text" class="rounded" id="name" placeholder="Rep Randolvski" name="name" />
                @error('email')
                {{message}}
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="float">Float 2.50 - 99.99</label>
                <input type="text" class="rounded" id="float" placeholder="10.5" name="float" />
                @error('email')
                {{message}}
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="image">Image</label>
                <input type="file" class="rounded" id="image" placeholder="10.5" name="image" accept="image/*" />
                @error('email')
                {{message}}
                @enderror
            </div>

            <button type='submit' class="w-24 h-8 bg-blue-300 rounded mt-3">Submit</button>
        </form>
    </div>
</body>
</html>