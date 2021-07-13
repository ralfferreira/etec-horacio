const faqs = document.querySelectorAll(".faq-card");

faqs.forEach(faq =>{
    faq.addEventListener("click", () =>{
        if(faq.classList.contains("active")){
            faq.classList.toggle("active");
        }
        else{
            for (let faq of faqs){
                faq.classList.remove('active');
            }
            faq.classList.toggle("active");
        }
    });
});