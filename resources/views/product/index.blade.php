<x-layout>
    <x-header
    title="collezione_di_prodotti"
    />
    <div class="container">
        <div class="row mt-5 justify-content-evenly">
          
            @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2 card-index">
                    <div class="card font-text shadow_white card-show rounded-top" style="">
                        <div class="card-body pb-0 pe-0">
                          <h5 class="card-title font-card">{{$product->title}}</h5>
                          <h5 class="card-subtitle mb-2 text-body-secondary font-card">{{$product->author}}</h5>
                          <h6 class="card-title font-card">Anno: {{$product->year}}</h6>
                          <h6 class="card-title font-card">€ {{$product->price}}</h6>
                          <h6 class="card-title font-card">Genere: {{$product->category->name}}</h6>
                          <div class="d-flex justify-content-end">
                            <a href="{{route('product.show', compact('product'))}}" class="card-link card-link-custom bg-3 border border-1 border-dark ">+ info</a>
                          </div>
                        </div>
                    </div>
                </div>
                
            @endforeach
          
        </div>
    </div>
</x-layout>