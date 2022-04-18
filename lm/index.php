<?php include("getDate.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lettre de Motivation Cyprien Siaud</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8ccb279da9.js" crossorigin="anonymous"></script>
    <script defer>
        const people = [
            {name: "Jhon", age: 35},
            {name: "David", age: 27},
            {name: "Nick", age: 41}
        ]
        console.table(people)
    </script>
</head>
<body>
    <main>
        <div id="left">
            <h1>Cyprien SIAUD</h1>
            <div id="in">
                <div>
                    <p id="date">
                        Fait à Trets, le <?=$date?>
                    </p>
                    <h2>Détails Personnels</h2>
                    <hr>
                    <ul>
                        <!-- li>i.fas.fa- -->
                        <li><i class="fas fa-at"></i>csiaud83@gmail.com</li>
                        <li><i class="fas fa-phone"></i>06.07.56.44.74</li>
                        <!-- <li><i class="fas fa-home"></i><span>24B Avenue Mirabeau<br>13530 Trets</span></li> -->
                        <li><i class="fas fa-home"></i><span>1475 Route de Montbartier<br>82710 Bressols</span></li>
                        <!-- <li><i class="fas fa-globe"></i>www.cyprien-siaud.fr</li> -->
                        <li><i class="fab fa-linkedin"></i><span>linkedin.com/in/cyprien-<br>siaud-833911147</span></li>
                        <li><i class="fab fa-github"></i>github.com/CSIAUD</li>
                    </ul>
                </div>
            </div>  
            <div id="bottom">
                <div></div>
            </div>
        </div>
        <!-- ========================================================= -->
        <div id="right">
            <h2>Lettre de motivation</h2>
            <h3>
                Sujet : Recherche d'une Alternance en développement WEB
            </h3>
            <p>
                Madame, Monsieur,
            </p>
            <p>
                Actuellement en deuxième année de Bachelor informatique au campus Ynov Aix et passionné d'informatique, je vous sollicite pour un contrat en apprentissage d'une durée de 3 ans.<br>
                <br>
                Je suis depuis toujours attiré par ce domaine, si bien que je souhaite en faire mon métier.<br>
                <br>
                Voilà maintenant 2 ans que nous apprenons les bases de l'informatique, telles que la programmation le réseau ainsi que la cyber-Sécurité.<br>
                <br>
                Ce qui m'amène aujourd'hui à vous déposer ma candidature, en effet une entreprise telle que la vôtre me permettrait de mettre en œuvre mes compétences acquises ainsi que d'en apprendre de nouvelles.<br>
                <br>
                Curieux, autodidacte et soucieux du détail, je mets du cœur à réaliser les tâches qui me sont confiées du mieux possible.<br>
                <br>
                Motivé et sociable je m'intègre facilement et rapidement au sein d'une nouvelle équipe.<br>
                <br>
                J'attire votre attention sur le fait que cette alternance fait partie intégrante de ma formation et est donc très importante pour moi.<br>
                <br>
                Pouvoir la réaliser dans votre entreprise serait un avantage et un plus.
            </p>
            <p>
                N'hésitez pas à me joindre par mail ou par téléphone,<br>
                Je reste à votre disposition pour toutes autres informations
            </p>
            <p>
                Veuillez agréer Madame, Monsieur, mes salutations distinguées.<br>
                <br>
                Monsieur SIAUD Cyprien
            </p>
            <img id="logo" src="logo.png" alt="">
        </div>
    </main>
</body>
</html>

            <!-- <h2>Lettre de motivation</h2>
            <h3>
                Sujet : Recherche d'une Alternance en développement WEB
            </h3>
            <p>
                Madame, Monsieur,
            </p>
            <p>
                Actuellement en deuxième année de Bachelor Informatique au campus
                Ynov Aix et passionné d'informatique.<br>
                Tout au long de ce parcours d'apprentissage, nous sommes formés sur une
                grande partie de l'informatique avec une spécialisation en 3ème année. Pour ma
                part, je me spécialiserais en développement WEB / Logiciel.<br>
                Je souhaiterais donc pouvoir utiliser les connaissances que j'ai déjà acquises afin
                de pouvoir mener à bien les différentes missions que vous voudrez bien me
                confier au sein de votre entreprise.
            </p>
            <p>
                Etant curieux, autodidacte et soucieux des détails, j'ai pour habitude de
                rapidement m'intégrer dans une équipe, et j'aimerais que ce soit dans la vôtre.
                Cette alternance est très importante pour moi car elle fait partie intégrante de ma
                formation.<br>
                Être alternant me permettra d'acquérir de nouvelles compétences en développement ainsi que du professionnalisme.
            </p>
            <p>
                N'hésitez pas à me joindre par mail ou par téléphone,<br>
                Je reste à votre disposition pour toutes autres informations,
            </p>
            <p>
                Veuillez agréer Madame, Monsieur, mes salutations distinguées.<br>
                <br>
                Monsieur SIAUD Cyprien
            </p> -->