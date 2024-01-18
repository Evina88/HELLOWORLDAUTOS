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

