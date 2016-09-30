# 组合模式
> 组合可以比继承提供更多的灵活性
## 参考网址
[link1](http://blog.sina.com.cn/s/blog_50a1e1740101eym1.html)


## 概念
将一组对象组合为可像单个对象一样被使用的结构

组合优于继承
## 应用场景
1. 想表示对象的部分-整体层次结构
2. 希望用户忽略组合对象与单个对象的不同，用户将统一地使用组合结构中的所有对象。

例如：
- 单个物体有时候可以当成组合来看待，比如说用谷类和肉类可以做出香肠，香肠可以当做单个物体来看。也可以用香肠和其他组合制作馅饼，从而将一个组合物做出多个组合物来。
- ，原子是化学反应的基本微粒，它在化学反应中不可分割。现在有 C（碳）、H（氢）、O（氧）、N（氮）4种原子，它们可以随机组合成无数种分子，可以是蛋白质，也可以是脂肪，蛋白质和脂肪就是组合。由蛋白质和脂肪又可以一起被组合成肉、大豆等等。
- 叶子组合成树枝等。

## 特点

1. 必须存在不可分割基本元素。
2. 组合后的物体可以被组合。

## UML类图：
![image](http://my.csdn.net/uploads/201208/06/1344244728_6776.jpg)

1. 抽象角色(Component)，给参加组合的对象规定一系列接口。接口中包括管理节点的方法，例如add及remove方法。Component中可以定义一些接口的默认动作。
2. 树叶组件(Leaf)角色：在组合中表示叶节点对象，叶节点没有子节点。在组合中定义图元对象的行为。
3. 树枝组件(Composite)角色：存储子部件。定义有子部件的那些部件的行为。在Component接口中实现与子部件有关的操作。

## 实例
下面是一个测试实例，首先是抽象角色MenuComponent，为所有对象设计了基本功能。

```
abstract class MenuComponent
{
    public $name;
    public abstract function getName();
    public abstract function add(MenuComponent $menu);

    public abstract function remove(MenuComponent $menu);

    public abstract function getChild($i);

    public abstract function show();
}
```
下面是树叶角色，树叶角色继承自抽象角色，也有remove和add函数，但是实际上我们不希望它们可以添加或者删除对象，所以这两个函数都返回false，无效。
```

class MenuItem extends MenuComponent
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function add(MenuComponent $menu){
        return false;
    }
    public function remove(MenuComponent $menu){
        return false;
    }

    public function getChild($i){
        return null;
    }
    public function show(){
        echo " |-".$this->getName()."\n";
    }
}
```
最后是树枝角色，可以添加或者删除任何一个MenuComponent对象，包括自身。
```

class Menu extends MenuComponent
{
    public $menuComponents = array();
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function add(MenuComponent $menu)
    {
       $this->menuComponents[] = $menu;
    }

    public function remove(MenuComponent $menu)
    {
        $key = array_search($menu, $this->menuComponents);
        if($key !== false) unset($this->menuComponents[$key]);
    }

    public function getChild($i)
    {
        if(isset($this->menuComponents[$i])) return $this->menuComponents[$i];
        return null;
    }

    public function show()
    {
        echo ":" . $this->getName() . "\n";
        foreach($this->menuComponents as $v){
            $v->show();
        }
    }
}
```
最后是测试端的简单代码
```
class testDriver
{
    public function run()
    {
        $menu1 = new Menu('文学');
        $menuitem1 = new MenuItem('绘画');
        $menuitem2 = new MenuItem('书法');
        $menuitem3 = new MenuItem('小说');
        $menuitem4 = new MenuItem('雕刻');
        $menu1->add($menuitem1);
        $menu1->add($menuitem2);
        $menu1->add($menuitem3);
        $menu1->add($menuitem4);
        $menu1->show();
    }
}


$test = new testDriver();
$test->run();

```

## 优点

1. 灵活：组合模式的一切都享用同一个父类，可以更容易在组合体内加入新对象部件. 客户端不必因为加入了新的对象部件而更改代码。
1. 简单：客户端代码仅需要设计简单的接口，使客户端调用简单，客户端可以一致的使用组合结构或其中单个对象，用户就不必关系自己处理的是单个对象还是整个组合结构，这就简化了客户端代码。
1. 隐式到达：组合模型中的对象通过树形结构组织，每个组合的对象都存在对子对象的引用，因此对树种某部分小操作可能带来很大的影响。
2. 显式到达：可以很轻松的实现对树型结构的遍历。


## 缺点 

客户端调用简单灵活也带来组合的限制问题。

## 合成模式与其它模式
1. 装饰器模式：Decorator模式经常与Composite模式一起使用。当装饰与合成一起使用时，它们通常有一个公共的父类。因此装饰必须支持具有add,remove和getChild操作的Component接口
2. 享元模式：Flyweight模式让你共享组件，但不再引用他们的父部件
3. 迭代器模式：Itertor可用来遍历Composite
4. 访问者模式：Visitor将本来应该分布在Composite和Leaf类中的操作和行为局部化。


