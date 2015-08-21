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

PHP hasn't always had the feature-set to be truely OOP like Java or Ruby but has grown to better fit the OOP development concept.

An object in OOP is just that. An object with features that track to what we have ourselves defined as the defining features of said object.

Confusing? It is a touch isn't it.

It is probably worth going through an example.

Let's say we have a blueprint of a person. We could set some defining features like "brain", "name", "skin", "feelings", "mouth", "friends", "parents" etc.

If we created several instances of our blueprints we would have several people. Each person, at least in terms of our application, is an object.

So Person1, Person2 etc. all relating to our master blueprint of a person.

This effectively is all OOP is. A blueprint of a thing, and the instances of that blueprint - which are the objects.

I have been using the term "blueprints". But in OOP we call those blueprints of models, classes.

So we have a Person Class which defined the features each person we create has. And a bunch of people, which are our objects.

> ####Things to remember
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
