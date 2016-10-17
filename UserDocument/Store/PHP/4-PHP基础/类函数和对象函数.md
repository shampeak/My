# 类函数和对象函数
> PHP提供的一系列可以检测类和对象的函数


## 类函数

### 判断是否存在类函数
- bool interface_exists (string $interface_name [, bool $autoload = true ])

判断接口是否存在，第二个参数表示在查找时是否执行__autoload。
- bool class_exists (string $class_name [, bool $autoload = true ]) 

判断类是否存在，第二个参数表示在查找时是否执行__autoload。
- bool method_exists (mixed $object , string $method_name) 

判断指定类或者对象中是否含有指定的成员函数。该方法与is_callable()区别：is_callable()函数判断的是函数是否可调用。存在的方法不一定可以调用，例如方法是private的情况下，存在但是不可调用。

- bool property_exists (mixed $class , string $property) 

判断指定类或者对象中是否含有指定的成员变量。

## 获取类函数

- get_declared-classes() :    获取定义的类

获取脚本中定义的所有类的数组，会列出用户定义的类和PHP内置的类。注意只返回函数调用中已声明的类，可以继续使用require()或者require_once()来增加脚本中类的数目

- get_class()：     获取对象类名

检查对象的类，接受任何对象作为参数，并以字符串的形式返回类名。


- instanceof : 

这是一个操作符，包括两个操作数，要检测的对象在关键字左边，类或接口在右面。如果对象是给定类型的实例，则返回true。

instanceof与get_class()的区别：比如说有一个Dog类和Cat类都继承与Animal类，当我们只关心这个实例是否是Animal，而不必要在意是Dog还是Cat的话，可以用这个操作符。

- get_class_methods: 获取类方法

得到一个类中所有的方法，需要一个类名作为参数，返回包含类中所有方法名的数组。直接传递对象给这个方法也可以。


- get_class_vars():查询类属性

接受类名作为参数，返回关联数组。在返回的数组中，属性名作为键名，属性值作为键值。

- get_parent_class():找到类的父类

接受对象或者类名作为参数，如果父类存在返回类名，否则返回false

- is_subclass_of(): 检测一个类是否是另一个类的派生类。

输入2个参数，如果第二个参数是第一个参数的父类的话，返回true。

该方法只能用于类不能用于接口，接口还是要用instanceof

