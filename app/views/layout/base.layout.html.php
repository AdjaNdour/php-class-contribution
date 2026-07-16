<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard — Contribution Class</title>
  <link rel="stylesheet" href="/assets/css/output.css">
</head>

<body class="font-body">
  <div class="min-h-screen flex bg-background">

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

      <div class="px-3 py-3 ml-2 mr-2 rounded-lg flex items-center gap-2 bg-white">
        <div class="w-12 h-12 rounded-full bg-secondary-100 flex items-center justify-center text-primary text-xs font-semibold">G</div>
        <div>
          <p class="text-[15px] font-medium leading-none text-text"><?php echo getData('userConnect')['nom'] ;echo " ". getData('userConnect')['prenom']; ?></p>
          <p class="text-[13px] text-text-muted mt-1"><?php echo getData('userConnect')['role'][0] ?></p>
        </div>
      </div>

      <nav class="flex-1 px-3 py-4 space-y-1 mt-10 gap-10">

        <?php if (isGranted("Apprenant")): ?>
          <a href="/apprenant/dashboard" class="nav-link active">
            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <rect x="3.5" y="3.5" width="7" height="7" rx="1.5" />
              <rect x="13.5" y="3.5" width="7" height="7" rx="1.5" />
              <rect x="3.5" y="13.5" width="7" height="7" rx="1.5" />
              <rect x="13.5" y="13.5" width="7" height="7" rx="1.5" />
            </svg>
            Dashboard
          </a>
          <a href="avancement.php" class="mt-2 nav-link">
            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M4 19V5M4 19h16M8 15l3-3 2.5 2.5L18 9" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Historique / Avancement
          </a>
          <a href="notifications.php" class="mt-2 nav-link">
            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M18 8a6 6 0 1 0-12 0c0 5-2 6-2 6h16s-2-1-2-6" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10.5 20a1.5 1.5 0 0 0 3 0" stroke-linecap="round" />
            </svg>
            mes Notifications
          </a>
        <?php endif ?>

        <?php if (isGranted("Gerant")): ?>
          <a href="/gerant/dashboard" class="nav-link active>">
            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <rect x="3.5" y="3.5" width="7" height="7" rx="1.5" />
              <rect x="13.5" y="3.5" width="7" height="7" rx="1.5" />
              <rect x="3.5" y="13.5" width="7" height="7" rx="1.5" />
              <rect x="13.5" y="13.5" width="7" height="7" rx="1.5" />
            </svg>
            Dashboard
          </a>
          <a href="/gerant/apprenantActif" class="nav-link">
            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <circle cx="9" cy="8" r="3" />
              <path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6" stroke-linecap="round" />
              <circle cx="17.5" cy="9" r="2.3" />
              <path d="M15.5 13.2c2.6.3 4.6 2.3 4.9 5" stroke-linecap="round" />
            </svg>
            Apprenants
          </a>
          <a href="" class="nav-link">
            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <rect x="3" y="5.5" width="18" height="13" rx="2" />
              <path d="M3 9.5h18" stroke-linecap="round" />
            </svg>
            Paiements
          </a>

          <a href="" class="nav-link ">
            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M3 10v4a1 1 0 0 0 1 1h2l4.5 3.5a1 1 0 0 0 1.6-.8V6.3a1 1 0 0 0-1.6-.8L6 9H4a1 1 0 0 0-1 1Z" />
              <path d="M17 8.5a5 5 0 0 1 0 7" stroke-linecap="round" />
              <path d="M19.5 6a8 8 0 0 1 0 12" stroke-linecap="round" />
            </svg>
            Campagnes
          </a>
          <a href="" class="nav-link ">
            <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M3 3h18v18H3V3z M3 9h18 M3 15h18 M9 3v18 M15 3v18" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Tableau Croisé
          </a>
        <?php endif ?>

      </nav>
    </aside>

    <!-- Main -->
    <div class="flex-1 flex flex-col min-w-0">

      <!-- header -->
      <header class="h-16 flex items-center justify-between px-4 md:px-6 border-b border-indigo-200 bg-surface shrink-0 gap-4">
        <div class="flex items-center gap-2 flex-1 max-w-xs md:max-w-none">
          <!-- Hamburgueur Menu Button for Mobile -->
          <label for="sidebar-toggle" class="p-2 -ml-2 text-text-muted hover:text-text md:hidden cursor-pointer rounded-lg hover:bg-background">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </label>
          <div class="relative w-full md:w-72">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-text-muted" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <circle cx="11" cy="11" r="7" />
              <path d="m20 20-3.5-3.5" stroke-linecap="round" />
            </svg>
            <input type="text" placeholder="Search records..." class="w-full pl-9 pr-3 py-2 rounded-lg border border-gray-200 text-sm bg-background text-text placeholder:text-text-muted focus:outline-none focus:ring-2 focus:ring-primary/30" />
          </div>
        </div>
        <form action="/login" method="GET">
          <button
            type="submit"
            class="flex items-center gap-2 bg-primary hover:bg-slate-900 text-white text-sm font-medium px-3 py-2 md:px-4 rounded-lg transition-colors">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" stroke-linecap="round" stroke-linejoin="round" />
              <path d="m16 17 5-5-5-5M21 12H9" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="hidden sm:inline">
              Déconnexion
            </span>
          </button>
        </form>
      </header>

      <main class="flex-1 overflow-y-auto p-6 space-y-6">
        <?= $contentForView; ?>
      </main>

    </div>
  </div>
</body>

</html>