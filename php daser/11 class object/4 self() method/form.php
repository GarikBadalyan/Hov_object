<?php




class Page{
    static $main = "content<br>";
    public static function header(){
        return "header <br>";
    }
    public static function footer(){
        return "footer <br>";
    }
    public static function getPage(){
        echo self::header() .
             self::$main .
            self::footer();
    }
}
Page::getPage();


?>