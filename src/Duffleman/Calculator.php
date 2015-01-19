<?php namespace Duffleman;

use Carbon\Carbon;

class Calculator
{

	protected $output;

    public function calculate($birthDate, $meetDate)
    {
    	$ageInDays = $birthDate->diffInDays($meetDate);
    	$ageInDays *= 2;

    	$birthDate->addDays($ageInDays);

    	$this->output = $birthDate->format('d/m/Y');
    }

    public function getOutput()
    {
        return $this->output;
    }
}
