# 匿名函数
> 匿名函数&回调&闭包




## 匿名函数（Anonymous functions）
也叫闭包函数（closures），简单理解就是一个没有指定名称的函数，可以临时创建和使用。一般用作回调函数（callback）参数的值。当然，也有其它应用的情况。 

声明一个匿名函数：
```
$func = function() {
    
}; //带结束符(分号）

```
 可以看到，匿名函数因为没有名字，如果要使用它，需要将其返回给一个变量。匿名函数也像普通函数一样可以声明参数，调用方法也相同：
```
$func = function( $param ) {
    echo $param;
};

$func( 'some string' );

//输出：
//some string
```

PHP在引入闭包之前，也有一个可以创建匿名函数的函数：create function，但是代码逻辑只能写成字符串，这样看起来很晦涩并且不好维护，所以很少有人用。 
## 闭包(Closure)
由PHP5.3引入的。

闭包是词法闭包(Lexical Closure)的简称，是引用了自由变量的函数，这个被应用的自由变量将和这个函数一同存在，即使离开了创建它的环境也一样，所以闭包也可认为是有函数和与其相关引用组合而成的实体。在一些语言中，在函数内定义另一个函数的时候，如果内部函数引用到外部函数的变量，则可能产生闭包。在运行外部函数时，一个闭包就形成了。(*看不懂...*)

**匿名函数&闭包：**
将匿名函数在普通函数中当做参数传入，也可以被返回。这就实现了一个简单的闭包。 

 下边有三个例子
```
//例一
//在函数里定义一个匿名函数，并且调用它
function printStr() {
    $func = function( $str ) {
        echo $str;
    };
    $func( 'some string' );
}

printStr();



//例二
//在函数中把匿名函数返回，并且调用它
function getPrintStrFunc() {
    $func = function( $str ) {
        echo $str;
    };
    return $func;
}

$printStrFunc = getPrintStrFunc();
$printStrFunc( 'some string' );




//例三
//把匿名函数当做参数传递，并且调用它
function callFunc( $func ) {
    $func( 'some string' );
}

$printStrFunc = function( $str ) {
    echo $str;
};
callFunc( $printStrFunc );

//也可以直接将匿名函数进行传递。如果你了解js，这种写法可能会很熟悉
callFunc( function( $str ) {
    echo $str;
} );
```
## 连接闭包和外界变量的关键字：USE

闭包可以保存所在代码块上下文的一些变量和值。PHP在默认情况下，匿名函数不能调用所在代码块的上下文变量(PHP默认变量是局部的），而需要通过使用use关键字。
```
function getMoney() {
    $rmb = 1;
    $dollar = 6;
    $func = function() use ( $rmb ) {
        echo $rmb;
        echo $dollar;
    };
    $func();
}

getMoney();

//输出：
//1
//报错，找不到dorllar变量
```
这个例子可以看出use声明的作用，只有声明才能在匿名函数里也就不能获取。


匿名函数在每次执行的时候都能访问到上层作用域内的变量， 这些变量在匿名函数被销毁之前始终保存着自己的状态，例如如下的例子:




```
function getMoney() {
    $rmb = 1;
    $func = function() use ( $rmb ) {
        echo $rmb;
        //把$rmb的值加1
        $rmb++;
    };
    $func();
    echo $rmb;
}

getMoney();

//输出：
//1
//1
```

在这里使用值传递数，所以这里函数调用并没有使$rmb变量自增，默认PHP是通过拷贝的方式传入上层变量进入匿名函数，如果需要改变上层变量的值则需要通过引用的方式传递。

要达到这种效果，其实在变量前加一个 & 符号就可以了：
```
function getMoney() {
    $rmb = 1;
    $func = function() use ( &$rmb ) {
        echo $rmb;
        //把$rmb的值加1
        $rmb++;
    };
    $func();
    echo $rmb;
}

getMoney();

//输出：
//1
//2
```




## 回调
## 概念？
看了好多都是直接讲回调，但是没有讲什么是回调？
解释1： 我调用了函数A，而函数A在执行过程中调用了我提供的函数B，这个函数B就称为函数A的回调函数
## 作用
回调函数可以很好地将一些功能从核心功能剥离开。

利用回调，可以在运行时将与组件核心任务没有直接关系的功能插入到组件中。有了 组件回调，可以赋予了其他人在你不知道的情况下扩展代码的权利。

### 回调几个基本函数
- is_callback：测试是否为一个回调
- call_user_func():把第一个参数作为回调函数调用

### 回调的使用
```

<?php 

// An example callback function
function my_callback_function() {
    echo 'hello world!';
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World!';
    }
}

// Type 1: Simple callback
call_user_func('my_callback_function'); 

// Type 2: Static class method call
call_user_func(array('MyClass', 'myCallbackMethod')); 

// Type 3: Object method call
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// Type 4: Static class method call (As of PHP 5.2.3)
call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call (As of PHP 5.3.0)
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who')); // A
?>


```


Example #2 使用 Closure 的示例
```
<?php
// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to 
// double the size of each element in our 
// range
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);
?>

以上例程会输出：

2 4 6 8 10
```





