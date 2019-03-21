<?php
class Product implements SplSubject {
    private $observers;
    private $name;
    private $original_price;
    private $current_price;

    public function __construct($name, $original_price) {
        $this->observers = new SplObjectStorage();
        $this->name = $name;
        $this->original_price = $original_price;
        $this->current_price  = $original_price;
    }

    public function attach(SplObserver $observer) {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer) {
        $this->observers->detach($observer);
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setNewPrice($new_price) {
        echo 'Product ' . $this->name . ' has a new price of <b>' . $this->current_price . '</b><br>';
        $this->current_price = $new_price;
        $this->notify();
    }

    public function getPrice() {
        return $this->current_price;
    }

    public function getName() {
        return $this->name;
    }
}
