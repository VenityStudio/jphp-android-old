package org.venity.compiler;

import php.runtime.annotation.Reflection;
import php.runtime.env.Environment;
import php.runtime.ext.core.classes.WrapClassLoader;
import php.runtime.reflection.ClassEntity;

import java.io.File;

@Reflection.Name("CompilerClassLoader")
@Reflection.Namespace("php\\util")
public class WrapCompilerClassLoader extends WrapClassLoader.WrapLauncherClassLoader {
    private static File sourceDir;
    private static File destDir;
    private static File destResDir;
    private static Main compiler;

    public static void setCompiler(Main compiler) {
        WrapCompilerClassLoader.compiler = compiler;
    }

    public static void setDestDir(File destDir) {
        WrapCompilerClassLoader.destDir = destDir;
    }

    public static void setDestResDir(File destResDir) {
        WrapCompilerClassLoader.destResDir = destResDir;
    }

    public static void setSourceDir(File sourceDir) {
        WrapCompilerClassLoader.sourceDir = sourceDir;
    }

    public WrapCompilerClassLoader(Environment env, ClassEntity clazz) {
        super(env, clazz);
    }

    @Reflection.Signature
    public boolean loadClass(Environment env, String className) throws Throwable {
        if (!super.loadClass(env, className)) {
            File php = new File(sourceDir, className.replace("\\", "/") + ".php");
            File phb = new File(sourceDir, className.replace("\\", "/") + ".phb");

            if (php.exists())
                compile(php);
            else if (phb.exists())
                compile(phb);
            else return false;
        }

        return true;
    }

    private void compile(File file) {
        System.out.println("---> compile: " + file);

        if (destResDir != null) Main.dumper.addModule(compiler.compileFile(file, destDir, destResDir));
        else Main.dumper.addModule(compiler.compileFile(file, destDir, destDir));
    }
}