-- create the database
CREATE database asa;

-- Create the quotes table for the home page
CREATE TABLE quotes(
    Id INT(4) NOT NULL AUTO_INCREMENT,
   quote VARCHAR(1000) NOT NULL, PRIMARY KEY(ID)
);

-- Insert values into the quotes table
INSERT INTO quotes(quote) VALUES("As an alum of the African Student Association, I can confidently say that being part of this organization was not just a means of cultural exploration, but a platform for lifelong friendships and personal growth. The ASA provided a space for us to celebrate our diverse backgrounds and to embrace the unique perspectives that we each brought to the table. Through the ASA, I not only learned about the rich history and traditions of my fellow African brothers and sisters, but also gained valuable leadership skills and a deeper understanding of the importance of community and collaboration");
INSERT INTO quotes(quote) VALUES("As a member of the African Student Association, I have found a home away from home on campus.  Through this community, I have been able to celebrate my heritage, connect with fellow Africans, and learn about the diverse cultures that make up the continent. Being part of this association has not only enriched my college experience but has also empowered me to become a leader and advocate for the African diaspora.");
INSERT INTO quotes(quote) VALUES("As a member of this community, I am constantly inspired by the African Student Association's dedication to promoting African culture and empowering its members. Their passion for education and advocacy is trulyinfectious, and it's clear that they're making a positive impact on both campus and beyond. I feel fortunate to have such a vibrant and committed group of young leaders in our midst, and I look forward to seeing all the great things they will accomplish in the future.");
INSERT INTO quotes(quote) VALUES("As an alum of the African Student Association, I can say with confidence that this organization is more than just a club - it's a movement. Through our events, our outreach, and our advocacy, we are working to create a better future for Africa and its people. We are building bridges between different communities, celebrating our shared humanity, and fighting for justice and equality. And it all starts with the community we have built within the African Student Association - a community that is welcoming, inclusive, and committed to empowering its members to be the change they wish to see in the world.");
INSERT INTO quotes(quote) VALUES("The African Student Association is more than just a club, it's a family. We support each other through thick and thin and strive to create a welcoming and inclusive community for all African students.");
INSERT INTO quotes(quote) VALUES("Joining the African Student Association has been one of the best decisions I've made since coming to college. Through this organization, I have found a home away from home, a place where I can celebrate my African heritage and connect with other students who share my background. But it's more than that - the African Student Association is a place of learning, of growth, of empowerment. Here, I have been able to develop my leadership skills, to engage in meaningful conversations about social justice and advocacy, and to explore the rich diversity of cultures that make up the African continent. I am grateful to be a part of this community and excited to see where our collective efforts will take us in the future.");
INSERT INTO quotes(quote) VALUES("The African Student Association is a force for positive change on our campus and in our community. Whether it's through cultural events, social justice advocacy, or academic support, we are always working towards a better future for ourselves and our fellow Africans.");
INSERT INTO quotes(quote) VALUES("As a member of the African Student Association, I feel a deep sense of pride in my heritage and a commitment to uplifting and empowering my fellow Africans. This organization has given me a platform to make a real difference and to be a voice for those who are often unheard.");
INSERT INTO quotes(quote) VALUES("The African Student Association is a place where diversity is celebrated, where ideas are exchanged, and where students are encouraged to be their authentic selves. Through this organization, I have been able to connect with other African students who share my experiences and struggles, to learn about different cultures and traditions, and to challenge my own assumptions and biases. But it's not just about personal growth - the African Student Association is also a place of collective action, where we work together to make a real impact on our campus and in our community. I am proud to be a member of this vibrant and passionate community, and excited to see where our collective efforts will take us in the future.");
INSERT INTO quotes(quote) VALUES("Being part of the African Student Association is not just about celebrating our heritage, but also about creating a better future for Africa and its people. Through our collective efforts, we can make a real impact on the continent and beyond.");

-- Create the facts table for the fun facts page
CREATE TABLE facts(
    Id INT(4) NOT NULL AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    firstfact VARCHAR(1000) NOT NULL,
    secondfact VARCHAR(1000), PRIMARY KEY(ID)
);

-- Insert values into the facts table
INSERT INTO facts(title, firstfact, secondfact) VALUES ("Africa is the hottest continent in the world.", "Africa is known for having a very warm climate and is considered the hottest continent in the world. The Sahara is the world's largest desert with temperatures often exceeding 100°F (40°C) with 60% of the land being dry and covered by desert.", "Interestingly, Africa also has the extreme opposite, with the coldest temperature recorded in Ifrane, Morocco being as low as -11°F (-23.9°C). This contrast highlights the diversity of climates across the continent, showcasing the many different countries that make up Africa.");
INSERT INTO facts(title, firstfact) VALUES ("The richest man ever is African", "Mansa Musa, also known as Musa I of Mali, is widely regarded as one of the richest person in history and he was the tenth emperor of the Mali Empire. With an accumulation of wealth that's been described as unimaginable Mansa Musa's ricjes make him the richest person ever, surpassing all other billionaires in history");
INSERT INTO facts(title, firstfact, secondfact) VALUES ("Africa is the most multilingual continent in the world", "There are more than 2000 recognised languages in Africa with at least 3000 ethnic groups with each of them having different dialects.  Different groups of people moved around and traded with each other, which helped create new langauges and dialects", "One of the reasons Africa is the most multilingual continent is the world is because people in Africa have lived there for a very long time, over 7 million years, and have had more time to develop languaged that people elsewhere in the world.");
INSERT INTO facts(title, firstfact) VALUES ("Nigeria has the highest number of twins born in the world", "Nigeria is a large African country that has gained a reputation as \"The Land of Twins,\" thanks to its unusually high rate of twin births. According to the BBC, West Africa has four times more twin births than any other region in the world, and the town of Igbo-Ora in Nigeria is particularly well-known for its high number of twins. Recent statistics suggest that around 50 sets of twins are born for every 1,000 births in this town, making it a fascinating place to study the phenomenon of twin births.");

-- Create the images table for the gallery page
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- To insert the images into the 'images' table
-- 1. Run the upload.php page in the browser
-- 2. Upload the images with the name "gallery_image" in the images folder in this project
-- 3. There should be about 19 images in the table
-- 4. After uploading the images to the database the gallery page should work just fine