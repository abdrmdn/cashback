<?php
namespace source\commands\commandsStrategies;

use source\commands\SBCommands;
use source\commands\SBCommandsInterface;

class SBCommandSpend extends SBCommands implements SBCommandsInterface
{
    /**
     *
     */
    public function exec()
    {
        $this->validateParams($this->parameters);
        arsort($this->parameters);
        if ($this->parameters[0] > 0) {
            $percentage = $this->calculateRewardPercentage($this->parameters);
            $output = 'Award cashback: ' . number_format($percentage, 2, '.', '');
        } else {
            $output = "No cashback";
        }
        $this->output($output);
    }

    /**
     * @param $parameters
     *
     * @throws \Exception
     */
    private function validateParams($parameters)
    {
        foreach ($parameters as $moneySpent) {
            if (!is_numeric($moneySpent)) {
                throwError('One or more from the arguments passed is not a number');
            }
            if ($moneySpent < 0) {
                throwError('values must be positive');
            }
        }
    }

    /**
     * @param $moneySpent
     *
     * @return float
     */
    private function calculateRewardPercentage($moneySpent)
    {
        $fifties = $twenties = $tens = true;
        foreach ($moneySpent as $money) {
            if ($money < 10) {
                $tens = $twenties = $fifties = false;
                continue;
            }
            if ($money < 20) {
                $twenties = $fifties = false;
                continue;
            }
            if ($money < 50) {
                $fifties = false;
                continue;
            }
        }
        $HighestSpent = array_shift(array_values($moneySpent));
        if ($fifties) {
            return 0.2 * $HighestSpent;
        }
        if ($twenties) {
            return 0.15 * $HighestSpent;
        }
        if ($tens) {
            return 0.1 * $HighestSpent;
        }

        return 0.05 * $HighestSpent;
    }
}
