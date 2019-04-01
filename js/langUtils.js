var dic ={
            logoText:{
                ua:"Світлина",
                ru:"Фото",
                en:"Svitlyna"
            },
            mainPage :{
                ua:"Головна",
                ru:"Главная",
                en:"Main"
            },
            lblPortfolio:{
                ua:"Портфоліо",
                ru:"Портфолио",
                en:"Portfolio"},
            lblContacts:{
                ua:"Контакти",
                ru:"Контакты",
                en:"Contacts"},
            lblArticles:{
                ua:"Статті",
                ru:"Статьи",
                en:"Articles"
            },
            mnPortfolioSim:{
                ua:"Сімейна",
                ru:"Семейная",
                en:"ХХХ"
            },
            mnlPortfolioInd:{
                ua:"Індивідуальна",
                ru:"Индивидуальная",
                en:"ХХХ"
            },
            mnlPortfolioDyt:{
                ua:"Дитяча",
                ru:"Детская",
                en:"ХХХ"
            },
            mnlPortfolioLove:{
                ua:"Love Story",
                ru:"Love Story",
                en:"Love Story"
            },
            mnPortfolioStory:{
                ua:"Фото історії",
                ru:"Фото истории",
                en:"Articles"
            },
        };



function trate(lang){

   $("[lanId]").each(function (index, element) {
       var id = $(element).attr('lanId');
       $(element).text(dic[id][lang]);
   });

}


