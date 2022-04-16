<?php

class Member{
    //インスタンス変数
    public int $id;
    public string $name;
    public int $age;

    //コンストラクタ
    public function __construct(int $id, string $name, $age){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    //メソッド
    public function getInfo(){
        return $this->id ." ". $this->name. " ". $this->age;
    }
}

$user1 = new Member(0006, "織田信長", 49);
echo $user1->id. "\n";
echo $user1->name. "\n";
echo $user1->age. "\n";
echo $user1->getInfo(). "\n";

$user1->age = 50;
echo $user1->getInfo(). "\n";
