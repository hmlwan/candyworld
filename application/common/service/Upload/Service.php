<?php
namespace app\common\service\Upload;

class Service
{
    public $name;

    protected $validate = [
        'ext' => 'jpg,png,gif,jpeg'
    ];

    public $fileName;

    public $error;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 单文件上传
     */
    public function upload()
    {
        $file = request()->file($this->name);
        $info = $file->move('uploads');
        if ($info) {

            
            return $this->fileName = '/uploads/' . $info->getSaveName();;

        } else {

            $this->error = $file->getError();
            return false;
        }
    }

    /**
     * 多文件上传
     */
    public function uploadAll()
    {

    }
}