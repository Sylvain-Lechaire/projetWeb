INSERT INTO categories (name) 
VALUES
("Chinese Tank"),
("Man"),
("Super-heavy tank"),
("Lifestyle"),
("Cold War Tank");



INSERT INTO articles (ProductId, chassiNumber, name, imageName, price, description)
VALUES
(1,478557575458965874, "Panzer 68", "product-01.jpg", 15000.00, "char Suisse datant de la guerre froide utilisé de 1971 a 2003"),
(2,478557575587445896, "type 69", "product-02.jpg", 6900.00, "Les Type 69 et Type 79 sont des chars de combat chinois de première génération créés à partir du Type 59 : comme leurs prédécesseurs, ils possèdent un espace entre les deux premières roues."),
(3,478554589675755874, "Maus Panzer", "product-03.jpg", 15000.00, "Panzerkampfwagen VIII Maus was a German World War II super-heavy tank completed in late 1944."),
(4,478545895575765874, "M24 Pershing", "product-04.jpg", 50000.00, "The M26 Pershing is a heavy tank/medium tank of the United States Army.");



INSERT INTO articles_has_categories (Articles_id, Categories_id)
VALUES
(1,1),
(2,2),
(3,3),
(4,4),
(3,1);