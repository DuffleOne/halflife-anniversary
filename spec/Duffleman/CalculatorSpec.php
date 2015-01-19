<?php

namespace spec\Duffleman;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Carbon\Carbon;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Duffleman\Calculator');
    }

    function it_should_calculate_the_half_life_anniversary_when_given_two_dates()
    {
    	$this->calculate(Carbon::createFromFormat('d/m/Y', '08/03/1993'), Carbon::createFromFormat('d/m/Y', '04/09/2004'));

    	$this->getOutput()->shouldBe('03/03/2016');
    }
}
