<?php
$connect = mysqli_connect("localhost","root","","rentandride");
if(isset($_POST["query"]))
{
    $output = '';
    $query = "SELECT * FROM cars WHERE name LIKE '%".$_POST["query"]."%'";
    $result = mysqli_query($connect, $query);
    $output = '<ul class = "list-unstyled">';
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output = '<li>'.$row["name"].'</li>';
        }
    }
    else
    {
        $output .= '<li>Car Not Found</li>';
    }
    $output .='</ul>';
    echo $output;
}
?>