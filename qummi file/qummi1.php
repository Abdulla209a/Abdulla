<?php
class A {
  public static function hey() {
    echo "jonibekkkk!";
  }
}

class B {
  public static function message() {
    A::hey();
  }
}

$hi = new B();
echo $hi -> message();
echo "<br>";
echo A::hey();



?>
