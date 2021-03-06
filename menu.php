<?php
	session_start();
	try
	{
		$connection = oci_connect("isop","passwd123","localhost/XE");
			
		if(!$connection)
		{				
            $error = oci_error();
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
        else 	
    	{	
         /*DO STH WITH DATABASE*/
      }
	}
		
	catch(Exception $error)
	{
		echo '<span style="color: red">Błąd łączenia z serwerem.</span>';
		echo '<br/> For dev info: '.$error;
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
      <title> ISOP20 Online - Profil użytkownika</title>
      <meta name="description" content="ISOP20 Online - Internetowy System Obsługi Przedsiębiorcy"/>
      <meta name="keywords" content="przedsiebiorca"/>
      <link rel="stylesheet" href="css/style.css" type="text/css"/>
      <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
      <link rel="icon" type="image/png" href="img/favicon.png" />
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato&amp;subset=latin-ext" rel="stylesheet">
      <script src="js/script.js"></script>
   </head>
   <body>
      <h1><b>ISOP20 Online</b></h1>
      <nav class="menu">
         <ul class="menu-list">
            <li class="menu-list-item"><a class="menu__link link menu__link--active"   href="#main"><p class="section_name">Główna</p></a></li>
            <li class="menu-list-item"><a class="menu__link link" 				      	href="#factures"><p class="section_name">Faktury</p></a></li>
            <li class="menu-list-item"><a class="menu__link link" 				      	href="#clients"><p class="section_name">Kontrahenci</p></a></li>
            <li class="menu-list-item"><a class="menu__link link" 				      	href="#orders"><p class="section_name">Zamówienia</p></a></li>
            <li class="menu-list-item"><a class="menu__link link" 				      	href="#products"><p class="section_name">Produkty</p></a></li>
            <li class="menu-list-item"><a class="menu__link link" 				      	href="#workers"><p class="section_name">Pracownicy</p></a></li>
            <li class="menu-list-item"><a class="menu__link link" 				      	href="#warehouse"><p class="section_name">Magazyn</p></a></li>
            <li class="menu-list-item"><a class="menu__link_log link"                  href="index.php"><p class="section_name">LogOut</p></a></li>
         </ul>
      </nav>
      <!--======================================================================================GŁÓWNA=============-->
      <section class="sect_glowna content content--active" id="main" >
         <article class="art_main">main</article>
      
      </section>
      <!--======================================================================================FAKTURY============-->
      <section class="sect_faktury content " id="factures">
         <details>
				<summary class = "details-header">Wprowadź fakturę</summary>
            <div  class = "details-content">wprowadz content</div>
			</details>
         <details>
				<summary class = "details-header">Edytuj fakturę</summary>
            <div class = "details-content" >wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Usuń fakturę</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wprowadź fakturę</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wyświetl zestawienie</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
      </section>

      <!--======================================================================================KONTRAHENCI========-->
      <section class="sect_klienci content " id="clients" style="margin: auto;">
         <details>
				<summary class = "details-header">Wprowadź klienta</summary>
               <form method ="post">
					   <table class="table_insert">
						   <tr>
							   <th class="table_insert_header">Imię</th>
							   <th class="table_insert_header">Nazwisko</th>
							   <th class="table_insert_header">Pesel</th>
							   <th class="table_insert_header">Data dodania</th>
						   </tr>
						   <tr>
							   <td class="table_insert_field"><input type="text" name="fname" maxlength="30" required /> </td>
							   <td class="table_insert_field"><input type="text" name="lname" maxlength="30" required /> </td>
							   <td class="table_insert_field"><input type="text" name="pesel" minlength="11" maxlength="11" required /> </td>
							   <td class="table_insert_field"><input type="date" name="date_add_client"  maxlength="10" required /> </td>
						   </tr>
					   </table>
					   <input class = "submit_save" type="submit" value="Zapisz dane" name="save_client"/>
               </form>
			</details>
         <details>
				<summary class = "details-header">Edytuj klienta</summary>
            <div class = "details-content" >wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Usuń klienta</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wprowadź dane kontaktowe</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wprowadź dane adresowe</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
         <details>
				<summary class = "details-header">Edytuj dane</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
         <details>
				<summary class = "details-header">Wyświetl zestawienie klientów</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wyświetl szczegółówe dane klienta</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
      </section>
      
      <!--======================================================================================ORDER==============-->
      <section class="sect_zamowienia content " id="orders">
         <details>
				<summary class = "details-header">Wprowadź zamówienie</summary>
            <div  class = "details-content">wprowadz content</div>
			</details>
         <details>
				<summary class = "details-header">Wyświetl zestawienie</summary>
            <div class = "details-content" >wprowadz content</div>
         </details>
			</details>
      </section>

      <!--======================================================================================PRODUKTY===========-->
      <section class="sect_workers content " id="products">
         <details>
				<summary class = "details-header">Wprowadź kategorię</summary>
            <div  class = "details-content">wprowadz content</div>
			</details>
         <details>
				<summary class = "details-header">Wprowadź produkt do oferty</summary>
            <div class = "details-content" >wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Edytuj produkty</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wyświetl zestawienie</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wprowadź dane adresowe</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
         <details>
				<summary class = "details-header">Edytuj dane</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
         <details>
				<summary class = "details-header">Wyświetl zestawienie klientów</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wyświetl szczegółówe dane klienta</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
      </section>

      <!--======================================================================================WORKER=============-->
      <section class="sect_workers content " id="workers" >
         <details>
				<summary class = "details-header">Wprowadź pracownika</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wprowadź dane pracownika</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Wprowadź umowę</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Zestawienie zatrudnionych pracowników</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
         <details>
				<summary class = "details-header">Zestawienie szczegółowe pracownika</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
      </section>

      <!--======================================================================================MAGAZYN============-->
      <section class="sect_warehouse content " id="warehouse">
         <details>
				<summary class = "details-header">Wprowadź pozycję do magazynu</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
         <details>
				<summary class = "details-header">Edytuj pozucję magazynowe</summary>
            <div class = "details-content">wprowadz content</div>
			</details>
         <details>
				<summary class = "details-header">Wyświetl stan magazynowy</summary>
            <div class = "details-content">wprowadz content</div>
         </details>
      </section>
   </body>
</html>