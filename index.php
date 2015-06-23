<!DOCTYPE html>
<html>
<head>
    <title>
       <h1> PHP currency convertor</h1>
    </title>
</head>
<body bgcolor="#6495ed">
<form align="center" action="index.php" method="post">
    <h1>Enter amounts:</h1><input type="text" name="amount">
    <br></br>
    <h2>Enter currency1:</h2><select name="cur1">
        <option>Dollar</option>
        <option>Pound</option>
    </select>
    <br></br>
    <h2>Enter currency2:</h2><select name="cur2">
        <option>Indian</option>
        <option>pakis</option>
        <option>afgani</option>
        <option>Euro</option>
        <option>NewZealandDollar</option>
        <option>JapaneseYen</option>
    </select>
    <br></br>
    <input type="submit" name="submit" value="convert now">
</form>
<?php
if(isset($_POST['submit'])) {
   $amount = $_POST['amount'];
   $cur1 = $_POST['cur1'];
   $cur2 = $_POST['cur2'];
}
if($cur1=="Dollar" AND $cur2=="Indian")
{
    echo "converted amount is" . $amount*60;
}
if($cur1=="Dollar" AND $cur2=="pakis")
{
    echo "converted amount is" . $amount*97.5;
}
if($cur1=="Dollar" AND $cur2=="afgani")
{
    echo "converted amount is" . $amount*90;
}
if($cur1=="Dollar" AND $cur2=="Euro")
{
    echo "converted amount is" . $amount*0.89;
}
if($cur1=="Dollar" AND $cur2=="NewZealandDollar")
{
    echo "converted amount is" . $amount*1.42;
}
if($cur1=="Dollar" AND $cur2=="JapaneseYen")
{
    echo "converted amount is" . $amount*125;
}
if($cur1=="Pound" AND $cur2=="Indian")
{
    echo "converted amount is" . $amount*97.8;
}
if($cur1=="Pound " AND $cur2=="pakis")
{
    echo "converted amount is" . $amount*155.5;
}
if($cur1=="Pound" AND $cur2=="JapaneseYen")
{
    echo "converted amount is" . $amount*191.87;
}
if($cur1=="Pound" AND $cur2=="NewZealandDollar")
{
    echo "converted amount is" . $amount*2.16;
}
if($cur1=="Pound" AND $cur2=="afgani")
{
    echo "converted amount is" . $amount*135;
}


?>
</body>
</html>