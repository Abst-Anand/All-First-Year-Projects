//For production use Minified JS



function add()

{
    var x = document.getElementById('num1').value;
    var y = document.getElementById('num2').value;
   // x=5;
   // y=6;
   //sum = x+y;
    var sum = parseInt(x) + parseInt(y);
    alert(sum);
}
function checkUndefined()
{
    var  carname;
    var nocarname=null;
    
    if(carname===nocarname)
    {
        alert('We are equal');
        //msg = 'We are equal';
    }
    else
    {
        alert('We are NOT equal');
        //msg = 'We are NOT equal';
    }
    
    //msg;

    return msg;


}
