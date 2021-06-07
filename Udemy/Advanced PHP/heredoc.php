<!-- Heredoc, Helps with extremely long strings where there can be a confusion with apostrophes -->
<!-- Heredoc always starts with <<<ID -->
<!-- must still escape $ to avoid variable parse_ini_string -->
<!-- the Heredoc ID needs to be on a line of it's own. -->
<!-- No space or tab allowed for closing identifier.  -->

<?php
$number = 8;

$text = <<<DEMO
 "Lorem Ipsum \ "dolor\" sit amet, consectuer 'words elit.";
 DEMO;

echo $text;

// Normal Version
// function printWeatherWidget ($currentCity) {
//     $html = 
//     "<div class=\"widget\">
//     <h4 class=\"widget-title\"> My Widget Title </h4>
//     <div class=\"widget-body\">
//     Weather Information of $currentCity
//     <input type=\"text\" name=\"weather\" placeholder=\"input your city\" />
//     </div>
//     </div>";

//     return $html;
// }

// echo printWeatherWidget('California');


// Heredoc version
function printWeatherWidget ($currentCity) {
    $html = 
    <<<WIDGET
    <div class="widget">
    <h4 class="widget-title"> My Widget Title </h4>
    <div class="widget-body">
    Weather Information of $currentCity
    <input type="text" name="weather" placeholder="input your city" />
    </div>
    </div>;
WIDGET;
    return $html;
}

echo printWeatherWidget('California');