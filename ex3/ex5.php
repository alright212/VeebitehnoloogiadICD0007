<?php

$header = file_get_contents('tpl/table-header.html');
$footer = file_get_contents('tpl/table-footer.html');

print $header;

foreach (range(0,9) as $first_num){
    print "<div>";
    foreach (range(0,9) as $second_num){
        $result = $first_num * $second_num;
        printf("%d x %d = %d<br>\n", $first_num, $second_num, $result);
    }
    print "</div>".PHP_EOL;

}

print  $footer;