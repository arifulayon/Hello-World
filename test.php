   <!DOCTYPE html>
   <html>
   <head>
   	<title> hello world</title>
   	</head>
   		<body>


   			<?php



   			/*



   			// Basic syntax

   			echo "hello world <br>";

   			// php case-sensitive

   			echo "hello php <br>";
   			ECHO "hello php <br>";
   			EchO "hello php <br>";

   			//Varriable

   			$name = "php"; 

   			echo "my name is ". $name .".<br>";
   			

   			$acadeemyName = "CodemanBD";
   			echo $acadeemyName."<br>";

   			 //summation....

   			$nine = 9;
   			$five = 5;
   			echo $nine + $five;

   			?>

   			<?php 

   			// php varriable scope... Local and Global scope

   			function localscope() {
   				$name = "Ariful Islam"; // local scope
   				echo "<p>Value access in function: $name</p>";
   			}
   			localscope();
   			// it will shows error when we put value out of function
   			echo "<p>value access in out of function: $name</p>";
   			// GLOBAL VARRIABLE

   			$firstpart = "Ariful";
   			$total = "islam";
   			function globalScope() {
   				global $firstpart, $total;
   				$total = $firstpart . $total;
   			}
   			globalScope();

   			echo $total; // output will be total's varriable

   			





   			// STATIC KEYWORD

   			




   			function useStatic() {
   				static $number = 45;
   				echo $number;
   				$number--;
   			}
   			useStatic();
   			echo "<br>";
   			useStatic();
   			echo "<br>";
   			useStatic();

   			




   			// ECHO/PRINT

   			



   			echo "hello Brahmanbaria<br>";
   			echo "I'm comming soon my home<br>";
   			echo "hello", "Brahmanbaria<br>";
   			$textpartone = "hello B-Baria<br>";
   			$textparttwo = "I'm comming home<br>";

   			echo "textpartone $textparttwo <br>";
   			echo "hello B-Baria $textparttwo<br>";

   			

   		    

   		    

   		    // DATA TYPES

   			// PHP SUPPORTED DATA TYPES ARE...

   			// Boolean, Integer, Sting, Float, Array, Object, Null, Resource

   			// integer
   			$year = 2019;
   			var_dump($year);
   			echo "<br>";

   			// string
   			echo "<b>";
   			$stringone = "hello Brahmanbaria";
   			$stringtwo = "i'm comming to you";
   			echo $stringone;
   			echo "<br>";
   			echo $stringtwo;
   			echo "<br>";

   			// float
   			$number = 9.999;
   			var_dump($number);
   			echo "<br>";

   			// array

   			$satt = array("HTML", "CSS", "JAVASCRIPT");
   			var_dump($satt);
   			echo "<br>";

   			// object
   			// create class
   			class Subject{
   				public $course = "PHP";
   			}

   			// create an object

   			$learn = new Subject();
   			// show object properties
   			echo $learn->course;
   			echo "<br>";

   			// null
   			$varriable = null;
   			var_dump($varriable);

   			




   			// CONSTANT

   			// case-sensitive constant define
   			


   			

   			define("GREETING", "Wellcome to sattacademy!" );
   			echo GREETING . "<br>" . "<br>";
   			echo greeting;
   			//case-insensitive constant define
            define("GREETING", "welcome to sattacademy", true);
            echo GREETING . "<br>" . "<br>";

            echo greeting;
            echo "<br>";

            
             //again 
            const GREETING = "Wellcome to CodemanBD";
            echo GREETING;

            define("GREETING", "wellcome  to codemanbd");
            function localscope(){
            	echo GREETING;
            }
            localscope();
            




            // PHP OPERATOR

            // Arithmetic operator
            $a = 20;
            $b = 9;
            echo " a + b = ", $a + $b , "<br>"; 
            echo " a - b = ", $a - $b , "<br>";
            echo " a * b = ", $a * $b , "<br>";
            echo " a / b = ", $a / $b , "<br>";
            echo " a % b = ", $a % $b , "<br>";

            // Assignment operator
            $a = 11;
            $b = 5;
            echo " a = ", $a  = $b , "<br>";
            echo " a = ", $a += $b , "<br>";
            echo " a = ", $a -= $b , "<br>";
            echo " a = ", $a *= $b , "<br>";
            echo " a = ", $a /= $b , "<br>";
            echo " a = ", $a %= $b , "<br>";


            // Comparision operator

            $a = 200;
            $b = 200;

            var_dump($a == $b);  echo "<br>";
            var_dump($a === $b); echo "<br>";
            var_dump($a != $b); echo "<br>";
            var_dump($a <> $b); echo "<br>";
            var_dump($a !== $b); echo "<br>";
            var_dump($a > $b); echo "<br>";
            var_dump($a < $b); echo "<br>";
            var_dump($a >= $b); echo "<br>";
            var_dump($a <= $b); echo "<br>";



            // increment or decrement operator


            





            $a = 5;

            echo ++$a . "<br>";

            echo --$a . "<br>";

            echo $a++ . "<br>";

            echo $a-- . "<br>";


            // logical operator

            $a = 200;
            $b = 50;


            if ($a == 200 and $b == 50) {
            	echo "codemanbd" . "<br>";
            }

            if ($a == 200 or $b == 50) {
            	echo "codemanbd" . "<br>";
            }

            if ($a == 200 xor $b == 50) {
            	echo "codemanbd" . "<br>";
            }

            if ($a == 200 && $b == 50) {
            	echo "codemanbd" . "<br>";
             }

            if ($a == 200 || $b == 50) {
            	echo "codemanbd" . "<br>";
            }

            if ($a !== 50) {
            	echo "codemanbd" . "<br>";
            }

            


            // string operator

            // string concentration
            $string1 = "codeman";
            $string2 = "bd";


            echo ($string1 . $string2) . "<br>";

            // concentration string
            $string = "codeman"; 
            $string .= "bd";

            echo $string;

           

            // array operator

            $a = array('e' => 'apple', 'f' => 'banana');
            $b = array('g' => 'mango', 'h' => 'orange');


            print_r($a + $b);


            var_dump($a == $b);
            var_dump($a === $b);
            var_dump($a != $b);
            var_dump($a <> $b);
            var_dump($a !== $b);

            

            





             // PHP FUNCTION

            function welcomeMsg(){
            	echo "Wellcome Guest <br>";
            }
            welcomeMsg(); // function call

            // function parameter
            function familymember($name){
            	echo "codemanbd $name <br>";
            }

            familymember("WORDPRESS");
            familymember("HTML");
            familymember("CSS");
            familymember("JAVASCRIPT");
            familymember ("BOOTSTRAP");

            
            // a function for name and birthday

            function familymember($name, $birthyear) {
            	echo "MR. $name, birthyear- $birthyear<br>";
            }
            familymember("arif", "1998");
            familymember("shihab", "1999");
            familymember("shabbir", "1997");

            
            // default parameter
            function setNumber($number = 5){
            	echo "The number is: $number<br>";
            }
            setNumber("15");
            setNumber("10");
            setNumber();

            

            // php return value
            function calculate($numberOne, $numberTwo){
            	$total = $numberOne + $numberTwo;
            	return $total;
            }

            echo "11+9=" . calculate(11, 9) . "<br>";
            echo "7+8=" . calculate(7, 8) . "<br>";
            echo "6+5=" . calculate(6, 5) . "<br>";


            



            // PHP GLOBAL VARIABLES
            $numberOne = 55;
            $numberTwo = 44;

            function sum(){
            	$GLOBALS['total'] = $GLOBALS['numberOne'] + $GLOBALS['numberTwo'];
            }

            sum();
            echo $total;
          


            // PHP $_SERVER
            echo $_SERVER['PHP_SELF']. "<br>";
            echo $_SERVER['GATEWAY_INTERFACE']. "<br>";
            echo $_SERVER['SERVER_ADDR']. "<br>";
            echo $_SERVER['SERVER_NAME']. "<br>";
            echo $_SERVER['SERVER-SOFWARE']. "<br>";
            echo $_SERVER['SERVER_PROTOCOL']. "<br>";
            echo $_SERVER['REQUEST_METHOD']. "<br>";
            echo $_SERVER['REQUEST_TIME']. "<br>";
            echo $_SERVER['QUERY_STRING']. "<br>";
            echo $_SERVER['HTTP_ACCEPT']. "<br>";
            echo $_SERVER['HTTP_ACCEPT_CHARSET']. "<br>";
            echo $_SERVER['HTTP_HOST']. "<br>";
            echo $_SERVER['HTTP_REFERER']. "<br>";
            echo $_SERVER['HTTPS']. "<br>";
            echo $_SERVER['REMOTE_ADDR']. "<br>";
            echo $_SERVER['REMOTE_HOST']. "<br>";
            echo $_SERVER['REMOTE_PORT']. "<br>";
            echo $_SERVER['SCRIPT_FILENAME']. "<br>";
            echo $_SERVER['SERVER_PORT']. "<br>";
            echo $_SERVER['SERVER_SIGNATURE']. "<br>";
            echo $_SERVER['PATH_TRANSLATED']. "<br>";
            echo $_SERVER['SCRIPT_NAME']. "<br>";
            echo $_SERVER['SCRIPT_URI']. "<br>";
            

            ?>





            

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fullname">
            <input type="submit" value="Name Submit">
            </form>

             <?php


             // PHP $_REQUEST



            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            	// collect value from input field
            	$name = $_REQUEST['fullname'];
            	if (empty($name)) {
            		echo "Please fill-Up your name";
            	} else {
            		echo "your name is:". $name;
            	}
            }


            ?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
            NAME: <input type="text" name="fullname">
            <input type="submit" name="Name submit">	

            </form>

            <?PHP 
            // PHP $_POST


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            	// collect value from input field
            	$name = $_POST['fullname'];
            	if (empty($name)) {
            		echo "Please fill-Up your name";
            	} else {
            		echo "Your name is:". $name;
            	}
            }

           

            // IF STATEMENT

            $time = date("H");
            if ($time < "10") {
            	echo "good morning!";
            } else if ($time < "20") {
            	echo "good noon";
            } else {
            	echo "good night";
            } 

            


            // SWITCH STATEMENT

            $sports = "cricket";


            switch ($sports) {
            	case "football":
            	echo "my favourite game is football";
            	break;
            	case "cricket":
            	echo "my favourite game is cricket";
            	break;
            	default:
            	echo "none of them aren't my favourite both football and cricket";
            }

           


            // WHILE LOOP
            $number = 0;

            while ($number <= 3) {
            	echo "The number is: $number <br>";
            	$number++;
            }
            

            // DO...WHILE LOOP
            $number = 0;
            do {
            	echo "The number is: $number<br>";
            	$number++;
            }
            while ($number <= 3);

             

            // another DO...WHILE LOOP
            $number = 4;

            do {
            	echo "The number is: $number <br>";
            	$number++;
            }
            while ($number <= 3);

            

            // FOR LOOP

            for ($number = 0; $number <= 5; $number++) {
            	echo "The number is: $number<br>";
            }
            

            // FOREACH LOOP

            $codemanbd = array("HTML", "CSS", "JAVASCRIPT");
            foreach ($codemanbd as $value) {
            	echo "$value <br>";
            }

            */

            // PHP ARRAY
            $Subject = array("HTML", "CSS","JAVASCRIPT", "PHP");
            echo "I want to learn". $Subject[0]. ", " . $Subject[1]. ", " . $Subject[2]. ", " . $Subject[3]. "etc<br>";

            // count() function
            $Subject = array("HTML", "CSS", "JAVASCRIPT", "BOOTSTRAP");
            echo count($Subject); 
            echo "<br>";

            // using loop in index array
            $Subject = array("html", "css", "javascript", "bootstrap");
            $arraylength = count($Subject);

            for($i = 0; $i < $arraylength; $i++) {
            	echo $Subject[$i];
            	echo "<br>";
            }

            // php associative array
            $age = array("arif" =>"19", "shihab"=>"19", "shabbir" =>"20");
            echo "The age of arif is " . $age['arif'] . " year";
            echo "<br>";

            // using loop in associative array
            $age = array("arif" =>"19", "shihab"=>"19", "shabbir" =>"20");
            foreach($age as $name => $years) {
            	echo "key=" . $name . ", value=" . $years . "<br>";
            }


            // PHP ARRAY SORTING


            // sort() work as assending
            $Subject = array("html", "css", "javascript", "bootstrap");
            sort($Subject);
            $arraylength = count($Subject);

            for($i = 0; $i < $arraylength; $i++) {
            	echo $Subject[$i] . "<br>";
            }

            // another program of sort()
            $numbers = array(1, 5, 10, 15, 20);
            sort($numbers);

            $arraylength = count($numbers);

            for($i = 0; $i < $arraylength; $i++) {
            	echo $numbers[$i] . "<br>";
            }


            // asort() work as assending
            $age = array("arif" =>"19","shihab"=>"19","shabbir"=>"20");
            asort($age);


            foreach($age as $name => $age) {
            	echo "key=" . $name . ", value=" . $age . "<br>";
            }

            // ksort() work as assending
            $age = array("arif" =>"19","shihab"=>"19","shabbir"=>"20");
            ksort($age);


            foreach($age as $name => $age) {
            	echo "key=" . $name . ", value=" . $age . "<br>";
            }


             // rsort() work as assending
            $Subject = array("html", "css", "javascript", "bootstrap");
            rsort($Subject);
            $arraylength = count($Subject);

            for($i = 0; $i < $arraylength; $i++) {
            	echo $Subject[$i] . "<br>";
            }

            // another program of rsort()
            $numbers = array(1, 5, 10, 15, 20);
            rsort($numbers);

            $arraylength = count($numbers);

            for($i = 0; $i < $arraylength; $i++) {
            	echo $numbers[$i] . "<br>";
            }

            // arsort() work as assending
            $age = array("arif" =>"19","shihab"=>"19","shabbir"=>"20");
            arsort($age);


            foreach($age as $name => $age) {
            	echo "key=" . $name . ", value=" . $age . "<br>";
            }

            // krsort() work as assending
            $age = array("arif" =>"19","shihab"=>"19","shabbir"=>"20");
            krsort($age);


            foreach($age as $name => $age) {
            	echo "key=" . $name . ", value=" . $age . "<br>";
            }







            ?>




   		</body>
   	</html>