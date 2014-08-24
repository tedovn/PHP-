<?php

$htmlTag = ['doctype',
    'a',
    'abbr',
    'address',
    'area',
    'article',
    'aside',
    'audio',
    'b',
    'base',
    'bdi',
    'bdo',
    'blockquote',
    'body',
    'br',
    'button',
    'canvas',
    'caption',
    'cite',
    'code',
    'col',
    'colgroup',
    'data',
    'datalist',
    'dd',
    'del',
    'details',
    'dfn',
    'dialog',
    'div',
    'dl',
    'dt',
    'em',
    'embed',
    'fieldset',
    'figcaption',
    'figure',
    'footer',
    'form',
    'h1',
    'h2',
    'h3',
    'h4',
    'h5',
    'h6',
    'head',
    'header',
    'hgroup',
    'hr',
    'html',
    'i',
    'iframe',
    'img',
    'input',
    'ins',
    'kbd',
    'keygen',
    'label',
    'legend',
    'li',
    'link',
    'main',
    'map',
    'mark',
    'menu',
    'menuitem',
    'meta',
    'meter',
    'nav',
    'noscript',
    'object',
    'ol',
    'optgroup',
    'option',
    'output',
    'p',
    'param',
    'pre',
    'progress',
    'q',
    'rb',
    'rp',
    'rt',
    'rtc',
    'ruby',
    's',
    'samp',
    'script',
    'section',
    'select',
    'small',
    'source',
    'span',
    'strong',
    'style',
    'sub',
    'summary',
    'sup',
    'table',
    'tbody',
    'td',
    'template',
    'textarea',
    'tfoot',
    'th',
    'thead',
    'time',
    'title',
    'tr',
    'track',
    'u',
    'ul',
    'var',
    'video',
    'wbr'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML Tags Counter</title>
</head>
<body>
<form method="get">
    <label>Enter HTML Tags:</label><br>
    <input type="text" name="takeTags"/>
    <input type="submit" name="submit" />

</form>

<?php
session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
}
else{
    $_SESSION['count']++;
}
if(isset($_GET['submit'])){
    $takeInput = htmlentities($_GET['takeTags']);

    if (in_array($takeInput, $htmlTag)) {

        echo("Valid HTML tag!<br>");
        echo("Score: " . $_SESSION['count']);
    }
    else{
        $_SESSION['count']--;
        echo("Invalid HTML tag!<br>");
        echo("Score: " . $_SESSION['count']);

    }
}
?>
</body>
</html>