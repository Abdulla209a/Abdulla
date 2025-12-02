<?php
class A {
  public static function hey() {
    echo "jonibekkkk!";
  }
}

class B {
  public function message() {
    A::hey();
  }
}

$hi = new B();
echo $hi -> message();
?>


