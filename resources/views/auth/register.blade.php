<x-layout>
    <x-header
    title="registrati"
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
            <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="{{route('register')}}" class="text-light font-text">
                    @csrf
                    <div class="col-12 mb-1 d-flex flex-row justify-content-between">
                        <div class="col-5">
                            <label class="form-label mb-0">nome</label>
                            <input name="name" type="text" class="form-control bg-body-tertiary">
                        </div>
                        <div class="col-5">
                            <label class="form-label mb-0">cognome</label>
                            <input name="surname" type="text" class="form-control bg-body-tertiary">
                        </div>
                    </div>
                    <div class="mb-1">
                      <label class="form-label mb-0">email</label>
                      <input type="email" class="form-control bg-body-tertiary" name="email">
                    </div>
                    <div class="mb-1">
                        <label class="form-label mb-0">password</label>
                        <input type="password" class="form-control bg-body-tertiary" name="password" placeholder="crea una password">
                    </div>
                    <div class="mb-1">
                        <label class="form-label mb-0">conferma password</label>
                        <input type="password" class="form-control bg-body-tertiary" name="password_confirmation">
                    </div>
                    
                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" class="btn btn-primary btn-auth mt-3 bg-5 border-light">registrati</button>
                    </div>
                    
                  </form>
            </div>
        </div>
    </div>
</x-layout>