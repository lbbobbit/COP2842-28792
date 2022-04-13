<?php
    $name = filter_input(INPUT_POST, 'name');
    $first_run = filter_input(INPUT_POST, 'first_run');
    $second_run = filter_input(INPUT_POST, 'second_run');
    $third_run = filter_input(INPUT_POST, 'third_run');
    $fourth_run = filter_input(INPUT_POST, 'fourth_run');

    $total_run_sum = $first_run + $second_run + $third_run + $fourth_run;
    $run_average_time = $total_run_sum / 4;

    $first_run = number_format($first_run);
    $second_run = number_format($second_run);
    $third_run = number_format($third_run);
    $fourth_run = number_format($fourth_run);
    $run_average_time = number_format($run_average_time);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Average</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
         <body>
              <main>
                  <h1>Run Time Average</h1>
                  <form action="" method="post">

                          <label>Name</label>
                          <span><?php echo htmlspecialchars($name); ?></span><br>

                          <label>First Run:</label>
                          <span><?php echo htmlspecialchars($first_run, 2); ?></span><br>

                          <label>Second Run:</label>
                          <span><?php echo htmlspecialchars($second_run, 2); ?></span><br>

                          <label>Third Run:</label>
                          <span><?php echo htmlspecialchars($third_run, 2); ?></span><br>

                          <label>Fourth Run:</label>
                          <span><?php echo htmlspecialchars($fourth_run, 2); ?></span><br>

                          <label>Run Average Time:</label>
                          <span><?php echo $run_average_time; ?></span><br>

                      </form>
              </main>
         </body>