# 装饰模式
> 

## 参考网址
[link1](http://www.jb51.net/article/65841.htm)

## 概念
通过在运行时合并对象来扩展功能的一种灵活机制

如果已有对象的部分内容或功能性发生改变，但是不需要修改原始对象的结构，那么使用装饰器模式最合适。

装饰者模式就是不修改原类代码和继承的情况下动态扩展类的功能。传统的编程模式都是子类继承父类实现方法重载，使用装饰器模式，只需添加一个新的装饰器对象，更加灵活，避免类数量和层次过多。

## UML类图
![image](http://my.csdn.net/uploads/201208/06/1344242539_1547.gif)

角色：
- Component（被装饰对象基类）
- ConcreteComponent（具体被装饰对象）
- Decorator（装饰者基类）
- ContreteDecorator（具体的装饰者类）

## 实际使用

以下情况使用Decorator模式

1. 在不影响其他对象的情况下，以动态、透明的方式给单个对象添加职责。
2. 处理那些可以撤消的职责。
3. 当不能采用生成子类的方法进行扩充时。一种情况是，可能有大量独立的扩展， 为支持每一种组合将产生大量的子类，使得子类数目呈爆炸性增长。 另一种情况可能是因为类定义被隐藏，或类定义不能用于生成子类。

例如，一个CD类可以实现为CD添加音轨与显示音轨列表的功能，客户指定某种显示音轨列表的方式。此时需求又发生了变化：针对某个输出实例要求输出大写，对于这么小的变化，最佳的方法不是修改基类或者创建父——子关系，而是创建一个基于装饰器设计模式的对象。


## 实例

被装饰对象基类 Component包含一个operation()的公共方法。
```
/**
 * 抽象构件角色
 */
interface Component {
    /**
     * 示例方法
     */
    public function operation();
}
```
装饰基类Decorator,将Component类的实例添加到内部保护对象，通过引用即可完成对对象的处理工作。
```
abstract class Decorator implements Component{
 
    protected  $_component;
 
    public function __construct(Component $component) {
        $this->_component = $component;
    }
 
    public function operation() {
        $this->_component->operation();
    }
}
```
 
 具体装饰类A
```
class ConcreteDecoratorA extends Decorator {
    public function __construct(Component $component) {
        parent::__construct($component);
 
    }
 
    public function operation() {
        parent::operation();    //  调用装饰类的操作
        $this->addedOperationA();   //  新增加的操作
    }
 
    /**
     * 新增加的操作A，即装饰上的功能
     */
    public function addedOperationA() {
        echo 'Add Operation A <br />';
    }
}
 ```
具体装饰类B
```
class ConcreteDecoratorB extends Decorator {
    public function __construct(Component $component) {
        parent::__construct($component);
 
    }
 
    public function operation() {
        parent::operation();
        $this->addedOperationB();
    }
 
    /**
     * 新增加的操作B，即装饰上的功能
     */
    public function addedOperationB() {
        echo 'Add Operation B <br />';
    }
}
 ```

具体构件
```
class ConcreteComponent implements Component{
 
    public function operation() {
        echo 'Concrete Component operation <br />';
    }
 
}
 ```
 客户端，客户端的操作只需要添加两行代码即可。

```
class Client {
 
     /**
     * Main program.
     */
    public static function main() {
        $component = new ConcreteComponent();
        $decoratorA = new ConcreteDecoratorA($component);
        $decoratorB = new ConcreteDecoratorB($decoratorA);
 
        $decoratorA->operation();
        $decoratorB->operation();
    }
 
}
 
Client::main();
```