<?php
echo strlen("Hello world!"); // outputs 12 / stringh length = panjang string

echo ("<br>");

echo str_word_count("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae repellendus corrupti dolore nemo placeat officia quam, minus quae. Aut fugit voluptas incidunt labore adipisci sed in sapiente dicta minus iste!
Saepe eligendi quasi numquam nisi, error rem mollitia non, amet magni cumque consectetur! Officiis nostrum aliquam earum sit? Quaerat cum autem eveniet ea, adipisci enim quam "); //Menghitung jumlah kata
echo"<br>";

echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
echo strpos("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae repellendus corrupti dolore nemo placeat officia quam, minus quae. Aut fugit voluptas incidunt labore adipisci sed in sapiente dicta minus iste!
Saepe eligendi quasi numquam nisi, error rem mollitia non, amet magni cumque consectetur! Officiis nostrum aliquam earum sit? Quaerat cum autem eveniet ea, adipisci enim quam ", "Lorem"); //Mencari Kata setelah kata keberapa
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";
echo str_replace("Saepe", "Surya", "Saepe eligendi quasi numquam nisi, error rem mollitia non, amet magni cumque consectetur! Officiis nostrum aliquam earum sit? Quaerat cum autem eveniet ea, adipisci enim quam Lorem");

echo "<br>";
echo strtoupper("Hello world");
echo"<br>";
echo date("Y-M-d H:i:s");
echo"<br>";
echo time()+3600;














?>