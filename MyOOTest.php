<?php
//多型
class MyOOTest {
    function m1() {
        echo 'MyOOTest:m1()<br>';
    }
}
class Sub1 extends MyOOTest{
    function m1(){
        echo 'Sub1:m1()<br>';
    }
    function m2(){
        echo 'Sub1:m2()<br>';
    }
}
class Sub2 extends MyOOTest{
    function m1(){
        echo 'Sub2:m1()<br>';
    }
    function m2(){
        echo 'Sub2:m2()<br>';
    }
}
abstract class Test1 {
    //抽象類別
    function m1(){echo 'Test1:m1()<br>';}
    abstract function m2();
}
class Test11 extends Test1 {
    function m2() {
        //ToDo: Implement
        echo 'Test11:m1()<br>';
    }
}
class Test12 extends Test1 {
    function m2(){
        echo 'Test12:m1()<br>';
    }
}