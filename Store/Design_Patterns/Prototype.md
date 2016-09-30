# 原型模式
> 

## 参考网址
[link1](http://blog.sina.com.cn/s/blog_6dbbafe001018vcy.html)

## 概念
原型设计模式创建对象的方式为复制和克隆初始对象或原型。这种方式比创建新实例更为有效。

## 与工厂模式比较
原型模式与工厂模式作用相似，都是用来创建对象的；

与工厂模式的实现不同，原型模式是先创建一个对象，然后通过clone原型对象来创建新的对象，这样就免去了类创建时的重复初始化操作；

原型模式适合于大对象的创建，创建一个对象需要很大的开销，如果每次new就会消耗很大，原型模式仅需内存拷贝即可；

## UML类图
![image](http://s14.sinaimg.cn/middle/6dbbafe0gc993b02184fd&690)

其中：

抽象原型角色(Prototype)：声明一个克隆自身的接口，这个类具有copy()的公共方法，该方法用于生成一个副本。

具体原型角色(ConcretePrototype)：实现一个克隆自身的操作，由于该对象实际是一个复制品，所以它也具有copy()方法。

## 优缺点

Prototype模式优点：

1. 可以在运行时刻增加和删除产品
2. 可以改变值或结构以指定新对象
3. 减少子类的构造
4. 用类动态配置应用

Prototype模式的缺点：

Prototype是的最主要的缺点就是每一个类必须包含一个克隆方法；

而且这个克隆方法需要对类的功能进行检测，这对于全新的类来说较容易，但对已有的类进行改造时将不是件容易的事情；

## 具体代码
```
/**抽象原型类 
* Class Prototype 
*/  
    abstract class Prototype  
    {  
       abstract function cloned();  
    }  
      
/**具体原型类 
* Class Plane 
*/  
    class Plane extends Prototype  
    {  
      
        public $color;  
      
        function Fly()  
        {  
            echo "飞机飞啊飞!<br/>";  
        }  
      
        function cloned()  
        {  
            return clone $this;  
        }  
    }  
```

客户端测试代码
```
    header("Content-Type:text/html;charset=utf-8");  
    //------------------------原型模式测试代码------------------  
    require_once "./Prototype/Prototype.php";  
      
    $plane1=new Plane();  
    $plane1->color="Blue";  
      
    $plane2=$plane1->cloned();  
      
    $plane1->Fly();  
    $plane2->Fly();  
      
    echo "plane1的颜色为：{$plane1->color}<br/>";  
    echo "plane2的颜色为：{$plane2->color}<br/>";  
```

