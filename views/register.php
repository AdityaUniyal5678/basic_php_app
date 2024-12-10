<?php
require_once 'controllers/UsersController.php';
$objUserController = new UsersController();

if (isset($_POST['submit']) && $_POST['submit'] === 'Register') {
    $status = $objUserController->saveUser(
        $conn,
        [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'contact_no' => $_POST['contact_no'],
            'profile_pic' => $_FILES['profile_pic']
        ]
    );

    if ($status) {
        ?>
        <div class="alert alert-success mt-5">you are registered successfully.</div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger mt-5">Oops some error occurred, please try again later.</div>
        <?php
    }
}
?>
<div class="card mt-5">
    <div class="card-header">Registration</div>
    <div class="card-body">

        <form action="index.php?page=register" method="post" enctype="multipart/form-data">
            <div class="row">

                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="">First Name: </label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Last Name: </label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Email: </label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Contact No. :</label>
                        <input type="number" name="contact_no" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="">Upload Profile Pic: </label>
                        <input type="file" name="profile_pic" class="form-control" required>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-4">
                    <input type="submit" class="btn btn-primary" value="Register" name="submit">
                </div>
            </div>
        </form>
    </div>
</div>