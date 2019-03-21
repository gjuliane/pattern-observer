<?php
class Buyer implements SplObserver {
    private $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function update(SplSubject $subject) {
        echo $this->username . ' has been notified of the new price of <b>' . $subject->getName() . ' (' . $subject->getPrice() . ')</b><br>';
    }
}