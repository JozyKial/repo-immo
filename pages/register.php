<?php

if(isset($_POST['submit'])){
    
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    if(email_taken($email) == 1){
        $error_email = "l'adresse mail est déjà utilisée...";
    }else{
        register($name, $email, $password);
        $_SESSION['Contact'] = $email;
        header("Location:index.php?page=membres");
    }


}


?>


<div class="row mt">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <h4 class="title">Enregistrement</h4>
        <div id="message"></div>
        <form class="contact-form php-mail-form" id="regForm" role="form" method="POST">

            <div class="form-group">
                <input type="name" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="Votre adresse email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
            </div>


            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">S'inscrire</button>
            </div>

        </form>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <h4 class="title">Contact Details</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <ul class="contact_details">
            <li><i class="fa fa-envelope-o"></i> jozykial@gmail.com</li>
            <li><i class="fa fa-phone-square"></i> +242 06 693 6310</li>
            <li><i class="fa fa-home"></i> Rue Nkouma Ouenze, Brazzaville, Congo.</li>
        </ul>
        <!-- contact_details -->
    </div>
</div>