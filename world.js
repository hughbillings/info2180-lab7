window.onload = function () 
{
    
    var button = document.getElementById("lookup");
    
    button.addEventListener("click", function()
    {
        if(document.getElementById("checker").checked)
        {
            requestConnection();
            
        } else 
        {
            makeRequest();
        }
        
    
    });
    
    function makeRequest()
    {
         var inval = document.getElementById("controls").querySelector("#country");
         var httpRequest = new XMLHttpRequest();
         var url = "https://info2180-lab7-hughverdam.c9users.io/world.php?country="+inval.value;
         httpRequest.onreadystatechange=searchfiit;
         httpRequest.open("GET",url,true);
         httpRequest.send();
        
    }
    function searchfiit()
    {
        var result = document.getElementById("result");
        var httpRequest = new XMLHttpRequest();
       
        if(this.readyState === XMLHttpRequest.DONE)
        {
            if(this.status === 200)
            {
                 var respond = this.responseText;
                 alert(respond);
                 result.innerHTML = respond;
            } else
            {
                result.innerHTML = "Nothing Available";
            }
        }
    }
    
    function requestConnection ()
    {
        var httpRequest = new XMLHttpRequest();
        var checked = document.getElementById("checker").value;
        var url =  "https://info2180-lab7-hughverdam.c9users.io/world.php?country="+checked;
        httpRequest.onreadystatechange = searchfiallait;
        httpRequest.open("GET",url,true);
        httpRequest.send();
    }
    
    function searchfiallait () 
    {
        var result = document.getElementById("result");
        var httpRequest = new XMLHttpRequest();
       
        if(this.readyState === XMLHttpRequest.DONE)
        {
            if(this.status === 200)
            {
                 var respond = this.responseText;
                 alert(respond);
                 result.innerHTML = respond;
            } else
            {
                result.innerHTML = "Nothing Available";
            }
        }
    }
    
};