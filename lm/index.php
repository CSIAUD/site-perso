<?php include("getDate.php"); ?>
<!DOCTYPE html>
<html lang="fr" class="font-sans p-0 bg-black">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lettre de Motivation Cyprien Siaud</title>
    <link rel="stylesheet" href="./assets/css/output.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/8ccb279da9.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
</head>
<body class="p-0 m-0 flex flex-row justify-around">
    <main class="flex flex-row flex-nowrap">
        <div class="w-7/20 bg-gray p-0 h-full relative">
            <h1 class="h-2/20 text-center text-ivory bg-blue pt-20 text-5xl font-oswald rounded-b-custom">Cyprien SIAUD</h1>
            <div id="in" class="p-2/20 flex flex-col justify-between h-14/20">
                <div class="w-full flex flex-col space-y-10 text-2xl">
                    <p class="font-bold">
                        Fait à Trets, le <?=$date?>
                    </p>
                    <div>
                        <h2 class="text-blue font-ligther text-3xl mb-2.5">Détails Personnels</h2>
                        <hr>
                        <ul class="flex flex-col">
                            <li class="my-3"><i class="text-blue mr-8 text-4xl fas fa-at"></i>csiaud83@gmail.com</li>
                            <li class="my-3"><i class="text-blue mr-8 text-4xl fas fa-phone"></i>06.07.56.44.74</li>
                            <li class="my-3"><i class="text-blue mr-8 text-4xl fas fa-home"></i><span class="inline-block align-middle">24B Avenue Mirabeau<br>13530 Trets</span></li>
                            <!-- <li class="my-3"><i class="text-blue mr-8 text-4xl fas fa-home"></i><span class="inline-block align-middle">1475 Route de Montbartier<br>82710 Bressols</span></li> -->
                            <!-- <li class="my-3"><i class="text-blue mr-8 text-4xl fas fa-globe"></i>www.cyprien-siaud.fr</li> -->
                            <li class="my-3"><i class="text-blue mr-8 text-4xl fab fa-linkedin"></i><a href="https://www.linkedin.com/in/cyprien-siaud-833911147"><span class="inline-block align-middle">linkedin.com/in/cyprien-<br>siaud-833911147</span></a></li>
                            <li class="my-3"><i class="text-blue mr-8 text-4xl fab fa-github"></i><a href="https://github.com/CSIAUD">github.com/CSIAUD</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="bottom" class="h-2/20 bg-blue w-full absolute left-0 bottom-0">
                <div class="left-0 -top-px relative w-full h-10/20 p-20 bg-gray rounded-b-custom"></div>
                <!-- <div class="w-full">
                    <h3 class="text-blue w-full h-0 p-0 m-0 text-right text-2xl font-bold">Depuis Novembre 2020</h3>
                    <div class="text-ivory text-3xl p-10 mt-10 text-center">
                        <h2 class="font-bold text-4xl">Auto-entrepreneur</h2>
                        <p>Sur Trets (13530)</p>
                        <br>
                        <p>Création de Sites<br>Installation de matériel informatique</p>

                    </div>
                </div> -->
            </div>
        </div>
        <!-- ========================================================= -->
        <div class="w-13/20 h-full p-12 pr-24 pt-28 relative bg-white flex flex-col space-y-10">
            <h2 class="text-center mt-2.5 text-5xl font-bold text-blue pb-16">Recherche d'une Alternance<br>en développement WEB</h2>
            <p class="text-justify text-3xl">
                Madame, Monsieur,
            </p>
            <br>
            <p class="text-justify text-3xl">
                Actuellement en deuxième année de Bachelor informatique au campus Ynov Aix et passionné d'informatique, je vous sollicite pour un contrat en apprentissage d'une durée de 3 ans.<br>
                Je suis depuis toujours attiré par ce domaine, si bien que je souhaite en faire mon métier.<br>
            </p>
            <br>
            <p class="text-justify text-3xl">
                Voilà maintenant 2 ans que j'apprends les bases de l'informatique, telles que la programmation, le réseau ainsi que la cyber-sécurité. C'est ce qui m'amène aujourd'hui à vous déposer ma candidature.<br>
                En effet, une entreprise telle que la vôtre me permettrait de mettre en œuvre mes compétences acquises, de les améliorer ainsi que d'en assimiler de nouvelles.<br>
            </p>
            <br>
            <p class="text-justify text-3xl">
                Curieux, autodidacte et soucieux du détail, je mets du cœur à réaliser les tâches qui me sont confiées du mieux possible.<br>
                Motivé et sociable je m'intègre facilement et rapidement au sein d'une nouvelle équipe.<br>
            </p>
            <br>
            <p class="text-justify text-3xl">
                J'attire votre attention sur le fait que cette alternance fait partie intégrante de ma formation et est donc très importante pour moi.<br>
                <!-- Pouvoir la réaliser dans votre entreprise serait un avantage et un plus. -->
            </p>
            <br>
            <p class="text-justify text-3xl">
                N'hésitez pas à me joindre par mail ou par téléphone,<br>
                Je reste à votre disposition pour toutes autres informations.
            </p>
            <br>
            <p class="text-justify text-3xl">
                Veuillez agréer, Madame, Monsieur, l'expression de ma considération distinguée.<br>
            </p>
            <br>
            <p class="text-justify text-3xl">
                <span class="text-right block">SIAUD Cyprien</span>
            </p>
            <img id="logo" src="./assets/imgs/logo.png" alt="logo" class="w-16/20 absolute opacity-10 bottom-2/20 right-0 left-0 mx-auto z-0">
        </div>
    </main>
</body>
</html>
