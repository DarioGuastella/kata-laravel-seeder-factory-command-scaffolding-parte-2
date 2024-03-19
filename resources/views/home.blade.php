<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <meta charset="UTF-8" />
    <title>Featured Products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="my-5">Featured products project</h1>


        <div class="row justify-content-center">
            @foreach ($featured_products as $featured_product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $featured_product->id }}</div>
                        @if ($featured_product->image)
                            <img src="{{ $featured_product->image }}" class="card-img-top"
                                alt="{{ $featured_product->name }}">
                        @endif
                        <div class="card-body">
                            <h5>Nome prodotto: </h5>{{ $featured_product->name }}
                        </div>
                        <div class="card-body">
                            <h5>Descrizione: </h5>{{ $featured_product->description }}
                        </div>

                        <div class="card-body">
                            <h5>ISBN: </h5>{{ $featured_product->isbn }}
                        </div>
                        <div class="card-body">
                            <h5>Prezzo: </h5>{{ $featured_product->price }} €
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
