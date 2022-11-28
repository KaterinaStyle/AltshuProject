let addTypeButton = document.querySelector('.add_type_button'); // присвоили переменную кнопке
let addTypeButtonParent = addTypeButton.parentNode;


addTypeButton.addEventListener ('click', () => { // при нажатии на кнопку будут выполняться следующие действия
  var darkLayer = document.createElement('div'); // присвоили переменной созданный в HTML элемент div
  darkLayer.id = 'shadow'; // присвоили div id
  document.body.appendChild(darkLayer); // отрисовали этот элемент на странице
  var modalWin = document.querySelector('#popupWin'); // присвоили переменной блок из HTML с соответствующим id
  modalWin.style.display = 'block'; // поменяли этому блоку стиль отобржания с none на block
  let userInput = []; // создали массив, куда будут заноситься данные, которые вносит пользователь в форму
  let form = document.querySelector('.form'); // создали переменную, которая определила блок из HTML с классом form
  form.addEventListener('keydown', (e) => { //добавиляем события при вводе данных в форму
   userInput.push(e.key); // заносим введенное пользователем значение в массив
   number=userInput.length-1; //присваиваем переменной значение длины массива за вычетом единицы (нумерация массива идет с 0)
   if (!isNaN(userInput[number]) == false) { // проверяем какие значения вводит пользователь - если в указанном выражении не число
     alert("Надо вводить цифры"); //ввыводится сообщение об ошибке
     userInput.pop();  //удаляется последний элемент из массива (еще хочу добавить действие, но не понимаю как: чтобы это значение и из формы удалялось)
    document.querySelector('.button_ok').addEventListener('click', (e) => {
                        if (userInput.length < 12) {
                            const checkInfo = confirm ('Вы хотите оставить заявку?');
                            if (checkInfo) {   
                                alert('Тогда введите номер телефона в указанном формате');
                              userInput.push(e.key); // заносим введенное пользователем значение в массив
   number=userInput.length-1; //присваиваем переменной значение длины массива за вычетом единицы (нумерация массива идет с 0)
   if (!isNaN(userInput[number]) == false) { // проверяем какие значения вводит пользователь - если в указанном выражении не число
     alert("Надо вводить цифры"); //ввыводится сообщение об ошибке
     userInput.pop();  //удаляется последний элемент из массива, еще хочу добавить действие, но не понимаю как: чтобы это значение и из формы удалялось
                                            } else {
                                                alert('Хорошо');
                                                darkLayer.parentNode.removeChild(darkLayer); 
                                                modalWin.style.display = 'none'; 
                                                    };
                                                } else {
                                                    darkLayer.parentNode.removeChild(darkLayer); 
                                                    modalWin.style.display = 'none';     
                                                        };
                        };     
                });
    document.querySelector('.button_cancel').addEventListener('click', (e) => {
                    darkLayer.parentNode.removeChild(darkLayer); 
                                                    modalWin.style.display = 'none'; 
                });
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
                                  content: "Посмотреть все статьи"
                                }
                               ];
                              let cardCont = document.querySelectorAll('.good_content');
                              
                               for (i=0; i<GoodContentArray.length; i++) {
                                
                                 let cardContParagraph = cardCont[i].querySelector('.article_text');
                              cardContParagraph.textContent = GoodContentArray[i].content;
                               }
