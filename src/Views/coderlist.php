<html>

    <?php
        require_once("Components/layout.php");

    ?>

<body>
    
  
<main>
    <h1>Lista del consultorio</h1>

    <?php

    foreach($data["coder"] as $coder){
        echo "
            {$coder->getId()};
            {$coder->getPet()};
            {$coder->getspecie()};
            {$coder->getDr()};
            {$coder->getDate()};
            {$coder->getObservations()};
            ";
        }
    ?>


</main>



</body>







</html>