<?php

class VideoBlog extends Post
{

    /**
     * @return string
     */
    #[\Override] public function getInfo(): string
    {
        $title = $this->getTitle();
        $content = $this->getContent();
        return "<i>$title</i><video src='$content'></video>";
    }
}