<?php
require('vendor/autoload.php');

use Carbon\Carbon;
use Duffleman\Calculator;

$climate = new League\CLImate\CLImate;
$climate->flank('This program calculates your half life anniversary.');

$input = $climate->input('What is your birthday? (dd/mm/YYYY)');
$response = $input->prompt();

$birthday = Carbon::createFromFormat('d/m/Y', $response);

$input = $climate->input('When did you first meet this person? (dd/mm/YYYY)');
$response = $input->prompt();

$meetDate = Carbon::createFromFormat('d/m/Y', $response);

$calculator = new Calculator;
$calculator->calculate($birthday, $meetDate);

$climate->bold()->out($calculator->getOutput());