
const REDIRECT_CONFIG = [
    {
        "source": "https://*/life-insurance/*",
        "target": "https://turtlemint.parasite.turtle-feature.com/insurance-advisor-near-me/?vertical=Life"
    },
    {
        "source": "https://*/car-insurance/*",
        "target": "https://turtlemint.parasite.turtle-feature.com/insurance-advisor-near-me/?vertical=FW"
    },
    {
        "source": "https://*/two-wheeler-insurance/*",
        "target": "https://turtlemint.parasite.turtle-feature.com/insurance-advisor-near-me/?vertical=TW"
    },
    {
        "source": "https://*/health-insurance/*",
        "target": "https://turtlemint.parasite.turtle-feature.com/insurance-advisor-near-me/?vertical=Health"
    }
];

(function() {
    const style = document.createElement("style")
    style.innerHTML = `
    #advisor__widget{
        position: fixed;
        right: 20px;
        bottom: 20px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 999;
        transition: 0.5s;
        transform: scale(0);
        animation: popout 0.5s cubic-bezier(0.35, 0.23, 1, 1.34) forwards;
        width: auto;
        // display: none;
    }
    #advisor__widget p{
        font-weight: 600;
        font-size: 14px;
        line-height: 17px;
        color: #505050;
        background-color: #FFE8BA;
        box-shadow: 0px 4.74336px 18.9735px rgba(0, 0, 0, 0.1);
        border-radius: 6px;
        padding: 2px 8px;
        max-width: 135px;
        transition: 0.5s;
        text-align: center;
        margin: 0;
        box-sizing: border-box;
        position: relative;
    }
    #advisor__widget span{
        display: block;
        transition: 0.5s;
        max-width: 100%;
        overflow: hidden;
        //animation: hidetext 0.5s linear 4s forwards, hidetext 0.5s linear 9s reverse forwards, hidetext 0.5s linear 14s forwards, hidetext 0.5s linear 19s reverse forwards, hidetext 0.5s linear 24s forwards ;
    }
    #advisor__widget img{
        margin-bottom: -15px;
        filter: drop-shadow(0px 11.8584px 35.5752px rgba(0, 0, 0, 0.25));
        width: 85px;
    }
    #advisor__widget .close__advisor__widget {
        position: absolute;
        right: 0;
        top: -5px   ;
    }
    #advisor__widget .close__advisor__widget svg{
        filter: drop-shadow( 0px 0px 4px #00000096);
    }
    @media (max-width: 767.98px){
        #advisor__widget{
            right: 20px;
            bottom: 60px;
        }
        #advisor__widget img{
            width: 72px;
            margin-bottom: -12px;
            filter: drop-shadow( 0px 10px 30px rgba(0, 0, 0, 0.25));
        }
        #advisor__widget p{
            font-size: 12px;
            line-height: 15px;
            padding: 2px 7px;
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
            max-width: 114px;
        }
    }
    @keyframes popout{
        0%{
            transform: scale(0);
            opacity: 0;
        }
        100%{
            transform: scale(1);
            opacity: 1;
        }
    }
    @keyframes hidetext{
        0%{
            height: 15px;
            width: 111px;
            opacity: 1;
        }
        20%, 80%{
            opacity:0;
        }
        100%{
            height: 0;
            width: 0;
            opacity: 0;
        }
    }
    `;
    const widget = document.createElement("div");
    widget.setAttribute("id", "advisor__widget");
    widget.setAttribute("onclick", "redirect(event)");
    widget.innerHTML=`<div class="close__advisor__widget"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48" fill="none">
    <g filter="url(#filter0_b_1289_6806)">
    <circle cx="24" cy="24" r="24" fill="white" fill-opacity="0.9"/>
    </g>
    <path d="M30.6756 31.9992H30.9955C31.3467 31.9186 31.6393 31.7499 31.8297 31.4346C32.1224 30.9493 32.035 30.4139 31.5892 29.9675C29.8281 28.2042 28.0666 26.4413 26.3043 24.6793C26.079 24.4541 25.8485 24.2341 25.5928 23.9844C25.6717 23.9235 25.7299 23.8878 25.7764 23.8413C27.7046 21.9154 29.6321 19.989 31.5587 18.0615C31.6385 17.9817 31.7175 17.8984 31.7812 17.8058C32.1817 17.2259 31.9789 16.4569 31.3467 16.1448C30.8644 15.9067 30.3882 16.0001 29.9676 16.4201C28.035 18.3508 26.1023 20.2816 24.1724 22.2151C24.1183 22.2697 24.0943 22.3538 24.055 22.4259C23.9515 22.3282 23.9167 22.2973 23.8842 22.2644C22.6751 21.0534 21.4665 19.8424 20.2574 18.6317C19.4993 17.8727 18.7425 17.1125 17.9804 16.3571C17.5526 15.9332 16.9721 15.8867 16.4867 16.2177C16.2173 16.4012 16.101 16.6789 16 16.9691V17.3289C16.097 17.6964 16.3379 17.9633 16.6001 18.2242C18.3291 19.9442 20.0521 21.6697 21.7788 23.3925C21.976 23.5893 22.1816 23.7772 22.3925 23.9776C22.3179 24.0565 22.2698 24.1098 22.2189 24.1607C20.3251 26.0546 18.433 27.9509 16.5352 29.8412C16.3007 30.0748 16.0878 30.3129 16 30.6399V31.1196C16.1596 31.5664 16.4602 31.8658 16.9196 31.9992H17.3594C17.7094 31.9074 17.9563 31.669 18.2025 31.4221C20.075 29.5443 21.9511 27.6704 23.8245 25.793C23.8798 25.7376 23.9107 25.6583 23.9532 25.5902L24.0425 25.6086C24.085 25.6683 24.1199 25.7352 24.1708 25.7865C26.041 27.6572 27.9143 29.525 29.7824 31.3981C30.043 31.6594 30.3028 31.9106 30.6756 32V31.9992Z" fill="#1F1F1F"/>
    <defs>
    <filter id="filter0_b_1289_6806" x="-4" y="-4" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
    <feGaussianBlur in="BackgroundImageFix" stdDeviation="2"/>
    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_1289_6806"/>
    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1289_6806" result="shape"/>
    </filter>
    </defs>
    </svg></div><img src="https://www.turtlemint.com/wp-content/uploads/2023/02/advisor-widget.png" alt="Advisor wiget avatar"><p>Get Free Advice<span></span></p>`;
    document.body.append(style,widget) ;
})();

