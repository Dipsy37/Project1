<h1>loops</h1>
<h4>While-loop</h4>
<?php
//while-loop
$in = 0;
while($in < 10){
    print $in . "<br>";
    $in++;
}
?>
<br>


<h4>do-while loop</h4>
<?php
//do-while loop
$s = 5;
do{
    print $s . "<br>";
    $s++;

}
while($s < 15);
?>

<h4>For loop</h4>
<?php
for($f=45; $f<55; $f++)
{
    print $f . "<br>";
}
?>

<h4>Foreach</h4>
<?php
$months=["January", "February", "March", "April","May", "June"," July"," August"," September","October"," November"," December"];
//foreach($months AS $month){
//print $month . "<br>";
//}
?>

<form action="">
    <select name="" id="">
        <option value="">--Months--</options>
        <?php
        foreach($months AS $month){
            print "<option value=''>$month</option>";
        }
        ?>
    </select>


    <select name="" id="">
        <option value="">--Year--</options>
        <?php
        //while loop
        $y = 2014;
        while($y<2030){
            print "<option value=''>$y</option>";
            $y++;
        }
        ?>
    </select>
    </form>

