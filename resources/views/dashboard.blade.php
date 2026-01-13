@extends('layouts.app')
@section('content')
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <ol class="text-muted-foreground flex flex-wrap items-center gap-1.5 text-sm break-words sm:gap-2.5">
            <li class="inline-flex items-center gap-1.5">
                <a href="#" class="hover:text-foreground transition-colors">{{ Auth::user()->role === 'admin' ? 'Admin' : (Auth::user()->role === 'siswa' ? 'Siswa' : '-') }}</a>
            </li>
            <li>
                <x-lucide-chevron-right class="h-3.5 w-3.5" />
            </li>
            <li class="inline-flex items-center gap-1.5">
                <span class="text-foreground font-normal">Dashboard</span>
            </li>
        </ol>
    </div>
    <div class="col-span-12">
        <div class="card">
            <header>
                <h2>Meeting Notes</h2>
                <p>Transcript from the meeting with the client.</p>
            </header>
            <section class="text-sm">
                <p>Client requested dashboard redesign with focus on mobile responsiveness.</p>
                <ol class="mt-4 flex list-decimal flex-col gap-2 pl-6">
                <li>New analytics widgets for daily/weekly metrics</li>
                <li>Simplified navigation menu</li>
                <li>Dark mode support</li>
                <li>Timeline: 6 weeks</li>
                <li>Follow-up meeting scheduled for next Tuesday</li>
                </ol>
            </section>
            <footer class="flex items-center">
                <div class="flex -space-x-2 [&_img]:ring-card [&_img]:ring-2 [&_img]:grayscale [&_img]:size-8 [&_img]:shrink-0 [&_img]:object-cover [&_img]:rounded-full">
                <img alt="@hunvreus" src="https://github.com/hunvreus.png">
                <img alt="@shadcn" src="https://github.com/shadcn.png">
                <img alt="@adamwathan" src="https://github.com/adamwathan.png">
                </div>
            </footer>
        </div>
    </div>
</div>
@endsection