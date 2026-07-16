<?php
    $errors = $errors ??[];
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — Contribution Class</title>

    <link rel="stylesheet" href="assets/css/output.css">
</head>

<body class="min-h-screen font-body">
    <div class="min-h-screen flex items-center justify-center relative overflow-hidden px-4">

        <!-- Background -->
        <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 1200 800" preserveAspectRatio="none" fill="none">
            <path d="M0,500 C200,420 300,600 500,520 C700,440 800,600 1000,500 C1100,450 1150,480 1200,460 L1200,800 L0,800 Z" fill="#4F46E5" fill-opacity="0.04" />
            <path d="M0,560 C220,480 320,650 520,570 C720,490 830,640 1030,540 C1130,490 1170,510 1200,500" stroke="#4F46E5" stroke-opacity="0.15" stroke-width="2" fill="none" />
        </svg>
        <div class="relative z-10 w-full max-w-md">
            <div class="bg-surface border-2 border-primary rounded-2xl shadow-xl shadow-primary/5 p-8">
                <!-- Logo -->
                <div class="flex flex-col items-center text-center mb-6">
                    <div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center text-white font-bold text-lg">
                        C
                    </div>
                    <h1 class="font-display font-semibold text-lg text-text mt-3"> Contribution Class </h1>
                    <p class="text-sm text-text-muted mt-1"> Connectez-vous et gérez vos cotisations </p>
                </div>

                <?php if (isset($errors['errorConnexion'])): ?>
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-4 rounded-md">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">Erreur de connexion :</h3>
                                <div class="mt-1 text-sm text-red-700">
                                    <ul role="list" class="list-disc pl-5 space-y-1">
                                        <li><?php echo htmlspecialchars($errors['errorConnexion']); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <form action="/login" method="POST" class="space-y-4">
                    <div>
                        <label for="email" class="block text-xs font-semibold tracking-wide text-text-muted mb-2"> ADRESSE EMAIL </label>
                        <input id="email" name="email" type="email" placeholder="email@gmail.com" class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-background text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>

                    <!-- Mot de passe -->
                    <div>
                        <label for="password" class="block text-xs font-semibold tracking-wide text-text-muted mb-2"> MOT DE PASSE </label>
                        <input id="password" name="password" type="password" placeholder="********" class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-background text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>

                    <div class="flex justify-end">
                        <a href="#" class="text-xs text-primary hover:underline"> Mot de passe oublié ? </a>
                    </div>

                    <button type="submit" class="w-full flex items-center justify-center gap-2 bg-primary hover:bg-primary-600 text-white text-sm font-semibold py-3 rounded-lg transition"> Se connecter
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                </form>
                <p class="text-center text-xs text-text-muted mt-6"> Pas encore de compte ?
                    <a href="/inscription" class="text-primary font-medium hover:underline"> Inscrivez-vous ici </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>