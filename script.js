document.getElementById("good-btn").addEventListener("click", goodstuff)

document.getElementById("bad-btn").addEventListener("click", badstuff)




let goodSmiley = document.getElementById("good-s")
let badSmiley = document.getElementById("bad-s")
let neutral = document.getElementById("neutral")

let goodText = document.getElementById("good_txt")
let badText = document.getElementById("bad_txt")



function goodstuff(){
    

    badSmiley.style.display="none"
    neutral.style.display="none"
    badText.style.display="none"
  
      
        goodSmiley.style.display = "block"

        goodText.style.display = "block"
 


}

function badstuff(){


    goodSmiley.style.display = "none"
    goodText.style.display = "none"
    neutral.style.display ="none"
    
    badSmiley.style.display = "block"
    badText.style.display = "block"
}