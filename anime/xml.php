<?php
header ("content-type: text/xml");
   $dir = "./";

   echo "<XML encoding='UTF-8' standalone='yes' version='1.0'>\n";
   echo "  <foros>\n";

   if (is_dir($dir))
   {
       if ($gd = opendir($dir))
      {
           while (($archivo = readdir($gd)) !== false)
         {
            if ($archivo != "." & $archivo != ".." & $archivo != "list.php" & $archivo != "Haruhi Suzumiya - falta" & $archivo != "Angel Beats" & $archivo != "Blood c" & $archivo != "School Days" & $archivo != "Trinity Seven" & $archivo != "Magikano" & $archivo != "Dr.Stone")
            {
               if (is_dir($archivo))
               {
                     echo "<anime>\n";
					 //echo "<";
					 //include ("$archivo/code.txt");
					 //echo ">\n";
					 //echo "<code>";
					 //include ("$archivo/code.txt");
					 //echo "</code>\n";
					 echo "<pvideo>";
					 include ("$archivo/pvideo.txt");
					 echo "</pvideo>\n";
					 echo "<titulo>$archivo</titulo>\n";
					 //echo "</";
					 //include ("$archivo/code.txt");
					 //echo ">\n";
					 echo "</anime>\n";
               }
            }
           }
           closedir($gd);
       }
   }

   echo "  </foros>\n";
   echo "</XML>\n";
?>
