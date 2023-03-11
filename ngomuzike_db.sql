CREATE DATABASE ngomuzike_db


CREATE TABLE perdoruesi (
  id INT NOT NULL PRIMARY KEY IDENTITY(1,1),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(30) NOT NULL,
  email VARCHAR(100) NOT NULL,
  isAdmin INT DEFAULT 0
)

CREATE TABLE kenget (
	s_id INT NOT NULL PRIMARY KEY IDENTITY(1,1),
	songname VARCHAR(100),
	songsinger VARCHAR(100),
	songfile VARCHAR(50),
	songimage VARCHAR(100),
	songpoints INT
)

INSERT INTO kenget (songname, songsinger, songfile, songimage, songpoints)
VALUES ('Fatkeqesi', 'Mozzik', 'Mozzik_Fatkeqësi.mp3', 'fatkeqesi.jpg', 7),
('E kalume', 'Rina', 'Rina_E_Kalume.mp3', 'ekalume.jpg', 3),
('Shkoj', 'Blleki', 'BLLEKI_SHKOJ_Official_Video.mp3', 'shkoj.png', 10),
('Mere', 'Melinda', 'MELINDA_MERE.mp3', 'mere.jpg', 1),
('E pa shpirt', 'Majk', 'Majk_E_Pa_shpirt.mp3', 'epashpirt.jpeg', 0),
('Bjeri', 'Fifi x Blasta', 'Fifi_ft_Blasta_Bjeri.mp3', 'bjeri.jpg', 3),
('Joti', 'Elai', 'ELAI_Joti_Official_Music_Video_.mp3', 'joti.jpg', 4),
('Rebele', 'RZON x Ledri Vula', 'RZON_X_LEDRI_VULA_REBELE_Official_Video_.mp3', 'rebele.jpg', 0),
('Ulu', 'Yll Limani', 'YLL_LIMANI_ULU_prod_by_Fatjon.mp3', 'ulu.jpg', 0),
('Je e vetmja dashuri', 'Getinjo x Ana', 'Getinjo_x_Ana_Kabashi_Je_e_vetmja_dashuri.mp3', 'evetmjadashuri.jpg', 8),
('Malli', 'Bardhi', 'BARDHI_MALLI.mp3', 'malli.jpg', 5),
('Kriminele', 'Yll Limani x Loredana', 'YLL_LIMANI_x_LOREDANA_KRIMINELE_prod_by_Panda.mp3', 'kriminele.jpg', 2)


CREATE TABLE kontakti (
	id INT PRIMARY KEY IDENTITY(1,1),
	name VARCHAR(100),
	email VARCHAR(100),
	message TEXT,
	created_at TIMESTAMP
)