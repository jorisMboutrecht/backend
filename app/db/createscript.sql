-- maak een nieuwe database aan met de naam MVC_Basics_2509AB

DROP DATABASE IF EXISTS `MVC_Basics_2509AB`;

CREATE DATABASE `MVC_Basics_2509AB`;

use `MVC_Basics_2509AB`;


-- maak een nieuw tabel aan met de naam Smartphones

CREATE TABLE Smartphones
(
    Id                       SMALLINT            UNSIGNED        NOT NULL            AUTO_INCREMENT
    ,Merk                    VARCHAR(50)                         NOT NULL
    ,Model                   VARCHAR(50)                         NOT NULL
    ,Prijs                   DECIMAL(6, 2)                       NOT NULL
    ,Geheugen                DECIMAL(4, 0)                       NOT NULL
    ,Besturingssysteem       VARCHAR(25)                         NOT NULL
    ,Schermgrootte           DECIMAL(3, 2)                       NOT NULL
    ,Releasedatum            DATE                                NOT NULL
    ,MegaPixels              DECIMAL(3, 0)                       NOT NULL
    ,IsActief                bit                                 NOT NULL            DEFAULT 1
    ,Opmerking               VARCHAR(255)                            NULL            DEFAULT NULL
    ,DatumAangemaakt         DATETIME(6)                         NOT NULL            DEFAULT NOW(6)
    ,DatumGewijzigd          DATETIME(6)                         NOT NULL            DEFAULT NOW(6)
    ,CONSTRAINT              PK_Smartphones_Id                   PRIMARY KEY         (Id)
) ENGINE=InnoDB;


-- vol de tabel Smartphones met gegevens

INSERT INTO Smartphones
(
     Merk
    ,Model
    ,Prijs
    ,Geheugen
    ,Besturingssysteem
    ,Schermgrootte
    ,Releasedatum
    ,MegaPixels
)
VALUES
('Apple', 'iPhone 16 PRO', 1256.56, 64, 'iOS 18', 6.7, '2025-01-19', 50),
('Samsung', 'Galaxy S25 ULTRA', 1539, 128, 'Android 15', 6.1, '2025-02-01', 200),
('Google', 'Pixel 9 pro', 890, 1024, 'Android 15', 6.3, '2024-12-20', 100),
('Samsung', 'Galaxy A55', 479.00, 128, 'Android 14', 6.6, '2024-03-26', 50),
('Apple', 'iPhone 15', 849.00, 128, 'iOS 17', 6.1, '2023-09-22', 48),
('Xiaomi', 'Redmi Note 13 Pro', 329.99, 256, 'Android 14', 6.67, '2024-01-16', 200),
('Google', 'Pixel 8a', 549.00, 128, 'Android 14', 6.1, '2024-05-14', 64),
('OnePlus', '12R', 699.00, 256, 'Android 14', 6.78, '2024-02-06', 50);


-- maak een nieuw tabel sneakers

CREATE TABLE Sneakers
(
     Id                      SMALLINT            UNSIGNED        NOT NULL            AUTO_INCREMENT
    ,Merk                    VARCHAR(50)                         NOT NULL
    ,Model                   VARCHAR(50)                         NOT NULL
    ,Type                    VARCHAR(25)                         NOT NULL
    ,Prijs                   DECIMAL(6, 2)                       NOT NULL
    ,Materiaal               VARCHAR(50)                         NOT NULL
    ,Releasedatum            DATE                                NOT NULL
    ,Gewicht                 INT                                 NOT NULL
    ,IsActief                bit                                 NOT NULL            DEFAULT 1
    ,Opmerking               VARCHAR(255)                            NULL            DEFAULT NULL
    ,DatumAangemaakt         DATETIME(6)                         NOT NULL            DEFAULT NOW(6)
    ,DatumGewijzigd          DATETIME(6)                         NOT NULL            DEFAULT NOW(6)
    ,CONSTRAINT              PK_Smartphones_Id                   PRIMARY KEY         (Id)
) ENGINE=InnoDB;

INSERT INTO Sneakers
(
     Merk
    ,Model
    ,Type
    ,Prijs
    ,Materiaal
    ,Releasedatum
    ,Gewicht
)
VALUES
('Nike', 'Air Jordan 1', 'Hardloop', 179.99, 'Leer', '1985-04-01', 480),
('Adidas', 'Yeezy Boost 350', 'Basketbal', 230.00, 'Primeknit', '2015-06-06', 360),
('New Balance', '574', 'Dagelijks casual', 89.99, 'Suede', '1988-01-01', 380),
('Trico', 'New Age', 'Casual', 59.95, 'Textiel', '2020-05-15', 320),
('Overlord', 'Tristar 6', 'Hardloop', 74.95, 'Synthetisch', '2018-09-10', 410),
('Nike', 'Air Max 90', 'Dagelijks casual', 149.99, 'Leer', '1990-03-26', 400),
('Puma', 'Suede Classic', 'Casual', 79.95, 'Suede', '1968-01-01', 390),
('Asics', 'Gel-Kayano 31', 'Hardloop', 169.99, 'Mesh', '2024-01-01', 300);

-- maak nieuw tabel Horloges

CREATE TABLE Horloges
(
     Id                      SMALLINT            UNSIGNED        NOT NULL            AUTO_INCREMENT
    ,Merk                    VARCHAR(50)                         NOT NULL
    ,Model                   VARCHAR(50)                         NOT NULL
    ,Prijs                   DECIMAL(6, 0)                       NOT NULL
    ,Gewicht                 INT                                 NOT NULL
    ,Releasedatum            DATE                                NOT NULL
    ,Waterdichtheid          INT                                 NOT NULL
    ,Type                    VARCHAR(25)                         NOT NULL
    ,Materiaal               VARCHAR(50)                         NOT NULL
    ,Uniek_kenmerk           VARCHAR(50)                         NOT NULL
    ,IsActief                bit                                 NOT NULL            DEFAULT 1
    ,Opmerking               VARCHAR(255)                            NULL            DEFAULT NULL
    ,DatumAangemaakt         DATETIME(6)                         NOT NULL            DEFAULT NOW(6)
    ,DatumGewijzigd          DATETIME(6)                         NOT NULL            DEFAULT NOW(6)
    ,CONSTRAINT              PK_Horloges_Id                      PRIMARY KEY         (Id)
) ENGINE=InnoDB;

-- vul de tabel Horloges met data
INSERT INTO Horloges
(
     Merk
    ,Model
    ,Prijs
    ,Materiaal
    ,Gewicht
    ,Releasedatum
    ,Waterdichtheid
    ,Type
    ,Uniek_kenmerk
)VALUES
('Rolex', 'Daytona 126500LN', 19800, 'Staal', 141, '2023-03-01', 100, 'Chronograaf', 'Ceramische lunette'),
('Omega', 'Speedmaster Moonwatch Professional', 8500, 'Staal', 150, '2024-01-15', 50, 'Chronograaf', 'Handmatig uurwerk'),
('Vacheron Constantin', 'Overseas Perpetual Calendar ULTRA-Thin', 98000, 'Rood goud', 120, '2022-09-01', 50, 'Datum', 'Perpetual kalender'),
('Jaeger-LeCoultre', 'Reverso Tribute Duoface', 17000, 'Staal', 75, '2023-06-01', 30, 'Draaikast', 'Draaibare kast');