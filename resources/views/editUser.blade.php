<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit User - Laravel User Management</title>

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
    <body class="bg-white">
        <main class="container" id="wrapper">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-6">
                    <h1 class="my-4">Edit User Info</h1>
                    <a href="/users" class="btn btn-secondary">Back</a>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
               <div class="col-12 col-md-6">
                    <form action="/users/{{$user->id}}" method="post" class="mt-5">
                        @method('PUT')

                        @csrf

                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="name">Full name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" placeholder="Name">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="email">Email address:</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" placeholder="email">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="phone">Phone Number:</label>
                                <input type="tel" name="phone" id="phone" class="form-control" value="{{$user->phone}}">
                            </div>
                            <div class="col-6 mb-3">
                                <button type="submit" class="btn btn-primary form-control">Update</button>
                            </div>
                        </div>
                    </form>
               </div>
            </div>
        </main>       

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
