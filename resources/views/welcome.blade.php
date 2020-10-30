<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <title>Document</title>
    <style>
        .content {
        width: 65%;
        height: 500px;
       
        position: absolute; /*Can also be `fixed`*/
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        /*Solves a problem in which the content is being cut when the div is smaller than its' wrapper:*/
        max-width: 100%;
        max-height: 100%;
        overflow: auto;
          display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu menu main main right right'
    'footer footer Center Center left left';
  grid-gap: 10px;
  padding: 10px;
  grid-template-rows: 10%  auto 10% ;
        }
        .ptnt{
            background-image: url('{{ asset('images/Ptnt.png') }}');
            background-repeat: no-repeat;
            background-size: 95% 98%;
            border: 1px solid black;
        }
         .dctr{
            background-image: url('{{ asset('images/Dtcr.png') }}');
            background-repeat: no-repeat;
            background-size: 95% 98%;
            border: 1px solid black;
        }
         .rdv{
            background-image: url('{{ asset('images/rdv.png') }}');
            background-repeat: no-repeat;
            background-size: 95% 98%;
            border: 1px solid black;
        }
.item1 { grid-area: header; }
.ptnt { grid-area: menu; }
.dctr { grid-area: main; }
.rdv { grid-area: right; }
.item5 { grid-area: footer; }
.item6 { grid-area: Center; }
.item7 { grid-area: left; }
.item5,.item6,.item7{
    border: 1px solid black;
    text-align: center;
    height: 40px;
    line-height: 40px;
    background-color: #212529;
    color: whitesmoke;
}
.item1{
    border: 1px solid black;
    
    height: 40px;
    line-height: 40px;
    background-color: #212529;
    color: gray;
    position: relative;


}
h4{
    
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);

}
a{
    text-decoration: none;
    color: gray;
}
a:hover{
    text-decoration: none;
     color: white;
}

    </style>
</head>
<body>
    <div class="content">
       
 
  <div class="item1"><h4>Application de Gestion Cabinet Medical</h4></div>
  <div class="ptnt"></div>
  <div class="dctr"></div>  
  <div class="rdv"></div>
  <div class="item5"><a href="{{url('/patients')}}"> GESTION DES PATIENTS</a></div>
  <div class="item6"><a href="{{url('/medecins')}}"> GESTION DES MEDECINS</a></div>
  <div class="item7"><a href="{{url('/patients')}}"> GESTION DES RDVs</a></div>
</div>
    
</body>
</html>