<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <meta charset="UTF-8" />
    <title>Featured Products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @vite('resources/js/app.js')
</head>

<body class="bg-dark text-white">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h2 class="m-4">{{ $product->name }}</h2>
            <img src="{{ $product->image }}" class="card-img-top w-50 m-4" alt="{{ $product->name }}">
        </div>
        <div class="row">
            <p>{{ $product->description }}</p>
            <h5 class="mb-2 d-inline">Codice isbn: </h5>
            <p>{{ $product->isbn }}</p>
            <div>
                <h5 class="mb-2 d-inline">Categoria: </h5>
                <p class="mx-2 badge rounded-pill text-bg-info">{{ $categories[$product->category_id - 1]->label }}</p>
                <div class="row">
                    <h5 class="mb-2">Prezzo: </h5>
                    <div class="col-md-8">
                        <p class="d-inline">{{ $product->price }} €</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="{{ route('home') }}" class="btn btn-primary mb-4">Torna alla lista</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
