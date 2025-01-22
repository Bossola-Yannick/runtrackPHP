SELECT salle.nom AS 'Biggest Room', MAX(salle.capacite), etage.nom 
FROM salle 
INNER JOIN etage ON salle.id_etage = etage.id;