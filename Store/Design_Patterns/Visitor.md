# 访问者模式
> Visitor


## 参考链接
[link1](http://www.tuicool.com/articles/zIJ7Vb)
[link2](http://blog.csdn.net/wmsjlihuan/article/details/20288359)
## 概念
在对象树的所有节点上应用操作

访问者设计模式构造了包含某个算法的截然不同的对象，在父对象以标准方式使用这些对象时就会将该算法应用于父对象。

## UML
![](http://i.imgur.com/FEl0Qa6.png)

- MyObject：被访问类，是一个基类，拥有acceptVisitor()的公共方法，该方法接受Visitor参数。在内部，accept()根据传递的visitor参数对象调用公共方法visit()。
- MyVisitor类是这个UML图中的访问者，所有访问者必须有公共方法visit()，该方法接受MyObject()类的一个实例，visit()方法可以调用其他逻辑，例如受保护方法dosomething()；这是访问类的特有部分。
 
## 实例

电商网站的客户可能有企业客户还有个人用户。现在我们需要分析一下每个客户的购买偏好。

因为实际中不可能只有2种客户，可能更多，所以我们不想把具体的实现封装在具体的元素对象中，如果我要添加一个通用的功能，把具体功能封装在对象中，太不便于管理了。 
 
更好的方法是用访问者模式对企业客户和个人客户的请求做不同处理。 

客户抽象接口

```
abstract class Customer {  
    protected $customerId;  //客户ID
    protected $customerName;  //客户姓名
    public abstract function accept( ServiceRequestVisitor $visitor );  //接受访问者的访问 
}  
```

继承抽象接口的具体元素：企业客户 
  
```
class EnterpriseCustomer extends Customer {  
    /** 
     *接受访问者 
     *@param $visitor Servicerequestvisitor 
     */  
    public function accept( ServiceRequestVisitor $visitor ) {  
        $visitor->visitEnerpriseCustomer($this);  
    }   
}  
```


继承抽象接口的具体元素：个人客户 

``` 
class PersonalCustomer extends Customer {  
    /** 
     *接受访问者 
     */  
    public function accept( ServiceRequestVisitor $visitor ) {  
        $visitor->visitPersonalCustomer($this);  
    }  
} 
```

访问者接口 
 
```
interface Visitor {  
  
    public function visitEnerpriseCustomer( EnterpriseCustomer $ec );  //访问企业客户
 
    public function visitPersonalCustomer( PersonalCustomer $pc );//访问个人客户  
}  
```

具体的访问者 对服务提出请求 
 
```
class ServiceRequestVisitor implements Visitor {  
  
    public function visitEnerpriseCustomer( EnterpriseCustomer $ec ) {  
        echo $ec->name.'企业提出服务请求。</br>';  
    }  
  
    public function visitPersonalCustomer( PersonalCustomer $pc ) {  
       echo '客户'.$pc->name.'提出请求。</br>';   
    }  
}  
```


对象结构 存储要访问的对象 

```
class ObjectStructure {  
   private $obj = array();   //存储客户对象 
  
   public function addElement( $ele ) {  //向对象结构中添加对象元素 
      array_push($this->obj, $ele);   
   }  
  
   public function handleRequest( Visitor $visitor ) {  
       //处理请求  遍历对象结构中的元素，接受访问  
       foreach( $this->obj as $ele ) {  
            $ele->accept( $visitor );  
       }   
   }  
}  
```

测试
```
header('Content-Type: text/html; charset=utf-8');  
//对象结构  
$os = new ObjectStructure();  
  
//添加元素  
$ele1 = new EnterpriseCustomer();  
$ele1->name = 'ABC集团';  
$os->addElement( $ele1 );  
  
$ele2 = new EnterpriseCustomer();  
$ele2->name = 'DEF集团';  
$os->addElement( $ele2 );  
  
$ele3 = new PersonalCustomer();  
$ele3->name = '张三';  
$os->addElement( $ele3 );  
  
//客户提出服务请求  
$serviceVisitor = new ServiceRequestVisitor();  
$os->handleRequest( $serviceVisitor );  
```
## 适用性

- 访问者模式多用在聚集类型多样的情况下。在普通的形式下必须判断每个元素是属于什么类型然后进行相应的操作，从而诞生出冗长的条件转移语句。而访问者模式则可以比较好的解决这个问题。对每个元素统一调用$element->accept($vistor)即可。
 -  访问者模式多用于被访问的类结构比较稳定的情况下，即不会随便添加子类。访问者模式允许被访问结构添加新的方法。


## 优缺点
### 优点

- 访问者模式使得增加新的操作变得很容易。使用访问者模式可以在不用修改具体元素类的情况下增加新的操作。它主要是通过元素类的accept方法来接受一个新的visitor对象来实现的。如果一些操作依赖于一个复杂的结构对象的话，那么一般而言，增加新的操作会很复杂。而使用访问者模式，增加新的操作就意味着增加一个新的访问者类，因此，变得很容易。
- 访问者模式将有关的行为集中到一个访问者对象中，而不是分散到一个个的节点类中。
- 访问者模式可以跨过几个类的等级结构访问属于不同的等级结构的成员类。迭代子只能访问属于同一个类型等级结构的成员对象，而不能访问属于不同等级结构的对象。访问者模式可以做到这一点。
- 积累状态。每一个单独的访问者对象都集中了相关的行为，从而也就可以在访问的过程中将执行操作的状态积累在自己内部，而不是分散到很多的节点对象中。这是有益于系统维护的优点。

### 缺点

- 增加新的节点类变得很困难。每增加一个新的节点都意味着要在抽象访问者角色中增加一个新的抽象操作，并在每一个具体访问者类中增加相应的具体操作。
- 破坏封装。访问者模式要求访问者对象访问并调用每一个节点对象的操作，这隐含了一个对所有节点对象的要求：它们必须暴露一些自己的操作和内部状态。不然，访问者的访问就变得没有意义。由于访问者对象自己会积累访问操作所需的状态，从而使这些状态不再存储在节点对象中，这也是破坏封装的。
