<!DOCTYPE html>
<html>
<head>
    <title>Techyeahinc.com</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Galada&family=Noto+Sans+Bengali:wght@300&family=Noto+Serif+Bengali:wght@100&family=Poppins:wght@500&family=Shippori+Antique+B1&display=swap" rel="stylesheet">
</head>
<style>
    :root{
        --font_one:'Courgette', cursive;
    }
    body{margin: 0;padding: 0;box-sizing: border-box;}
    font{ 
        font-family: 'Galada', cursive;
        font-family: 'Noto Sans Bengali', sans-serif;
        font-family: 'Noto Serif Bengali', serif;
        font-family: 'Poppins', sans-serif;
        font-family: 'Shippori Antique B1', sans-serif;
    }
      .container{
        background-color: #b7b7b7;
      }
      .company_logo{
        margin: 10px 0;;
      }
    .email_body_wrapper{
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .email_body{
        background-color: #ffffff;
        border-radius: 20px;
        padding: 20px;
    }
    .email_title{
        text-align: center;
    }
    .bold_text{
        font-weight: bold;
    }
    .thank_you{
        text-align: center;
        font-family: var(--font-one);
        font-family: 'Galada', cursive;
        font-family: 'Noto Sans Bengali', sans-serif;
        font-family: 'Noto Serif Bengali', serif;
        font-family: 'Poppins', sans-serif;
        font-family: 'Shippori Antique B1', sans-serif;
        font-size: 18px;

    }
</style>
<body>
    <div class="container">
        <div class="email_body_wrapper">
            <img src="logo.png" alt="" width="200px" class="company_logo">
           <div class="email_body">
            <h1 class="email_title">{{ $mailData['title'] }}</h1>
            <p> 
                <span class="bold_text">Job Title:</span> 
                <span>{{ $mailData['jTitle'] }}</span></p>
            <p>
                <span class="bold_text">Name: </span>  
                <span>{{ $mailData['fName'] }} {{ $mailData['lName'] }}</span>
            </p>
            <p>
                <span class="bold_text">Email: </span>   
                <span>{{ $mailData['email'] }}</span>
            </p>
            <p>
                <span class="bold_text">Industry: </span>  
                y: <span>{{ $mailData['industry'] }}</span>
            </p>
            <p>
                <span class="bold_text">Work Category: </span>  
                <span>{{ $mailData['work_cat'] }}</span>
            </p>
            <p>
                <span class="bold_text">Message: </span>   
                <span>{{ $mailData['message'] }}</span>
            </p>
            
            <p class="thank_you bold_text">Thank you</p>
           </div>
        </div>
    </div>
</body>
</html>