<?PHP
/* 

Copyright 2015, Seventh Metric Inc.

This Glossary script was created as a Minimum Viability Product for AcneScarRemoval.co

Written by Chadd Rivera, CEO Seventh Metric Inc.

*/

/* Set the GET */
if (!isset($_GET['letter'])) {
    $glossary_letter = $_GET['letter'] = 'none';
} else {
    $glossary_letter = $_GET['letter'];
}
	
/* Locations */
$directory = "articles/";
$allowed_ext = array(".html", ".htm"); 

/* Prep the alphabet soup */
$a = array();
$b = array();
$c = array();
$d = array();
$e = array();
$f = array();
$g = array();
$h = array();
$i = array();
$j = array();
$k = array();
$l = array();
$m = array();
$n = array();
$o = array();
$p = array();
$q = array();
$r = array();
$s = array();
$t = array();
$u = array();
$v = array();
$w = array();
$x = array();
$y = array();
$z = array();

/* Retrieve Information */
$dir = opendir($directory);
		
while(false != ($file = readdir($dir))){	
	/* Cross-check files against black-list and white-list*/
    $file = strtolower($file);
	$ext = pathinfo($file, PATHINFO_EXTENSION);
	if (($file != ".") && ($file != "..") && ($file != "index.html") && (!in_array($ext,$allowed_ext))) {
		
		$files = array($file);
		
		/* Parse file-names into display-names */
		foreach ($files as $new_output) {
			$nodashes = str_replace('-', ' ', $new_output);
			$output = preg_replace('/\\.[^.\\s]{3,4}$/', '', $nodashes);
			$output_sort = $output[0];
			
				switch ($output_sort) {
					case "a":
						$a[] = $output;
					break;

					case "b":
						$b[] = $output;
					break;

					case "c":
						$c[] = $output;
					break;

					case "d":
						$d[] = $output;
					break;

					case "e":
						$e[] = $output;
					break;

					case "f":
						$f[] = $output;
					break;

					case "g":
						$g[] = $output;
					break;

					case "h":
						$h[] = $output;
					break;

					case "i":
						$i[] = $output;
					break;

					case "j":
						$j[] = $output;
					break;

					case "k":
						$k[] = $output;
					break;
					
					case "l":
						$l[] = $output;
					break;

					case "m":
						$m[] = $output;
					break;

					case "n":
						$n[] = $output;
					break;

					case "o":
						$o[] = $output;
					break;

					case "p":
						$p[] = $output;
					break;

					case "q":
						$q[] = $output;
					break;

					case "r":
						$r[] = $output;
					break;

					case "s":
						$s[] = $output;
					break;

					case "t":
						$t[] = $output;
					break;

					case "u":
						$u[] = $output;
					break;

					case "v":
						$v[] = $output;
					break;

					case "w":
						$w[] = $output;
					break;

					case "x":
						$x[] = $output;
					break;

					case "y":
						$y[] = $output;
					break;

					case "z":
						$z[] = $output;
					break;
					}
		} 
		
	}
}


/* Display the parsed and sorted names into their own tables */
function make_tables($letter_name, $letter) {
	if (empty($letter)) {
		echo " ";
	} else {
		echo "<h2>"	. $letter_name . "</h2>";
		echo "<table width='100%'>";
		echo "<tr>";
		
		natsort($letter);
		
		$col_counter = 0;
		foreach ($letter as $letter_output) {			
				if ($col_counter == 3) {
					echo "</tr><tr>";
					$col_counter = 0;
				}
				else {
					echo "<td>" . $letter_output . "</td>";
					$col_counter++;
				}
		}
	echo "</tr>";
	echo "</table>";
	}
}

if ($glossary_letter == "a") {
	make_tables("A", $a);
} elseif ($glossary_letter == "b") {
	make_tables("B", $b);
} elseif ($glossary_letter == "c") {
	make_tables("C", $c);	
} elseif ($glossary_letter == "d") {
	make_tables("D", $d);
} elseif ($glossary_letter == "e") {
	make_tables("E", $e);
} elseif ($glossary_letter == "f") {
	make_tables("F", $f);
} elseif ($glossary_letter == "g") {
	make_tables("G", $g);
} elseif ($glossary_letter == "h") {
	make_tables("H", $h);
} elseif ($glossary_letter == "i") {
	make_tables("I", $i);
} elseif ($glossary_letter == "j") {
	make_tables("J", $j);
} elseif ($glossary_letter == "k") {
	make_tables("K", $k);
} elseif ($glossary_letter == "l") {
	make_tables("L", $l);
} elseif ($glossary_letter == "m") {
	make_tables("M", $m);
} elseif ($glossary_letter == "n") {
	make_tables("N", $n);
} elseif ($glossary_letter == "o") {
	make_tables("O", $o);
} elseif ($glossary_letter == "p") {
	make_tables("P", $p);
} elseif ($glossary_letter == "q") {
	make_tables("Q", $q);
} elseif ($glossary_letter == "r") {
	make_tables("R", $r);
} elseif ($glossary_letter == "s") {
	make_tables("S", $s);
} elseif ($glossary_letter == "t") {
	make_tables("T", $t);
} elseif ($glossary_letter == "u") {
	make_tables("U", $u);
} elseif ($glossary_letter == "v") {
	make_tables("V", $v);
} elseif ($glossary_letter == "w") {
	make_tables("W", $w);
} elseif ($glossary_letter == "x") {
	make_tables("X", $x);
} elseif ($glossary_letter == "y") {
	make_tables("Y", $y);
} elseif ($glossary_letter == "z") {
	make_tables("Z", $z);
} else {
	make_tables("A", $a);
	make_tables("B", $b);
	make_tables("C", $c);
	make_tables("D", $d);
	make_tables("E", $e);
	make_tables("F", $f);
	make_tables("G", $g);
	make_tables("H", $h);
	make_tables("I", $i);
	make_tables("J", $j);
	make_tables("K", $k);
	make_tables("L", $l);
	make_tables("M", $m);
	make_tables("N", $n);
	make_tables("O", $o);
	make_tables("P", $p);
	make_tables("Q", $q);
	make_tables("R", $r);
	make_tables("S", $s);
	make_tables("T", $t);
	make_tables("U", $u);
	make_tables("V", $v);
	make_tables("W", $w);
	make_tables("X", $x);
	make_tables("Y", $y);
	make_tables("Z", $z);	
	
}
	
?>