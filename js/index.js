const quotes = [
    {
        text: "\"As an alum of the African Student Association, I can confidently say that being part of this organization was not just a means of cultural exploration, but a platform for lifelong friendships and personal growth. The ASA provided a space for us to celebrate our diverse backgrounds and to embrace  the unique perspectives that we each brought to the table. Through the ASA, I not only learned about the rich history and traditions of my fellow African brothers and sisters, but also gained valuable leadership skills and a deeper understanding of the importance of community and collaboration\"",
        source: "- Alumni"
    },

    {
        text: "\"As a member of the African Student Association, I have found a home away from home on campus.  Through this community, I have been able to celebrate my heritage, connect with fellow Africans, and learn about the diverse cultures that make up the continent. Being part of this association has not only enriched my college experience but has also empowered me to become a leader and advocate for the African diaspora.\"",
        source: "- Current Student"
    },

    {
        text: "\"As a member of this community, I am constantly inspired by the African Student Association's dedication to promoting African culture and empowering its members. Their passion for education and advocacy is trulyinfectious, and it's clear that they're making a positive impact on both campus and beyond. I feel fortunate to have such a vibrant and committed group of young leaders in our midst, and I look forward to seeing all the great things they will accomplish in the future. \"",
        source: "- Community Member"
    }
];

var quoteText = document.getElementsByClassName("quote-text")[0];
var quoteSource = document.getElementsByClassName("quote-source")[0];
var index = 0;

setInterval(function() {
    quoteText.innerHTML = quotes[index].text;
    quoteSource.innerHTML = quotes[index].source;

    index++;

    if (index === quotes.length) {
        index = 0;
    }

}, 30000);