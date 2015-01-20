<?php
require('vendor/autoload.php');

use Carbon\Carbon;
use League\CLImate\CLImate;
use Duffleman\Calculator;

$climate = new CLImate;
$climate->flank('This program calculates your half life anniversary.');

$input = $climate->input('What is your birthday? (dd/mm/YYYY)');
$birthdayInput = $input->prompt();

$birthday = Carbon::createFromFormat('d/m/Y', $birthdayInput);

$input = $climate->input('When did you first meet this person? (dd/mm/YYYY)');
$meetDateInput = $input->prompt();

$meetDate = Carbon::createFromFormat('d/m/Y', $meetDateInput);

$calculator = new Calculator;
$calculator->calculate($birthday, $meetDate);

$climate->bold()->out('On the ' . $calculator->getOutput() . ' you will have known that person for over half of your life.');