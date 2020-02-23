CREATE TABLE public.login (
   id             SERIAL         NOT NULL    PRIMARY KEY,
   username       VARCHAR(100)   NOT NULL    UNIQUE,
   password       VARCHAR(100)   NOT NULL,
);

CREATE TABLE public.suit (
   id             SERIAL         NOT NULL    PRIMARY KEY,
   name			   VARCHAR(100)   NOT NULL,   UNIQUE
   color          VARCHAR(100)   NOT NULL
);

CREATE TABLE public.gadget (
   id             SERIAL         NOT NULL    PRIMARY KEY,
   name			   VARCHAR(100)   NOT NULL,
   suit_id        INT            NOT NULL    REFERENCES        public.suit(id)
);

ALTER TABLE suit
ADD COLUMN image VARCHAR(500)

ALTER TABLE suit
ADD COLUMN year_created VARCHAR(100)

ALTER TABLE suit
ADD COLUMN info VARCHAR(255)
