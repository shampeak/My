# 观察者模式
> Observer

## 参考网址
[link1](https://segmentfault.com/a/1190000000723382)

[link2](http://www.jb51.net/article/48809.htm)
## 概念
创建依赖关系，当有系统事件发生时通知观察者对象

观察者设计模式能够更便利地创建查看目标对象的状态，并且提供与核心对象非耦合的指定功能性。
## 应用场景举例
假如一个小贩， 把产品的价格提升了，不同的消费者会对此产生不同的反应。一般的编程模式无非是获取提升的价格，然后获取所有的消费者，再循环每个消费者， 不同的消费者根据价格涨幅做出决定，如果消费者的类型有限，因而进行的判断也不多，这种无可厚非，但如果有更多的类型的消费者加入进来， 那这个代码就变得臃肿且难以维护， 因为要不停的往里面加入判断代码，这个时候其实就适用观察者模式了。小贩作为被观察对象，当他产品价格变化后，会通知作为观察者的消费者们，消费者对此作出决定。添加不同类型的消费者或者修改消费者的决定只需要修改或者继承观察者对象，在被观察者里添加即可，不需要修改原来的内容。
## UML类图
![image](http://files.jb51.net/file_images/article/201404/2014040817121656.jpg?201438171723)

1. 抽象主题（Subject）角色：可观察对象
    1. 包含一个名为attach()和detach()的公共方法，可以添加或者删除一个观察者实例。观察者实例存储在内部的集合中。
    2. notify()在状态发生变化需要通知观察者的时候会被调用，遍历存储的观察者数组。
2. 抽象观察者（Observer）角色：为所有的具体观察者定义一个update()接口，该方法接受Subject()的一个实例，在观察的主题发生改变时更新自己。当在观察者数组中找到特定的观察者是，Subject的notify()方法会直接调用update()方法。
3. 具体主题（ConcreteSubject）角色：存储相关状态到具体观察者对象，当具体主题的内部状态改变时，给所有登记过的观察者发出通知。具体主题角色通常用一个具体子类实现。
4. 具体观察者（ConcretedObserver）角色：存储一个具体主题对象，存储相关状态，实现抽象观察者角色所要求的更新接口，以使得其自身状态和主题的状态保持一致。


## 实例
某个音乐web站点添加了一个最新的活动流（activity stream）功能，它能够在主页上显示最近的用户购买情况，这种功能主要是希望人们可以单击最近出售的商品，从而可能购买相同的商品。

首先建立一个基于观察者设计模式的CD对象：
```
class CD 
{
    public $band = '';
    public $title = '';
    protected $observers =  array();

    public function __construct($title,$band)//构造函数传递CD名称和乐队
    {
        $this->title = $title;
        $this->band = $band;
        # code...
    }
    
    public function attachObserver($type,$observer)//这个函数完成的功能是添加观察者。第一个参数$type,因为CD对象可能存在多种类型，第二个参数是要加入的观察者。观察者按照顺序加入特定的类型。
    {
        $this->observers[$type][] = $observer; 
        # code...
    }

    public function notifyObserver($type)//接受$type参数获取观察者数组中相关的所有对象，从而访问每个观察者。在这个方法中执行update()时，需要将指定对象的当前实例作为参数。
    {
        if (isset($this->observers[$type])) {
            foreach ($this->observers[$type] as $observer) {
                $observer->update($this);
            }
        }
    }

    public function buy()//简单注明购买CD的过程，一旦执行该操作，就会调用‘purchased’类型下的notifyObserver()方法。
    {
        $this->notifyObserver('purchased');
    }
}
```

下面是一个观察者，接收到变化后，通知流观察者
```
class buyCDNotifyStreamObserver
{
    
    public function update(CD $cd)//接受CD实例，从CD实例中获取信息并构建要发布的内容。
    {   #可以做逻辑判断做一些信息处理
        $activity = "This CD named {$cd->title} by";
        $activity .="{$cd->band} was just purchased, ";
        ActivityStream :: addNewItem($activity);
        # code...
    }
}
```

通知流：
```
//通知流
class ActivityStream
{
    
    public static function addNewItem($item)
    {   
        print "\n".$item;
        # code...
    }
}
```

客户端的使用代码如下：
```
$title = 'Waste of a Rib';
$band = 'Naver Again';
$cd  = new CD($title,$band);//创建新的CD对象
$observer = new buyCDNotifyStreamObserver();//实例化一个观察者实例
$cd->attachObserver('purchased',$observer);//添加到CD对象，定义类型
$cd->buy(); //购买


```



## 优缺点

观察者模式的优点：

1. 观察者和主题之间的耦合度较小；
2. 支持广播通信；

观察者模式的缺点：

由于观察者并不知道其它观察者的存在，它可能对改变目标的最终代价一无所知。这可能会引起意外的更新。
## 适用场景

- 当一个抽象模型有两个方面，其中一个方面依赖于另一个方面。
- 当对一个对象的改变需要同时改变其它对象，而不知道具体有多少个对象待改变。
- 当一个对象必须通知其它对象，而它又不能假定其它对象是谁。换句话说，你不希望这些对象是紧密耦合的。

## 与其它模式

1. 中介者模式（Mediator）:通过封装复杂的更新语义，ChangeManager充当目标和观察者之间的中介者。
2. 单例模式(singleton模式):ChangeManager可使用Singleton模式来保证它是唯一的并且是可全局访问的