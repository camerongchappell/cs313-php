CREATE TABLE public.user (
   id             SERIAL         NOT NULL    PRIMARY KEY,
   username       VARCHAR(100)   NOT NULL    UNIQUE,
   password       VARCHAR(100)   NOT NULL,
   display_name   VARCHAR(100)   NOT NULL
);

CREATE TABLE public.suit (
   id             SERIAL         NOT NULL    PRIMARY KEY,
   name			  VARCHAR(100)   NOT NULL    UNIQUE,
   color          VARCHAR(100)   NOT NULL
);

CREATE TABLE public.gadget (
   id             SERIAL         NOT NULL    PRIMARY KEY,
   name			  VARCHAR(100)   NOT NULL    UNIQUE,
   suit_id        INT            NOT NULL    REFERENCES        public.suit(id)
);

INSERT INTO public.user (username, password, display_name)
VALUES ('camchap1', 'student', 'Cameron Chappell');

INSERT INTO public.suit (name, color)
VALUES ('Advanced Suit', 'Red, Blue, White');

INSERT INTO public.gadget (name, suit_id)
VALUES ('Web Shooters', '1');

UPDATE suit
SET year_created = '2018'
WHERE id = '1';

DELETE FROM suit
WHERE name = 'Advanced Suit';

ALTER TABLE suit
ADD COLUMN info VARCHAR(255)

ALTER TABLE gadget
DROP CONSTRAINT gadget_name_key;

UPDATE suit
SET info = E'Created for the PlayStation 4 exclusive, Marvel\'s Spider-Man.'
WHERE id = '1';