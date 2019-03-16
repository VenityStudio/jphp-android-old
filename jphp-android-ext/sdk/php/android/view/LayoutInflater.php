<?php

namespace php\android\view;


use php\android\content\Context;

class LayoutInflater
{
    /**
     * @param Context $context
     * @return LayoutInflater
     */
    public static function from(Context $context): LayoutInflater {}

    /**
     * @param int $resource
     * @param ViewGroup $root
     * @param bool $attachToRoot
     * @return View
     */
    public function inflate(int $resource, ViewGroup $root = null, bool $attachToRoot = false): View {}
}