## Application对象
> 比Server高一级,比Model低一级,用于存放一些更稳定可复用的代码

### 配置

> Config\Application.php

### 配置原码

```
<?php
//只有在配置文件中注册过的菜可以通过接口被调用
return [
    'Test'      => 'Application\Application\Test',
    'Document'  => 'Application\Application\Document',
];
```

### 调用接口

```
//查看有哪些对象
$res = \Application\Application::getInstance()->obList();

//返回依赖关系
$depends = \Application\Application::getInstance()->make('Document')->Depends();

//生成对象
$document = \Application\Application::getInstance()->make('Document');
//运行对象
$document->run("../Document/");
```
### 依赖关系的格式

```
    public function Depends()
    {
        return [
            'Application::Document'=>[
                'Server::Parsedown'
            ]
        ];
    }
```

### 约定

1. 被依赖 不允许被Server依赖
2. 依赖范围限制为
    - Application
    - Server
        - Helper
        - Package
        - 系统组件
        - 系统常量
        - GracePack


