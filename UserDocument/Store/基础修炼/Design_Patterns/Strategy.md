# 策略模式(Strategy Pattern)
> PHP 设计模式学习

## 参考文档
[参考1 ](http://www.cnblogs.com/yangjinjin/archive/2013/01/31/2887498.html)

[参考2](http://blog.csdn.net/jhq0113/article/details/45771863)

## 定义
策略模式适用于将一组算法移入到一个独立的类型中。例如，在大学课程中，可以有演讲和研讨会，收费方法有可能是固定收费或者按照课程收费。策略模式可以移走费用计算相关的代码，简化Lesson类型。

策略模式是对象的行为模式，用意是对一组算法的封装。动态的选择需要的算法并使用。

策略模式指的是程序中涉及决策控制的一种模式。策略模式功能非常强大，因为这个设计模式本身的核心思想就是面向对象编程的多形性思想。
## 优点理解

将课程类Lesson类中计算费用的部分调用负责计算收费的CostStrategy类的方法，这就是所谓的“委托”，Lesson类不再负责收费，通过传递不同的CostStrategy类对象，可以产生高度灵活性的代码。

这个结构的效果之一就是可以关注类的职责。


## 适用场景
1. 多个类只区别在表现行为不同，可以使用Strategy模式，在运行时动态选择具体要执行的行为。
2.  需要在不同情况下使用不同的策略(算法)，或者策略还可能在未来用其它方式来实现。
3. 对客户隐藏具体策略(算法)的实现细节，彼此完全独立。
4. 客户端必须知道所有的策略类，并自行决定使用哪一个策略类，策略模式只适用于客户端知道所有的算法或行为的情况。
5.  策略模式造成很多的策略类，每个具体策略类都会产生一个新类。
   
## 角色分析

策略模式的三个角色：

- 抽象策略角色（RotateItem）：策略类，通常由一个接口或者抽象类实现。
- 具体策略角色（ItemX）：包装了相关的算法和行为。
- 环境角色（ItemContext）：持有一个策略类的引用，最终给客户端调用。）

实现步骤：

1．定义抽象角色类（定义好各个实现的共同抽象方法）

2．定义具体策略类（具体实现父类的共同方法）

3．定义环境角色类（私有化申明抽象角色变量，重载构造方法，执行抽象方法）

## 优点
1.  策略模式提供了管理相关的算法族的办法。
  策略类的等级结构定义了一个算法或行为族。
             恰当使用继承可以把公共的代码转移到父类里面，从而避免重复的代码。
2.  策略模式提供了可以替换继承关系的办法。
   继承可以处理多种算法或行为。
           如果不是用策略模式，那么使用算法或行为的环境类就可能会有一些子类，每一个子类提供一个不同的算法或行为。但是，这样一来算法或行为的使用者就和算法或行为本身混在一起。决定使用哪一种算法或采取哪一种行为的逻辑就和算法或行为的逻辑混合在一起，从而不可能再独立演化。继承使得动态改变算法或行为变得不可能。

3. 使用策略模式可以避免使用多重条件转移语句。
         多重转移语句不易维护，它把采取哪一种算法或采取哪一种行为的逻辑与算法或行为的逻辑混合在一起，统统列在一个多重转移语句里面，比使用继承的办法还要原始和落后。

## 缺点：

1. 客户端必须知道所有的策略类，并自行决定使用哪一个策略类。

    这就意味着客户端必须理解这些算法的区别，以便适时选择恰当的算法类。换言之，策略模式只适用于客户端知道所有的算法或行为的情况。

2. 策略模式造成很多的策略类，每个具体策略类都会产生一个新类。
有时候可以通过把依赖于环境的状态保存到客户端里面，而将策略类设计成可共享的，这样策略类实例可以被不同客户端使用。换言之，可以使用享元模式来减少对象的数量。