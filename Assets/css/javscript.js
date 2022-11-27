let addTypeButton = document.querySelector('.add_type_button');
let addTypeButtonParent = addTypeButton.parentNode;


addTypeButton.addEventListener ('click', () => {
  var darkLayer = document.createElement('div'); 
  darkLayer.id = 'shadow'; 
  document.body.appendChild(darkLayer); 
  var modalWin = document.querySelector('#popupWin'); 
  modalWin.style.display = 'block';
  let userInput = [];
  let form = document.querySelector('.form');
  console.log(form);
  form.addEventListener('keydown', (e) => {
   userInput.push(e.key);
   number=userInput.length-1;
   if (!isNaN(userInput[number]) == false) {
     alert("Надо вводить цифры");
     userInput.pop();
   } else if ($(button_ok).click(e)) {
                        if (userInput.length < 11) {
                            const checkInfo = confirm ('Вы хотите оставить заявку?');
                            if (checkInfo) {   
                                alert('Тогда введите номер телефона в указанном формате');
                                            } else {
                                                alert('Хорошо');
                                                darkLayer.parentNode.removeChild(darkLayer); 
                                                modalWin.style.display = 'none'; 
                                                    };
                                                } else {
                                                    darkLayer.parentNode.removeChild(darkLayer); 
                                                    modalWin.style.display = 'none';     
                                                        };
                    
                } else if ($(button_cancel).click(e)) {
                    darkLayer.parentNode.removeChild(darkLayer); 
                                                    modalWin.style.display = 'none'; 
                };
            });
        });
