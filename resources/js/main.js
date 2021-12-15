const styler_js = (
    {sal,Glide,feather}
)=>{

    // Start sal
    sal();

    // Start Glide
    const glide = document.querySelectorAll("#glide .glide__slide");
    if(glide.length > 0){
        new Glide( '#glide', {
            loop:true,
            autoplay: 4000
        } ).mount();
    }
   

    // Replace feather icon
    feather.replace();

};

export default styler_js