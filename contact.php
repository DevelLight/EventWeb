<?php

        if(isset($_POST['submit'])) {

            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $mailForm = $_POST['email'];
            $message = $_POST['message'];
        
        $mailTo = "hurbanmarcel@gmail.com";
        $headers = "Form: ".$mailForm;
        $text = "Du hast eine Email von".$name."erhalten./n/n".$message;
        }
     
        mail($mailTo, $subject, $text, $headers);

      header ("Location: index.php?mailsend");
?>