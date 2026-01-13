<aside class="sidebar" data-side="left" aria-hidden="false">
    <nav aria-label="Sidebar navigation">
        <header>
            <a href="/" class="btn-ghost p-2 h-12 w-full justify-start">
            <div class="bg-sidebar-primary text-sidebar-primary-foreground flex aspect-square size-8 items-center justify-center rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="h-4 w-4"><rect width="256" height="256" fill="none"></rect><line x1="208" y1="128" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></line><line x1="192" y1="40" x2="40" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></line></svg>
            </div>
            <div class="grid flex-1 text-left text-sm leading-tight">
                <span class="truncate font-medium">Pengaduan</span>
                <span class="truncate text-xs"></span>
            </div>
            </a>
        </header>
        <section class="scrollbar">
        <div role="group" aria-labelledby="group-label-content-1">
            <h3 id="group-label-content-1">Getting started</h3>
            <ul>
            <li>
                <a href="">
                <x-lucide-layout-dashboard class="h-4 w-4" />
                <span>Dashboard</span>
                </a>
            </li>
            @if(Auth::user()->role === 'admin')
            <li>
                <a href="#">
                <x-lucide-square-terminal class="h-4 w-4" />
                <span>Aspirasi</span>
                </a>
            </li>
            <li>
                <a href="#">
                <x-lucide-users class="h-4 w-4" />
                <span>User</span>
                </a>
            </li>
            @elseif (Auth::user()->role === 'siswa')
            <li>
                <a href="#">
                <x-lucide-users class="h-4 w-4" />
                <span>Aspirasi</span>
                </a>
            </li>
            @endif
            </ul>
        </div>
        </section>
        <div class="p-2">
            <button type="submit" class="btn-destructive w-full" onclick="document.getElementById('logout-dialog').showModal()">Logout<x-lucide-log-out class="h-3.5 w-3.5 stroke-3" /></button>
        </div>
        
    </nav>
</aside>