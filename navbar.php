<?php
    $pages = array(
        'index.php' => 'Home', 
        'searchBar.php' => 'Search-section',
        'calculator.php' => 'Calculator', 
        'todo.php' => 'To-Do', 
        'moreDetails.php' => 'More-Detailes'
    );
    foreach($pages as $p => $p_value) {
        echo "<li class='nav-item active'>
            <a class='nav-link' href=".$p.">".$p_value."</a>
        </li>";
    }
?>