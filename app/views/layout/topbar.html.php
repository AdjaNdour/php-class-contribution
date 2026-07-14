    <header class="h-16 flex items-center justify-between px-4 md:px-6 border-b border-indigo-200 bg-surface shrink-0 gap-4">
      <div class="flex items-center gap-2 flex-1 max-w-xs md:max-w-none">
        <!-- Hamburgueur Menu Button for Mobile -->
        <label for="sidebar-toggle" class="p-2 -ml-2 text-text-muted hover:text-text md:hidden cursor-pointer rounded-lg hover:bg-background">
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </label>
        <div class="relative w-full md:w-72">
          <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-text-muted" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5" stroke-linecap="round"/></svg>
          <input type="text" placeholder="Search records..." class="w-full pl-9 pr-3 py-2 rounded-lg border border-gray-200 text-sm bg-background text-text placeholder:text-text-muted focus:outline-none focus:ring-2 focus:ring-primary/30" />
        </div>
      </div>
        <form action="/login" method="GET">
            <button
                type="submit"
                class="flex items-center gap-2 bg-primary hover:bg-slate-900 text-white text-sm font-medium px-3 py-2 md:px-4 rounded-lg transition-colors">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="m16 17 5-5-5-5M21 12H9" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="hidden sm:inline">
                    Déconnexion
                </span>
            </button>

        </form>
    </header>