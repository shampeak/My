# 外观模式
>

## 参考网址

[link1](http://www.cnblogs.com/wuchanming/p/4483140.html)

## 概念
为复杂或者多变的系统创建一个简单接口

为子系统中的一组接口提供一个一致的界面,定义一个高层接口,使得这一子系统更加的容易使用

通过在必要的逻辑和方法的集合前创造简单的外观接口，外观设计模式隐藏了调用对象的复杂性。

![image](http://my.csdn.net/uploads/201205/04/1336116055_1914.jpg)

## 应用情景
为了隐藏复杂的，执行业务进程某个步骤所需的方法和逻辑组，就应当使用基于外观设计模式的类。


在遇到以下情况使用facade模式：
1. 当你要为一个复杂子系统提供一个简单接口时。子系统往往因为不断演化而变得越来越复杂。大多数模式使用时都会产生更多更小的类。
    这使得子系统更具可重用性，也更容易对子系统进行定制，但这也给那些不需要定制子系统的用户带来一些使用上的困难。facade可以提供一个简单的缺省视图，
    这一视图对大多数用户来说已经足够，而那些需要更多的可定制性的用户可以越过facade层。
2. 客户程序与抽象类的实现部分之间存在着很大的依赖性。引入 facade将这个子系统与客户以及其他的子系统分离，可以提高子系统的独立性 和可移植性。
3. 当你需要构建一个层次结构的子系统时，使用 facade模式定义子系统中每层的入口点。如果子系统之间是相互依赖的，你可以让它们仅通过facade进行通讯，从而简化了它们之间的依赖关系。
## UML 类图

![image](http://my.csdn.net/uploads/201205/04/1336116151_2709.jpg)


- 外观角色（Facade）：是模式的核心，他被客户client角色调用，知道各个子系统的功能。同时根据客户角色已有的需求预订了几种功能组合\
- 子系统角色（Subsystem classes）：实现子系统的功能，并处理由Facade对象指派的任务。对子系统而言，facade和client角色是未知的，没有Facade的任何相关信息；即没有指向Facade的实例。
- 客户角色（client）：调用facade角色获得完成相应的功能。

     

## 实例

比如说,某公司的web站点需要将库存CD信息传到公司的不同系统，但是这个系统比较老，只能处理大写字符串，因此需要将CD属性改为大写。代码方面理解，现在要实现这么两个功能：获取CD对象，对所有属性大写，并且创建一个要提交给WEB服务的、格式完整的XML类。

CD类简单示例：
```
 class CD {   
           
        public $tracks = array();   
        public $band   = '';   
        public $title  = '';   
           
        public function __construct($tracks, $band, $title) {   
            $this->tracks = $tracks;   
            $this->band   = $band;   
            $this->title  = $title;   
        }   
    }   
```
构建CD函数非常简单。

为了外部系统格式CD对象，需要创建两个类，一个用于准备CD属性，变为大写。另一个类需要根据CD对象创建xml文档，返回一个完整的字符串。

大写：
```
 class CDUpperCase {   
           
        public static function makeString(CD $cd, $type) {   
            $cd->$type = strtoupper($cd->$type);   
        }   
           
        public static function makeArray(CD $cd, $type) {   
            $cd->$type = array_map("strtoupper", $cd->$type);   
        }      
    }   
```
创建xml文档：
```
class CDMakeXML {   
           
        public static function create(CD $cd) {   
            $doc  = new DomDocument();   
               
            $root = $doc->createElement("CD");   
            $root = $doc->appendChild($root);   
               
            $title = $doc->createElement("TITLE", $cd->title);   
            $title = $root->appendChild($title);   
               
            $band = $doc->createElement("BAND", $cd->band);   
            $band = $root->appendChild($band);   
               
            $tracks = $doc->createElement("TRACKS");   
            $tracks = $root->appendChild($tracks);   
               
            foreach ($cd->tracks as $track) {   
                $track = $doc->createElement("TRACK", $track);   
                $track = $tracks->appendChild($track);   
            }   
               
            return $doc->saveXML();   
        }   
    }   
```

在现在的情况下，编程人员要完成这一功能，需要用这个方式：
```
CDUpperCase::makeString($cd, "title");   
CDUpperCase::makeString($cd, "band");   
CDUpperCase::makeArray($cd, "tracks");   
print CDMakeXML::create($cd);   
```
这是一种方式但不是最佳方式，下面可以针对这个创建一个Facade对象：
```
 class WebServiceFacade {   
           
        public static function makeXMLCall(CD $cd) {   
            CDUpperCase::makeString($cd, "title");   
            CDUpperCase::makeString($cd, "band");   
            CDUpperCase::makeArray($cd, "tracks");   
               
            $xml = CDMakeXML::create($cd);   
               
            return $xml;   
        }   
    } 
```
makeXMLCall 对象接受一个CD对象并返回一个xml文档，前面新建文档的步骤移到这个类中，此时在客户端，之前的4条代码只需要用一条替换：
```
print WebServiceFacade::makeXMLCall($cd);   
```
## 优缺点
优点：
1. 对客户屏蔽子系统组件，减少了客户处理的对象数目并使得子系统使用起来更加容易。通过引入外观模式，客户代码将变得很简单，与之关联的对象也很少。
2. 实现了子系统与客户之间的松耦合关系，这使得子系统的组件变化不会影响到调用它的客户类，只需要调整外观类即可。
3. 降低了大型软件系统中的编译依赖性，并简化了系统在不同平台之间的移植过程，因为编译一个子系统一般不需要编译所有其他的子系统。一个子系统的修改对其他子系统没有任何影响，而且子系统内部变化也不会影响到外观对象。
4. 只是提供了一个访问子系统的统一入口，并不影响用户直接使用子系统类。

缺点：

1. 不能很好地限制客户使用子系统类，如果对客户访问子系统类做太多的限制则减少了可变性和灵活性。
2. 在不引入抽象外观类的情况下，增加新的子系统可能需要修改外观类或客户端的源代码，违背了“开闭原则”。



