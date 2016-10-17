## 分层结构和调用
> 层次划分

- Server
- Application
- Model

---

### 目录结构

```
Application
   |---Config           //配置,主要用于server对象 application和model不访问这个目录
   |---traits           //部件
   |---Unit             //单元测试 可以拷贝到wwwroot目录中执行和查看
   |---Application      //application地址
   |---Model
```

