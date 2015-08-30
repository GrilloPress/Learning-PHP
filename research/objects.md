# Objects and Classes

## Object-Oriented What Now?

You may have heard of the term "Object-Oriented Programming" (OOP).

This is a rather mystical phrase, or one that appears to be at first encounter, to describe a way of writing code and applications.

OOP is essentially a way of designing and thinking about your code. It is not the only way, nor may it always be "The one true way". But it is successful 
a way of thinking that has produced a lot of great software and can help a developer create repeatable blocks of code that within an application can 
reduce replication, but also means that any code in one project is easier to replicate in another only with a few tweaks.

> These repeatiable patterns of OOP are called patterns. Essentially similar ways of solving problems. Once you adopt OOP you can learn OOP patterns
> which function as a toolkit of solutions you can carry around with you. If this is a lot to take in, don't worry. 
> You can deal with this stuff later on in your career as you get more confident. It will happen. Keep on trucking.

An object in OOP is just that. An object. A vase, a person, a truck etc. Not the concept or blueprint followed to create a vase (the vase-i-ness, or qualities that make something a vase)
but the actual vase itself. An instance of a vase.

Actual Object | Concept/blueprint
------------- | -------------
Red Vase 1 from 1991    | Vase
Red Vase 2 from 1992  | Vase

So, we have the vase concept/blueprint. Our list of things that make something a vase, and the actual physical thing, which is the vase object.

In OOP we don't deal with physical vases, but we do build both the concept/blueprints that make something a vase, and then "virtual" instances of our vases.

Confusing? It is a touch isn't it.

It is probably worth going through another example.

Let's say we have a blueprint of a person. We could set some defining features like "brain", "name", "skin", "feelings", "mouth", "friends", "parents" etc.

If we created several instances of our blueprints we would have several people. Each person, at least in terms of our application, is an object.

So Person1, Person2 etc. all relating to our master blueprint of a person is an object.

This effectively is all OOP is. A blueprint of a thing, and the instances of that blueprint - which are the objects.

I have been using the term "blueprints". But in OOP we call those blueprints of things we create, classes.

> It make be more accurate to say, classes are the way we create those blueprints

So we have a Person Class which defined the features each person we create has. And a bunch of people, which are our objects.

Actual Object | Concept/blueprint
------------- | -------------
Spiderman     | Person
Aunt May      | Person

> #### Things to remember
> Classes are our master blueprints
> Objects are the instances of the Classes
> We may have one Person class, millions of people

Enough theory, let's write a class and see it in action.

To create a class you just write ```class``` and then the name followed by some curly brackets like so:

```php
<?php

class Person {
  
  //Write the code that creates your objects here
  
}
```

Smashing fun.

Naturally the name ```Person``` could be anything of your choosing.

> If you noticed I didn't include the closing PHP tag. This is a safer thing to do in pure PHP files. Read so here[]().

To create a new Person we write the following: ```$andrew = new Person;```

The ```new``` keyword "instantiates" an object. That is, it looks at the class, Person in this case, and creates an object that corresponds to that blueprint.

As our Person class is empty is creates a whole big fat tub of nothing. I know a few people like that but let's create our Person to have a little more about them.

```php
<?php

class Person {
  
  public $ego = "ME ME ME!";
  
}
```

Here we have created a variable inside our class but we had a keyword before it ```public``` which lets us access the variable outside the class.

> There are of course other options to public, like protected and private. We'll get to those soon

How do we access the variables that we have made public?

Assuming we create an instance of the class like so:

```php
$andrew = new Person;
```

we can follow it up with:

```php
echo $andrew->ego;
```

This will print "ME ME ME!".

Our whole file will look something like this:

```php
<?php

class Person {
  
  public $ego = "ME ME ME!";
  
}

$andrew = new Person;
echo $andrew->ego;
```

So what was that ```->``` arrow doing?

In PHP that accesses the value that belongs to the object you are calling. So, the schema is: ```$className->valueInside;```


