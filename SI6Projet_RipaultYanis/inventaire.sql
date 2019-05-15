--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.13
-- Dumped by pg_dump version 9.6.13

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: produit; Type: TABLE; Schema: public; Owner: yanisR
--

CREATE TABLE public.produit (
    prd_id integer NOT NULL,
    prd_nom character varying(20),
    prd_qte integer,
    prd_pu numeric(6,2),
    prd_cat character varying(20)
);


ALTER TABLE public.produit OWNER TO "yanisR";

--
-- Name: user1; Type: TABLE; Schema: public; Owner: yanisR
--

CREATE TABLE public.user1 (
    id integer NOT NULL,
    login character varying(20),
    mdp character varying(20)
);


ALTER TABLE public.user1 OWNER TO "yanisR";

--
-- Data for Name: produit; Type: TABLE DATA; Schema: public; Owner: yanisR
--

COPY public.produit (prd_id, prd_nom, prd_qte, prd_pu, prd_cat) FROM stdin;
1	Touklakos	10	110.95	cheval
4	belzebub	1	9000.00	bebe
14	Mandragon	1	150.00	Epees
\.


--
-- Data for Name: user1; Type: TABLE DATA; Schema: public; Owner: yanisR
--

COPY public.user1 (id, login, mdp) FROM stdin;
\.


--
-- Name: produit produit_pkey; Type: CONSTRAINT; Schema: public; Owner: yanisR
--

ALTER TABLE ONLY public.produit
    ADD CONSTRAINT produit_pkey PRIMARY KEY (prd_id);


--
-- Name: user1 user1_pkey; Type: CONSTRAINT; Schema: public; Owner: yanisR
--

ALTER TABLE ONLY public.user1
    ADD CONSTRAINT user1_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

