let addTypeButton = document.querySelector('.add_type_button');

let cancelButton = document.querySelector('.cancel');
let submitButton = document.querySelector('.submit');

const modalWin = document.querySelector('#popupWin');
const formRequest = document.querySelector('#this_form');
const textName = formRequest.querySelector('[name="name"]');
const phoneNumber = formRequest.querySelector('[name="phone_number"]');
const textEmail = formRequest.querySelector('[name="email"]');
const checkboxTerms = formRequest.querySelector('[name="terms"]');
let formData = [formRequest, textName, phoneNumber, textEmail, checkboxTerms];
let userData = [];

addTypeButton.addEventListener('click', () => {
  var darkLayer = document.createElement('div');
  darkLayer.id = 'shadow';
  document.body.appendChild(darkLayer);
  modalWin.style.display = 'block';  


function fixDataFromUser() {
    var nameUser = textName.value;
    var phoneUser = phoneNumber.value;
    var emailUser = textEmail.value;
    var termsAgreeUser = checkboxTerms.value;
    event.preventDefault();
    userData = [nameUser, phoneUser, emailUser, termsAgreeUser];
    console.log(userData);
    for (i = 0; i < 5; i++) {
      formData[i].value = "";
    };
};

function closeDarkLayer() {
   darkLayer.parentNode.removeChild(darkLayer); 
   modalWin.style.display = 'none';
};  

cancelButton.addEventListener('click', () => {
  textName.value = "";
  phoneNumber.value = "";
  textEmail.value = "";
  checkboxTerms.checked = "true";
closeDarkLayer();
alert("Будем рады принять вашу заявку в следующий раз");
event.preventDefault();
});

submitButton.addEventListener('click', () =>{
 let phoneUserTemp = phoneNumber.value; 
 let nameUserTemp = textName.value;
  let termsTemp = checkboxTerms.checked;
  console.log(phoneUserTemp);
  console.log(nameUserTemp);
  console.log(termsTemp);
 if (phoneUserTemp.length !== 11) {
   alert('Введите 11 цифр номера телефона');
   event.preventDefault();
  } else if (nameUserTemp == "") {
      alert('Введите имя');
      event.preventDefault();
  }  else if (!termsTemp) {
      alert('Надо принять условия');
        console.log(phoneUserTemp);
        console.log(nameUserTemp);
        console.log(termsTemp);
        event.preventDefault();    
  } else {  
  fixDataFromUser();
  closeDarkLayer();
  alert('Спасибо. Мы свяжемся с вами');
  let jsonUserData = JSON.stringify(userData);
  console.log(jsonUserData);
 };
  
  });
});


                             let ExperienceArray = [
                                {
                                  content: "Кто круче: технарь или гуманитарий?"
                                },

                                {
                                  content: "Все дело в красном пиджаке или все-таки нет?"
                                },

                                {
                                  content: "Может делегировать?"
                                },

                                {
                                  content: "Скоро появится новая статья"
                                },

                                {
                                  content: "Скоро появится новая статья"
                                },

                                {
                                  content: "Посмотреть все статьи"
                                }
                               ];
                              let cardExp = document.querySelectorAll('.experience');
                              
                               for (i=0; i<ExperienceArray.length; i++) {
                                
                                 let cardExpParagraph = cardExp[i].querySelector('.article_text');
                              cardExpParagraph.textContent = ExperienceArray[i].content;
                               }
                              
                              let GoodContentArray = [
                                {
                                content: "В процессе"
                                },
                                {
                                 content: "В процессе"
                                 },
                                 {
                                 content: "В процессе"
                                 },
                                {
                                  content: "В процессе"
                                },
                                {
                                  content: "В процессе"
                                },
                                {
                                  content: "Посмотреть все статьи"
                                }
                               ];
                              let cardCont = document.querySelectorAll('.good_content');
                              
                               for (i=0; i<GoodContentArray.length; i++) {
                                let cardContParagraph = cardCont[i].querySelector('.article_text');
                                cardContParagraph.textContent = GoodContentArray[i].content;
                               };
