<?php 
   if (isset($_POST['submit'])) {
        $name   = $_POST['name'];
        $email  = $_POST['email-address'];
        $message   = $_POST['message'];
        $no_wa  = $_POST['noWa'];
        header("/location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DMessage:%20$message");
        }else{
         echo "
            <script>
                window.location=history.go(-1);
            </script>
             ";
        }   
?>
