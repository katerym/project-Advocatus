<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advocatus</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,700&family=Playfair+Display&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/css/main.min.css">
</head>
<body class="no-contrast">
    
<header>
    <nav class="container container-flex">
        <div class="logo">
            <a href="index.html">ADVOCATUS<span>.</span></a>
        </div>
        <div class="menu-content">
            <ul id="main-menu">
                <li><a href="index.html#about_us" class="active">About us</a></li>
                <li><a href="index.html#practise_area">Practise area</a></li>
                <li><a href="index.html#lawyers">Lawyers</a></li>
                <li><a href="index.html#publications">Publications</a></li>
                <li><a href="index.html#faq">Faq</a></li>
                <li><a href="index.html#contact">Contact</a></li>
                <i class="far fa-eye"></i>
            </ul>
        </div>          
        <div class="burger-menu"> 
        <div class="burger">
                <i class="fas fa-bars show"></i>
                <i class="fas fa-times"></i>
            </div>
            <aside>                
               <ul id="mobile-menu">
                    <li><a href="index.html#about_us">About us</a></li>
                    <li><a href="index.html#practise_area">Practise area</a></li>
                    <li><a href="index.html#lawyers">Lawyers</a></li>
                    <li><a href="index.html#publications">Publications</a></li>
                    <li><a href="index.html#faq">Faq</a></li>
                    <li><a href="index.html#contact">Contact</a></li>
                    <i class="far fa-eye"></i>
                </ul>                
            </aside>
        </div>
    </nav>  
</header>

<section class="contact contact-answer">    
    <div class="container">        
        <div class="container-flex contact-box">
            <div class="answer">
                <?php
                    if(isset($_POST['submit'])) {
                    
                    $to = "katarzynalem@interia.pl";
                    $subject = "Formularz Kontaktowy";
                    $name_field = $_POST['name'];
                    $email_field = $_POST['email'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];
                    
                    $body = "Od: $name_field<br>\n 
                    E-Mail: $email_field<br>\n 
                    Telefon: $phone<br>\n 
                    Wiadomość:\n $message<br>\n 
                    ";

                    $headers = 'From: ' . $name . '(' . $email . ')'  ;
                    $headers = "Content-Type: text/html; charset=utf-8\r\n";
                    $headers .= "Reply-To: $email\r\n";

                    echo '<h2>Thank you for submitting the form. </h2><br>
                    <h3>You will receive an answer within 24 hours</h3>';
                    
                    mail($to, $subject, $body, $headers);
                    
                    } else {
                    echo '<h2>The message could not be sent.</h2>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container container-flex"> 
        <div class="single-col">
            <p><span>Copyright &copy;</span> Symu.co</p>
        </div>
        <div class="single-col footer-icon">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>            
            <a href=""><i class="fab fa-instagram"></i></a>              
        </div>
    </div>
</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

    <script src="script.js"></script>
</body>
</html>