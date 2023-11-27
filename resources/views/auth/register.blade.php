<x-layout>
    
    <div class="container-fluid myheader bg-danger d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 bg-warning d-flex justify-content-center">
                <h1>Registrati</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6 border-2 rounded-3 bg-dark text-light p-3 shadow">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-light">Registrati!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>