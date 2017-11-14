The Entity Relationship model.

# Entities

### Diner (E)
* Name 
* Date of birth, 
* Year
* Course ( Btech/Mtech/Phd/Guests), 
* Email ID ( Multiple )
* Phone numbers
* User_ID PK

### Plan (E)
* Plan_id
* Plan_name

### Caterer (E)
* Caterer_id
* caterer_name

### Product (E)
* Product_id PK
* Product_name

### Serving (E)
* Serve_id
* Description.
* Rating( composite attribute )

### Timing (E)
* Timing_id
* Day 
* Type_of_meal 


# Relations

### ServedBy ( R :  Serving and caterer)
* Serve_id PK
* Caterer_ID

### ServingContains( R :  Serving and Products)
* Serve_id 
* Product_ID

### Reviews (R :  Diner and Serving)
* Serve_ID
* UserID PK
* Rating
* Time created


### Subscribes (R :  Diner,Plan and Caterer)
* User_ID PK
* Caterer_id PK
* Plan_id


### Menu (R :  Caterer and Timing, Serving)
* Caterer_id
* Timing_id 
* Serve_id

### Pricing (R :  Caterer , Timing and Plan)
* Caterer_id PK
* Plan_id PK
* Timing_id PK
* Price

### Transaction (R :  Diner ,Caterer and Timing)

* UserID PK
* Caterer PK
* Timing_id
* Date and Time (descriptive)
* Location (descriptive)
* Product_id()
* price()

![mess](diagd.png)
