SELECT salle.nom , etage.nom 
FROM salle
INNER JOIN etage ON salle.id_etage = etage.id;