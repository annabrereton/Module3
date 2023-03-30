<?php

class Sty
{
   private array $pigs;

    /**
     * @return array   // GETTER
     */
    public function getPigs(): array
    {
        return $this->pigs;
    }

    public function getPig(int $pigIndex): Pig
    {
        return $this->pigs[$pigIndex];
    }

    /**
     * @param Pig $pig   //SETTER
     */
    public function addPig(Pig $pig): void
    {
        $this->pigs[] = $pig;
    }

    public function addPigz(array $pigsadd): void // void means there is no return value, just adding to the array
    {
        $this->pigs = array_merge($this->pigs, $pigsadd); // $pigsadd could be called $pigs too but changed
    }                                                      // to make clearer for myself which array is which
}
// $this is special inbuilt PHP variable that refers to the current object you're working on