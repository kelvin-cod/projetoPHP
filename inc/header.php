<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo BASEURL; ?>index.php">
            <i class="fa fa-elephant"></i>
            PHP-CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BASEURL; ?>index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <div class="dropdown  ">
                    <li class="nav-item">
                        <div class=" dropdown-toggle nav-link text-white" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Clientes
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/list.php">
                                <i class="fa fa-users"></i>
                                Gerenciar Clientes</a>
                            <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">
                                <i class="fa fa-plus"></i>
                                Novo Cliente
                            </a>

                        </div>

                    </li>
                </div>
            </ul>

        </div>
    </nav>
</header>