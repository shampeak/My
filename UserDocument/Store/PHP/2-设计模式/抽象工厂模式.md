## 抽象工厂
> 抽象工厂

## 参考网址
[link1](http://blog.csdn.net/phenixsoul/article/details/8493764)

[link2](http://blog.csdn.net/zhaoxuejie/article/details/7087689)

## 概念
抽象工厂模式是对工厂模式的抽象，通俗来说，就是把工厂模式的结构分离出来成为能独立运行的个体。

抽象工厂模式提供一个创建一系统相关或相互依赖对象的接口，而无需指定它们具体的类


## 主要角色
- 抽象工厂(Abstract Factory)角色：它声明一个创建抽象产品对象的接口。通常以接口或抽象类实现，所有的具体工厂类必须实现这个接口或继承这个类。
- 具体工厂(Concrete Factory)角色：实现创建产品对象的操作。客户端直接调用这个角色创建产品的实例。这个角色包含有选择合适的产品对象的逻辑。通常使用具体类实现。
- 抽象产品(Abstract Product)角色：声明一类产品的接口。它是工厂方法模式所创建的对象的父类，或它们共同拥有的接口。
- 具体产品(Concrete Product)角色：实现抽象产品角色所定义的接口，定义一个将被相应的具体工厂创建的产品对象。其内部包含了应用程序的业务逻辑。
## 优缺点
抽象工厂模式的优点:
1. 分离了具体的类
2. 使增加或替换产品族变得容易
3. 有利于产品的一致性

## 实例

现在有一个汽车工厂，它生产小汽车和巴士车，小汽车和巴士车都是由引擎、车身和轮子组成的。

在工厂模式中，我们把小汽车和巴士车作为汽车族群中的两个类别，生产引擎、车身和轮子为生产汽车的固定结构，如下图所示：

![image](http://img.my.csdn.net/uploads/201301/14/1358152948_4013.jpg)

在抽象工厂模式中，把生产引擎、车身和轮子分别抽象出来，如下图所示：

![image](http://img.my.csdn.net/uploads/201301/14/1358153201_9825.jpg)

实际部署为：


```

    //生产引擎的标准  
    interface engineNorms{  
        function engine();  
    }  
      
    class carEngine implements engineNorms{  
      
        public function engine(){  
            return '汽车引擎';  
        }  
      
    }  
      
    class busEngine implements engineNorms{  
          
        public function engine(){  
            return '巴士车引擎';  
        }  
          
    }  
      
    //生产车身的标准  
    interface bodyNorms{  
        function body();  
    }  
      
    class carBody implements bodyNorms{  
      
        public function body(){  
            return '汽车车身';  
        }  
      
    }  
      
    class busBody implements bodyNorms{  
          
        public function body(){  
            return '巴士车车身';  
        }  
          
    }  
      
    //生产车轮的标准  
    interface whellNorms{  
        function whell();  
    }  
      
    class carWhell implements whellNorms{  
      
        public function whell(){  
            return '汽车轮子';  
        }  
      
    }  
      
    class busWhell implements whellNorms{  
          
        public function whell(){  
            return '巴士车轮子';  
        }  
          
    }  

```
再继续对工厂进行抽象，抽象出汽车工厂和巴士车工厂，并且让各工厂与各组件相关联，如图：

![image](http://img.my.csdn.net/uploads/201301/14/1358153411_2623.jpg)


实际部署为：

```

    //生产引擎的标准  
    interface engineNorms{  
        function engine();  
    }  
      
    class carEngine implements engineNorms{  
      
        public function engine(){  
            return '汽车引擎';  
        }  
      
    }  
      
    class busEngine implements engineNorms{  
          
        public function engine(){  
            return '巴士车引擎';  
        }  
          
    }  
      
    //生产车身的标准  
    interface bodyNorms{  
        function body();  
    }  
      
    class carBody implements bodyNorms{  
      
        public function body(){  
            return '汽车车身';  
        }  
      
    }  
      
    class busBody implements bodyNorms{  
          
        public function body(){  
            return '巴士车车身';  
        }  
          
    }  
      
    //生产车轮的标准  
    interface whellNorms{  
        function whell();  
    }  
      
    class carWhell implements whellNorms{  
      
        public function whell(){  
            return '汽车轮子';  
        }  
      
    }  
      
    class busWhell implements whellNorms{  
          
        public function whell(){  
            return '巴士车轮子';  
        }  
          
    }  
      
    //工厂标准  
    interface factory{  
        static public function getInstance($type);  
    }  
      
    //汽车工厂  
    class carFactory implements factory{  
          
        static public function getInstance($type){  
            $instance='';  
            switch($type){  
                case 'engine':  
                    $instance=new carEngine();  
                    break;  
                case 'body':  
                    $instance=new carBody();  
                    break;  
                case 'whell':  
                    $instance=new carWhell();  
                    break;    
                default:  
                    throw new Exception('汽车工厂无法生产这种产品');  
            }  
            return $instance;  
        }  
          
    }  
      
    //巴士车工厂  
    class busFactory implements factory{  
          
        static public function getInstance($type){  
            $instance='';  
            switch($type){  
                case 'engine':  
                    $instance=new busEngine();  
                    break;  
                case 'body':  
                    $instance=new busBody();  
                    break;  
                case 'whell':  
                    $instance=new busWhell();  
                    break;  
                default:  
                    throw new Exception('巴士车工厂无法生产这种产品');  
            }  
            return $instance;  
        }  
          
    }  
      
    $car['engine']=carFactory::getInstance('engine')->engine();  
    $car['body']=carFactory::getInstance('body')->body();  
    $car['whell']=carFactory::getInstance('whell')->whell();  
    print_r($car);  
      
    $bus['engine']=busFactory::getInstance('engine')->engine();  
    $bus['body']=busFactory::getInstance('body')->body();  
    $bus['whell']=busFactory::getInstance('whell')->whell();  
    print_r($bus);  
```

抽象工厂模式将工厂模式进行抽象，可以使得抽象出来的新结构更加的灵活。例如，若生产车身需要一个喷漆的动作，在工厂模式中，我们需要对整体结构进行更改，而抽象工厂中，只需要对生产车身进行更改就ok了。

抽象工厂模式同样具有工厂模式对结构要求高的缺点，整体结构的扩展或精简将变得更加的烦杂，所以使用抽象工厂模式时，对等级结构的划分是非常重要的。

