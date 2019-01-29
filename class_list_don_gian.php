<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    class ArrayList{
        public $arrayList;
        public function Arraylist($arr = ' '){
            if(is_array($arr)==true){
                $this->arrayList = $arr;
            }else{
                $this->arrayList = array();
            }
        }
        public function add($obj){          //them phan tu vao cuoi danh sach.
            array_push($this->arrayList,$obj);
        }
        public function clear(){            //xoa  cac phan tu khoi danh sach.
            $this->arrayList = array();
        }
        // Tra ve phan tu tai vi tri da duoc chi dinh trong danh sach nay.
        public function get($index){
            if($this->isInteger($index) && $index < $this->size()){
                return $this->arrayList[$index];
            }else{
                die('ERROR in ArrayList.get');
            }
        }
        // kiem tra xem neu danh sach nay khong co phan tu nao.
        public function isEmpty(){
            if(count($this->arrayList) == 0){
                return true;
            }else{
                return false;
            }
        }
        //loai bo phan tu o vi tri da chi dinh trong danh sach nay.
        public function remove($index){
            if($this->isInteger($index)){
                $newArrayList = array();
                for($i=0; $i<$this->size(); $i++){
                    if($index !=$i) $newArrayList[] = $this->get($i);
                    $this->arrayList = $newArrayList;
                }
            }else{
                die("ERROR in ArrayList.remove <br> Integer value required");
            }
        }
        // tra ve so phan tu trong danh sach nay.
        public function size(){
            return count($this->arrayList);
        }
        // Tra ve mot mang chua tat ca cac phan  tu trong danh sach nay theo thu tu.
        public function toArray(){
            return $this->arrayList;
        }
        // Tra ve true neu tham so chua mot gia tri so nguyen
        public function isInteger($tocheck){
            return preg_match("/^[0-9]+$/", $tocheck);
        }
    }
?>
</body>
</html>