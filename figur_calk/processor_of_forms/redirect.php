<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['area'])) {
        $selectedOption = $_GET['area'];

        if ($selectedOption === 'square') {
            header('Location: ../figur_forms/formsquare.php');
            exit();
        } elseif ($selectedOption === 'tringel') {
            header('Location: ../figur_forms/formtringel.php');
            exit();
        } elseif ($selectedOption === 'circle') {
            header('Location: ../figur_forms/formcircle.php');
            exit();
        }
    }
}
?>