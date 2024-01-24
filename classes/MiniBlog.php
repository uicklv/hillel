<?php

class MiniBlog extends Post
{
    private string $type = 'miniblog';
    public function getInfo(): string
    {
//       $title = parent::getInfo();
       $content = $this->getContent();

       return "<video src='$content'></video>";
    }
}