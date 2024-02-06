<x-layout>
    <x-header
    title="accedi"
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
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <form method="POST" action="{{route('login')}}" class="text-light font-text">
                    @csrf
                    <div class="mb-1">
                      <label class="form-label mb-0">email</label>
                      <input type="email" class="form-control bg-body-tertiary" name="email">
                    </div>
                    <div class="mb-1">
                        <label class="form-label mb-0">password</label>
                        <input type="password" class="form-control bg-body-tertiary" name="password">
                    </div>
                    
                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" class="btn btn-primary btn-auth mt-3 bg-4 border-2 border-light">log in</button>
                    </div>
                    
                  </form>
            </div>
        </div>
    </div>
</x-layout>