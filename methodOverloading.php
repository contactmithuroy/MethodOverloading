<html>
<head>
    <meta http-equiv="refresh" content="3"> 
     <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
<h3>
<?php
 class MotorCycle{
     private $parameters;
     function __construct($displacement, $capacity, $mileage){
         $this->parameters = [];
         $this->parameters['displacement'] = $displacement;
         $this->parameters['capacity'] = $capacity;
         $this->parameters['mileage'] = $mileage;
     }
    //  ======================================================
     function __isset($name){ // isset magic mathod
         if(!isset($this->parameters[$name])){
             echo "{$name} is not found.";
             echo "<br>";
             return false;
         }
         return true;

     }
    //  =============================================
     function __unset($name){ // unset magic mathod
        print_r($this->parameters); // unset befor delete
        unset($this->parameters[$name]);
        print_r($this->parameters);// unse [paremeters] after delete
     }
    //  ================================================
     function __get($name){ // get magic mathod
         return $this->parameters[$name];
     }
    //  =================================================
     function __set($name, $value){ // set magic mathod
         $this->parameters[$name] = $value;
     } 
 }
// 00000000000000000000000000000000000000000000000000000000000
$pulsar = new MotorCycle('150cc', '16ltr', '40kmph');
echo $pulsar->displacement; //get
echo "<br>";
// ======================================
$pulsar->capacity = '20ltr'; // set
echo "<br>";
echo $pulsar->capacity; //get
echo "<br>";
// ==================================
if(isset($pulsar->tiresize)){ // go to isset magic mathod
    echo  "found";
    echo "<br>";
}
else {
    echo "not found";
    echo "<br>";
}
echo "<br>";
// --------------unset function---------
unset($pulsar->mileage); // go to unset magic mathod

echo "<br>";
?>
</h3>
</body>
</html>
