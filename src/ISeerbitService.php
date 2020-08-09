<?php
namespace SeerbitLaravel;

interface ISeerbitService {

    public static function Standard();

    public static function Account();

    public static function Mobile();
    public static function Card();
    public static function Resources();
    public static function Recurrent();
}
