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
     console.log(id[1]) 

     document.getElementById("id").value = id[1];
    
}