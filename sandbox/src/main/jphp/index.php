<?php

use php\android\app\Application;
use php\android\R;
use php\android\widget\TextView;
use php\android\notification\Notification;
use php\android\notification\NotificationBuilder;

Application::setMainActivityHandler(function () {
    $activity = Application::getMainActivity();
    $activity->setTitle($activity->getString(R::string("app_name")));
    $activity->setContentViewById(R::layout("activity_main"));

    $textView = $activity->findViewById(R::id("text"));
    $textView->on("click", function (TextView $view) use ($activity) {
        $view->textSize++;

        Notification::notify((new NotificationBuilder($activity))
            ->setAutoCancel(true)
            ->setContentTitle("jPFA Test")
            ->setContentText("jPHP For Android Test")
            ->setSmallIcon(R::mipmap("ic_launcher"))
            ->setPriority(Notification::PRIORITY_MAX)
            ->build(), 1);
    });
});