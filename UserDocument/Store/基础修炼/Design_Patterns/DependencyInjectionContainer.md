# 依赖注入容器
> 依赖注入（DI）、控制反转（Ioc）、容器(container)


## 背景知识
传统的思路是应用程序用到一个Foo类，就会创建Foo类并调用Foo类的方法，假如这个方法内需要一个Bar类，就会创建Bar类并调用Bar类的方法，而这个方法内需要一个Bim类，就会创建Bim类，接着做些其它工作。

```
    
    class Bim
    {
        public function doSomething()
        {
            echo __METHOD__, '|';
        }
    }
    
    class Bar
    {
        public function doSomething()
        {
            $bim = new Bim();
            $bim->doSomething();
            echo __METHOD__, '|';
        }
    }
    
    class Foo
    {
        public function doSomething()
        {
            $bar = new Bar();
            $bar->doSomething();
            echo __METHOD__;
        }
    }
    
    $foo = new Foo();
    $foo->doSomething(); //Bim::doSomething|Bar::doSomething|Foo::doSomething
```


使用依赖注入的思路是应用程序用到Foo类，Foo类需要Bar类，Bar类需要Bim类，那么先创建Bim类，再创建Bar类并把Bim注入，再创建Foo类，并把Bar类注入，再调用Foo方法，Foo调用Bar方法，接着做些其它工作。

```
    class Bim
    {
        public function doSomething()
        {
            echo __METHOD__, '|';
        }
    }
    
    class Bar
    {
        private $bim;
    
        public function __construct(Bim $bim)
        {
            $this->bim = $bim;
        }
    
        public function doSomething()
        {
            $this->bim->doSomething();
            echo __METHOD__, '|';
        }
    }
    
    class Foo
    {
        private $bar;
    
        public function __construct(Bar $bar)
        {
            $this->bar = $bar;
        }
    
        public function doSomething()
        {
            $this->bar->doSomething();
            echo __METHOD__;
        }
    }
    
    $foo = new Foo(new Bar(new Bim()));
    $foo->doSomething(); // Bim::doSomething|Bar::doSomething|Foo::doSomething
    ```
这就是控制反转模式。依赖关系的控制反转到调用链的起点。这样你可以完全控制依赖关系，通过调整不同的注入对象，来控制程序的行为。例如Foo类用到了memcache，可以在不修改Foo类代码的情况下，改用redis。

使用依赖注入容器后的思路是应用程序需要到Foo类，就从容器内取得Foo类，容器创建Bim类，再创建Bar类并把Bim注入，再创建Foo类，并把Bar注入，应用程序调用Foo方法，Foo调用Bar方法，接着做些其它工作.

## 注入途径：
### 1.construct注入
```
	
<?php
class Book {
   private $db_conn;
 
   public function __construct($db_conn) {
       $this->db_conn = $db_conn;
   }
}
```
但是如果依赖过多，那么在构造方法里必然传入多个参数，三个以上就会使代码变的难以阅读。

### 2.set注入
```
<?php
  $book = new Book();
  $book->setdb($db);
  $book->setprice($price);
  $book->set_author($author);
?>
```
代码很清晰，但是当我们需要注入第四个依赖时，意味着又要增加一行。
### 3. 容器
比较好的解决办法是 建立一个class作为所有依赖关系的container，在这个class中可以存放、创建、获取、查找需要的依赖关系
```
<?php
class Ioc {
   protected $db_conn;
   public static function make_book() {
       $new_book = new Book();
       $new_book->set_db(self::$db_conn);
       //...
       //...
       //其他的依赖注入
       return $new_book;
   }
}
```

此时，如果获取一个book实例，只需要执行$newone = Ioc::makebook();

以上是container的一个具体实例，最好还是不要把具体的某个依赖注入写成方法，采用registry注册，get获取比较好。

### 4.registry注册
```
<?php
class Ioc {
/**
* @var 注册的依赖数组
*/
 
   protected static $registry = array();
 
   /**
    * 添加一个resolve到registry数组中
    * @param  string $name 依赖标识
    * @param  object $resolve 一个匿名函数用来创建实例
    * @return void
    */
   public static function register($name, Closure $resolve)
   {
      static::$registry[$name] = $resolve;
   }
 
   /**
     * 返回一个实例
     * @param  string $name 依赖的标识
     * @return mixed
     */
   public static function resolve($name)
   {
       if ( static::registered($name) )
       {
          $name = static::$registry[$name];
          return $name();
       }
       throw new Exception('Nothing registered with that name, fool.');
   }
   /**
    * 查询某个依赖实例是否存在
    * @param  string $name id
    * @return bool 
    */
   public static function registered($name)
   {
      return array_key_exists($name, static::$registry);
   }
}
```
现在就可以通过如下方式来注册和注入一个依赖

```
<?php
$book = Ioc::registry('book', function(){
$book = new Book;
$book->setdb('...');
$book->setprice('...');
return $book;
});
 
//注入依赖
$book = Ioc::resolve('book');
```