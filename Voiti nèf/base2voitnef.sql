

CREATE DATABASE IF NOT EXISTS voiti_nef
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE voiti_nef;

DROP TABLE IF EXISTS voitures;
CREATE TABLE voitures (
  id            INT AUTO_INCREMENT PRIMARY KEY,
  marque        VARCHAR(50)  NOT NULL,
  modele        VARCHAR(50)  NOT NULL,
  annee         INT          NOT NULL,
  cylindree     VARCHAR(20)  NOT NULL,
  puissance     VARCHAR(20)  NOT NULL,
  carburant     VARCHAR(20)  NOT NULL,
  prix          DECIMAL(10,2) NOT NULL,
  image         VARCHAR(100) NOT NULL,
  alt           VARCHAR(100) NOT NULL,
  date_ajout    TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO voitures (marque, modele, annee, cylindree, puissance, carburant, prix, image, alt) VALUES
('Audi',       'A3',   2023, '2.0L',        '150 ch', 'Diesel',   35000.00, 'audi_a3.png',     'Audi A3 2023'),
('Citroën',    'C3',   2023, '1.2L',        '110 ch', 'Essence',  19500.00, 'citroen_c3.png',  'Citroën C3 2023'),
('Volkswagen', 'Polo', 2023, '1.0L',        '95 ch',  'Essence',  22000.00, 'vw_polo-.png',    'Volkswagen Polo 2023'),
('Fiat',       '500',  2023, '1.0L Hybrid', '70 ch',  'Hybride',  18000.00, 'fiat_500.png',    'Fiat 500 2023');
