<!DOCTYPE html>
<html lang="en">
<head>
    <!--    meta files-->
    <meta charset="UTF-8">
    <meta name="'viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <!--    bootstrap. Jei nepasiima css kai css/bootstrap.min.css dasidedam view/ -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <title>PHP Forma</title>
</head>
<body>

<div class="container">

    <?php include "view/header.php"?>

    <!--    kad duomenis siustu reik name isisdet-->

<?php validate($_POST);?>
    <?php if (isset($_POST['send']) & empty($validation)): ?>
        <section>
            <h2 class="text-center text-info m-4">Data</h2>
            <?php printData();?>
        </section>


            <?php foreach ($_POST

            as $data => $value): ?>


            </div>

    <?php if ($data != "send"): ?>
    <div class="blokas">
        <ul class="list-group">
            <a href="#" class="list-group-item list-group-item-action list-group-item-info text-center"
            >
                <span><?= htmlspecialchars(ucfirst($data)); ?> : </span><?= htmlspecialchars(ucfirst($value)); ?>
            </a>
        </ul>

        <?php endif; ?>
        <?php endforeach ?>
        <!--    The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
        This function returns true if the variable exists and is not NULL, otherwise it returns false.-->
    <?php else: ?>
    <?php if (isset($validation)) {
        foreach ($validation as $error): ?>
            <div class="alert alert-danger mt-4" role="alert">
                <?= $error; ?>
            </div>
        <?php endforeach;
    } ?>



    <form method="post">
        <div class="form-group mt-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">Enter your name</small>
        </div>
        <div class="form-group mt-3">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastNameHelp">
            <small id="lastNameHelp" class="form-text text-muted">Enter your Last Name</small>
        </div>
        <div class="form-group mt-3">
            <label for="InputEmail1">Email</label>
            <input type="email" class="form-control" id="InputEmail1" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Enter your e-mail</small>
        </div>

        <?php require "inc/departments.php" ?>


        <div class="form-group mt-3">
            <select class="form-control" id="departmentsselect" name="departament">
                <option value="" disabled selected>--Choose Department</option>
                <?php for ($i = 0; $i < count($departments); $i++): ?>
                    <option><?= $departments[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>

        </select>
        <div class="form-group mt-3">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-5 mb-4" name="send">Send</button>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>


</body>
</html>

<?php endif; ?>
