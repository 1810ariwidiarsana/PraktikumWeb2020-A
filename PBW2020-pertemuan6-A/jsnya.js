document.getElementById('operatorTambah').addEventListener("click", function(){
    kalkulator(this.innerHTML);
});
document.getElementById('operatorKurang').addEventListener("click", function(){
    kalkulator(this.innerHTML);
})
document.getElementById('operatorKali').addEventListener("click", function(){
    kalkulator(this.innerHTML);
})
document.getElementById('operatorBagi').addEventListener("click", function(){
    kalkulator(this.innerHTML);
})
document.getElementById('operatorPangkat').addEventListener("click", function(){
    kalkulator(this.innerHTML);
})
document.getElementById('operatorMod').addEventListener("click", function(){
    kalkulator(this.innerHTML);
})


function kalkulator(operator)
{
    var input1 = parseFloat(document.getElementById('input1').value);
    var input2 = parseFloat(document.getElementById('input2').value);
    if(!input2) input2=0
    if(!input1) input1=0
    var hasil = 0;
    switch (operator){
        case '+' :
            hasil = input1 + input2;
            break;
        case '-' :
            hasil = input1 - input2;
            break;
        case '*' :
            hasil = input1 * input2;
            break;
        case '/' :
            hasil = input1 / input2;
            break;
        case '%' :
            hasil = input1 % input2;
            break;
        case '^' :
            hasil = Math.pow(input1, input2);
            break;
    }
}