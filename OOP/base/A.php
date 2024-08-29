<?php


/**
 * Description of A
 *
 * @author oleksandr
 */
class A {
    /*
     *  константи до php 7.1 могли бути тільки публічними
        константи можна перевизначати в підкласах                  
        належать класу тп. як статичні
     */
   
    protected const TEST = "Class A";
    
    public function getTest() {
        
        var_dump(self::TEST);// в цьому випадку використовуэться раннє зв'язування 
    }
    
    public function getTest2() {
        
        var_dump(static::TEST);// в цьому пізнє статичне зв'язування. static вказує на використання змінної з того класу з якого воно викликається
        
    }
}
