CREATE DATABASE CLUSTERS;
CREATE TABLE INFORMACION_PERSONAL(
    NOMBRE_COMPLETO VARCHAR(50) NOT NULL,
    TELEFONO INT(9) NOT NULL,
    EMAIL VARCHAR(20) NOT NULL,
    MENSAJE TEXT(150),
    CONSTRAINT PK_INFO_PER PRIMARY KEY (EMAIL)
)