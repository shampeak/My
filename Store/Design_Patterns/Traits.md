# Traits
> php traits 介绍

## 参考链接
[link1](https://secure.php.net/manual/zh/language.oop5.traits.php)

[link2](http://www.cnblogs.com/thinksasa/archive/2013/05/16/3081247.html)

[link3](http://www.phpddt.com/php/traits.html)

## 引入目的
PHP是单继承的语言，无法同时从两个基类继承属性或方法，为了有的场合想用多继承，PHP引入了Traits。

## 概念
Trait 是从**PHP5.4.0起**一种代码复用的方法。

 Trait 是为类似 PHP 的单继承语言而准备的一种代码复用机制。Trait 为了减少单继承语言的限制，使开发人员能够自由地在不同层次结构内独立的类中复用 method。Trait 和 Class 组合的语义定义了一种减少复杂性的方式，避免传统多继承和 Mixin 类相关典型问题。

Trait 和 Class 相似，但仅仅旨在用细粒度和一致的方式来组合功能。 无法通过 trait 自身来实例化。它为传统继承增加了水平特性的组合；也就是说，应用的几个 Class 之间不需要继承。 

但PHP又没多继承，于是就发明了这样的一个东西。

Traits可以理解为一组能被不同的类都能调用到的方法集合，但Traits不是类！不能被实例化。

## Trait简单使用
```
<?php
    trait Drive {
        public $carName = 'trait';
        public function driving() {
            echo "driving {$this->carName}\n";
        }
    }
    class Person {
        public function eat() {
            echo "eat\n";
        }
    }
    class Student extends Person {
        use Drive;
        public function study() {
            echo "study\n";
        }
    }
    $student = new Student();
    $student->study();
    $student->eat();
    $student->driving();
```

输出结果如下：
```
study
eat
driving trait
```
上面的例子中，Student类通过继承Person，有了eat方法，通过组合Drive，有了driving方法和属性carName。

## 优先级问题
如果Trait、基类和本类中都存在某个同名的属性或者方法，最终会保留哪一个呢？
```
<?php 
    trait Drive {
        public function hello() {
            echo "hello drive\n";
        }
        public function driving() {
            echo "driving from drive\n";
        }
    }
    class Person {
        public function hello() {
            echo "hello person\n";
        }
        public function driving() {
            echo "driving from person\n";
        }
    }
    class Student extends Person {
        use Drive;
        public function hello() {
            echo "hello student\n";
        }
    }
    $student = new Student();
    $student->hello();
    $student->driving();
```
输出结果如下：
```
hello student
driving from drive
```
当方法或属性同名时，当前类中的方法会覆盖 trait的 方法，而 trait 的方法又覆盖了基类中的方法。

## 多个Trait冲突问题
如果没有解决冲突，会产生致命错误；


如果要组合多个Trait，通过逗号分隔 Trait名称：
```
use Trait1, Trait2;
```
如果多个Trait中包含同名方法或者属性时，会怎样呢？答案是当组合的多个Trait包含同名属性或者方法时，需要明确声明解决冲突，否则会产生一个致命错误。
```
<?php
trait Trait1 {
    public function hello() {
        echo "Trait1::hello\n";
    }
    public function hi() {
        echo "Trait1::hi\n";
    }
}
trait Trait2 {
    public function hello() {
        echo "Trait2::hello\n";
    }
    public function hi() {
        echo "Trait2::hi\n";
    }
}
class Class1 {
    use Trait1, Trait2;
}
```
输出结果如下：
```
PHP Fatal error:  Trait method hello has not been applied, because there are collisions with other trait methods on Class1 in ~/php54/trait_3.php on line 20
```
使用insteadof和as操作符来解决冲突，insteadof来明确使用冲突中哪一个方法；而as操作符将其中一个冲突方法另起名；
```
<?php
trait Trait1 {
    public function hello() {
        echo "Trait1::hello\n";
    }
    public function hi() {
        echo "Trait1::hi\n";
    }
}
trait Trait2 {
    public function hello() {
        echo "Trait2::hello\n";
    }
    public function hi() {
        echo "Trait2::hi\n";
    }
}
class Class1 {
    use Trait1, Trait2 {
        Trait2::hello insteadof Trait1;
        Trait1::hi insteadof Trait2;
    }
}
class Class2 {
    use Trait1, Trait2 {
        Trait2::hello insteadof Trait1;
        Trait1::hi insteadof Trait2;
        Trait2::hi as hei;
        Trait1::hello as hehe;
    }
}
$Obj1 = new Class1();
$Obj1->hello();
$Obj1->hi();
echo "\n";
$Obj2 = new Class2();
$Obj2->hello();
$Obj2->hi();
$Obj2->hei();
$Obj2->hehe();
```
输出结果如下：
```
Trait2::hello
Trait1::hi

Trait2::hello
Trait1::hi
Trait2::hi
Trait1::hello
```
as关键词还有另外一个用途，那就是修改方法的访问控制：
```
<?php
    trait Hello {
        public function hello() {
            echo "hello,trait\n";
        }
    }
    class Class1 {
        use Hello {
            hello as protected;
        }
    }
    class Class2 {
        use Hello {
            Hello::hello as private hi;
        }
    }
    $Obj1 = new Class1();
    $Obj1->hello(); # 报致命错误，因为hello方法被修改成受保护的
    $Obj2 = new Class2();
    $Obj2->hello(); # 原来的hello方法仍然是公共的
    $Obj2->hi();  # 报致命错误，因为别名hi方法被修改成私有的
```

## Trait中使用Trait
Trait 也能组合Trait，Trait中支持抽象方法、静态属性及静态方法：
```
<?php
trait Hello {
    public function sayHello() {
        echo "Hello\n";
    }
}
trait World {
    use Hello;
    public function sayWorld() {
        echo "World\n";
    }
    abstract public function getWorld();
    public function inc() {
        static $c = 0;
        $c = $c + 1;
        echo "$c\n";
    }
    public static function doSomething() {
        echo "Doing something\n";
    }
}
class HelloWorld {
    use World;
    public function getWorld() {
        return 'get World';
    }
}
$Obj = new HelloWorld();
$Obj->sayHello();
$Obj->sayWorld();
echo $Obj->getWorld() . "\n";
HelloWorld::doSomething();
$Obj->inc();
$Obj->inc();
```
输出结果如下：

```
Hello
World
get World
Doing something
1
2
```
