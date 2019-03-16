package org.venity.jphp.android.classes.view;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import org.venity.jphp.android.AndroidExtension;
import php.runtime.annotation.Reflection;
import php.runtime.env.Environment;
import php.runtime.lang.BaseWrapper;
import php.runtime.reflection.ClassEntity;

@Reflection.Name("LayoutInflater")
@Reflection.Namespace(AndroidExtension.VIEW_NS)
public class WrapLayoutInflater extends BaseWrapper<LayoutInflater> {

    public WrapLayoutInflater(Environment env, LayoutInflater wrappedObject) {
        super(env, wrappedObject);
    }

    public WrapLayoutInflater(Environment env, ClassEntity clazz) {
        super(env, clazz);
    }

    @Reflection.Signature
    public static LayoutInflater from(Context context) {
        return LayoutInflater.from(context);
    }

    @Reflection.Signature
    public View inflate(int resource, ViewGroup root, boolean attachToRoot) {
        return getWrappedObject().inflate(resource, root, attachToRoot);
    }
}
