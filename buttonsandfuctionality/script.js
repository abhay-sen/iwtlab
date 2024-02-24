function getDate() 
{   
    const date = new Date();
    let day = date.getDate();
    let month= date.getMonth() +1; 
    let year = date.getFullYear();
    let currentDate  = `${day}/${month}/${year}`;    
    document.getElementById("dateInput").value= currentDate;
    

}
function factorial(number){
    

    let result=1;
    for(let i=1;i<=number;i++){
        result *= i;
    }
    
    
    return result;
}
function getFactorial(){
    let number = prompt("enter the value of the number");
    alert("the factorial of the input is "+ factorial(number) );
}
function Table(number) {
    if (!isNaN(number)) {
        let htmlCode='<h2>Multiplication table for ' + number +'</h2><br>';
        for (let i=1; i <= 10 ; i++) {
            htmlCode +='<h3>'+ number + ' x ' + i + ' = ' + (number*i)+ '</h3>';
        }
        document.getElementById("tableResult").innerHTML=htmlCode;
    }
    else{document.getElementById("tableResult").innerHTML="<h1>Please Enter a valid number</h1>"};
}
function getTable(){
    let number = document.getElementById("tableNumber").value ;
    return Table(number);
}
function getSum(){
    let number=parseFloat(prompt("Enter the first number:",""));
    let sum=number;
    let flag=confirm("Do you want to add more numbers?");
    while(flag){
        sum += parseFloat(prompt("enter the next number"));
        flag=confirm("Do you want to add more numbers?");
    }
    alert("The Sum is :"+sum);
}