
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

CREATE TRIGGER transaction_values 
BEFORE INSERT  
  ON transactions 
  FOR EACH ROW

BEGIN

SELECT 
  Subscribes.PlanID into New.PlanID
FROM  
  Subscribes
WHERE 
   Subscribes.CatererID = New.CatererID AND
   Subscribes.UserID = New.UserID 


SELECT 
  Pricing.Price into New.Price 
FROM 
  Pricing 
WHERE 
  Pricing.CatererID = New.CatererID AND
  Pricing.PlanID = New.PlanID AND
  Pricing.TimingID = (select 
                        TimingID 
                    from 
                        Timing
                    where 
                        TimingID.Day=DAYNAME(cast(NEW.Time as date)) AND
                        TimingID.StartTime >= cast(NEW.Time as time) AND
                        TimingID.EndTime <= cast(NEW.Time as time) AND
                )

END

        
