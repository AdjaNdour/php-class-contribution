    <?php
        $apprenants = $viewData["apprenantsRetard"] ?? [];
    ?>
   <div class="bg-surface rounded-xl border border-gray-100 overflow-x-auto">
       <table class="w-full text-sm">
           <tbody class="divide-y divide-gray-100">

               <?php foreach ($apprenants as $apprenant): ?>
                   <tr class="hover:bg-background/60">
                       <td class="px-5 py-4">
                           <div class="flex items-center gap-2.5">
                               <div class="w-7 h-7 rounded-full bg-secondary-100 flex items-center justify-center text-primary">
                                   <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor">
                                       <circle cx="12" cy="8" r="4" />
                                       <path d="M4 20c0-4.4 3.6-8 8-8s8 3.6 8 8" />
                                   </svg>
                               </div>
                               <span class="font-medium text-text"><?php echo htmlspecialchars($apprenant['prenom']); ?> <?php echo htmlspecialchars($apprenant['nom']); ?></span>
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