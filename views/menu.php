        <!-- menu -->
        <div class="col-12 bg-dark">
            <nav class="navbar navbar-expand-lg navbar-dark text-white pt-4 pb-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php?page=views/menu_page/home">
                        <img src="img/area.png" alt="" width="50" height="50" class="d-inline-block align-text-center">
                        <strong>STYart</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?page=views/menu_page/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?page=views/menu_page/aboutUs">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pegawai
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="index.php?page=dataPegawai">Data Pegawai</a></li>
                                </ul>
                            </li>
                            <?php
                            $member = isset($_SESSION['MEMBER']) ? $_SESSION['MEMBER'] : null;
                            // $member = $_SESSION['MEMBER'];
                            if (!isset($member)) {

                            ?>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary active" href="index.php?page=login">Login</a>
                                </li>
                            <?php
                            } else {

                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= $member['fullname']; ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Users</a></li>
                                        <li><a class="dropdown-item" href="index.php?page=profile">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Anda akan logout')">Logout</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Cari sesuatu..." aria-label="Cari">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <!-- end menu -->