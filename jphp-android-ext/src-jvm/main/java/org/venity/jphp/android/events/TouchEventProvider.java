package org.venity.jphp.android.events;

import android.view.MotionEvent;
import android.view.View;
import php.runtime.Memory;
import php.runtime.env.Environment;
import php.runtime.invoke.Invoker;

public class TouchEventProvider extends EventProvider {
    @Override
    public String getCode() {
        return "touch";
    }

    @Override
    public void bind(Environment env, View view, Invoker invoker) {
        view.setOnTouchListener((view1, motionEvent) -> invoker.callAny(view1).toBoolean());
    }

    @Override
    public void unbind(Environment env, View view) {
        view.setOnTouchListener(null);
    }

    @Override
    public void trigger(Environment env, View view) {
        // noup
    }
}