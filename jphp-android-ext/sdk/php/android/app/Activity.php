<?php

namespace php\android\app;

use php\android\content\Context;
use php\android\view\LayoutInflater;
use php\android\view\View;

class Activity extends Context
{
    /**
     * @param string $title
     */
    public function setTitle(string $title) {

    }

    /**
     * @param View $view
     */
    public function setContentView(View $view) {

    }

    /**
     * @param int $id
     */
    public function setContentViewById(int $id) {

    }

    /**
     * @param int $id
     * @return View
     * @deprecated
     */
    public function findById(int $id) : View {

    }

    /**
     * @param int $id
     * @return View
     */
    public function findViewById(int $id) : View {

    }

    /**
     * --RU--
     * При создании Activity
     *
     * --EN--
     * On Activity create
     *
     * --JP--
     * Activity 作成時
     *
     * @param callable $callback
     */
    public function setOnCreate(callable $callback) {

    }

    /**
     * Callback params: int $keyCode
     *
     * @param callable $callback
     */
    public function setOnKeyDown(callable $callback) {

    }

    /**
     * Callback params: int $keyCode
     *
     * @param callable $callback
     */
    public function setOnKeyUp(callable $callback) {

    }

    /**
     * Callback params: int $keyCode
     *
     * @param callable $callback
     */
    public function setOnKeyLongPress(callable $callback) {

    }

    /**
     * Callback params: int $keyCode
     *
     * @param callable $callback
     */
    public function setOnKeyMultiple(callable $callback) {

    }

    /**
     * Callback params: int $keyCode
     *
     * @param callable $callback
     */
    public function setOnKeyShortcut(callable $callback) {

    }

    /**
     * @return View
     */
    public function getCurrentFocus(): View {}

    /**
     * @param int $featureId
     * @return bool
     */
    public function requestWindowFeature(int $featureId): bool {}

    /**
     * @param int $featureId
     * @param int $resId
     */
    public function setFeatureDrawableResource(int $featureId, int $resId) {}

    /**
     * @param int $featureId
     * @param int $alpha
     */
    public function setFeatureDrawableAlpha(int $featureId, int $alpha) {}

    /**
     * @return LayoutInflater
     */
    public function getLayoutInflater(): LayoutInflater {}

    /**
     * @return string
     */
    public function getTitle(): string {}

    /**
     * @return int
     */
    public function getTitleColor(): int {}

    /**
     * @param bool $visibility
     */
    public function setProgressBarVisibility(bool $visibility) {}

    /**
     * @param bool $visibility
     */
    public function setProgressBarIndeterminateVisibility(bool $visibility) {}

    /**
     * @param bool $indeterminate
     */
    public function setProgressBarIndeterminate(bool $indeterminate) {}

    /**
     * @param int $progress
     */
    public function setProgress(int $progress) {}

    /**
     * @param int $progress
     */
    public function setSecondaryProgress(int $progress) {}

    /**
     * @param int $streamType
     */
    public function setVolumeControlStream(int $streamType) {}

    /**
     * @return int
     */
    public function getVolumeControlStream(): int {}

    /**
     * @param callable $callback
     */
    public function runOnUiThread(callable $callback) {}
}