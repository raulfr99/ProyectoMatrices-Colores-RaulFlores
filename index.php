<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arreglos y colores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
<h1 class="display-4">Llenar arreglos y colorear</h1>
 
<div style="width:100%;background-color:orange;height:3px;"></div>
  <br>
  
  <br>
  <span class="d-block p-2 bg-primary text-white">Valor Y</span>
  

  <input class="form-control" type="text" placeholder="y"id="valorX">

<br>
  <span class="d-block p-2 bg-dark text-white">Valor X</span>

<input class="form-control" type="text" placeholder="x"id="valorY">
<br>
<button type="button" class="btn btn-danger"onclick="generarArrays();">Generar arrays</button>
</div>
<br>

    
<button type="button" class="btn btn-primary"onclick="generarGrid();">Generar grid</button>

 

</body>
</html>
<script>
          var valorX;
          var valorY;
         
            var matriz=new Array(valorX);
            var matriz2=new Array(valorX);
            var matriz3=new Array(valorX);
            for (var i=0; i <valorX; i++) {
                matriz3[i] = new Array(valorY);
            }
 function generarArrays(){

            var valX = document.getElementById("valorX").value;
            var valY = document.getElementById("valorY").value;
            valorX=valX;
            valorY=valY;
            
            for (var i=0; i <valX; i++) {
                matriz[i] = new Array(valY);
            }
            for (var i=0; i <valX; i++) {
            for (var j=0; j <valY; j++) {
              matriz[i][j] = 0;
              
            }
            }

            for (var i=0; i <valX; i++) {
                matriz2[i] = new Array(valY);
            }
            for (var i=0; i <valX; i++) {
            for (var j=0; j <valY; j++) {
              matriz2[i][j] = 0;
              
            }
            }
           
            generarGrid();
            var br = document.createElement('br');
            document.body.appendChild(br);

            
            generarGrid2();
            
            var br = document.createElement('br');
            document.body.appendChild(br);
            function generarGrid(){
            
            for(var c=0;c<valX;c++){
            var div = document.createElement('div');
            
            
            div.className = 'row ';
            div.style.height = '100px';
            div.style.width = '33%';
            div.setAttribute("id", c);
            for(var i=0;i<valY;i++){
   
            var div1 = document.createElement('div');
            
            div1.className ='col ';
            div1.innerHTML = '';
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
            
            div1.onclick = function() {
               
                alert(this.id[0]);
                var hX=this.parentElement.id;
                var hY = this.id;
               /* var x = document.getElementById(this.parentElement.id) ;
                var h = x.getElementById(this.id);*/
               this.style.backgroundColor = 'blue';
               matriz[this.id[0]][this.id[2]]=1;
               var resultado= "";
            for (var i=0; i < valX; i++) {
            for (var j=0; j < valY; j++) {
                resultado +=matriz[i][j];
                resultado +="   ";
             
               
            }
            resultado +="\n";
            
            }
            console.log(resultado);
            
            }


            
            div.appendChild(div1);  
           
            }
   
            
            document.body.appendChild(div);
            }
                    }
             function generarGrid2(){
            for(var c=0;c<valX;c++){
            var div = document.createElement('div');
            div.className = 'row ';
            div.style.height = '100px';
            div.style.width = '33%';
            div.setAttribute("id", c);
            for(var i=0;i<valY;i++){
   
            var div1 = document.createElement('div');
            div1.className ='col ';
            div1.innerHTML = '';
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
            
            div1.onclick = function() {
               
                alert(this.id[0]);
                var hX=this.parentElement.id;
                var hY = this.id;
               /* var x = document.getElementById(this.parentElement.id) ;
                var h = x.getElementById(this.id);*/
               this.style.backgroundColor = 'blue';
               matriz2[this.id[0]][this.id[2]]=1;
               var resultado= "";
            for (var i=0; i < valX; i++) {
            for (var j=0; j < valY; j++) {
                resultado +=matriz2[i][j];
                resultado +="   ";
             
               
            }
            resultado +="\n";
            
            }
            console.log(resultado);
                
            }



            div.appendChild(div1);  
            }


            document.body.appendChild(div);
            }
                    }

                    
                    }




             function generarGrid(){
             
           for (var i=0; i < valorX; i++) {
            for (var j=0; j < valorY; j++) {
             
            if(matriz[i][j] == 1 && matriz2[i][j]==1){
              matriz[i][j]=2;
            }
            else if(matriz[i][j] == 0 && matriz2[i][j]==1){
              matriz[i][j]=matriz2[i][j];
            }

            else if(matriz[i][j] == 0 && matriz2[i][j]==0){
              matriz[i][j] = 0;

             
            }
            }}
          var resultado= "";
            for (var i=0; i < valorX; i++) {
            for (var j=0; j < valorY; j++) {
                resultado +=matriz[i][j];
                resultado +="   ";
             
               
            }
            resultado +="\n";
            
            }
            ////////
            var numaux =3;

            for (var i=0; i < valorX; i++) {
            for (var j=0; j < valorY; j++) {

              if(matriz[i][j]==0){
                if((j-1)<0){
                }
                else{

                  if(matriz[i][j-1]==0){
                    for(var s=j;s>0;s--){
                      if(matriz[i][s]==0){
                      matriz[i][s]=numaux;
                      }
                      else{}
                    }
                  
                  }
                 
                  

                }

                if((j+1)<=valorY){
                  if(matriz[i][j+1]==0){
                    for(var s=j;s<=valorY;s++){
                      if(matriz[i][s]==0){
                      matriz[i][s]=numaux;
                      }
                      else{}
                    }
                  
                  }
                }
                else{

                
                 
                  

                }
                  if((i+1)<valorX){
                    if(matriz[i+1][j]==0){
                    for(var s=i;s<valorX;s++){
                      if(matriz[s][j]==0){
                      matriz[s][j]=numaux;
                      }
                      else{}
                    }
                  
                  }
                }
                else{
                  
                }

                if((i-1)<0){

                }
                else{
                  if(matriz[i-1][j]==0){
                    for(var s=i;s>0;s--){
                      if(matriz[s][j]==0){
                      matriz[s][j]=numaux;
                      }
                      else{}
                    }
                  
                  }
                }
                numaux++;
                
               
              }
               
              
               
            }
            
            }
            var resultado= "";
            for (var i=0; i < valorX; i++) {
            for (var j=0; j < valorY; j++) {
                resultado +=matriz[i][j];
                resultado +="   ";
             
               
            }
            resultado +="\n";
            
            }
            console.log(resultado);
            ////////
            var mayor;
            if(valorX>valorY){
              mayor = valorX;
              
            }
            else{
              mayor = valorY;
              
            }
            var colores = new Array(mayor);
            for(var i=0;i<mayor;i++){
              colores[i]=getRandomColor();
            }
            for(var i=0;i<mayor;i++){
              console.log(colores[i]);
            }
            for(var c=0;c<valorX;c++){
              
            var div = document.createElement('div');
            div.className = 'row ';
            div.style.height = '200px';
            div.style.width = '33%';
            div.setAttribute("id", c);
            for(var i=0;i<valorY;i++){


              
              //algoritmo perron

              
              
              if(matriz[c][i]==0){
                var color = getRandomColor();
                var div1 = document.createElement('div');
            div1.className ='col';
            div1.innerHTML = '';
            div1.style.backgroundColor=color;
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
            div.appendChild(div1);  
              }
              else if(matriz[c][i]==1){
                var div1 = document.createElement('div');
            div1.className ='col ';
            div1.style.backgroundColor='blue';
            div1.innerHTML = '';
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
              }

              else if(matriz[c][i]==2){
                var div1 = document.createElement('div');
            div1.className ='col ';
            div1.innerHTML = '';
            div1.style.backgroundColor='red';
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
              }
             
              else if(matriz[c][i]==3){
                var div1 = document.createElement('div');
            div1.className ='col ';
            div1.style.backgroundColor='orange';
            div1.innerHTML = '';
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
              }
              else if(matriz[c][i]==4){
                var div1 = document.createElement('div');
            div1.className ='col ';
            div1.style.backgroundColor='purple';
            div1.innerHTML = '';
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
              }
              else if(matriz[c][i]==5){
                var div1 = document.createElement('div');
            div1.className ='col ';
            div1.style.backgroundColor='yellow';
            div1.innerHTML = '';
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
              }
              else if(matriz[c][i]==6){
                var div1 = document.createElement('div');
            div1.className ='col ';
            div1.style.backgroundColor='black';
            div1.innerHTML = '';
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
              }
              else if(matriz[c][i]==6){
                var div1 = document.createElement('div');
            div1.className ='col ';
            div1.style.backgroundColor='pink';
            div1.innerHTML = '';
            div1.style.border = '1px solid';
            div1.setAttribute("id", [c,i]);
              }
              
           
            
            



            div.appendChild(div1);  
            }


            document.body.appendChild(div);
            }

            
            

           
                    }
           function getRandomColor() {
                  var letters = '0123456789ABCDEF';
                  var color = '#';
                  for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                  }
                  return color;
                }

</script>