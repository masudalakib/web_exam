g// function sum(){
//     let numbers = document.getElementById('input').value;

//     let sum =0;
//     for (let i=0; i<numbers.length; i++ ){
//         sum +=Number(numbers[i]);
        
//     }
//     // console.log(sum);
//     document.getElementById('result').innerText=sum;
// }
// sum();

// ************

//celcies
function sum(){
    let numbers = document.getElementById('input').value;

    numbers = Number(numbers) + 273.15;

    document.getElementById('result').innerText=numbers;
}


// *************

function calculate(operation){
    let num1 = Number(document.getElementById('num1').value);
    let num2 = Number(document.getElementById('num2').value);

    let result = 0;

     if(operation == '-'){
        result = num1 - num2;
     }

     else if(operation == '+'){
        result = num1 + num2;
     }

     else if(operation == '*'){
        result = num1 * num2;
     }

     else if(operation == '/'){
        result = num1 / num2;
     }
    
     document.getElementById('result2').innerText = "Result: "+result;
     

}
