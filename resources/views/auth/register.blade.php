<x-app>
    <x-header>
        <h1 class="text-white fw-bold">ToDue</h1>
    </x-header>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-green rounded-4 p-5" style="max-width: 450px; width: 100%;">
            <h1 class="text-center text-white fw-bold mb-4">Sign Up</h1>

            <form action="">
                @csrf
                @method('POST')
                <div class="row mb-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First Name" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>

                </div>
                <div class="row mb-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Username" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Password" aria-label="Last name">
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3 ">
                    <button type="submit" class="btn btn-primary btn-lg mb-0">Submit</button>

                    <p class="text-white mb-0">
                        Already have an account?<br>
                        <a href="{{ route('signin') }}" class="text-white text-decoration-underline">Sign Up</a>
                    </p>
                </div>
            </form>

        </div>
    </div>

</x-app>
