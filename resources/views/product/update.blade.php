<x-layout>
    <x-header
    title="modifica_prodotto"
    />
    <div class="container mb-5">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="{{route('product.edit', compact('product'))}}" class="text-light font-text">
                    @csrf
                    @method('put')
                    <div class="mb-1">
                      <label class="form-label mb-0">nome album</label>
                      <input type="text" class="form-control bg-body-tertiary @error('title') is-invalid @enderror" name="title" value="{{$product->title}}">
                    </div>
                    <div class="mb-1">
                        <label class="form-label mb-0">artista</label>
                        <input type="text" class="form-control bg-body-tertiary @error('author') is-invalid @enderror" name="author" value="{{$product->author}}">
                    </div>
                    <div class="mb-1">
                        <label class="form-label mb-0">descrizione</label>
                        <textarea name="description" class="form-control bg-body-tertiary @error('description') is-invalid @enderror" id="" cols="30" rows="5">{{$product->description}}</textarea>
                    </div>
                    <div class="col-12 mb-1 d-flex flex-row justify-content-between">
                        <div class="col-4">
                            <label class="form-label mb-0">anno</label>
                            <input name="year" value="{{$product->year}}" max="2024" min="1900" type="number" class="form-control bg-body-tertiary @error('year') is-invalid @enderror">
                        </div>
                        <div class="col-4">
                            <label class="form-label mb-0">prezzo (€)</label>
                            <input name="price" value="{{$product->price}}" type="number" step=".1" class="form-control bg-body-tertiary @error('price') is-invalid @enderror">
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" class="btn btn-primary mt-3 bg-1 border-light">aggiorna</button>
                    </div>
                    
                  </form>
            </div>
        </div>
    </div>
</x-layout>