## Application\Data
>系统数据永久性缓存

### 依赖关系

```
Array
(
    [Application::Application\Application\Data] => Array
        (
            [0] => Server::Config
        )

)
```
### 测试用例

    Unit/Data.php

### 使用


```
$data = \Application\Application::getInstance()->make('Data');
//$res = $data->set('dts',[1,2,34,54]);
//$res = $data->get('dts');
//D($res);
//$res = $data->key('asdfas')->set('qwer');
//$res = $data->key('asdfas')->get();
//D($res);


```