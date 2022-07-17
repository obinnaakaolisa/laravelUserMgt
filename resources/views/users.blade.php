<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users - Laravel User Management</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            * { font-family: 'Lato', sans-serif; }
            #wrapper { min-height: 100vh; }
        </style>
        
    </head>
    <body class="bg-light">
        <main class="container" id="wrapper">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <h1 class="my-4">Users</h1>
                    <a href="/users/add" class="btn btn-primary mx-4">Add user</a>
                    <a href="/" class="btn btn-secondary">Back</a>
                </div>
            </div>
            <div class="row align-items-center justify-content-center my-5">
                @foreach ($users as $user)
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body p-3">
                            <h2 class="my-3 text-success">{{$user->name}}</h2>
                            <h4 class="my-3 text-secondary">{{$user->email}}</h4>
                            <h4 class="my-3 text-secondary">{{$user->phone}}</h4>
                            <a href="/users/{{$user->id}}/edit" class="my-3 btn btn-primary d-inline-block">Edit</a>
                            <form action="/users/{{$user->id}}" method="post" class="d-inline">
                                @method('PUT')
                                @csrf
                                <button type="submit" class=" ms-3 btn btn-danger d-inline-block">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </main>       

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
