<?php

namespace App;

class Cart
{
    public $items = [];
    public $totalPrice = 0;

    public function add($item, $id) 
    {
        if (array_key_exists($id, $this->items)==false) {
            $this->totalPrice += $item->price;
            $this->items[$id] = $item;    
        }
    }

    public function delete($id)
    {
        if (array_key_exists($id, $this->items)) {
            unset($this->items[$id]);
        }
    }
}
