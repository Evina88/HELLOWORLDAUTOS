Use a PHP Server extension on VS Code to see the results.


Notes from ''Learn Object-Oriented Programming with PHP'' course by Coursera Project Network

Commit: Vehicle class


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

ENCAPSULATION

~ Encapsulation means that the code that manipulates the properties is all in one place and is one of the pillars of object oriented programming.

~ In a class, apart from properties, we can also have functions that manipulate them. 
                        
They are called METHODS and we can decide whether the outside world has access to them or not.



~ Constructor

The constructor is a special function that is called, when objects are instantiated, with two underscores and the word construct.

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


Commit: class Truck (with the extra property $engine)

INHERITANCE


~ Inheritance is another pillar of OOP. It allows us to create new blueprints of objects, based on existing objects. 

~ Ancestor and descendant relationship is also called a base-class and derived class relationship.

	To inherit everything we use the word extends.
	In order to use the constructor of the base-class inside the constructor of the descendant class,
 	we use this notation: the name of the object, then two colons and the name of the method that we want to call.
  
 	ex. 
	  	class Truck extends Vehicle {
	  		function __construct($make, ..., $engine) {
        			Vehicle::__construct($make, $model, $year, $mileage, $price, $image);
	   		}
		 }
~ Create property $engine for Truck 
	
 	// declare it inside the class
	 	ex. var $engine;
	
 	// initialize it in the constructor
  		ex. $this->engine = $engine;

    // it is already passed as an argument to the Truck constructor above

~ In the front-end, we check if this property exists and if so, we display an additional span with the info of the engine.

 	// if (property_exists($vehicle, "engine"))

Commit: abstract class Vehicle

~ When an object or class is abstract, it cannot be instantiated and used and therefore it doesn't have a constructor. 

~ You have to inherit from it and define your own behavior.

~ You cannot have more than one ancestors.

Commit: Interface and Methods

~ Interface is basically a binding contract or specification. If you implement aN interface, you have to implement whatever is specified in there.

~ Interface doesn't have the actual code. It just specifies what the parameters and the name of the functions are.

~ Define an interface with the keyword interface and follow the same convention as classes (capitalized).

	// inside it we define the function that must be implemented.

	ex. 
 		interface FormattedAccess{
			function getFormattedMileage();
  		}; 
    
~ To implement it to a class, use the keyword implements and the name of the interface.	

 	// Inside the class write the function and it's code
	
 	ex.
  		
		function getFormattedMileage() {
     			return number_format($this->mileage, 0);
    		}

~ In the front-end, we are asisigning the method to a string, inside the loop of $vehicles.
	
 	ex.    $mileage = $vehicle->getFormattedMileage();

~ ABSTRACTION (pillar of OOP)

It could be possible we didn't know how the function exactly works, 
(it could be at a different file, for example) 
but we know what it does.


Commit: Polymorphism


~ POLYMORPHISM (final pillar of OOP)
The ability to override base-class behavior inside a derived class.
Just define the same function, using the same name and parameters, and change the code to tailor your needs.



