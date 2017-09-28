--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: artykul; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE artykul (
    id integer NOT NULL,
    createat timestamp without time zone DEFAULT now(),
    lastmodify timestamp without time zone DEFAULT now(),
    temat character varying(64),
    tresc text
);


ALTER TABLE public.artykul OWNER TO postgres;

--
-- Name: artykul_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE artykul_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.artykul_id_seq OWNER TO postgres;

--
-- Name: artykul_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE artykul_id_seq OWNED BY artykul.id;


--
-- Name: pytanie; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pytanie (
    id integer NOT NULL,
    createat timestamp without time zone DEFAULT now(),
    lastmodify timestamp without time zone DEFAULT now(),
    imie character varying(50) NOT NULL,
    email character varying(50) NOT NULL,
    telefon integer NOT NULL,
    temat character varying(50) NOT NULL,
    wiadomosc character varying(256) NOT NULL,
    ipaddress integer
);


ALTER TABLE public.pytanie OWNER TO postgres;

--
-- Name: pytanie_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pytanie_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pytanie_id_seq OWNER TO postgres;

--
-- Name: pytanie_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE pytanie_id_seq OWNED BY pytanie.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY artykul ALTER COLUMN id SET DEFAULT nextval('artykul_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pytanie ALTER COLUMN id SET DEFAULT nextval('pytanie_id_seq'::regclass);


--
-- Data for Name: artykul; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY artykul (id, createat, lastmodify, temat, tresc) FROM stdin;
1	2017-07-27 12:37:23.492248	2017-07-27 12:37:23.492248	onas	<div id="bodyblock" class="row">\r\n<p>Firma <strong>ARTIFICIUM</strong> zajmuje się od kilku lat profesjonalnym montażem mebli na terenie Tr&oacute;jmiasta (Gdańsk, Sopot, Gdynia) oraz okolic w promieniu 150 kilometr&oacute;w.</p>\r\n<p>W naszej ofercie znajdują się zar&oacute;wno <strong>meble kuchenne o stylowym i nowoczesnym wyglądzie</strong> oraz takie, kt&oacute;re są oparte na własnych lub wykonanych przez klienta projektach.</p>\r\n<p>Ostatnie lata wykonywaliśmy bezpośrednio prace zlecane przez IKEA, ale obecnie chcąc uniknąć biurokracji oraz presji firmy pośredniczącej w przekazywaniu zleceń sami zaczęliśmy wykonywać pomiary i ustalamy czas montażu aby uniknąć pośpiechu, kt&oacute;ry ma zły wpływ na jakość wykonanych prac.</p>\r\n<p>W trakcie montażu <strong>jesteśmy elastyczni i otwarci na zmiany</strong> mogące wpłynąć na komfort dalszego użytkowania.</p>\r\n<p><strong>Doradzamy</strong> tak, by uniknąć np. niezabudowanych przestrzeni. Doskonale radzimy sobie z rurami oraz przer&oacute;bkami szafek.</p>\r\n<p><strong>Specjalizujemy się</strong> w projektowaniu i budowie własnych mebli oraz w meblach z IKEA, kt&oacute;re dostosowujemy do indywidualnych potrzeb klient&oacute;w.</p>\r\n<p><strong>Projektujemy</strong> wysokiej jakości zabudowy, szafy oraz garderoby.</p>\r\n<p>W najbliższym czasie na stronie ruszy dział poświęcony projektowaniu i montażu kuchni IKEA i nie tylko. Zawierać będzie porady na co zwr&oacute;cić uwagę przy projektowaniu, czego nie należy robić, jak te rzeczy wyglądają w praktyce, itp.</p>\r\n</div>
4	2017-07-27 12:37:23.492248	2017-07-27 12:37:23.492248	kontakt	<div><strong>Przedsiębiorstwo "ARTIFICIUM" Jan Marszałkowski</strong></div>\r\n<div style="margin-top: 3px;">80-811 Gdańsk, ul. Na Stoku 40A</div>\r\n<div>tel. <strong>505 520 012</strong></div>\r\n<div style="margin-top: 10px;">NIP: 583-213-66-81</div>\r\n<div>REGON: 191074540</div>\r\n<div style="margin-top: 10px;">e-mail: <span style="font-weight: bold;"><a href="mailto:kontakt@montujemymeble.pl">kontakt@montujemymeble.pl</a></span></div>
3	2017-07-27 12:37:23.492248	2017-07-27 12:37:23.492248	linki	<div class="col-md-3">\r\n<div><a href="http://www.aeg-electrolux.pl/index.asp?prodid=&amp;CurrentURL=/index.asp" target="_blank">AEG</a></div>\r\n<div><a href="http://www.alveus.si/index.php?menu_item=PrvaStran&amp;lang_chg=po" target="_blank">ALVEUS</a></div>\r\n<div><a href="http://www.amica.com.pl/" target="_blank">AMICA</a></div>\r\n<div><a href="http://www.akpo.pl/" target="_blank">AKPO</a></div>\r\n<div><a href="http://www.ardo.com.pl/" target="_blank">ARDO</a></div>\r\n<div><a href="http://www.hotpoint-ariston.pl/ha/entryPoint.do" target="_blank">ARISTON</a></div>\r\n<div><a href="http://www.baumatic-agd.pl/" target="_blank">BAUMATIC</a></div>\r\n<div><a href="http://www.beko.com.pl/index.php" target="_blank">BEKO</a></div>\r\n<div><a href="http://www.blomberg.pl/PL/Service/" target="_blank">BLOMBERG</a></div>\r\n<div><a href="http://www.bomann.de/startseite/index.php" target="_blank">BOMANN</a></div>\r\n</div>\r\n<div class="col-md-3">\r\n<div><a href="http://www.bosch-home.pl/" target="_blank">BOSCH</a></div>\r\n<div><a href="http://www.candy.pl/" target="_blank">CANDY</a></div>\r\n<div><a href="http://www.climadiff.com/climadiff/fr/index.php" target="_blank">CLIMADIFF</a></div>\r\n<div><a href="http://www.delonghi.kuchnie.pl/" target="_blank">DeLONGHI</a></div>\r\n<div><a href="http://www.efbe-schott.de/" target="_blank">EFBE</a></div>\r\n<div><a href="http://www.electrolux.pl/" target="_blank">ELECTROLUX</a></div>\r\n<div><a href="http://www.ggv-exquisit.de/" target="_blank">EXQUISIT</a></div>\r\n<div><a href="http://www.franke.pl/" target="_blank">FRANKE</a></div>\r\n<div><a href="http://www.gorenje.pl/" target="_blank">GORENJE</a></div>\r\n<div><a href="http://www.haier.pl/" target="_blank">HAIER</a> </div>\r\n</div>\r\n<div class="col-md-3">\r\n<div><a href="http://www.hoover.pl/" target="_blank">HOOVER</a></div>\r\n<div><a href="http://produkty.ikea.pl/km89/sprzet-agd" target="_blank">IKEA</a></div>\r\n<div><a href="http://www.indesit.pl/" target="_blank">INDESIT</a></div>\r\n<div><a href="http://www.lg.com/pl/sprzet-agd/" target="_blank">LG</a></div>\r\n<div><a href="http://www.liebherr.pl/HG/pl-PL/default_pl-hg.wfw" target="_blank">LIEBHERR</a></div>\r\n<div><a href="http://www.limatec-ag.ch/home/?L=3" target="_blank">LIMATEC</a></div>\r\n<div><a href="http://www.mastercook.pl/" target="_blank">MASTERCOOK</a></div>\r\n<div><a href="http://www.miele.pl/" target="_blank">MIELE</a></div>\r\n<div><a href="http://www.oranier-kuechentechnik.de/de/startseite/" target="_blank">ORANIER</a></div>\r\n<div><a href="http://www.panasonic.eu/whitegoods/" target="_blank">PANASONIC</a></div>\r\n</div>\r\n<div class="col-md-3">\r\n<div><a href="http://www.polar.com.pl/" target="_blank">POLAR</a></div>\r\n<div><a href="http://www.samsung.com/pl/" target="_blank">SAMSUNG</a></div>\r\n<div><a href="http://pl.severin.dimento.com/" target="_blank">SEVERIN</a></div>\r\n<div><a href="http://www.siemens-home.pl/" target="_blank">SIEMENS</a></div>\r\n<div><a href="http://www.teka.com/html/pl/home.php" target="_blank">TEKA</a></div>\r\n<div><a href="http://www.wamslerweb.de/" target="_blank">WAMSLER</a></div>\r\n<div><a href="http://www.whirlpool.pl/" target="_blank">WHIRPOOL</a></div>\r\n<div><a href="http://www.zanussi.pl/" target="_blank">ZANUSSI</a></div>\r\n</div>
2	2017-07-27 12:37:23.492248	2017-07-27 12:37:23.492248	oferta	<div id="bodyblock" class="row">\r\n<p><strong>Profesjonalny montaż mebli</strong> przez ekipę pracującą od kilku lat dla klient&oacute;w IKEA na terenie Tr&oacute;jmiasta (Gdańsk, Sopot, Gdynia) i okolic.</p>\r\n<p>Kuchnie z indywidualnym projektem.</p>\r\n<p><strong>Zabudowa wnęk</strong>, wysokiej jakości <strong>szafy i garderoby</strong> - projektowanie i montaż.</p>\r\n<p><strong>10% tańszy montaż</strong> niż bezpośrednio w IKEA przy zam&oacute;wieniu przez telefon <strong>505 520 012</strong>.</p>\r\n<p>Pomiar, doradztwo, pomoc w zakupach, transport.</p>\r\n<p><strong>Prace niewykonywane przez inne ekipy</strong> np. łączenie blat&oacute;w bez widocznego połączenia, przer&oacute;bki szafek i front&oacute;w.</p>\r\n<p>W razie potrzeby <strong>przer&oacute;bki instalacji wodnej i elektrycznej</strong>, uprawnienia potrzebne do gwarancji AGD.</p>\r\n<p>Kuchnie nietypowe, zdjęcia wykonanych kuchni.</p>\r\n<p>R&oacute;żnego rodzaju <strong>promocje, raty 0%</strong>.</p>\r\n<p>Już teraz zachęcam do zadawania pytań przy pomocy zakładki <a href="../../pytania">Pytania.</a></p>\r\n<p>W sprawie pomiar&oacute;w i montażu zapraszam do działu <a href="../../kontakt">Kontakt.</a></p>\r\n</div>
\.


--
-- Name: artykul_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('artykul_id_seq', 9, true);


--
-- Data for Name: pytanie; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pytanie (id, createat, lastmodify, imie, email, telefon, temat, wiadomosc, ipaddress) FROM stdin;
3	2017-07-15 10:19:28.267466	2017-07-15 10:19:28.267466	ASDSADSasd	sadas@js.pl	333	sadas	sdadas	\N
5	2017-07-15 10:24:11.966278	2017-07-15 10:24:11.966278	sdfsdf	sadas@js.pl	554433	dsffsd	sdsdfd	\N
6	2017-07-15 10:26:12.564057	2017-07-15 10:26:12.564057	ASDSADSasd	sadas@js.pl	199999	sdfds	sfdsfd	\N
7	2017-07-15 10:29:54.109198	2017-07-15 10:29:54.109198	ASDSADSasd	sadas@js.pl	444444	sdfds	sfdsfd	\N
9	2017-07-15 10:30:53.037568	2017-07-15 10:30:53.037568	ASDSADSasd	sadas@js.pl	6666666	sadas	hhbmnmbb	\N
12	2017-07-15 10:38:38.684029	2017-07-15 10:38:38.684029	ASDSADSasd	sadas@js.pl	666666666	jj	hhjg	\N
13	2017-07-23 15:14:07.857362	2017-07-23 15:14:07.857362	ASDSADSasd	sadas@js.pl	222222222	qq	qq	\N
14	2017-07-23 20:23:26.509076	2017-07-23 20:23:26.509076	sxasss	xczxc@wp.pl	665457811	ssss	sssss	\N
15	2017-07-23 20:23:43.684263	2017-07-23 20:23:43.684263	sasasa	aniazarem@gmail.com	222222	ass	sasa	\N
16	2017-07-23 20:27:25.129856	2017-07-23 20:27:25.129856	vffv	sadas@js.pl	231233333	fvf	vfvfvf	\N
17	2017-07-23 20:34:58.116833	2017-07-23 20:34:58.116833	ASDSADSasd	sdffsd@wp.pl	665457811	ddd	ddd	\N
18	2017-07-23 20:37:54.827791	2017-07-23 20:37:54.827791	ASDSADSasd	sdffsd@wp.pl	999999999	ddd	ddd	\N
23	2017-07-23 20:46:19.631537	2017-07-23 20:46:19.631537	ASDSADSasd	sadas@js.pl	231234444	4444	4434rffff	\N
26	2017-07-23 20:47:52.396737	2017-07-23 20:47:52.396737	ASDSADSasd	sadas@js.pl	222222222	4444	4434rffff	\N
\.


--
-- Name: pytanie_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pytanie_id_seq', 26, true);


--
-- Name: artykul_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY artykul
    ADD CONSTRAINT artykul_pkey PRIMARY KEY (id);


--
-- Name: pytanie_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pytanie
    ADD CONSTRAINT pytanie_pkey PRIMARY KEY (id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

