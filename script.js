// parte responsável por formatar o número de telefone digitado pelo usuário
function formatPhoneNumber(value) {
    if (!value) return value;
    const phoneNumber = value.replace(/[^\d]/g, '');
    const phoneNumberLength = phoneNumber.length;
    if (phoneNumberLength < 3) return phoneNumber;
    if (phoneNumberLength < 8) {
        return `(${phoneNumber.slice(0, 2)}) ${phoneNumber.slice(2)}`;
    }
    return `(${phoneNumber.slice(0, 2)}) ${phoneNumber.slice(
        2,
        7
    )}-${phoneNumber.slice(7, 10)}`;
}

function phoneNumberFormatter() {
    const inputField = document.getElementById('phone-number');
    const formattedInputValue = formatPhoneNumber(inputField.value);
    inputField.value = formattedInputValue;
}


// parte responsável pelas Perguntas Frequentes, fazendo com que surja a resposta ao clicar no botão da pergunta.
const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
const itemToggle = this.getAttribute('aria-expanded');

for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
}

if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
}
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));


// parte responsável por fazer os outros botões de "chamada para ação" fora o do formulário realizarem o scroll da tela até o próprio formulário
for (button of document.getElementsByClassName('other-button'))
{
    button.addEventListener('click', function()
    {
        if (window.innerWidth > 1000)
        {
            window.scrollTo({top: 0, behavior: 'smooth',});
        }
        else
        {
            window.scrollTo({top: 500, behavior: 'smooth',});
        }
    })
}