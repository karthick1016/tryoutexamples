<?php

abstract class Abstractclass{
	abstract protected function getvalue();
	abstract protected function prefixValue($prefix);
	
	public function printOUT(){
	print this->getvalue();
	}
	
}

class concreteclass extends Abstractclass{
	protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}
$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";


?>
