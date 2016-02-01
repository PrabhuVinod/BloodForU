<div class="Left-content">
    <h1>Contact Us</h1>
    <p>If you have any questions or comments, let us know and we'll get back to you as soon as possible.</p>
    <email><strong>Email at:</strong> info@bloodforu.co.in</email>
</div>
<div class="verticalLine" id="verticalLine"></div>
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>

      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Message"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
</div>

  <style type="text/css">

        @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

        /*html{    background:url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
          background-size: cover;
          height:100%;
        }*/
        td {
             position: relative;
        }
        .verticalLine{
            position: absolute;
            top: 180px;
            left: 0px;
            width: 50%;
            height: 550px;
            border-right: solid 1px #000;
            z-index: 9999;
        }
        #feedback-page{
            text-align:center;
        }
        .Left-content {
                    background-color: rgba(5, 110, 108, 0.4);
                    font-family: Helvetica, Arial, sans-serif;
                    color: dimgrey;
                    padding-left: 30px;
                    padding-right: 0px;
                    padding-top: 0px;
                    padding-bottom: 25px;
                    width: 722px;
                    float: right;
                    right: 50%;
                    position: absolute;
                    margin-top: 111px;
                    margin-right: 110px;
        }

        #form-main{
            width:100%;
            float:left;
            padding-top:0px;
        }

        #form-div {
            background-color:rgba(5, 110, 108, 0.4);
            padding-left:35px;
            padding-right:35px;
            padding-top:35px;
            padding-bottom:50px;
            width: 450px;
            float: left;
            left: 50%;
            position: absolute;
            margin-top: 180px;
            margin-left: 170px;
          -moz-border-radius: 7px;
          -webkit-border-radius: 7px;
        }

        .feedback-input {
            color:#3c3c3c;
            font-family: Helvetica, Arial, sans-serif;
          font-weight:500;
            font-size: 18px;
            border-radius: 0;
            line-height: 22px;
            background-color: #fbfbfb;
            padding: 13px 13px 13px 54px;
            margin-bottom: 10px;
            width:100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
          border: 3px solid rgba(0,0,0,0);
        }

        .feedback-input:focus{
            background: #fff;
            box-shadow: 0;
            border: 3px solid #3498db;
            color: #3498db;
            outline: none;
          padding: 13px 13px 13px 54px;
        }

        .focused{
            color:#30aed6;
            border:#30aed6 solid 3px;
        }

        /* Icons ---------------------------------- */
        #name{
            background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #name:focus{
            background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
            background-size: 30px 30px;
            background-position: 8px 5px;
          background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #email{
            background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #email:focus{
            background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
            background-size: 30px 30px;
          background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #comment{
            background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        textarea {
            width: 100%;
            height: 150px;
            line-height: 150%;
            resize:vertical;
        }

        input:hover, textarea:hover,
        input:focus, textarea:focus {
            background-color:white;
        }

        #button-blue{
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            float:left;
            width: 100%;
            border: #fbfbfb solid 4px;
            cursor:pointer;
            background-color: #F05D5F;
            color:white;
            font-size:24px;
            padding-top:22px;
            padding-bottom:22px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
          margin-top:-4px;
          font-weight:700;
        }

        #button-blue:hover{
            background-color: rgba(0,0,0,0);
            color: #000000;
        }
            
        .submit:hover {
            color: #3498db;
        }
            
        .ease {
            width: 0px;
            height: 74px;
            background-color: #fbfbfb;
            -webkit-transition: .3s ease;
            -moz-transition: .3s ease;
            -o-transition: .3s ease;
            -ms-transition: .3s ease;
            transition: .3s ease;
        }

        .submit:hover .ease{
          width:100%;
          background-color: #FF0000;
        }

        @media only screen and (max-width: 580px) {
            #form-div{
                left: 3%;
                margin-right: 3%;
                width: 88%;
                margin-left: 0;
                padding-left: 3%;
                padding-right: 3%;
            }
        }
  </style>