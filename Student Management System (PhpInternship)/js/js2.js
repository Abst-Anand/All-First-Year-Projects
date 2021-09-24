document.write('Hemlo World');
var linebreak="<br>"
document.write(linebreak);

a=33;
b=9;
//Using If-else
if(a>b)
{
    big_number=a;
}
else
{
    big_number=b;
}
document.write('big number is:'+ big_number);
document.write(linebreak);
document.write(linebreak);

//OR using Ternary operator:
big_number=(a>b? a:b);
document.write('big number is:'+ big_number);
document.write(linebreak);
document.write(linebreak);
document.write('++a::'+ ++a);

function alertme()
{
    alert('I am Clicked');
    //document.write("I am clicked");
  
}

function mousehover()
{
    alert('You have moved your mouse');

function changeParaContent()
{
    document.getElementById('para').innerText="After change para";    
}

