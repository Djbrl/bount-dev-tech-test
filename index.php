<?php
session_start(); 


if (isset($_SESSION['entrepreneurs'])) {
    $entrepreneurs = $_SESSION['entrepreneurs']; 
} else {
    $entrepreneurs = []; 
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    unset($_SESSION['entrepreneurs']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOUNT DEV TEST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" type="text/css" href="style/mycss.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <!-- Menu du Site -->
    <header>
        <div class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <div class="menu-links">
                <a href="#">Accueil</a>
                <a href="#">Qui Sommes-nous</a>
                <a href="#">Nos Services</a>
                <a href="#">Contact</a>
            </div>
        </div>
    </header>
    <!-- Fin Menu -->

    <!-- Corps du programme -->
    <div class="corps">
        <!-- Sidebar Section -->
        <div class="sidebar">
            <div class="sidebar-header">Bount Bi</div>
            <img src="images/logo.png" alt="Logo  du site" class="logo">
            <form action="controller/traitement.php" method="POST">
                <button type="submit" name="afficher" class="button-link">Informations Projets</button>
            </form>
        </div>

        <!-- Central Corps du Programme -->
        <div class="div-central">
            <h1>HELLO WORD</h1>
            <p>Bienvenue sur l'espace des futures développeurs experts</p>
            <a href="https://bount-dev.com/" class="button-link">Visitez bount-dev</a>

            <div id="app">
                <button class="button-link" @click="showInfo = !showInfo">
                    {{ showInfo ? 'Masquer l\'entrepreneur' : 'Afficher l\'entrepreneur' }}
                </button>
                <transition name="fade">
                    <div v-if="showInfo">
                        <p><strong>Nom :</strong> {{ user.name }}</p>
                        <p><strong>Email :</strong> {{ user.email }}</p>
                        <p><strong>Téléphone :</strong> {{ user.phone }}</p>
                    </div>
                </transition>
            </div>

            <!-- Tableau des projets -->
            <?php if (!empty($entrepreneurs)): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="entete-table">
                            <tr>
                                <th>Nom du Projet</th>
                                <th>Type de Projet</th>
                                <th>Impacts du Projet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($entrepreneurs as $entrepreneur): ?>
                                <tr>
                                    <td><?= htmlspecialchars($entrepreneur['Nom_Projet']) ?></td>
                                    <td><?= htmlspecialchars($entrepreneur['Type_Projet']) ?></td>
                                    <td><?= htmlspecialchars($entrepreneur['Impacts_Projet']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-warning">Aucune donnée à afficher pour le moment.</div>
            <?php endif; ?>
        </div>
        <!-- fin Corps du programme -->
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <!-- À propos -->
            <div class="footer-section">
                <h3><i class="fas fa-info-circle"></i> À propos</h3>
                <p>Notre mission principale est de construire un relais et faciliter la relation entre les PME et leurs potentiels clients tout en dynamisant le secteur grâce au digital.</p>
            </div>

            <!-- Navigation -->
            <div class="footer-section">
                <h3><i class="fas fa-link"></i> Liens utiles</h3>
                <p><a href="#">Accueil</a></p>
                <p><a href="#">A Propos</a></p>
                <p><a href="#">Contact</a></p>
                <p><a href="#">Mentions légales</a></p>
            </div>

            <!-- Contact -->
            <div class="footer-section">
                <h3><i class="fas fa-envelope"></i> Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i> 379 Rue Cheikh Anta, Dakar</p>
                <p><i class="fas fa-phone"></i> +221 70 345 78 89</p>
                <p><i class="fas fa-envelope"></i> contact@exemple.com</p>

                <div class="footer-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Fin footer -->

    <script type="text/javascript" src="style/myscript.js"></script>
</body>
</html>
