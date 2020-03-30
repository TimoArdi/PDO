<?php
if ($_POST) {


    $errors = [];

    ///Start Validation
    if (empty($_POST['lastname'])) {
        $errors['lastname1'] = ' Empty Field ';
    }
    if(strlen($_POST['lastname']) > 45) {
        $errors['lastname2'] = ' Too long ';

    }
    if (empty($_POST['firstname'])) {
        $errors['firstname1'] = ' Empty Field ';
    }
    if(strlen($_POST['firstname']) > 45) {
        $errors['firstname2'] = ' Too long ';

    }
}