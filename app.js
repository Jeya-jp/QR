function onLoad()
{
    let url = window.location.href
    console.log(url)
// http://127.0.0.1:5500/response.php?rollno=19mca003&id=6788
    let split_rollno = url.split("rollno=")
    console.log(split_rollno[0])
    console.log(split_rollno[1])
    
     let rollno = split_rollno[1].split("&")
     console.log(rollno[1])
    
     document.getElementById("roll").value = rollno[0];
     

     let id = split_rollno[1].split("=")

     document.getElementById("id").value = id[1];



     fetch("ids.json").then(function(resp)
     {
         return resp.json();
     })
     .then(function(data)
     {          
        let idMatched=0;
        let idNotMatched=0;
         for(i=0;i<data.length;i++)
         {
            d = data[i].id
            iid = id[1]
  
             if(d == iid)
             {
                idMatched = 1
             }
            else
            {
                idNotMatched = 1
            }
     
         }
         if(idMatched==1)
         {
            
         }
         else
         {
             alert("Invalid Entry")

         }
     })  

     
    
}