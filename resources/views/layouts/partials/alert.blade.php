@if(session('error'))
    <div class="alert-destructive">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10" />
        <path d="m9 12 2 2 4-4" />
        </svg>
        <h2>Error.</h2>
        <section>
        <p>{{ session('error') }}</p>
        </section>
    </div>
    @elseif(session('success'))
        <div class="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <path d="m9 12 2 2 4-4" />
            </svg>
            <h2>Success!</h2>
            <section>
            <p>{{ session('success') }}</p>
            </section>
        </div>
    @elseif($errors->any())
    @foreach ($errors as $error)
    <div class="alert-destructive">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10" />
        <path d="m9 12 2 2 4-4" />
        </svg>
        <h2>Error!</h2>
        <section>
        <p>{{ $error }}</p>
        </section>
    </div>
    @endforeach
@endif