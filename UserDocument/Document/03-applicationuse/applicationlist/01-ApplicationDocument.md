## Application\Document
>文档解析和处理 指定一个根路径,按照约定模式生成相对应的文档!

### 依赖关系

```
Array
(
    [Application::Application\Application\Document] => Array
        (
            [0] => Server::Parsedown
        )

)
```

### 文档目录结构

```

Document
    |---book                    //book节点
        |---node1               //node节点
                |---01-index.md //内容1
                |---02-node1.md //内容2
                |---03-node2.md //内容3
                |---04-node3.md //内容4
        |---node2               //node栏目
        |---index.json          //book节点的描述
    |---book2
    |---book3
```

### 文档的约定

- 文档第一行会被解析为标题
- 文档第二行会被解析为描述
- 文件名约定
```
    文件名 01-list.md
01  用于文档排序
list用于标识
md  为扩展名
```

### 测试用例

    Unit/Document.php

### 发布

>把测试用例拷贝到发布目录,直接访问即可


