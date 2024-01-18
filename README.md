Learn Object-Oriented Programming with PHP by Coursera Project Network

1st commit: Create class Vehicle


~ A class is basically a blueprint of what specifically an object should be. 

    ex. class Vehicle; 


~ In Object Oriented Programming, a class needs to be instantiated before it is used. 
    How? By defining a new variable = to the new instance of this object. 
    
    // You will need to use the 'new' keyword.
    
    ex. vehicle1 = new Vehicle;

  
~ Objects have properties, which are basically variables, that belong to an instance of an object. 
     
    // Inside a class you do have to use var and a $, when you define a property. 
    
     ex. var $make;
      


~ Object names are capitalized by convention, so when you see a capitalized name is either an object or an interface.


~ To access the properties of an Object, use arrow notation. 
    
    ex. $vehicle1->make; 
    // Since the line starts with a $, we don't need a second $ at make.)

~ In a class, apart from properties, we can also have functions that manipulate them. 
                        
They are called METHODS and we can decide whether the outside world has access to them or not.



~ Encapsulation means that the code that manipulates the properties is all in one place.

~ Constructor is a special function that is called, when objects are instantiated, with two underscores and the word construct.

    It is a good place to put your initialization code, code that has to be runned, before each object is created.

    ex. function __construct();


~ We pass arguments to function __construct

    ex. function __construct($make, $model...);

~ Inside the function body, we initialize our own properties with what the user passes to us.
    We need another special keyword called this. 
    'this' basically refers to the particular instance of the object that is using it. Not the class.
    
    ex. 
        $this->make = $make; 
	    $this->model = $model;

    // From now on when we create an object we need to pass these parameters to the constructor during the instantiation.



