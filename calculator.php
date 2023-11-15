<?php

class Additioner{
    public int $a;
    public int $b;

    public function __construct(int $a, int $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function add(){
        return $this->a + $this->b;
    }
};

class Subtractor{
    public int $a;
    public int $b;

    public function __construct(int $a, int $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function subtract(){
        return $this->a - $this->b;
    }
};

class Multiplier{
    public int $a;
    public int $b;

    public function __construct(int $a, int $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function multiply(){
        return $this->a * $this->b;
    }
};

class Divider{
    public int $a;
    public int $b;

    public function __construct(int $a, int $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function divide(){
        return $this->a / $this->b;
    }
};

class Calculator{
    public Additioner $additioner;
    public Subtractor $subtractor;
    public Multiplier $multiplier;
    public Divider $divider;

    public function __construct(Additioner $additioner, Subtractor $subtractor, Multiplier $multiplier, Divider $divider){
        $this->additioner = $additioner;
        $this->subtractor = $subtractor;
        $this->multiplier = $multiplier;
        $this->divider = $divider;
    }

    public function calculate(string $operation, int $a, int $b){
        if($operation === '+'){
            return $this->additioner->add($a, $b);
        }
        if($operation === '-'){
            return $this->subtractor->subtract($a, $b);
        }
        if($operation === '*'){
            return $this->multiplier->multiply($a, $b);
        }
        if($operation === '/'){
            return $this->divider->divide($a, $b);
        }
    }
};
    
$plus = new Additioner(10, 2);
$minus = new Subtractor(10, 2);
$times = new Multiplier(10, 2);
$divBy = new Divider(10, 2);
$calc = new Calculator($plus, $minus, $times, $divBy);

echo 'sum = ' . $calc->calculate('+', $calc->additioner->a, $calc->additioner->b) . '</br>' . 'difference = ' . $calc->calculate('-', $calc->subtractor->a, $calc->subtractor->b) . "</br>" . 
'product = ' . $calc->calculate('*', $calc->multiplier->a, $calc->multiplier->b) . "</br>" . 'quotient = ' . $calc->calculate('/', $calc->divider->a, $calc->divider->b) . "</br>";
 