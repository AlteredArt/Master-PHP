<!-- Need for making product available to other country along with Unicode -->
<!-- These need to be set globally -->
<!-- mb_internal_encoding('UTF-8'); -->
<!-- mb_http_output('UTF-8'); -->
<!-- mb_http_input('UTF-8'); -->
<!-- mb_language('uni'); -->

<?php
$text = 'japanese characters';

echo mb_strlen($text);
?>

<!-- in html -->
<meta charset='UTF-8'>
