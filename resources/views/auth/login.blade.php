<x-layout>
    
    <div class="container-fluid myheader bg-danger d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 bg-warning d-flex justify-content-center">
                <h1>Accedi</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6 border-2 rounded-3 bg-dark text-light p-3 shadow">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-light">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>