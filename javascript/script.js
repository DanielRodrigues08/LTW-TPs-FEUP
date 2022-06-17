function attachBuyEvents() {
    const buttons = document.querySelectorAll('.buy')
    for(const button of buttons){
        button.addEventListener('click', function() {
            button.parentElement.classList.toggle('sale')
            const id = button.parentElement.getAttribute('data-id')
            const name = button.parentElement.querySelector('h2').textContent
            const price = button.parentElement.querySelector('.price').textContent 
            const quantity = button.parentElement.querySelector('.quantity').value 

            
            
            document.querySelector("#cart table thead").appendChild(row)
        })
    }
  }
  
  attachBuyEvents()