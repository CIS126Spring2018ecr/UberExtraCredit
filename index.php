    <?php

     $result =array('Animal','Price','hlo','as');

    if(!empty($result)) {

    echo "<table border='1'>";
    $i=0;

    foreach($result as $row)
    {

        if($i==0)
        {
           echo "<tr>";
        }

        echo '<td>'.$row.'</td>';

        if($i==1)
        {
            echo "</tr>";

            $i=-1;
        }

      $i++;

    }

    echo "</table>";

    }

    ?>
