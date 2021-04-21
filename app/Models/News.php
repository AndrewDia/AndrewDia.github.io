<?php

namespace App\Models;

class News
{
    private $title;
    private $text;
    private $buttonText;

    public function __construct($title, $text, $buttonText)
    {
        $this->title = $title;
        $this->text = $text;
        $this->buttonText = $buttonText;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }

    public function getButtonText()
    {
        return $this->buttonText;
    }

    public function setButtonText($buttonText): void
    {
        $this->buttonText = $buttonText;
    }
}
