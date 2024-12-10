<div class="container">

    <?php
    if (isset($_GET['page']) && $_GET['page'] !== '') {
        $view = ucwords($_GET['page']);

        if (!file_exists("views/$view.php")) {
            require_once 'views/not-found.php';
            exit(1);
        }
        require_once "views/$view.php";
    } else {
        header("Location: index.php?page=home");
        exit(1);
    }

    ?>
</div>