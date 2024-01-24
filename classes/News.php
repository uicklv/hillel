<?php

class Blog
{
    private string $title;

    private string $content;

    public function __construct(string $title, string $content)
    {
        $this->setTitle($title);
        $this->setContent($content);
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    public function getInfo(): string
    {
        $title = $this->getTitle();
        $content = $this->getContent();
        return "<h2>$title</h2><p>$content</p>";
    }
}