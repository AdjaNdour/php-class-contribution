<input type="checkbox" id="sidebar-toggle" class="hidden peer" />
<label for="sidebar-toggle" class="fixed inset-0 z-40 bg-black/40 transition-opacity opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto md:hidden"></label>
<aside class="fixed inset-y-0 left-0 z-50 w-68 border-r border-secondary-100 bg-secondary-100 flex flex-col transition-transform -translate-x-full peer-checked:translate-x-0 md:translate-x-0 md:static md:flex shrink-0">
  <div class="px-5 py-5 flex items-center justify-between gap-2">
    <div class="flex items-center gap-2">
      <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center text-white font-display font-bold text-sm">C</div>
      <div>
        <p class="font-display font-semibold text-xl text-primary leading-none">Contribution Class</p>
      </div>
    </div>
    <label for="sidebar-toggle" class="p-2 -mr-2 text-text-muted hover:text-text md:hidden cursor-pointer rounded-lg hover:bg-white/50">
      <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
      </svg>
    </label>
  </div>


  <div class="px-3 py-3 mt-3 ml-2 mr-2 rounded-lg flex items-center gap-2 bg-white">
    <div class="w-12 h-12 rounded-full bg-secondary-100 flex items-center justify-center text-primary text-xs font-semibold">AN</div>
    <div>
      <p class="text-[15px] font-medium leading-none text-text"><?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
      <p class="mt-1 text-[13px] font-medium text-text-muted"><?php echo htmlspecialchars($_SESSION['user']['role']); ?></p>
    </div>
  </div>

  <nav class="flex-1 px-3 py-4 space-y-1 mt-10 gap-10">
    <a href="dashboard.php" class="nav-link active">
      <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3.5" y="3.5" width="7" height="7" rx="1.5"/><rect x="13.5" y="3.5" width="7" height="7" rx="1.5"/><rect x="3.5" y="13.5" width="7" height="7" rx="1.5"/><rect x="13.5" y="13.5" width="7" height="7" rx="1.5"/></svg>
      Dashboard
    </a>
    <!-- <a href="avancement.php" class="mt-2 nav-link">
      <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19V5M4 19h16M8 15l3-3 2.5 2.5L18 9" stroke-linecap="round" stroke-linejoin="round"/></svg>
       Historique / Avancement
    </a>
    <a href="notifications.php" class="mt-2 nav-link">
      <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 8a6 6 0 1 0-12 0c0 5-2 6-2 6h16s-2-1-2-6" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.5 20a1.5 1.5 0 0 0 3 0" stroke-linecap="round"/></svg>
      mes Notifications
    </a> -->
  </nav>
</aside>