async function redirect(e){
    if(e.target.tagName == 'circle' || e.target.classList.contains('close__advisor__widget')){
        document.getElementById('advisor__widget').style.display = "none";
        return 1;
    }
    const sourceURL = window.location.href;
    let targetURL = "https://turtlemint.parasite.turtle-feature.com/insurance-advisor-near-me/"
    try{
        // let response = await fetch('https://turtlemint.parasite.turtle-feature.com/find-advisor-widget/redirect-config.json');
        // let data = await response.json();
        let data = REDIRECT_CONFIG;
        if(data.length > 0){
            // let matchURL = data.find(e=>e.source == sourceURL)
            let matchURL = data.find(e => {
                // let formatedSubUrl = e.source.replace(/[\/.*+?^${}()|[\]\\]/g, '\\$&')
                // let formatedUrl = `^${formatedSubUrl}.*$`
                let formatedSubUrl = e.source.replace(/[\/.+?^${}()|[\]\\]/g, '\\$&').replaceAll('*','.*')
                let formatedUrl = `^${formatedSubUrl}$`
                let regExp = new RegExp(formatedUrl)
                // console.log(sourceURL,"\n",formatedSubUrl,"\n",formatedUrl,"\n",regExp,"\n",regExp.test(sourceURL))
                return regExp.test(sourceURL)
            })
            matchURL ? targetURL = matchURL.target : "";
        }
    }
    catch(e){
        console.error(e)
    }
    finally{
        location.href = targetURL;
    }
}