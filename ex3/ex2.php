<?php

$list = [1, 2, 3, 2, 6];
function isInList($list, $target): bool
{

    foreach ($list as $each) {
        if ($each == $target) {
            return true;
        }
    }
    return false;


}