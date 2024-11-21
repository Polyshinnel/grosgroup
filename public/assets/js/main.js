const menu = document.querySelector('.menu-block');
const menuBtn = document.querySelector('.menu-btn');
const closeMenuBtn = document.querySelector('.menu-block__header-close-btn');

const calcBtn = document.querySelector('.calc-btn');
const recallForm = document.querySelector('.recall-form-block');
const closeForm = document.querySelectorAll('.close');
const closeSuccess = document.querySelector('.close-success');

function toggleMenu(menu) {
    if (menu.classList.contains('menu--active')) {
        menu.classList.remove('menu--active');
        menu.style.height = 0;
    } else {
        menu.classList.add('menu--active');
        menu.style.height = document.documentElement.clientHeight + 'px';
    }
}

function showForm(recallForm) {
    if (recallForm.classList.contains('recall-form-block_active')) {
        recallForm.classList.remove('recall-form-block_active');
    } else {
        recallForm.classList.add('recall-form-block_active');
    }
}


menuBtn.onclick = () => {
    toggleMenu(menu)
}

closeMenuBtn.onclick = () => {
    toggleMenu(menu)
}

calcBtn.onclick = () => {
    showForm(recallForm)
}

closeForm.forEach((element) => {
    console.log(element)
    element.addEventListener('click', function() {
        showForm(recallForm)
    })
});

closeSuccess.onclick = () => {
    showForm(recallForm)
}

let formPhone = document.getElementById('phone');
Inputmask({"mask": "+7(999)999-99-99"}).mask(formPhone);

let phoneService = document.getElementById('phone_service')
if(phoneService) {
    Inputmask({"mask": "+7(999)999-99-99"}).mask(phoneService);
}

let phoneMontage = document.getElementById('phone_montage')
if(phoneMontage) {
    Inputmask({"mask": "+7(999)999-99-99"}).mask(phoneMontage);
}

let phoneContacts = document.getElementById('contacts-phone')
if(phoneContacts) {
    Inputmask({"mask": "+7(999)999-99-99"}).mask(phoneContacts);
}

const sendMessage = async (dataObj) => {
    let {data} = await axios.post('/send-message',dataObj)
    return data
}

const validatePhone = (phoneSelector) => {
    let phone = phoneSelector.value
    phone = phone.replace(/[^0-9]/g, '')
    if(phone.length < 9) {
        phoneSelector.parentNode.querySelector('.err-text').style.display = 'block'
        return false
    }
    return true
}

const validateEmail = (emailSelector) => {
    let email = emailSelector.value
    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if(!email.match(re)) {
        emailSelector.parentNode.querySelector('.err-text').style.display = 'block'
        return false
    }
    return true
}

const validateName = (nameSelector) => {
    let name = nameSelector.value
    name = name.replace(/[^a-zA-Zа-яА-ЯёЁ\s]/g, '')
    if(name.length < 3) {
        nameSelector.parentNode.querySelector('.err-text').style.display = 'block'
        return false
    }
    return true
}

const validateMessage = (messageSelector) => {
    let message = messageSelector.value
    if(message.length < 3) {
        messageSelector.parentNode.querySelector('.err-text').style.display = 'block'
        return false
    }
    return true
}
const validateData = (name, phone, message = null, email = null) => {
    let nameTest = false
    let phoneTest = false
    let emailTest = true
    let messageTest = true

    if(name) {
        nameTest = validateName(name)
    }

    if(phone) {
        phoneTest = validatePhone(phone)
    }

    if(email) {
        emailTest = validateEmail(email)
    }

    if(message) {
        messageTest = validateMessage(message)
    }

    return nameTest && phoneTest && messageTest && emailTest;
}

let contactRecallForm = document.querySelector('.recall-form')
contactRecallForm.onsubmit = async (e) => {
    e.preventDefault()
    let nameSelector = document.getElementById('name')
    let phoneSelector = document.getElementById('phone')
    let emailSelector = document.getElementById('email')
    let message = document.getElementById('message').value

    let validate = validateData(nameSelector, phoneSelector, null, emailSelector)
    if(validate) {
        let dataObj = {
            type: "Форма обратной связи",
            name: nameSelector.value,
            phone: phoneSelector.value,
            email: emailSelector.value,
            flag: false
        }
        if(message.length > 5) {
            dataObj.message = message
        }

        document.getElementById('send-recall-form').style.display = 'none'
        document.getElementById('await-btn').style.display = 'flex'

        let data = sendMessage(dataObj)

        if(data.message === 'message sent') {
            contactRecallForm.style.display = 'none'
            document.querySelector('.success-message').style.display = 'flex'
        }
    }
}

let contactForm = document.querySelector('.contacts-form')
if(contactForm) {
    contactForm.onsubmit = async (e) => {
        e.preventDefault()
        let nameSelector = document.getElementById('contacts-name')
        let phoneSelector = document.getElementById('contacts-phone')
        let messageSelector = document.getElementById('contacts-message')

        let validate = validateData(nameSelector, phoneSelector, messageSelector)
        if(validate) {
            let dataObj = {
                type: "Форма со страницы контактов",
                name: nameSelector.value,
                phone: phoneSelector.value,
                message: messageSelector.value
            }

            let awaitBtn = document.querySelector('.await-btn')
            document.getElementById('send-contact-form').style.display = 'none'
            awaitBtn.style.display = 'flex'

            let data = sendMessage(dataObj)

            if(data.message === 'message sent') {
                awaitBtn.style.display = 'none'
                document.querySelector('.succsess-btn').style.display = 'flex'
            }
        }
    }
}

let serviceForm = document.querySelector('.service-container__form')
if(serviceForm) {
    serviceForm.onsubmit = async (e) => {
        e.preventDefault()
        let nameSelector = document.getElementById('name_service')
        let phoneSelector = document.getElementById('phone_service')
        let emailSelector = document.getElementById('email_service')
        let type = document.getElementById('type-form').value

        let validate = validateData(nameSelector, phoneSelector, null, emailSelector)

        if(validate) {
            let dataObj = {
                type: type,
                name: nameSelector.value,
                phone: phoneSelector.value,
                email: emailSelector.value
            }

            let awaitBtn = document.querySelector('.await-btn')
            document.getElementById('send-supply-form').style.display = 'none'
            awaitBtn.style.display = 'flex'

            let data = sendMessage(dataObj)

            if(data.message === 'message sent') {
                awaitBtn.style.display = 'none'
                document.querySelector('.succsess-btn').style.display = 'flex'
            }
        }
    }
}

let montageForm = document.querySelector('.montage-block__form')
if(montageForm){
    montageForm.onsubmit = async (e) => {
        e.preventDefault()
        let nameSelector = document.getElementById('name_montage')
        let phoneSelector = document.getElementById('phone_montage')
        let emailSelector = document.getElementById('email_montage')
        let type = document.getElementById('type-form').value

        let validate = validateData(nameSelector, phoneSelector, null, emailSelector)

        if(validate) {
            let dataObj = {
                type: type,
                name: nameSelector.value,
                phone: phoneSelector.value,
                email: emailSelector.value
            }

            let awaitBtn = document.querySelector('.await-btn')
            document.getElementById('send-motage-form').style.display = 'none'
            awaitBtn.style.display = 'flex'

            let data = sendMessage(dataObj)

            if(data.message === 'message sent') {
                awaitBtn.style.display = 'none'
                document.querySelector('.succsess-btn').style.display = 'flex'
            }
        }
    }
}
