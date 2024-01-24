<?php

final class Blog extends Post
{
    private string $type = 'blog';

    /**
     * @return string
     */
    #[\Override] public function getInfo(): string
    {
        $content = $this->getContent();
        return "<p>$content</p>";
    }
}