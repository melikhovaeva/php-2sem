const buttons = document.querySelectorAll('.pins');
const input = document.querySelector('.screen');

handleClick = (evt) => {
    evt.preventDefault()
    const data = evt.target.innerText;
    console.log(data)
    let currentValue = input.value;
    let updatedValue = currentValue+data;
    input.value = updatedValue;
}

buttons.forEach((element) => {
    console.log(element)
    element.addEventListener('click', handleClick)
})
