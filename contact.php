<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>
      Outland Studios
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='style.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="images/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="images/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
  </head>
  <body>
    <div id="wrapper">
    <div id="greenbar"></div>
    <div id="logo">
      <a href="index.html"> <img src="images/logo.png" alt="logo" height=138> </a>
    </div>
    <header>
      <h1><a href="index.html">Outland Studios</a></h1>
    </header>
    <div id="herohome"></div>
    <div id="bluebar"></div>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="shop.html">Shop</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><div class="ec-cart-widget"></div>
                <div>
                  <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?40540180&data_platform=code&data_date=2020-11-17" charset="utf-8"></script>
                  <script type="text/javascript">Ecwid.init();</script>
                </div>
          </li>
        </ul>
      </nav>
      <main>
        <h2>Contact Us</h2>
        <form action="contact.php" method="post">
          <label for="name">* Name:</label>
          <input type="text" name="myname" id="name" required>
          <label for="email">* E-mail:</label>
          <input type="text" name="myemail" id="email" required>
          <label for="comment">* Comment:</label>
          <textarea name="mycomments" id="comments" rows="10" cols="20"required></textarea>
          <input type="submit" name="submit" value="Submit" id="mysubmit">
        </form>
        <?php
            $subject = "Contact Form";
            $name = $_POST['myname'];
            $email = $_POST['myemail'];
            $comments = $_POST['mycomments'];
            $submit = $_POST['submit'];
            $to = "karleemrobison@gmail.com";
            $message = "From: $name\n
                        Email: $email\n
                        Comments: $comments\n
                        ";
            if ($submit) {
              if (mail ($to, $subject, $message)) {
                echo "Comment sent";
              }
            }
         ?>
      </main>
      <footer>
        <div id='footerImage'>  </div>
      </footer>
    </div>
  </body>
</html>
