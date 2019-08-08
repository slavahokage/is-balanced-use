<?php

ini_set('display_errors', '1');

use function BalanceChecker\isBalanced;

require_once('../vendor/autoload.php');

$pairs = ['()', '())', '(()', '((()))'];

foreach ($pairs as $pair) {
    if (isBalanced($pair)) {
        echo "${pair} is Balanced \n";
    } else {
        echo "${pair} is not Balanced \n";
    }
}