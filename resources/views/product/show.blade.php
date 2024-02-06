<x-layout>
    <x-header
    title="collezione_di_prodotti"
    />
    <div class="container mb-5">
        <div class="row justify-content-center my-4">
            <h1 class="text-light font-text text-center">{{$product->author}} _ {{$product->title}}</h1>
                <div class="col-12 col-md-6 col-lg-5 mt-3 card-show-1">
                    <div class="card font-text card-show rounded-top" style="">
                        <div class="card-body p-0 shadow_white">
                          <h5 class="card-title font-card ps-3 pt-3">{{$product->title}}</h5>
                          <h5 class="card-subtitle mb-2 text-1 font-card ps-3">{{$product->author}}</h5>
                          <p class="card-text prg px-3">{{$product->description}}</p>
                          <h6 class="card-title font-card ps-3">Anno: {{$product->year}}</h6>
                          <h6 class="card-title font-card ps-3">€ {{$product->price}}</h6>
                          <small class="ps-3">Pubblicato da: {{$product->user->name}} {{$product->user->surname}}</small>
                          <div class="d-flex justify-content-end">
                            
                            <a href="{{route('product.index')}}" class="card-link card-link-custom bg-3 border border-1 border-dark">torna indietro</a>

                            @if (Auth::user()->id == $product->user->id)
                              <a href="{{route('product.update', compact('product'))}}" class="card-link card-link-custom bg-2 border border-1 border-dark ">modifica</a>
                              <form method="POST" action="{{route('product.delete', compact('product'))}}">
                                @csrf
                                @method("delete")
                                <button type="submit" class="card-link card-link-custom bg-1 border border-1 border-dark ms-3">elimina</button>
                              </form>
                            @endif

                          </div>
                          
                        </div>
                      </div>
                </div>
            
        </div>
    </div>
</x-layout>