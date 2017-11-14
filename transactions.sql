
CREATE TABLE transactions(
        CatererID int NOT NULL,
        UserID int NOT NULL,
        Time datetime NOT NULL,
        PlanID int NULL,
        Price real NULL,
        FOREIGN KEY (CatererID) REFERENCES Caterer(CatererID)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
        FOREIGN KEY (UserID) REFERENCES Diner(UserID)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
        PRIMARY KEY (CatererID, Time, UserID)
)

delimiter //
CREATE TRIGGER transaction_values 
BEFORE INSERT  
  ON Transactions 
  FOR EACH ROW
BEGIN

set new.PlanID =
(SELECT 
  Subscribes.PlanID
FROM  
  Subscribes
WHERE 
   Subscribes.CatererID = new.CatererID AND
   Subscribes.UserID = new.UserID) ;


set new.Price =
(SELECT 
  Pricing.Price
FROM 
  Pricing 
WHERE 
  Pricing.CatererID = new.CatererID AND
  Pricing.PlanID = new.PlanID AND
  Pricing.TimingID = (select 
                        TimingID 
                    from 
                        Timing
                    where 
                        Timing.Day=DAYNAME(cast(new.Time as date)) AND
                        Timing.StartTime <= cast(new.Time as time) AND
                        Timing.EndTime >= cast(new.Time as time)
                ));

END //
delimiter ;

        
