function formChecker()
{
    var username = document.getElementById("username").value;
    if(username.length == 0 || username.indexOf("@", 0) == -1 || username.indexOf(".", 0) == -1)
    {
        alert("Invalid Email address, please enter it again!"); 
        return false;
    }

    var password = document.getElementById("password").value;
    if(password.length == 0)
    {
        alert("password field cannot be blank!");
        return false;
    }

    var value1 = document.getElementById("Quantity1").value;
    var value2 = document.getElementById("Quantity2").value;
    var value3 = document.getElementById("Quantity3").value;
    if(value1 < 0 || value2 < 0 || value3 < 0 || value1.length <= 0 || value2.length <= 0 || value2.length <= 0 || value3.length <= 0)
    {
        alert("Invalid quantity, please enter it again!");
        return false;
    }

    var shipping = document.getElementsByName("shipping");
    for(let i = 0; i < shipping.length; i++)
    {
        if (shipping[i].checked)
        {
            return true;
        }
        else
        {
            alert ("You must pick a shipping option!")
            return false;
        }
    }
}