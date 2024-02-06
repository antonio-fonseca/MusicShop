<x-layout>
        <x-header
        title="Crea_il_tuo_prodotto"
        />
        <div class="container mb-5">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-6 col-lg-6">
                    <form method="POST" action="{{route('product.store')}}" class="text-light font-text">
                        @csrf
                        <div class="mb-1">
                          <label class="form-label mb-0">nome album</label>
                          <input type="text" class="form-control bg-body-tertiary" name="title">
                        </div>
                        <div class="mb-1">
                            <label class="form-label mb-0">artista</label>
                            <input type="text" class="form-control bg-body-tertiary" name="author">
                        </div>
                        <div class="mb-1">
                            <label class="form-label mb-0">descrizione</label>
                            <textarea name="description"class="form-control bg-body-tertiary" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="row mb-1 flex-row justify-content-between">
                            <div class="col-5 col-sm-3">
                                <label class="form-label mb-0">anno</label>
                                <input name="year" max="2024" min="1900" type="number" class="form-control bg-body-tertiary">
                            </div>
                            <div class="col-12 col-sm-5">
                                <label class="form-label mb-0">genere</label>
                                <select name="category_id" class="form-control" id="">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-5 col-sm-3">
                                <label class="form-label mb-0">prezzo (€)</label>
                                <input name="price" type="number" step=".1" class="form-control bg-body-tertiary">
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3 bg-1 border-light">aggiungi</button>
                        </div>
                        
                      </form>
                </div>
            </div>
        </div>
</x-layout>