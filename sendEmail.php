<?php
if(isset($_POST["Enviar"])){
    if(!empty($_POST['email']) && !empty($_POST['mensaje'])){
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $subject = "Cliente nuevo";
        $header = "Form: $email " . "\r\n";
        $header.= "Reply-To: sebasxdxdxd" . "\r\n";
        $header.= "X-Mailer: PHP/".phpversion();
        $mail = @mail("jose-kid@hotmail.com",$subject,$email. ":"."--".$mensaje,$header);
        if($mail){
            echo "<h4> ¡Mail Existoso!</h4>";
        }else{}
    }
}