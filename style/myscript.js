const { createApp } = Vue;

createApp({
  data() {
    return {
      showInfo: false,
      user: {
        name: 'Soubere',
        email: 'monadresse@example.com',
        phone: '77 018 85 21'
      }
    };
  }
}).mount('#app');

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
