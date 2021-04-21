        <!-- main -->
        <div class="col-9 p-3">
            <div class="ps-3">
                <?php
                $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';

                if (!empty($page)) {
                    include_once $page . '.php';
                } else {
                    include_once 'views/menu_page/home.php';
                }
                ?>
            </div>
        </div>
        <!-- end main -->