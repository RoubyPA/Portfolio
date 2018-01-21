<header>
  <div class="banner">
    <!-- <img src="img/banner.png" alt="banner"></img> -->
    <center>Pierre-Antoine <strong>Rouby</strong></center>

    <?php
	$tracker = 'metric/visitor.txt';
	
	session_start();

       	if (!isset($_SESSION['exist'])) {
	   /* print ('<script>'); */
	   /* print ('alert("This website use session cookie to count the number of visitors.")'); */
	   /* print ('</script>'); */

       	   if (($file = fopen ($tracker,'r')) == FALSE)
	      print ('<!-- tracker: fopen error: '.$tracker.' -->');

	   $line = fgets ($file);
	   $number = intval ($line);
	   $number++;

	   fclose ($file);

       	   if (($file = fopen ($tracker, 'w')) == FALSE)
	      print ('<!-- tracker: fopen error: '.$tracker.' -->');

	   $line = strval($number);
	   if (fwrite ($file, $line) == FALSE)
	      print ('<!-- tracker: fwrite error -->');

	   fclose ($file);

	   print ('<!-- tracker: you are the visitor number: '.$line.' -->');

	   $_SESSION['exist'] = 1;
       } else {
       	 /* Do nothing */
       }
    ?>

  </div>
</header>
