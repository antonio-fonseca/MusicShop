<x-layout>
    <x-header
    title="contattaci"
    />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5">
                <form method="POST" action="{{route('contact.submit')}}" class="text-light font-text">
                    @csrf
                    
                    <div class="mb-1">
                      <label class="form-label mb-0">messaggio</label>
                      <textarea name="message"class="form-control bg-body-tertiary"placeholder="inserisci qui il tuo messaggio" id="" cols="30" rows="5"></textarea>
                    </div>
                    
                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" class="btn btn-primary mt-3 bg-6 border-light">invia</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>