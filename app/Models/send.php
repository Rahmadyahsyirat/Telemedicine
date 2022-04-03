<<?php

    use PhpParser\Node\Stmt\Echo_;

    if (isset($_POST['submit'])) {
        $name        = $_POST['name'];
        $email       = $_POST['email'];
        $message     = $_POST['message'];
        $no_whatsapp = $_POST['noWhatsapp'];
        header("https://api.whatsapp.com/send?phone=$noWhatsapp&text=hi&source=&data=");
    } else {
        echo "
            <script>
                window.location=history.go(-1);
            </script>
         ";
    }
    ?>