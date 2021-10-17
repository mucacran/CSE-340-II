INSERT INTO clients
(clientFirstname, clientLastname, clientEmail, clientPassword, clientLevel, comment)
VALUES
('Tony', 'Stark','tony@starkent.com','Iam1romM@n',1,'I am the real Ironman');

/**/
UPDATE clients SET clientLevel = 3 WHERE clients.clientId = 2;

/**/
UPDATE
    inventory
SET
    invDescription = REPLACE(invDescription,'spacious interior','small interior')
WHERE
    invId = 12 

/**/
SELECT invModel                                       FROM inventory INNER JOIN carclassification ON inventory.classificationId=carclassification.classificationId WHERE inventory.classificationId = 1
SELECT inventory.invModel, inventory.classificationId FROM inventory INNER JOIN carclassification ON inventory.classificationId=carclassification.classificationId WHERE inventory.classificationId = 1 

    /*Esto es el ejemplo de la profesora*/
    SELECT
        i.invModel, c.classificationName
    FROM
        inventory i
    INNER JOIN
        carclassification c ON i.classificationID = c.classificationId
    WHERE
        i.classificationId = 1;



/**/
DELETE FROM inventory WHERE inventory.invId = 1;

/**/
UPDATE
    inventory
SET
    invImage = concat('/phpmotors',invImage),
invThumbnail=concat('/phpmotors',invThumbnail);