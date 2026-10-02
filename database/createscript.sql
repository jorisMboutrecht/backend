-- Step  : 01
-- ******************************************************************
-- Doel : Maak een nieuwe database aan : Rollercoaster_2509B
-- ******************************************************************
-- versie   datum       Auteur                  omschrijving
-- ******   *****       ******                  ************
-- 01       02-10-2026  Joris van der mispel    Database met  de hoogte
--                                              achtbanen van Europa
-- ******************************************************************

-- verwijder database Rollercoaster_2509B
DROP DATABASE IF EXISTS Rollercoaster_2509B;

-- Maak database Rollercoaster_2509B
CREATE DATABASE Rollercoaster_2509B;

-- Gebruik  de database Rollercoaster_2509B
use Rollercoaster_2509B;

-- step : 02
-- ******************************************************************
-- Doel : Maak een nieuwe tabel aan in Rollercoaster_2509B
-- ******************************************************************
-- versie   datum       Auteur                  omschrijving
-- ******   *****       ******                  ************
-- 01       02-10-2026  Joris van der mispel    Database met  de hoogte
--                                              achtbanen van Europa
-- ******************************************************************

-- Maak de tabel Rollercoaster

CREATE TABLE Rollercoaster
(
     id                     SMALLINT        UNSIGNED        NOT NULL        AUTO_INCREMENT      COMMENT 'Primary key of the Rollercoaster table'
    ,RollerCoaster          VARCHAR(50)                     NOT NULL                            COMMENT 'Name of Rollorcoaster'
    ,AmusementPark          VARCHAR(50)                     NOT NULL                            COMMENT 'Name of the AmusementPark'
    ,Country                VARCHAR(50)                     NOT NULL                            COMMENT 'Country where it is located'
    ,Topspeed               SMALLINT                        NOT NULL                            COMMENT 'Topspeed in km/h'
    ,Height                 TINYINT                         NOT NULL                            COMMENT 'Height in meters'
    ,YearsOfConstruction    DATE                            NOT NULL                            COMMENT 'Year of construction'
    ,IsActive               bit                             NOT NULL        DEFAULT 1           COMMENT 'Indecates wheter the rollercaster is Active(1)'
    ,Remark                 VARCHAR(255)                        NULL        DEFAULT NULL        COMMENT 'Optional remark or additional information'
    ,DateCreate             DATETIME(6)                     NOT NULL        DEFAULT NOW(6)      COMMENT 'Timestamp when the record was created'
    ,DateChanged            DATETIME(6)                     NOT NULL        DEFAULT NOW(6)      COMMENT 'Timestamp of the latest update'
    ,CONSTRAINT             PK_Rollercoaster_Id             PRIMARY KEY (id)
) ENGINE=InnoDB;

-- step : 03
-- ******************************************************************
-- Doel : Vul de tabel Rollercaoster met data
-- ******************************************************************
-- versie   datum       Auteur                  omschrijving
-- ******   *****       ******                  ************
-- 01       02-10-2026  Joris van der mispel    Vul tabel hoogste
--                                              achtbanen van Europa
-- ******************************************************************

-- Vul de tabel

INSERT INTO Rollercoaster
(
     Rollercoaster
    ,AmusementPark
    ,Country
    ,Topspeed
    ,Height
    ,YearsOfConstruction
)
VALUES
 ('Kinga Ka', 'Six Flags Great Adventure', 'Verenigd Koningrijk', 206, 207, '2005-10-21')
,('Red Force', 'Ferrari Land', 'Spanje', 180, 112, '2017-04-07')
,('Hyperion', 'Energylandia', 'Polen', 142, 77, '2018-08-14')
,('Shambhala', 'PortAventura', 'Spanje', 134, 76, '2012-04-07')
,('Schwur des Karnen', 'Hanse Park', 'Duitsland', 127, 73, '2017-02-25');