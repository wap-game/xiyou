<?php
/**
 * PHP操作ini文件类
 * @author Wigiesen - 心语难诉
 * @version v1.0
 * @link https://xinyu19.com
 * 注：ini文件由节、键、值组成，为了方便
 * 类中的[节]我们叫做[分类]，[键=>值]称为[子项]
 */

class iniFile
{
    public $iniFilePath;
    public $iniFileHandle;

    function __construct($iniFilePath)
    {
        $this->iniFilePath = $iniFilePath;
        # 读入 .ini 文件到句柄中
        if (file_exists($this->iniFilePath)) {
            $this->iniFileHandle = parse_ini_file($this->iniFilePath, true);


            /*
        if (empty($this->iniFileHandle)) die($this->iniFilePath . ' file is null1');
        }else{
        die($this->iniFilePath . ' file cannot be opened');
        }

        */

            if (empty($this->iniFileHandle)) {
                unlink($this->iniFilePath); //删除文件
            }
            if (empty($this->iniFileHandle)) ;
        } else {
            die($this->iniFilePath . ' file cannot be opened');
        }


    }

    //增加分类
    public function addCategory($category_name, array $item = [])
    {
        if (!isset($this->iniFileHandle[$category_name])) {
            $this->iniFileHandle[$category_name] = [];
        } else {
            if (!empty($item)) {
                foreach ($item as $key => $value) {
                    $this->iniFileHandle[$category_name][$key] = $value;
                }
            }
        }
        $this->save();
    }

    //增加子项[可在添加分类的同时添加子项]
    public function addItem($category_name, array $item)
    {
        foreach ($item as $key => $value) {
            $this->iniFileHandle[$category_name][$key] = $value;
        }
        $this->save();
    }

    //获取所有
    public function getAll()
    {
        return $this->iniFileHandle;
    }

    //获取单个分类
    public function getCategory($category_name)
    {
        return $this->iniFileHandle[$category_name];
    }

    //获取子项值
    public function getItem($category_name, $item_name)
    {
        # 如果是获取多个子项,则循环读取放入新变量
        if (is_array($item_name)) {
            $arr = array();
            foreach ($item_name as $value) {
                $arr[$value] = $this->iniFileHandle[$category_name][$value];
            }
            return $arr;
        } else {
            return $this->iniFileHandle[$category_name][$item_name];
        }
    }

    //更改ini
    public function updItem($category_name, array $item)
    {
        foreach ($item as $key => $value) {
            $this->iniFileHandle[$category_name][$key] = $value;
        }
        $this->save();
    }

    //删除分类
    public function delCategory($category_name)
    {
        unset($this->iniFileHandle[$category_name]);
        $this->save();
    }

    //删除子项
    public function delItem($category_name, $item_name)
    {
        unset($this->iniFileHandle[$category_name][$item_name]);
        $this->save();
    }

    //保存.ini文件
    public function save()
    {
        $string = '';
        # 循环句柄，拼接成ini格式的字符串
        foreach ($this->iniFileHandle as $key => $value) {
            $string .= '[' . $key . ']' . "\r\n";
            foreach ($value as $k => $v) {
                $string .= "$k = $v\r\n";
            }
        }
        $iniFileHandle = fopen($this->iniFilePath, 'w+');
        $isfwrite = fwrite($iniFileHandle, $string);
        if ($isfwrite) {
            fclose($iniFileHandle);
            return true;
        } else {
            fclose($iniFileHandle);
            return false;
        }
    }
}

?>