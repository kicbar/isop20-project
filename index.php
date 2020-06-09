<!DOCTYPE HTML>
<html lang="pl">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
      <title> ISOP20 Online - Strona Główna</title>
      <meta name="description" content="ISOP20 Online - Internetowy System Obsługi Przedsiębiorcy"/>
      <meta name="keywords" content="przedsiebiorca"/>
      <link rel="stylesheet" href="css/style.css" type="text/css"/>
      <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
      <link rel="icon" type="image/png" href="img/favicon.png" />
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato&amp;subset=latin-ext" rel="stylesheet">
   </head>
   <body>
      <article>
         <h1>
            <b>ISOP20 Online</b>
         </h1>
         <h2>
            Internetowy System Obsługi Przedsiębiorcy
         </h2>
         <div id="container">
            <div id="leftsquare">
               <h3>Logowanie</h3>
               <form action="verficiation.php" method="post">
                  <input type="text" name="email_log" placeholder="E-mail"/> 
                  <input type="password" name="haslo" placeholder="Hasło"/>
                  <input type="submit"  value="Przejdź do serwisu"/>
               </form>
            </div>
            <div id="rightsquare">
               <h3>O Projekcie</h3>
               <div id="about-project">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. 
               </div>
               <input id="right" type="submit" onclick="window.location='registration.html';" value="Rejestracja w serwisie"/>
            </div>
            <div clas="clear"></div>
         </div>
         <footer>Kicior Vision Limited 2020 &copy </footer>
      </article>
   </body>
</html>