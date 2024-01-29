
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-analytics.js";

const firebaseConfig = {
    apiKey: "AIzaSyAARhYC6TmOeD85DfMpAvCOzTBUaOg7Kx0",
    authDomain: "portfolioinquiry-66140.firebaseapp.com",
    databaseURL: "https://portfolioinquiry-66140-default-rtdb.firebaseio.com",
    projectId: "portfolioinquiry-66140",
    storageBucket: "portfolioinquiry-66140.appspot.com",
    messagingSenderId: "472422820299",
    appId: "1:472422820299:web:c807f6769fcebe75672e4e",
    measurementId: "G-GDGF3J21BL"
  };

  //initializing firebase
  firebase.initializeApp(firebaseConfig);


  //reference your database

var portfolioInquieryDB=firebase.database().ref("portfolioinquiry");
document.getElementById("inquiery").addEventListener("submit", inquiery);

function inquiery(e){
    e.preventDefault();
    var name=getElementVal("name");
    var emailid=getElementVal("email");
    var phoneno=getElementVal("phoner");
    var msgContent=getElementVal("textarea");

    console.log(name,emailid,phoneno,msgContent);
    saveMesseges(name, emailid, phoneno, msgContent);
}
const saveMesseges=(name,emailid,phoneno,msgContent)=>{
    var newPortfolioInquiery=portfolioInquieryDB.push();
    newPortfolioInquiery.set({
        name:ClientName,
        emailid:ClientEmail,
        phoneno:ClientPhoneNumber,
        msgContent:ClientInquiery
    });

}
const getElementVal=(id)=>{
    return  document.getElementById(id).value;
};