function convert(){
    var input = document.getElementById("number").value
    if (!isNaN(input)) { 
        if (input>=0&&input<=999) {
            alert(numberToWords(input));
        }
        else{
            alert("Please enter a number between the range 0-999")
        }
    }
    else{
        alert( "Please enter a valid number" ) ;
    }

    
}
function numberToWords(input){
    var resultOnes,resultTens,resultHundreds;
    
    const oneslist = ['','one','two','three','four','five','six','seven','eight','nine'];
    const tenslist = ['','','twenty','thirty','forty','fifty','sixty','seventy','eighty','ninty'];
    const teens = ['ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','ninteen'];
    if (input==0) {
        return 'zero';
    }
    else if (input<10) {
        return oneslist[input];
    }
    else if (input>=10&& input<20) {
        return teens[input%10];
    }
    else if (input>=20&&input<100) {
        resultTens = tenslist[Math.floor(input/10)];
        resultOnes = oneslist[input%10];
        return resultTens + ' '+ resultOnes;
    }
    else if (input>99) {
        resultHundreds=oneslist[Math.floor(input/100)]+' hundred';
        if (input%100>9&&input%100<20) {
            resultTens=teens[(input%100)%10];
            return resultHundreds + ' and '+ resultTens;
        }
        else{
            input=input%100;
            resultTens = tenslist[Math.floor(input/10)];
            resultOnes = oneslist[input%10];
        }
        return  resultHundreds + ' '+ resultTens +' '+ resultOnes;
    }
}
