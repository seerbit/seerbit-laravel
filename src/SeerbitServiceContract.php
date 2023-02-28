<?php

namespace SeerbitLaravel;

interface SeerbitServiceContract {

    public static function Standard();

    public static function Account();

    public static function Mobile();

    public static function Card();

    public static function Resources();

    public static function Recurrent();

    public static function Tokenization();
}
