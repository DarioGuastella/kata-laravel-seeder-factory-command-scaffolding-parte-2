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
                        <div class="card-header"># {{ $featured_product->id }}</div>
                        <img src="{{ $featured_product->image }}" class="card-img-top"
                            alt="{{ $featured_product->name }}">
                        <div class="card-body">
                            <h5 class="mb-2">Nome prodotto: </h5>
                            <p>{{ $featured_product->name }}</p>
                            <h5 class="mb-2">Descrizione: </h5>
                            <p>{{ $featured_product->description }}</p>
                            <h5 class="mb-2 d-inline">Categoria: </h5>
                            <p class="mx-2 badge rounded-pill text-bg-info">
                                {{ $categories[$featured_product->category_id - 1]->label }}</p>
                            <h5 class="mb-2">ISBN: </h5>
                            <p>{{ $featured_product->isbn }}</p>
                            <h5 class="mb-2">Prezzo: </h5>
                            <p>{{ $featured_product->price }} €</p>
                            <a href="{{ route('show', $featured_product->id) }}"
                                class="btn btn-primary mx-2 mb-2">Mostra dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
