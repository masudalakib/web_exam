function calculate(){
    let quantity = Number(document.getElementById('quantity').value);
    let tip = Number(document.getElementById('tip').value);
    let homedelivery = document.getElementById('home_yes').checked;
    let cost = quantity * 12.5;
    if(quantity>=0 && quantity<=10){
        cost = cost*0.9;
    }
    else if(quantity>=11 && quantity<=20){
        cost = cost*0.85;
    }
    else{
        cost = cost*0.8;
    }
    cost = cost * 1.2; // 20% tax
    cost = cost + tip;
    if(homedelivery){
        cost = cost + 50;
    }
    document.getElementById('lbl1').innerText = cost; 

   
}