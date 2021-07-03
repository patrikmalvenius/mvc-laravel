<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

use App\Models\Yatzy;

require __DIR__ . "/header.php";


if (!session("yatzy")) {
    session(["yatzy" => new \App\Models\Yatzy()]);
};

?>

<?php session("yatzy")->start(); 

require __DIR__ . "/footer.php";
?>








