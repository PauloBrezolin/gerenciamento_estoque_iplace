--
-- PostgreSQL database dump
--

-- Dumped from database version 15.3
-- Dumped by pg_dump version 15.3

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: produtos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.produtos (
    id integer NOT NULL,
    nome character varying(100) NOT NULL,
    descricao text,
    preco numeric(10,2) NOT NULL,
    quantidade integer
);


ALTER TABLE public.produtos OWNER TO postgres;

--
-- Name: produtos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.produtos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.produtos_id_seq OWNER TO postgres;

--
-- Name: produtos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.produtos_id_seq OWNED BY public.produtos.id;


--
-- Name: produtos id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.produtos ALTER COLUMN id SET DEFAULT nextval('public.produtos_id_seq'::regclass);


--
-- Data for Name: produtos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.produtos (id, nome, descricao, preco, quantidade) FROM stdin;
4	Ipad Air	Apple iPad Air 256GB Prata Tela 10,9”	2899.90	5
5	MacBook Pro	Apple MacBook Pro 13” 512GB Cinza-espacial	8499.90	3
6	Iphone 12	Apple iPhone 12 128GB Preto Tela 6,1” 12MP	3799.90	20
7	Iphone SE	Apple iPhone SE 64GB Branco Tela 4,7” 12MP	2499.90	10
8	Apple Watch Series 6	Apple Watch Series 6 GPS 40mm Alumínio Cinza-espacial	2999.90	15
9	MacBook Air	Apple MacBook Air M1 256GB Ouro Tela 13,3”	6999.90	7
2	Iphone 13	Apple iPhone 13 128GB Meia-noite Tela 6,1” 12MP	4299.90	13
11	AirPods 3	Apple AirPods (3ª geração) com estojo de recarga MagSafe	1799.90	18
12	AirPods 3	Apple AirPods (3ª geração) com estojo de recarga MagSafe	1799.90	18
3	Iphone 13 Pro	Apple iPhone 13 Pro 256GB Ouro Tela 6,1” 12MP	5299.90	7
\.


--
-- Name: produtos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.produtos_id_seq', 12, true);


--
-- Name: produtos produtos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.produtos
    ADD CONSTRAINT produtos_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

