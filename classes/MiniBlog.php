<?php

class Blog extends Post
{
    private string $type = 'blog';
    public function getInfo(): string
    {
       $title = parent::getInfo();
       $content = $this->getContent();

       return $title . "<p>$content</p>";
    }

}