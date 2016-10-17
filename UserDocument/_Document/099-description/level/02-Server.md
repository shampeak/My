## Server系统服务层
> 处于整个系统的最底层,拥有很高的优先级,可以在整个系统中被调用,被依赖的范围不限制;


### 概述

系统服务层,主要是把一些底层的服务对象用依赖注入的模式进行封装,可以通过接口函数直接调用

### 依赖关系

1. 被依赖的范围不限制
2. 依赖范围限制为
    - Helper
    - Package
    - 系统组件
    - 系统常量
    - GracePack


3. 禁止调用其他的application / model / 非底层函数 / 外部常量和变量

### 文档入口

     Document/Server

### 测试用例

    Unit/Server.php

### Api

```
$res = \Application\Server::getInstance()->Config();            // 底层配置 -> Config/Config.php
$res = \Application\Server::getInstance()->ApplicationConfig(); // 获取application配置  ->Config/Application.php
$res = \Application\Server::getInstance();                      // 单例
$res = \Application\Server::getInstance()->make('db');          // db对象
$res = \Application\Server::getInstance()->obList();            // 对象列表
$res = \Application\Server::getInstance()->make('erwewer');     // 空对象
```