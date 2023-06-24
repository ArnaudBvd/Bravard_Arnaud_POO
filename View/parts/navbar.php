<header>
    <nav class="navbar navbar-expand-lg py-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="public/icons/motorcycle.png" alt="" width="100" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav col-10">
                    <li class="nav-item">
                        <a class="nav-link fs-5" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="index.php?controller=moto&action=list">Gallerie</a>
                    </li>                    

                    <li class="nav-item ms-5">
                        <?php if ($this->connexion_status() == false) {
                            echo '<a class=" btn btn-success fs-5 nav-link fw-semibold px-3 p-2" href="index.php?controller=security&action=login">Connexion</a>';
                        } else if ($this->connexion_status() == true) {
                            echo '<a class=" btn btn-danger fs-5 nav-link fw-semibold px-3 p-2" href="index.php?controller=security&action=logout">Déconnexion</a>';
                        }
                        ?>
                    </li>
                    
                </ul>
                
                <div class=" d-flex justify-content-center col-2">
                        <?php
                        if ($this->currentUser) {
                            echo ('<a class="nav-link text-center fs-5 float-end" id="welcome"> Bienvenue ' . $this->currentUser->getName(). '</a>');
                        }
                        ?>
                </div>
            </div>
        </div>
    </nav>
</header>