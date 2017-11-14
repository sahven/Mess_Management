# DBMS Project
### Vehicle Management System


This is an IOT based vehicle management model, it aims to improve security and convenience, with predictive services.  
Consider every vehicle to be installed with a GPS tracker and a event data recorder which records a wide range of data elements,potentially including whether the brakes were applied and the speed at the time of impact. Now,on receiving such chunks of data, different organisations/authorities can make use of it accordingly for the common benefits. 

Main features of this system are:

* Provision of a better control and regulation over citizen's civic activities, and hence helping in resolution of accidents and violation of traffic rules.
* Adding to the security, as the owner can always track the location of the vehicle.
* Vehicle manufacturing companies can benefit from the generalized data by taking commercial decisions, without the loss of anonymity.
* Government can take actions instantly. Say, in an event of violation of traffic rules, owner details can be easily retrieved through the database just by checking in the vehicle number.
* Helping towards a greener future, manufacturing companies can check the fuel consumption details of different kinds of vehicles and implement necessary steps easily.

# Data required by different organisations as follows:

### Government
###### NHAI and city development
* Common preferances over different routes to the same destinations.
* Average speed, on particular roads.
* Accident prone areas.
* Areas prone to traffic jams.

###### Traffic police and RTO
* Areas prone to traffic jams.
* Vehicle Details, Owner Info.
* Evidence for crime resolution.

###### Misc.
* Average consumption of fuel per kilometer.
* Due date for vehicle registry renewal.


### Owner
* How much the vehicle has travelled so far.
* Idle time.
* Vehicle Details.
* Fuel consumption record.
* Parking Location(Current Location).
* Vehicle registry renewal.
* Average speed and acceleration, monitoring driving habits.


### Vehicle Companies
* Fuel efficiency per type of vehicle.
* Average crashes per type of vehicle, faults in components per type of vehicle.
* Number of Vehicles sold every month, and the highest and lowest selling vehicles.


### Vehicle insurance companies
* Tentative crashes and accident reports of different types of vehicles.
* Insurance status of the consumer, and renewal dates.


### Business
Real time access to location of shipments, and monitoring of transportation.(For Business purposes,vehicle tracking system can improve the quality and pace of outreach can be increased.And, hence,the overall dispatching procedure can be smoothened.Also, having access to real time location of the vehicle can increase the control of the owner on the vehicle and help monitoring.)

### Maintainence Shops / Mechanics
Having data of past issues will enable better service and notifications for regular mainteinance.

# Data IO

### Registration.
Registration is done when the vehicle is sold the details include.

* Car
    * Make/ Model
    * Chasis no.
    * Engine no.
    * Mac address
    * Maintenance history

* Ownership details
    * Name 
    * DOB (Legal purchase of car)
    * Driver's license
    * Phone number
    * Mail
    * address/ address proof.
    * Income proof (In case of loan.)
    * Car Insurance Number.

### User Interaction
These are things that the user can change:
    * Incomplete


### In use Car transmits
* GPS + time
* Engine temp
* Battery
    * temp
    * left
* Fuel
    * refill
    * left
* Unique name
* Brakes activation time ( If hard braking.)
* Event data recorder (black box)

### Modification of details.
In case of change of details, change of parts, transfer of ownership.

* Change Ownership details.
* Update Maintainence details.

### Car service reminders
We'll implement a car service management system which will leverage all the other data we have on the car to provide better serviceby using past history, also send reminders for upcoming services.

### Predicting traffic
Third parties (Google maps), Goverment agencies (NHAI) could use our data to model traffic data better. We'll have to provide them the right data, respecting the driver's privacy.

### 
