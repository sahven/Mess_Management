# Problem Statement.
We provide a solution to the vowes of the people in IITI.
We make a PWA, change the payment method to SmartCards.

# PWA features.
* Tell you about upcoming meals.
    * Meal details 
    * Meal price
    * Meal rating
* Show meal history.
    * All the meals the user has had
    * And how much it cost him.

* PaymentDevice
    * Will use the smartcard to make a transaciton.

* Billing
    * We will provide the relevant transactions to the caterer.
    * He will deduct money monthly.


# In order

User registers, provides 
* Name, 
* Date of birth, 
* Year
* Course ( Btech/Mtech/Phd/Guests), 
* Subscription (Monthly/Daily/Semester)
* Email ID ( Multiple )
* Phone numbers

## What the user wants.
Everytime a user goes to eat.
They walk in Press their card against the reader.
The computer atomagically deducts the right amount, it check the following.
    * If the person has already had the meal today.
    * Their balance is enough
    * What Subscirption are they on.

#### App Features
* Balance
* Menu
* How much you have paid.
* How much you 
* How many people in the mess.

They get a notification on the app whenever they make a transaction.
They are allowed to rate and review a meal. 
So we can show the average rating for meals, before they leave for it.
Stats and analytics on the app too.


### What the caterers want.
Every transaction with the respective caterer.
Who when What.

 <!--

### Diner,Caterer are entities for obvious reasons.
### Subscriptions table is a weak entity set that depends on the caterer. It is the subscriptions that the caterer provides.	
### A bit clarification on what s_id would exactly mean.
	The s_id would uniquely determine the plan and the corresponding caterer.
### Meals table contains the food items served.Since, it doesnt depend on the caterer it is an entity set.
### A diner reviews a meal.So, reviews table is an reln. set between diner and meal.
### Votes correspond to the reviews written,and hence, are weak entity sets.
### Menu is an entity set.
### P

 -->
### Dashboard ?

