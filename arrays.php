<?php

//Indexed or numeric array

$colors = ["Black" , "Green" ,"Yellow"]; // cannot store more than one variable hence use array

print_r($colors);

?>

<br>
<?php

$user = array("Alex", "Peter","Ann");
?>

<pre>
    <?php print_r($user);?>
</pre>

<?php
$user_data = [ 
    "fullname" => "Alex Okama",
    "email" => "AOkama@yahoo.com",
    "Phone" => "+2548458965"
    ];

print $user_data["email"];
?>

<pre>
    <?php print_r($user_data);?>
    <pre>

<?php
//Multidimensional Arrays

$user_details = [
    "Director" => array(
        "fullname" => "Alex Okama",
        "email" => "AOkama@yahoo.com",
        "Phone" => [
            "Home"=>"+2548458965",
            "Work"=>"+2548458965",
            "Mobile"=>"+2548458965",
            ]

    )
]
?>

<pre>
    <?php print_r($user_details);?>
        </pre>

<?php
        $user_details = [
    "Secretary" => array(
        "fullname" => "Alex Okama",
        "email" => "AOkama@yahoo.com",
        "Phone" => [
            "Home"=>"+2548458965",
            "Work"=>"+2548458965",
            "Mobile"=>"+2548458965",
            ]

    )
]
?>

<pre>
    <?php print_r($user_details);?>
        </pre>
