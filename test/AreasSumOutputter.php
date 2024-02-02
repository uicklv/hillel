<?php

class AreasSumOutputter
{
    private AreaCalculator $calculator;

    public function __construct(AreaCalculator $calculator)
    {
        $this->setCalculator($calculator);
    }

    public function json(): string
    {
        return json_encode(['sum' => $this->calculator->sum()]);
    }

    public function html(): string
    {
        return "<p>sum: <b>{$this->calculator->sum()}</b></p>";
    }

    /**
     * @param AreaCalculator $calculator
     */
    public function setCalculator(AreaCalculator $calculator): void
    {
        $this->calculator = $calculator;
    }

    /**
     * @return AreaCalculator
     */
    public function getCalculator(): AreaCalculator
    {
        return $this->calculator;
    }
}