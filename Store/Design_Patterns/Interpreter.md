# 解释器
> Interpreter
## 参考网址
[link1](http://holyrain1314.blog.163.com/blog/static/10011413520121125104525736/)
## 概念
构造一个可以用于创建脚本化应用的迷你语言解释器

解释器设计模式用于分析一个实体的关键元素，并且针对每个元素都提供自己的解释或者相应的动作


## UML类图

![](http://i.imgur.com/E7IMcwo.jpg)

- Myobject:处理需要被解释的内容，持有私有字符串content，这个字符串存储需要被解释的内容
- storeContent()方法接受一个名为content的参数，对处理内容进行预解释，内容存在MyObject中
- 随后调用storeContent()方法创建MyInterpreter实例，InterpreterKeys()方法接受参数content并获取该参数的内部内容，MyInterpreter对参数进行解释并将结果返回Myobject。接下来，applyInterpretation()方法替换内部的内容变量。
- 最后，Myobject方法通过getcontent()方法获得解释后的内容。


## 实例

为了顺应时代潮流，某web站点决定合并CD购买和社会网络。web上的用户可以自行配置页面，可以添加自己喜欢的CD标题：
user类：
```
 class User {      
        protected $_username = "";   
        public function __construct($username) {   
            $this->_username = $username;   
        }  
        public function getProfilePage() {   
            $profile  = "<h2>I like Never Again ! </h2>";   
            $profile .= "I love all of their songs. My favorite CD: <br />";   
            $profile .= "{{myCD.getTitle}}!!";   
               
            return $profile;   
        }   
    }   

```
这里的{myCD.getTitle}表示稍后需要解释的模板语言。

为了用户检索CD信息，需要创建一个名为userCD的新对象：
```
class userCD {   
        public function setUser(User $user) {   
            $this->_user = $user;   
        }   
        public function getTitle() {   //此处模拟
            $title = "Waste of a Rib";   
            return $title;   
        }   
    }   

```
setuser()方法接受用户对象并且存储在内部。getTitle()方法会从CD中检索和返回标题。

解释器类：
```
class userCDInterpreter {   //非终结符表达式
           
        protected $_user = NULL;   
        public function setUser(User $user) {   
            $this->_user = $user;   
        }   
        public function getInterpreted() {   
            $profile = $this->_user->getProfilePage();   
               
            if (preg_match_all('/\{\{myCD\.(.*?)\}\}/', $profile, $triggers, PREG_SET_ORDER)) {   
                $replacements = array();   
                foreach ($triggers as $trigger) {   
                    $replacements[] = $trigger[1];   
                }   
                $replacements = array_unique($replacements);   
                $myCD = new userCD();   
                $myCD->setUser($this->_user);   
                foreach ($replacements as $replacement) {   
                    $profile = str_replace("{{myCD.{$replacement}}}", call_user_func(array($myCD, $replacement)), $profile);   
                }   
            }   
            return $profile;   
        }   
    }   
```
在这里，userCDInterpreter类包含setUser方法，接受一个User对象并存储在内部。此外还包括一个getInterpreted（）的公共函数。
- 该函数可以从User对象中获取内部存储的配置文件，通过解析配置文件找到可解释的关键字，如果发现后会构造一个替换函数。
- 接下来创建一个基于userCD对象的新CD对象，创建后User实例会被传入内部。
- 最后所有替换都被遍历，根据属于userCD实例的$replacements变量的内容而命名的方法会被调用，该方法的输出用于替换被解释文件中的占位符。完成解释后会返回配置文件。

客户端：
```
    $username = "aaron";   
    $user = new User($username);   
    $interpreter = new userCDInterpreter();   
    $interpreter->setUser($user);   
       
    print "<h1>{$username}'s Profile</h1>";   
    print $interpreter->getInterpreted();   
?> 

结果：
aaron's Profile

```

## 优缺点
解释器是一个简单的语法分析工具，它最显著的优点就是扩展性，修改语法规则只需要修改相应的非终结符就可以了，若扩展语法，只需要增加非终结符类就可以了。

但是，解释器模式会引起类的膨胀，每个语法都需要产生一个非终结符表达式，语法规则比较复杂时，就可能产生大量的类文件，为维护带来非常多的麻烦。同时，由于采用递归调用方法，每个非终结符表达式只关心与自己相关的表达式，每个表达式需要知道最终的结果，必须通过递归方式，无论是面向对象的语言还是面向过程的语言，递归都是一个不推荐的方式。由于使用了大量的循环和递归，效率是一个不容忽视的问题。特别是用于解释一个解析复杂、冗长的语法时，效率是难以忍受的。

