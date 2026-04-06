-- =========================================
-- 1. CREAR BASE DE DATOS
-- =========================================

CREATE DATABASE db_ef1
    OWNER mauricio
    ENCODING 'UTF8'
    LC_COLLATE 'en_US.utf8'
    LC_CTYPE 'en_US.utf8'
    TABLESPACE pg_default
    CONNECTION LIMIT -1;

-- =========================================
-- 2. CONECTARSE A LA BASE DE DATOS
-- (solo funciona en psql, no en pgAdmin)
-- =========================================

\connect db_ef1;

-- =========================================
-- 3. TABLA USERS (ROL NUMÉRICO)
-- =========================================

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(250),
    apellido VARCHAR(250),
    correo VARCHAR(250),
    password VARCHAR(255),
    language VARCHAR(10) DEFAULT 'es',

    -- ROLES:
    -- 1 = admin
    -- 2 = user (default)
    rol SMALLINT DEFAULT 2,

    estado VARCHAR(20) DEFAULT 'activo',
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =========================================
-- 4. TABLA MONEDAS
-- =========================================

CREATE TABLE monedas (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    codigo VARCHAR(10) NOT NULL,
    simbolo VARCHAR(10) NOT NULL,
    pais VARCHAR(100),
    tasa_cambio NUMERIC(10,4) DEFAULT 1,
    activa BOOLEAN DEFAULT TRUE,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);