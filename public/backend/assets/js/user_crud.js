/**
 * -----------------------------
 *      Modal Box
 * -----------------------------
 */

 var modal = document.getElementById("my-modal"),
        deleteAll = document.querySelectorAll(".delete-all"),
        coloseBtn = document.querySelectorAll(".close");
        for( var i =0; i < coloseBtn.length; i++){
                coloseBtn[i].addEventListener("click",()=>{
                modal.style.display = "none";
                });
        }

        for(var x = 0; x < deleteAll.length; x++ ) {
                deleteAll[x].addEventListener("click", ()=>{
                        modal.style.display = "block";
                });
        }




        window.onclick = (e) => {
          if (e.target == modal) {
            modal.style.display = "none";
          }
        }




