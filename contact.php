<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Contact - Rouby Pierre-Antoine
    </title>
    <meta name="description"
	  content="Page de contact du site profesionelle de Pierre-Antoine 
		   Rouby." />
    <meta name="keywords" content="Logiciel Libre, Linux, Programmation, 
				   Netralité du Net, Open Data, Contact" />
    
    <link rel="stylesheet" href="css/main.css">
  </head>
  
  <!-- Body -->
  <body>
    
    <!-- Insert header -->
    <?php include('header.php'); ?>

    <!-- Insert nav -->
    <?php include('nav.php') ?>
    
    <div id="contact" class="main">
      <h1>Me contacter</h1>
      <h2>Mail</h2>
      <div class="formulaire">
	<form method=POST action=sendmail.php >
	  <input type=hidden name=subject value=formmail>
	  <table>
	    <tr>
	      <td>Votre Nom:</td>
	      <td><input type=text name=realname size=30></td>
	    </tr>
	    <tr>
	      <td>Votre Email:</td>
	      <td><input type=text name=email size=30></td>
	    </tr>
	    <tr>
	      <td>Sujet:</td>
	      <td><input type=text name=subject size=30></td>
	    </tr>
	    <tr>
	      <td colspan=2>Message:<br>
		<textarea COLS=50 ROWS=6 name=message></textarea>
	      </td>
	    </tr>
	  </table>
	  <br> <input type=submit value=Envoyer> -
	  <input type=reset value=Annuler>
	</form>
      </div>
      
      <ul>
      	<li>GPG public key: <a href="files/parouby.pub.asc">GPG</a>
      	</li>
      </ul>

      <h2>Réseaux sociaux</h2>
      <ul>
	<li>Mastodon: <a href="https://framapiaf.org/@parouby">
	    @parouby@framapiaf.org</a>
	</li>
	<li>Twitter: <a href="https://twitter.com/parouby">
	    @parouby</a>
	</li>
	<li>Linkedin: <a href="https://linkedin.com/in/pierre-antoine-rouby-625321157">
	    linkedin.com/in/pierre-antoine-rouby-625321157</a>
	</li>
      </ul>
      
      <h2>Forge de développement</h2>
      <ul>
	<li>GitHub: <a href="https://github.com/RoubyPA">
	    RoubyPA</a>
	</li>
	<li>GNOME
	  <ul>
	    <li>
	      GitLab: <a href="https://gitlab.gnome.org/RoubyPA">
		RoubyPA</a>
	    </li>
	  </ul>
	</li>
	
      </ul>
    </div>
    
    <!-- Insert footer -->
    <?php include('footer.php'); ?>
    
  </body>
  
</html>
