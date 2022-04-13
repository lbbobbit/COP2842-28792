<?php 

    $fname = $_POST['fname'];

    $suitcase = $_POST['suitcase'];

    $short_distance = $_POST['DistanceSD'] == 'SD'? true:false;
    $middle_distance = $_POST['DistanceMD'] == 'MD'? true:false;
    $long_distance = $_POST['DistanceLD'] == 'LD'? true:false;

    $transportatiom = filter_input(INPUT_POST, 'Transportation');

    echo "name: ".$fname."<br>";
    echo "suitcase; ".$suitcase."<br>";
    echo "short distance?:" .$short_distance."<br>";
    echo "middle distance?:" .$middle_distance."<br>";
    echo "long distance?:" .$long_distance."<br>";
    echo "transportation: ".$transportation."<br>";


    ?>