<?php

//fonction qui permet de savoir si un email à déjà fait l'objet d'un enregistremet
function email_taken($email) {
    global $db;

    $tabEm = array('email' => $email);
    $sql = 'SELECT * FROM tbl_admin WHERE admin_email = :email';
    $req = $db->prepare($sql);
    $req->execute($tabEm);
    $free = $req->rowCount($sql);

    return $free;
}

// fontion pour enregistrer un users
function register($name, $email, $password) {
    global $db;

    $tabReg = array(
        'name'      => $name,
        'email'     => $email,
        'password'  => $password
    );

    $sql = "INSERT INTO tbl_admin(admin_username, admin_email, admin_password) VALUES(:name, :email, :password)";
    $req = $db->prepare($sql);
    $req->execute($tabReg);
}

?>