<x-app>
    <x-header>
        <h1 class="text-white fw-bold">ToDue</h1>
    </x-header>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-green rounded-4 p-5" style="max-width: 450px; width: 100%;">
            <h1 class="text-center text-white fw-bold mb-2">Sign In</h1>

            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                <div class="d-flex align-items-center gap-3">
                    <button type="submit" class="btn btn-primary btn-lg mb-0">Submit</button>

                    <p class="text-white mb-0">
                        Don't have an account? <br>
                        <a href="{{ route('signup') }}" class="text-white text-decoration-underline">Sign Up</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

</x-app>
