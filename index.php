<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
   
</head>
<body>
    <?php
    if (!empty($_POST["Subscribe to monthly newsletter"])){
        $toEmail = $_POST["emailcontact"];
        
        if(mail($toEmail)){
            $message ="Pesan sudah tersampaikan";

        }

    }

    ?>
    <div class="card ">
        <div class="right">
            <h3><b>Stay updated!</b></h3>
            <p>Join 60,000+ product managers receiving monthly update on:</p>
            <ul>
                <li>Product discovery and building what matters </li>
                <li>Pleasuring to ensure updates are a success</li>
                <li>And much more!</li>
            </ul>
              <form method = "post" name="emailcontact" >
                <label for="email">
                    <b>Email address</b></label>
                <input type="email" id="email" placeholder="email@company.com"/>
                <button type="submit">Subscribe to monthly newsletter</button>
            </form>

        </div>
        <div class="left">
            <img src= 'https://raw.githubusercontent.com/knightdm1/knightdm0.github.io/e740b4a9a46ca2d2bf0f2ab81cdaf545517689c4/illustration-sign-up-desktop.svg' >
        </div>

    </div>
    <div class="card-2 hide">
        <img src='icon-success.svg'>
        <h1>Thanks for subscribing!</h1>
        <p>
            A confirmation email has been sent to ash@loremcompany.com. Please open 
            it and click the button inside to confirm your subscription. 
        </p>

        <button type="button" onclick= location.href='https://knightdm1.github.io/knightdm0.github.io/'>Dismiss message!</button>

    </div>
    <script src="./index.js"></script>
   

</body>
</html>
