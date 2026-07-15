<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription — Contribution Class</title>
    <link rel="stylesheet" href="assets/css/output.css">
</head>

<body class="min-h-screen font-body">

<div class="min-h-screen flex items-center justify-center relative overflow-hidden px-4">

    <svg class="absolute inset-0 w-full h-full pointer-events-none"
         viewBox="0 0 1200 800"
         preserveAspectRatio="none"
         fill="none">

        <path d="M0,500 C200,420 300,600 500,520 C700,440 800,600 1000,500 C1100,450 1150,480 1200,460 L1200,800 L0,800 Z"
              fill="#4F46E5"
              fill-opacity="0.04"/>

        <path d="M0,560 C220,480 320,650 520,570 C720,490 830,640 1030,540 C1130,490 1170,510 1200,500"
              stroke="#4F46E5"
              stroke-opacity="0.15"
              stroke-width="2"
              fill="none"/>
    </svg>

    <div class="relative z-10 w-full max-w-3xl">
        <div class="bg-surface border-2 border-primary rounded-2xl shadow-xl shadow-primary/5 p-8">
            
        <div class="flex flex-col items-center text-center mb-6">
                <div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center text-white font-bold text-lg">
                    C
                </div>
                <h1 class="font-display font-semibold text-lg text-text mt-3">
                    Contribution Class
                </h1>
                <p class="text-sm text-text-muted mt-1">
                    Créez votre compte
                </p>

            </div>

            <?php if (!empty($errors)): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-4 rounded-md">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">Des erreurs sont survenues :</h3>
                            <div class="mt-1 text-sm text-red-700">
                                <ul role="list" class="list-disc pl-5 space-y-1">
                                    <?php foreach ($errors as $error): ?>
                                        <li><?php echo htmlspecialchars($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <form action="/inscription" method="POST" class="space-y-4">
                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <label class="block text-xs font-semibold text-text-muted mb-2">
                            NOM
                        </label>
                        <input type="text" name="nom" placeholder="Votre nom" required class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-background text-sm focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-text-muted mb-2">
                            PRÉNOM
                        </label>
                        <input type="text" name="prenom" placeholder="Votre prénom" required class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-background text-sm focus:ring-2 focus:ring-primary">
                    </div>

                </div>


                <div class="grid grid-cols-1 gap-4">

                    <div>
                        <label class="block text-xs font-semibold text-text-muted mb-2">
                            EMAIL
                        </label>
                        <input type="email" name="email" placeholder="email@gmail.com" required class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-background text-sm focus:ring-2 focus:ring-primary">
                    </div>

                </div>


                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-text-muted mb-2">
                            MOT DE PASSE
                        </label>
                        <input type="password" name="password" placeholder="********" required class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-background text-sm focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-text-muted mb-2">
                            CONFIRMATION
                        </label>
                        <input type="password" name="confirmation" placeholder="********" required class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-background text-sm focus:ring-2 focus:ring-primary">
                    </div>

                    <!-- <div>
                        <label class="block text-xs font-semibold text-text-muted mb-2">
                            ROLE
                        </label>
                        <select name="role"  required  class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-background text-sm focus:ring-2 focus:ring-primary">

                            <option value="">
                                Choisir un rôle
                            </option>

                            <option value="GERANT">
                                Gérant
                            </option>

                            <option value="APPRENANT">
                                Apprenant
                            </option>

                            <option value="COACH">
                                Coach
                            </option>

                        </select>
                    </div> -->

                </div>

                <button type="submit"
                    class="w-full bg-primary hover:bg-slate-900 text-white font-semibold py-3 rounded-lg transition">
                    S'inscrire
                </button>
            </form>


            <p class="text-center text-xs text-text-muted mt-6">
                Vous avez déjà un compte ?
                <a href="/login"
                   class="text-primary font-medium hover:underline">
                    Connectez-vous ici
                </a>
            </p>
        </div>
    </div>
</div>

</body>
</html>