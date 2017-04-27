# Sergio Scattone - Test "Retrieve a user profile "

This git it's a the resolve of an exercise for Aivo Company

There are 3 posible WS request of facebook information.

Every request it should be have a token header in way to use the Facebook API Graph.

# The first way to call it is as follow: 

  GET /profile/facebook/123456

And the response will be: Id, First Name and Last Name of a facebook profile.

# The second way to call it is as follow: 

  GET /profile/facebookFull/123456

And the response will be: Id, First Name, Last Name, Birthday, Gender, Email, Cover image, and Website of a Facebook Profile.

# The third way to call it is as follow: 

  GET /profile/facebookContext/123456

And the response will be: Context, Education and Work of a Facebook Profile.

# Unit Test

There not are unit test in this code because to test it it's necessary to have the actually token of the Facebook Profile.