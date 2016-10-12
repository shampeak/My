# 工厂方法模式
> 工厂这个术语，就是指负责生成对象的类或方法。

## 参考网址
[link1](http://blog.csdn.net/u014377731/article/details/52397188)
[link2](http://blog.sina.com.cn/s/blog_6dbbafe001018zhv.html)

## 定义
用工厂方法代替new操作的一种模式。定义一个用于创建对象的接口，让子类决定实例化哪一个类。工厂方法使一个类的实例化延迟到其子类。

简单来说， 由工厂类根据参数来决定创建出哪一种产品类的实例；

工厂类是指包含了一个专门用来创建其他对象的方法的类。所谓按需分配，传入参数进行选择，返回具体的类。工厂模式的最主要作用就是对象创建的封装、简化创建对象操作。 

简单的说，就是调用工厂类的一个方法（传入参数）来得到需要的类；

## 工厂模式设计的原因
基于工厂模式设计的类有助于减少主代码流中基于条件的复杂性。在整个应用程序中，调用对象的方法众多且不同，与某对象创建相关的任何修改都会影响到应用程序的其他部分。假设用if/else或者switch/case语句实例化5个对象中的一个，首先可能会导致很多地方都会使用这个语句导致代码的重复，而且如果添加第六个对象或者修改其中某一个对象名称，都会导致程序中所有实例都需要修改。工厂模式就用来避免这个问题。
## 使用情景：
- 在代码运行的时候才知道生成的对象类型
- 我们需要能够相对轻松的加入一些新的产品功能
- 每一个产品类型都可定制特定的功能

## 实现
 工厂方法模式把创建者类与要生产的产品分离开来。创建者是一个工厂类，其中定义了用于生产对象的类方法。如果没有提供默认实现，那么就由创建者类的子类来执行实例化。一般情况下，就是创建者类的每个子类实例化一个相应产品子类。

## 实例
为了管理控制CD 应用程序需要将必要的信息编辑入CD对象，将CD传给外部供应商。CD需要编辑标题、乐队名称以及曲目列表。

下面是一个简单的CD类，添加标题、乐队名称与曲目列表：
```
 class CD {   
       
    public $tracks = array();   
    public $band   = '';   
    public $title  = '';   
       
    public function __construct() {}   
       
    public function setTitle($title) {   
        $this->title    = $title;   
    }   
       
    public function setBand($band) {   
        $this->band     = $band;   
    }   
       
    public function addTrack($track) {   
        $this->tracks[] = $track;   
    }   
}   
```

创建CD，添加标题、名称与曲目列表：
```
$title="...";
$band='...';
$trackFromExternalSource=array(...);

$cd=new CD();
$cd->setTitle($title);
$dc->setBand($band);
...
```

现在除了普通CD外又多了种增强型CD，写至光盘的第一个音轨是数据音轨，管理控制软件是通过其标签DATA TRACK 识别数据音轨，并且创建相应的CD对象。

```
 class enhadcedCD {   
    public $tracks = array();   
    public $band   = '';   
    public $title  = '';   
   
    public function __construct() {   
        $this->tracks   = "DATA TRACK";   
    }   
       
    public function setTitle($title) {   
        $this->title    = $title;   
    }   
       
    public function setBand($band) {   
        $this->band     = $band;   
    }   
       
    public function addTrack($track) {   
        $this->tracks[] = $track;   
    }   
}   
```

除了用条件语句创建CD外，还可以用工厂模式。CDfactory类使用了PHP根据变量变化动态实例化一个类的能力，create方法接受被请求类的类型并返回该类的一个实例
```

class CDFactory {   
       
    public static function create($type) {   
        $class = strtolower($type) . "CD";   //strtolower将字符串转化为小写
           
        return new $class;   
    }   
}   
```

实例操作：类的创建和执行的变化反映了Factory类的用法。
```
    

$type = "enhadced";   
   
$cd   = CDFactory::create($type);   
   
$tracksFromExternalSource = array("What It Means", "Brr", "Goodbye");   
   
$cd->setBand("Never Again");   
$cd->setTitle("Waste of a Rib");   
foreach ($tracksFromExternalSource as $track) {   
    $cd->addTrack($track);   
} 
```

