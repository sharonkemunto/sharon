/* When the user clicks on the button,
toggle between hiding and showing the dropdown content  showing the child using the if statement*/


var dropdown = document.getElementsByClassName("dropbtn");

for(let i = 0; i<dropdown.length; i++){
       dropdown[i].addEventListener("click",function(){
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if(dropdownContent.style.display === "block"){
            dropdownContent.style.display = "none";
        }
        else{
            dropdownContent.style.display = "block";
        }
    }
    );
}
  