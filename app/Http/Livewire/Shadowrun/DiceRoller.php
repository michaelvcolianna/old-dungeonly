<?php

namespace App\Http\Livewire\Shadowrun;

use App\Models\Shadowrunner;
use DiceCalc\Calc;
use Illuminate\Support\Str;
use Livewire\Component;

class DiceRoller extends Component
{
    /**
     * Whether the rolling window is open.
     *
     * @param boolean
     */
    public $show_window;

        /**
     * The number of dice to roll.
     *
     * @var integer
     */
    public $dice;

    /**
     * The stored rolls.
     *
     * @var array
     */
    public $results;

    /**
     * How many dice are a 5 or 6.
     *
     * @var integer
     */
    public $success;

    /**
     * How many dice are a 1.
     *
     * @var integer
     */
    public $glitch;

    /**
     * The sum of the dice.
     *
     * @var integer
     */
    public $total;

    /**
     * Whether Second Chance has been used.
     *
     * @var boolean
     */
    public $reroll;

    /**
     * Whether Push the Limit has been used.
     *
     * @var boolean
     */
    public $limit;

    /**
     * Events the component listens for.
     *
     * @var array
     */
    protected $listeners = [
        'characterUpdated' => '$refresh',
    ];

    /**
     * Actions to take when the component is loaded.
     */
    public function mount()
    {
        $this->open = false;
        $this->clearComputed();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return view('livewire.shadowrun.dice-roller');
    }

    /**
     * Sets all computed values to default.
     */
    public function clearComputed()
    {
        $this->results = null;
        $this->success = 0;
        $this->glitch = 0;
        $this->total = 0;
        $this->reroll = false;
        $this->limit = false;
    }

    /**
     * Adds or updates a single dice roll.
     *
     * @param  integer  $key
     * @param  boolean  $limit
     */
    public function singleRoll($key = null, $limit = false)
    {
        $roll = new Calc('d6');

        $new = [
            'edge' => $this->isEdge($roll()),
            'roll' => $roll(),
            'second' => is_numeric($key),
            'limit' => $limit,
        ];

        if(is_numeric($key))
        {
            $this->results[$key] = $new;
        }
        else
        {
            $this->results[] = $new;
        }
    }

    /**
     * Calculates roll-related statistics.
     */
    public function runCalculations()
    {
        $this->success = 0;
        $this->glitch = 0;
        $this->total = 0;

        foreach($this->results as $result)
        {
            $this->success += $this->isSuccess($result['roll']);
            $this->glitch += $this->isGlitch($result['roll']);
            $this->total += $result['roll'];
        }
    }

    /**
     * Creates a new batch of dice rolls.
     */
    public function rollDice()
    {
        if($this->dice > 0)
        {
            $this->clearComputed();

            for($i = 0; $i < $this->dice; $i++)
            {
                $this->singleRoll();
            }

            $this->runCalculations();

            $this->emit('$refresh');
        }
    }

    /**
     * Determines if a value is a possible Edge roll.
     *
     * @param  integer  $value
     * @return boolean
     */
    public function isEdge($value)
    {
        return ($value == 6);
    }

    /**
     * Determines if a value is a success.
     *
     * @param  integer  $value
     * @return boolean
     */
    public function isSuccess($value)
    {
        return ($value >= 5);
    }

    /**
     * Determines if a value is a glitch.
     *
     * @param  integer  $value
     * @return boolean
     */
    public function isGlitch($value)
    {
        return ($value == 1);
    }

    /**
     * Determines if more than half the dice rolled are glitched.
     *
     * @return boolean
     */
    public function isRollGlitched()
    {
        return ($this->glitch > ((count($this->results) / 2) + 0.1));
    }

    /**
     * Determines if the roll is glitched with no successes.
     *
     * @return boolean
     */
    public function isRollCriticallyGlitched()
    {
        return ($this->isRollGlitched() && $this->success < 1);
    }

    /**
     * Rerolls results that weren't successes.
     */
    public function secondChance()
    {
        if(!$this->reroll && !$this->limit)
        {
            foreach($this->results as $key => $result)
            {
                if(!$this->isSuccess($result['roll']))
                {
                    $this->singleRoll($key);
                    $this->runCalculations();
                }
            }

            $this->reroll = true;
        }
    }

    /**
     * Determines if any sixes can be rerolled as extra dice.
     *
     * @return boolean
     */
    public function canRollEdge()
    {
        $edge = 0;

        foreach($this->results as $result)
        {
            $edge += $result['edge'];
        }

        return (bool) $edge;
    }

    /**
     * Rerolls a 6 and adds it to the dice.
     */
    public function pushTheLimit()
    {
        if($this->canRollEdge() && !$this->reroll)
        {
            $this->singleRoll(null, true);
            $this->runCalculations();

            // Loops through the dice, marks a 6 as rerolled
            foreach($this->results as $key => $result)
            {
                if($result['edge'])
                {
                    $this->results[$key]['edge'] = false;
                    break;
                }
            }

            $this->limit = true;
        }
    }
}
