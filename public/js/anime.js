const scroller = ()=>{
    window.addEventListener("scroll",()=>{
        const CateContents = document.querySelectorAll('.prods');
        CateContents.forEach(Product => {
            const Product = CateContents.getBoundingClientRect().top;
            const ScreenPosition = window.innerHeight;
            if (Product < ScreenPosition) {
                CateContents.classList.add('activated');
            }
        });
    });

    window.addEventListener("scroll",()=>{
        const Headcontext = document.querySelectorAll('.category-search');
        Headcontext.forEach(Product => {
        const Product = Headcontext.getBoundingClientRect().top;
        const ScreenPosition = window.innerHeight;
        if (Product < ScreenPosition) {
            Headcontext.classList.add('category-active');
        }
        });
    });
 }
 
 scroller();