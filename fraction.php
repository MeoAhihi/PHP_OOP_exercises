<?php

namespace fraction;


use function gmp_sign;

class fraction
{
    private int $numerator, $denominator;

    /**
     * @return int
     */
    public function getNumerator(): int
    {
        return $this->numerator;
    }

    /**
     * @param int $numerator
     */
    public function setNumerator(int $numerator): void
    {
        $this->numerator = $numerator;
    }

    /**
     * @return int
     */
    public function getDenominator(): int
    {
        return $this->denominator;
    }

    /**
     * @param int $denominator
     */
    public function setDenominator(int $denominator): void
    {
        $this->denominator = $denominator;
    }

    public function __construct(int $numerator = 0, int $denominator = 1, fraction $fraction = null)
    {
        if (is_null($fraction)) {
            $this->numerator = $numerator;
            $this->denominator = $denominator;
        } else {
            $this->numerator = $fraction->getNumerator();
            $this->denominator = $fraction->getDenominator();
        }
    }

    public function input(int $numerator, int $denominator): void
    {
        if (($numerator or $denominator) == 0) {
            echo "<script>alert('Do not')</script>";
            header("location: index.php");
        }
        if ($denominator < 0) {
            $this->numerator = -$numerator;
            $this->denominator = -$denominator;
        }
    }

    public function __toString(): string
    {
        return "$this->numerator/$this->denominator";
    }

    private function gcd($num1, $num2): int
    {
        while ($num2 != 0) {
            $t = $num2;
            $num2 = $num1 % $num2;
            $num1 = $t;
        }
        return abs($num1);
    }

    public function simplify(): fraction
    {
        $gcd = $this->gcd($this->numerator, $this->denominator);
        $this->numerator /= $gcd;
        $this->denominator /= $gcd;

        if ($this->denominator < 0) {
            $this->numerator = -$this->numerator;
            $this->denominator = -$this->denominator;
        }

        return $this;
    }

    public function add(fraction $fraction): fraction
    {
        return (new fraction($this->numerator * $fraction->denominator + $fraction->numerator * $this->denominator, $this->denominator * $fraction->denominator))->simplify();
    }

    public function subtract(fraction $fraction): fraction
    {
        return (new fraction($this->numerator * $fraction->denominator - $fraction->numerator * $this->denominator, $this->denominator * $fraction->denominator))->simplify();
    }

    public function multiply(fraction $fraction): fraction
    {
        return (new fraction($this->numerator * $fraction->numerator, $this->denominator * $fraction->denominator))->simplify();
    }

    public function divide(fraction $fraction): fraction
    {
        return (new fraction($this->numerator * $fraction->denominator, $this->denominator * $fraction->numerator))->simplify();
    }

    public function compare(fraction $fraction): int
    {
        $value = $this->numerator * $fraction->denominator - $this->denominator * $fraction->numerator;
        return $value < 0 ? -1 : ($value == 0 ? 0 : 1);
    }
}
