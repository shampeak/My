## 目录结构

本系统目录结构如下

```
GracePHP
├──App                  应用系统
│   ├──Cache            缓存目录
│   ├──Config           配置目录
│   ├──Controller       控制器
│   ├──Error            错误反馈
│   ├──Library          第三方库
│   ├──Middleware       中间件
│   ├──Model            模型
│   ├──Views            视图
│   └──Bootstrap.php    应用程序
├─docs                  文档
├─tests                 Unit测试
├─wwwroot               前端发布
├─src                   Compserer
└─vendor                Autoload
```
## autoload

autoload
```
    "autoload":{
        "files": ["src/Helper.php"],
        "psr-4":{
            "Grace\\": "src",
            "App\\": "App"
        }
    }
```
- Grace为系统组件
- App为框架程序


## 信息流
## 类调用
## 模型
## 组件
## 视图
## 数据库对象






