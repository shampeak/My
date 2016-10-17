## Application中间应用层
> 仅仅高于server层，低于Model层;

### 概述

中间应用层,常用成熟的模型进行更底层封装提高代码的复用；

### 依赖关系

1. 被依赖 不允许被Server依赖
2. 依赖范围限制为
    - Application
    - Server
        - Helper
        - Package
        - 系统组件
        - 系统常量
        - GracePack

3. 禁止调用高于其分层的接口和数据

### 文档入口

     Document/Application

### 测试用例

    Unit/Application.php

### Api

```
$res = \Application\Application::getInstance();                     //单例生成
$res = \Application\Application::getInstance()->obList();           //对象列表
$res = \Application\Application::getInstance()->make('test');       //生成对象
$res = \Application\Application::getInstance()->make('asdfasdf');   //空对象
```