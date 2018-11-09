class unfoldNews{
    init(){
        let $unfoldButton = $(".full_article");
        $unfoldButton.on("click",(e)=>{
            this.unfold(e.target,e.target.previousElementSibling);
        })
    }
    unfold(button,unit){
        unit.classList.toggle("unfold");
        if (button.innerText==="Unfold") button.innerText="Fold";
        else button.innerText="Unfold";
    }
}

let unfold = new unfoldNews();
$(document).ready(()=>{
    unfold.init();
})