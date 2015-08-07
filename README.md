#MbString
a tools class support multibyte string

## Functions

### rtrim

删除字符串右侧的指定字符列表

`string rtrim(string $str, mixed $words, string $encoding = 'utf8')`

#### 参数

- $str

    待处理的字符串
    
    
- $words

    要删除的字符串列表，可以为字符串，也可以传递数组，数组的每个值是一个（宽）字符

- $encoding 

    字符编码，默认：utf8

#### 返回值

经过过滤后的字符串
