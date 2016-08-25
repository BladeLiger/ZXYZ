
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script>
     $(function(){   
       $("#file").on("change", function(){
           /* Limpiar vista previa */
           $("#vista-previa").html('');
           var archivos = document.getElementById('file').files;
           var navegador = window.URL || window.webkitURL;
           /* Recorrer los archivos */
           for(x=0; x<archivos.length; x++)
           {
               /* Validar tamaño y tipo de archivo */
               var size = archivos[x].size;
               var type = archivos[x].type;
               var name = archivos[x].name;
               if (size > 1024*1024)
               {
                   $("#vista-previa").append("<p style='color: red'>El archivo "+name+" supera el máximo permitido 1MB</p>");
               }
               else if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png' && type != 'image/gif')
               {
                   $("#vista-previa").append("<p style='color: red'>El archivo "+name+" no es del tipo de imagen permitida.</p>");
               }
               else
               {
                 var objeto_url = navegador.createObjectURL(archivos[x]);
                 $("#vista-previa").append("<img src="+objeto_url+" width='250' height='250'>");
               }
           }
       });
       
       /*$("#btn").on("click", function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "{{ url('/postimgs') }}";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
           });*/
      $('#formulario').submit(function() {
              console.log($(this).serialize())
              var ruta = "{{ url('/postimgs') }}";
              $.ajax({
                  type: 'POST',
                  url: ruta,
                  data: new FormData(this),
                  processData: false,
                  contentType: false,
                  // Mostramos un mensaje con la respuesta de PHP
                  success: function(data) {
                      $('#respuesta').html(data);
                  }
              })        
              return false;
          });
       
     });
    </script>

 <form method="post" id="formulario" enctype="multipart/form-data" >
 {{ csrf_field() }}
    <input type="text" name="otro">
    Subir imagen: <input type="file" id="file" name="file[]" multiple>
    <button type="submit" id="btn">Subir imágenes</button>
 </form>
  <div id="vista-previa"></div>
  <div id="respuesta"></div>
