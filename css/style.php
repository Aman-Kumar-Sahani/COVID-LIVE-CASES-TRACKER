
<style type = "text/css" >
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: 'Libre Baskerville', serif;
    }
    html{
       scroll-behavior:smooth;
    }
    .nav_style{
        background-color:#1d2124!important;
    }

    .hov_er a:hover {
    /* background-color:#f8f9fa!important; */
    color: red;
    }
    
    .nav_style a{
        color:white;
    }
    .rightside h1{
        font-size:3rem;
        word-spacing:10px;
        /* font-family: 'Libre Baskerville', serif; */
        font-family: 'Satisfy', cursive;
    }
    .leftside img{
        animation:heartbeat 15s linear infinite; 
    }
    @keyframes heartbeat{ 
        0%{
            transform:scale(.75);
        }
        20%{
            transform:scale(1);
        }
        40%{
            transform:scale(.75);
        }
        60%{
            transform:scale(1);
        }
        80%{
            transform:scale(.75);
        }
        100%{
            transform:scale(.75);
        }
    }
/* //////////// Sticky table in a Scrollbox //////////// */
    .scrollable{
        height:550px;
        overflow:scroll;
    }
    .table-sticky th{
        position:sticky;
        top:0;
        background-color:black;
        color:white;
    }
    /* ///////////////// Text Anmiation/////////////////// */

    .banner-text{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        text-align:center;
    }
    }
    .banner-text #anim{
        font-family:bignoodletitling;
        margin:0;
    }
    #anim:before{
        content:'Lets Stay Safe & Fight Together Against Corona Virus...';
        font-size:200%;
        line-height:10px;
        color:Tomato;
        font-weight:bold;
        animation:animate 15s infinite;
    }
    @keyframes animate{
        0%{
            font-size:100%;
            opacity:1;
        }
        25%{
            font-size:50%;
            opacity:0;
        }
        50%{
            font-size:100%;
            opacity:1;
        }
        75%{
            font-size:50%;
            opacity:0;
        }
        100%{
            font-size:100%;
            opacity:1;
        }
    }
/* /////////////////////// Text Animation End////////////////// */

    .corona_update{
        margin:0 0 30px 0;
    }
    .corona_update h3{
        color:black;
    }
    .corona_update h1{
        font-size:2rem;
        text-align:center;
    }
    .sub_section{
        background-color:#fbfafd;
    }

/* /////// footer/////////// */

    .footer_style{
        background-color:#a29bfe!important;
    }
    .footer_style p{
       margin-bottom:0!important;
    }

</style>