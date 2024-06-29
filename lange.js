
const translations = {
    en: {
        nav1: "Home",
        nav2: "Rooms",
        nav3: "Facilities",
        nav4: "Contact us",
        nav5: "About",
        login1: "Login",
        enregistre1: "Register",
        h1Check1: "Check Booking Availability",
        Check_in1: "Check-in",
        Check_out1: "Check-out",
        Adult1: "Adult",
        Children1: "Children",
        submt1: "Submit",
        our_rooms1: "OUR ROOMS",
        More_rooms1: "More Rooms",
        our_facilities1: "OUR FACILITIES",
        More_facilities1: "More Facilities",
        TESTIMONIALS1: "TESTIMONIALS",
        Know_more1: "Know More",
        REACH_US1: "REACH US,",
        Call_us1: "Call us",
        Follow_us1: "Follow us",



    },
    ar: {
        nav1: "الرئيسية",
        nav2: "الغرف",
        nav3: "المرافق",
        nav4: "تواصل معنا",
        nav5: "معلومات عنا",
        login1: "تسجيل الدخول",
        enregistre1: "التسجيل",
        h1Check1: "تحقق من توافر الحجز",
        Check_in1: "تسجيل الوصول",
        Check_out1: "تسجيل المغادرة",
        Adult1: "البالغون",
        Children1: "الأطفال",
        submt1: "إرسال",
        our_rooms1: "غرفنا",
        More_rooms1: "المزيد من الغرف",
        our_facilities1: "مرافقنا",
        More_facilities1: "المزيد من المرافق",
        TESTIMONIALS1: "شهادات",
        Know_more1: "اعرف المزيد",
        REACH_US1: "تواصل معنا",
        Call_us1: "اتصل بنا",
        Follow_us1: "تابعنا"
    }
};

const languageSelector = document.getElementById("languageSelector");
let home = document.getElementById('home');
let rooms = document.getElementById('rooms');
let facilities = document.getElementById('facilities');
let contact = document.getElementById('contact');
let about = document.getElementById('about');
let login = document.getElementById('login');
let enregistre = document.getElementById('enregistre');
let h1Check = document.getElementById('h1Check');
let Check_in = document.getElementById('Check_in');
let Check_out = document.getElementById('Check_out');
let Adult = document.getElementById('Adult');
let Children = document.getElementById('Children');
let submt = document.getElementById('submt');
let our_rooms = document.getElementById('our_rooms');
let More_rooms = document.getElementById('More_rooms');
let our_facilities = document.getElementById('our_facilities');
let More_facilities = document.getElementById('More_facilities');
let testimonaire = document.getElementById('testimonaire');
let reach = document.getElementById('reach');
let Know_More = document.getElementById('Know_More');
let Call_us = document.getElementById('Call_us');
let Follow_us = document.getElementById('Follow_us');

languageSelector.addEventListener("change", function () {
    setLanguage(languageSelector.value);
});

function setLanguage(language) {
    home.innerText = translations[language].nav1;
    rooms.innerText = translations[language].nav2;
    facilities.innerText = translations[language].nav3;
    contact.innerText = translations[language].nav4;
    about.innerText = translations[language].nav5;
    login.innerText = translations[language].login1;
    enregistre.innerText = translations[language].enregistre1;
    h1Check.innerText = translations[language].h1Check1;
    Check_in.innerText = translations[language].Check_in1;
    Check_out.innerText = translations[language].Check_out1;
    Adult.innerText = translations[language].Adult1;
    Children.innerText = translations[language].Children1;
    submt.innerText = translations[language].submt1;
    our_rooms.innerText = translations[language].our_rooms1;
    More_rooms.innerText = translations[language].More_rooms1;
    our_facilities.innerText = translations[language].our_facilities1;
    More_facilities.innerText = translations[language].More_facilities1;
    testimonaire.innerText = translations[language].TESTIMONIALS1;
    Know_More.innerText = translations[language].Know_more1;
    reach.innerText = translations[language].REACH_US1;
    Call_us.innerText = translations[language].Call_us1;
    Follow_us.innerText = translations[language].Follow_us1;
};

setLanguage(languageSelector.value);