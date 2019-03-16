<?php

namespace php\android\content;


abstract class Context {

    /**
     * @param int $resId
     * @return string
     */
    public function getString(int $resId): string {}
}