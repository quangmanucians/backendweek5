<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .w-5 {
                display: none;
            }

            .center {
                display: flex;
                justify-content: center;
            }

        </style>
    </head>

    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
            <h5 class="my-0 mr-md-auto font-weight-normal">Company name: Web2</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="{{ url('/companies') }}">Companies</a>
                <a class="p-2 text-dark" href="{{ url('/trainers') }}">Trainer</a>
                <a class="p-2 text-dark" href="{{ url('/categories') }}">Categories</a>
                <form action="/search" method="get">
                    <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                           aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">search</button>
                </form>
            </nav>

        </div>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Trainers</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                @foreach ($search as $trainer)
                <tbody>
                    <tr>
                        <th scope="row">{!! $trainer->trainers_id !!}</th>
                        <td>{!! $trainer->trainers_name !!}</td>
                        <td>{!! $trainer->trainers_email !!}</td>
                        <td>{!! $trainer->trainers_phone !!}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{-- {!! Form::select('categories[]', $categories, null, ['class' => 'form-control'])!!} --}}
        </div>
    </body>

</html>
