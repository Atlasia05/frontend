<?php
// 링크 이동 
class Lib
{
    public static function MsgAndBack($msg) {
        echo "<script>";
        echo "alert('{$msg})";
        echo "history.back()";
        echo "</script>";
    }
    public static function MsgAndGo($msg, $target) {
        echo "<script>";
        echo "alert('{$msg}')";
        echo "location.href='$target'";
        echo "</script>";
    }
    public static function MsgAndHide($target) {
        echo "<script>";
        echo "location.href='$target'";
        echo "</script>";
    }
}