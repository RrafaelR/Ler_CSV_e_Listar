<?php
$cidade=$_POST["cidade"];
$soma=0;
$f=fopen("violencia-domestica-df.csv","r");
$d=fgetcsv($f);
$d=fgetcsv($f);
while($d)
{
    if($d[0]==$cidade)
    {
        echo "Na cidade $d[0] ocorreram:<br>"
        ."$d[1] casos em 2011<br>"
        ."$d[2] casos em 2012<br>"
        ."$d[3] casos em 2013<br>"
        ."$d[4] casos em 2014<br>"
        ."$d[5] casos em 2015<br>"
        ."$d[6] casos em 2016<br>";
        $soma=$d[1]+$d[2]+$d[3]+$d[4]+$d[5]+$d[6];
        echo "O somatorio dos casos é $soma";
        break;
    }
    $d=fgetcsv($f);
}
fclose($f);
?>