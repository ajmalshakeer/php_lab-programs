<html>
    <body>

    
    <?php
$name = "Welcome to KGiSL IIM!";
echo "Input String: ".$name;
echo "<br><br>";
echo "<table style='border: 1px solid black; border-collapse: collapse;'>";
echo "<tr><th style='border: 1px solid black;'>Method</th><th style='border: 1px solid black;'>Syntax</th><th style='border: 1px solid black;'>Result</th></tr>";
echo "<tr><td style='border: 1px solid black;'>String Length</td><td style='border: 1px solid black;'>strlen(input_string)</td><td style='border: 1px solid black;'>".strlen($name)."</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Word Count</td><td style='border: 1px solid black;'>str_word_count(input_string)</td><td style='border: 1px solid black;'>".str_word_count($name)."</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Word Position</td><td style='border: 1px solid black;'>strpos(input_string, 'IIM')</td><td style='border: 1px solid black;'>".strpos($name, 'IIM')."</td></tr>";
echo "<tr><td style='border: 1px solid black;'>Word Reverse</td><td style='border: 1px solid black;'>strrev(input_string)</td><td style='border: 1px solid black;'>".strrev($name)."</td></tr>";
echo "</table>";
?>


</body>
</html>