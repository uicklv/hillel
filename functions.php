<?php
function showPost(Post $post): void
{
    echo $post->getInfo();
}

//function showPost($post): void
//{
//    if ($post->type === 'blog') {
//        $title = $post->getTitle();
//        $content = $post->getContent();
//        $html = "<h2>$title</h2><p>$content</p>";
//    } elseif ($post->type === 'miniblog') {
//        $title = $post->getTitle();
//        $content = $post->getContent();
//        $html = $title . "<video src='$content'></video>";
//    }
//}

function logger(string $content, string $type = 'alert')
{
    $date = date('Y-m-d H:i:s');
    $content = "[$date][$type][$content]\n";
    $result = file_put_contents('./logs/logs.txt', $content, FILE_APPEND);

    if ($result) {
        return false;
    }
}

function includeFile(string $path)
{
    require_once APP_DIR . $path;
}


function getTemplate(string $path, array $variables = []): string
{
    $filePath = APP_DIR . $path;
    if (!file_exists($filePath)) {
        throw new Exception('File error');
    }

    if ($variables) {
        extract($variables);
    }

    ob_start();

    require $filePath;

    return ob_get_clean();
}
