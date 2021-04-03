<?php
class Html
{
    public function css(string $path, string $rel)
    {
        return "<link href=$path rel=$rel>";
    }
    public function meta()
    {
        return;
    }
    public function img(string $path, string $desc)
    {
        return "<img scr=$path alt=$desc>";
    }
    public function link(string $link, string $name)
    {
        return "<a href=$link>$name</a>";
    }
    public function js(string $path)
    {
        return "<script src=$path > </script>";
    }
}
