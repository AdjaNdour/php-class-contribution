<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Apprenants — Contribution Class</title>
<link rel="stylesheet" href="/assets/css/output.css">
</head>
<body class="font-body">
<div class="min-h-screen flex bg-background">

    <?php
        require_once(dirname(__DIR__)."/layout/nav-gerant.html.php");
    ?>
  <!-- Main -->
  <div class="flex-1 flex flex-col min-w-0">

    <?php
        require_once(dirname(__DIR__)."/layout/topbar.html.php");
    ?>

    <main class="flex-1 overflow-y-auto p-6 space-y-6">

      <!-- Stat cards -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-surface rounded-xl border border-gray-100 p-4">
          <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-3">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6" stroke-linecap="round"/><circle cx="17.5" cy="9" r="2.3"/><path d="M15.5 13.2c2.6.3 4.6 2.3 4.9 5" stroke-linecap="round"/></svg>
          </div>
          <p class="text-[11px] font-semibold tracking-wide text-text-muted">TOTAL APPRENANT</p>
          <p class="font-display font-semibold text-xl text-text mt-1"><?php echo $nbrApprenant; ?></p>
        </div>
        <div class="bg-surface rounded-xl border border-gray-100 p-4">
          <div class="w-8 h-8 rounded-lg bg-danger/10 flex items-center justify-center text-danger mb-3">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <p class="text-[11px] font-semibold tracking-wide text-text-muted">RETARD</p>
          <p class="font-display font-semibold text-xl text-text mt-1"><?php echo $nbrApprenantRetard; ?></p>
        </div>
        <div class="bg-surface rounded-xl border border-gray-100 p-4">
          <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-3">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3.5" y="4.5" width="17" height="16" rx="2"/><path d="M3.5 9.5h17M8 3v3M16 3v3" stroke-linecap="round"/></svg>
          </div>
          <p class="text-[11px] font-semibold tracking-wide text-text-muted">SEMAINE COURANT</p>
          <p class="font-display font-semibold text-xl text-text mt-1">SMN 14</p>
        </div>
      </div>

      <!-- Table -->
      <div class="bg-surface rounded-xl border border-gray-100 overflow-x-auto">
        <table class="w-full text-sm">
         <tbody class="divide-y divide-gray-100">

            <?php foreach ($apprenants as $apprenant): ?>
            <tr class="hover:bg-background/60">
                <td class="px-5 py-4">
                <div class="flex items-center gap-2.5">
                    <div class="w-7 h-7 rounded-full bg-secondary-100 flex items-center justify-center text-primary">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4.4 3.6-8 8-8s8 3.6 8 8" /></svg>
                    </div>
                    <span class="font-medium text-text"><?php echo htmlspecialchars($apprenant['prenom']); ?> <?php  echo htmlspecialchars($apprenant['nom']); ?></span>
                </div>
                </td>
                <td class="px-5 py-4 text-text-muted">0 FCFA</td>
                <td class="px-5 py-4">
                <?php if ($apprenant['estAJour']): ?>
                    <span class=" text-success font-medium">à jour</span>
                <?php else: ?>
                    <span class="text-danger font-medium">retard</span>
                <?php endif; ?>
                </td>
                <td class="px-5 py-4 text-text-muted">semaine 14</td>
                <td class="px-5 py-4 text-right">


                <form method="POST" action="/gerant/marquerAbandon" class="inline">
                <input type="hidden" name="id" value="<?= $apprenant['id'] ?>">
                    <button type="submit" class="bg-primary hover:bg-primary-600 text-white text-xs font-semibold px-4 py-2 rounded-lg">
                        Marquer Abandon
                    </button>
                </form>

                </td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

</body>
</html>