<?php

class News extends Post
{
    private string $type = 'news';
    public function getInfo(): string
    {
        $title = $this->getTitle();
        $content = $this->getContent();
        return "<p><i>$title</i> $content</p>";
    }
}