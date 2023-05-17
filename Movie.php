<?php
class Movie {
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
    public $image;

    public function __construct($id, $title, $original_title, $nationality, $date, $vote, $image){
        $this->id = $id;
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
        $this->image = $image;
    }

    public function printMovie(){
        return "
            <h1>$this->title</h1>
            <p>$this->nationality</p>
            <p>$this->date</p>
            <p>$this->vote</p>
            <img src='$this->image' alt='$this->title'>
        ";
    }
}
?>