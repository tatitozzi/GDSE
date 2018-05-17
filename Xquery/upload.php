<?php
    session_start();

    $uploadDir = 'C:\wamp64\www\GDSE\Lista5\uploads/';
    $fileName = $_FILES['userfile']['name'];
    $uploadFile = $uploadDir . basename($_FILES['userfile']['name']);

    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile)) {
        echo "Arquivo válido e carregado com sucesso!\n";
        $_SESSION['file'] = $fileName;
        ;
        header('location: search.html');
    } else {
        echo "Erro no carregamento!!\n";
        unset ($_SESSION['file']);
        header('location: upload.php');
    }

    echo 'Ocorreu algum erro:';
    print_r($_FILES);

    print "</pre>";
?>
