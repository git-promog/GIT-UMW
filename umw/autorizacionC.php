<!DOCTYPE html>
<html lang="en">
<head> 
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
   <meta charset="UTF-8" > 
   <title>UM Motos</title> 
</head>
<link rel="stylesheet" href=" ../../assets/bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href=" ../../assets/css/menuhover.css">
<link rel="stylesheet" href=" ../../assets/css/Cruiser_NewSport.css">
<link rel="stylesheet" href=" ../../assets/css/main.css">
<link rel="stylesheet" href=" ../../assets/css/footer.css">
<link rel="stylesheet" href=" ../../assets/css/jquery.fancybox.min.css">
<link rel="stylesheet" href=" ../../assets/css/component.css">
<link rel="stylesheet" href=" ../../assets/css/clases.css">
<link rel="stylesheet" href=" ../../assets/css/default.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
<script type="text/javascript" src=" ../../assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src=" ../../assets/js/popper.min.js"></script>
<script type="text/javascript" src=" ../../assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src=" ../../assets/js/main.js"></script>
<script type="text/javascript" src=" ../../assets/js/fadecolor.js"></script>
<script type="text/javascript" src=" ../../assets/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src=" ../../assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src=" ../../assets/js/jquery.dlmenu.js"></script>
<script type="text/javascript" src="../../assets/js/sweetalert.min.js"></script>

<body>
   <header class="center">
      <?php include "header2.php"; ?>
   </header>
   <div class="container" style="background: url( ../../assets/img/XtreetR_17distribuidor.jpg)  0% 30% no-repeat;">
      <table width="900" class="table table-striped">
         <tbody >
            <tr id="vista3">
               <td style="width: 70%; color:white;" colspan="1">
                  <form id="frmCliente3">
                     <fieldset>
                        <div class="form-group">
                           <input type="text" hidden name="set" value="newTel">
                           <input type="text" hidden name="id" value="<?php echo $_GET['t']; ?>">
                           <label class="col-md-4 control-label">Nombre Completo</label>
                           <div class="col-md-8 inputGroupContainer">
                              <div class="input-group">
                                 <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-home"></i>
                                 </span>
                                 <input id="Cnombre" name="nombre" placeholder="Nombre Completo" class="form-control" required="true" value="" type="text">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-4 control-label">Número de Teléfono</label>
                           <div class="col-md-8 inputGroupContainer">
                              <div class="input-group">
                                 <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-home"></i>
                                 </span>
                                 <input id="Ctelefono" name="telefono" placeholder="Número De Teléfono" class="form-control" required="true" value="" type="tel">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-4 control-label">Contraseña</label>
                           <div class="col-md-8 inputGroupContainer">
                              <div class="input-group">
                                 <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                 </span>
                                 <input id="Ccontra" name="contra" placeholder="Contraseña" class="form-control" required="true" value="" type="password">
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                           <label style="color: white">
                              <small>
                                 Al dar click en “Siguiente” confirmo que he leído y acepto el 
                                 <span data-toggle="modal" data-target="#politicas_privacidad">Aviso de Privacidad</span>
                                 , los 
                                 <scpan data-toggle="modal" style="cursor:pointer" data-target="#terminos_condiciones">Términos y Condiciones</scpan> 
                                 del sitio web y la autorización a través de medios electrónicos tales como NIP.
                              </small>
                           </label> 
                        </div>
                        <p style="color: red;" id="resp"></p>
                        <br />
                        <div class="form-group">
                           <div class="col-md-8">
                              <button id="btnSend" type="submit" class="btn btn-primary btn-block">
                                    Siguiente
                              </button>
                           </div>
                        </div>
                     </fieldset>
                  </form>
               </td>
               <td colspan="1" class="web-page">
                  <h1 style="color:white; font-family:'Maitree', serif">Agradecemos su interés en solicitar un crédito con nosotros.</h1>
                  <br>
                  <br>
                  <h3 style="color:white; font-family:'Maitree', serif">Dejanos tu datos y te estaremos contactando a la brevedad.</h3>
               </td>
            </tr>
            <tr>
               <td style="width:90%;" id="vista1" hidden>
                  <form id="frmClienteU" style="color: white;">
                     <br />
                     <fieldset>
                        <div class="row">
                           <div class="col-12">
                              <h1 id="text2">Confirme sus datos</h1>
                           </div>
                           <div class="col-12 col-md-6">
                              <div class="form-group">
                                 <label>Nombres</label>
                                 <input type="text" hidden name="id" value="<?php echo $_GET['t']; ?>">
                                 <input type="text" hidden name="set" value="updateWebC">
                                 <input type="text" class="form-control" id="txtNombre" placeholder="Nombres" name="nombres"
                                 required />
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Apellido Paterno</label>
                                 <input type="text" class="form-control" id="txtApp" placeholder="Apellido Paterno" name="app"
                                 required />
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Apellido Materno</label>
                                 <input type="text" class="form-control" id="txtApm" placeholder="Apellido Materno" name="apm"
                                  />
                              </div>
                           </div>
                           <div class="col-12 ">
                              <div class="form-group">
                                 <label>CURP</label>
                                 <input type="text" maxlength="18" class="form-control" id="txtCURP" placeholder="CURP" name="curp"
                                 required />
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Sexo</label>
                                 <select class="form-control" name="sexo" id="txtSexo">
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Edo. Civil</label>
                                 <select class="form-control" name="edocivil" id="txtEdoCivil">
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Viudo">Viudo</option>
                                    <option value="Divorciado">Divorciado</option>
                                    <option value="Separado">Separado</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Fecha de Nacimiento</label>
                                 <input type="date" class="form-control" id="txtFnac" name="fechanac"
                                  />
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Teléfono</label>
                                 <input type="tel" maxlength="10" class="form-control" id="txtTel" placeholder="Telefono" name="tel"
                                  />
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>CP</label>
                                 <input type="text" maxlength="5" class="form-control" id="txtCP" placeholder="Codigo Postal" name="cp"/>
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>INE FRENTE</label>
                                 <img class="img-fluid" id="imagenine" />
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <input type="file" class="form-control-file">
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>INE REVERSO</label>
                                 <img class="img-fluid" id="imageniner" />
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <input type="file" class="form-control-file">
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Estado</label>
                                 <input type="text" class="form-control" id="txtEdo" placeholder="Estado" name="edo"/>
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Municipio</label>
                                 <input type="text" class="form-control" id="txtMun" placeholder="Municipio" name="mun"/>
                              </div>
                           </div>
                           <div class="col-12 col-sm-6 col-md-3">
                              <div class="form-group">
                                 <label>Colonia</label>
                                 <input type="text" class="form-control" id="txtCol" placeholder="Colonia" name="col"/>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group">
                                 <label>Dirección</label>
                                 <textarea name="direccion" id="txtDir" class="form-control" rows="5" placeholder="Escribir.."></textarea>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnActualizar">
                           Siguiente <i class="fa fa-arrow-right"></i>
                        </button>
                     </fieldset>
                  </form>
               </td>
            </tr>
            <tr>
               <td style="width: 70%; color:white;" id="vista2" hidden>
                  <form id="frmCliente">
                     <fieldset>
                        <h1 id="text">Hola, </h1>
                        <div class="form-group">
                           <label style="cursor: pointer;"> Autorizo consulta de Buró de Crédito</label>
                           <input required type="text" placeholder="NIP" maxlength="4" minlength="4" name="acepto" id="acepto">
                           <p style="color:white; font-family:'Maitree', serif">
                              Por este medio autorizo expresamente a COMERCIALIZADORA MOTRIZ DE YUCATAN, SA DE CV Y/O MICROS LAFIN S.A. DE C.V. SOFOM ENR, para que por conducto de sus funcionarios facultados lleve a cabo Investigaciones, sobre mi comportamiento crediticio o el de la Empresa que represento en Trans Union de México, S. A. SIC  y/o Dun & Bradstreet, S.A. SIC
                           </p>
                           <p>
                              Así mismo, declaro que conozco la naturaleza y alcance de la información que se solicitará, del uso que COMERCIALIZADORA MOTRIZ DE YUCATAN, SA DE CV Y/O MICROS LAFIN S.A. DE C.V. SOFOM ENR,  hará de tal información y de que ésta podrá realizar consultas periódicas sobre mi historial o el de la empresa que represento, consintiendo que esta autorización se encuentre vigente por un período de 3 años contados a partir de su expedición y en todo caso durante el tiempo que se mantenga la relación jurídica.
                           </p>
                           <p>
                              En caso de que la solicitante sea una Persona Moral,  declaro bajo protesta de decir verdad Ser Representante Legal de la empresa mencionada en esta autorización; manifestando que a la fecha de firma de la presente autorización los poderes no me han sido revocados, limitados, ni modificados en forma alguna.
                           </p>
                           <p>
                              Estoy de acuerdo y acepto que este documento quede bajo propiedad de COMERCIALIZADORA MOTRIZ DE YUCATAN, SA DE CV Y/O MICROS LAFIN S.A. DE C.V. SOFOM ENR y/o Sociedad de Información Crediticia consultada para efectos de control y cumplimiento del artículo 28 de la Ley para Regular a Las Sociedades de Información Crediticia; mismo que señala que las Sociedades sólo podrán proporcionar información a un Usuario, cuando éste cuente con la autorización expresa del Cliente
                           </p>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnAutorizar">
                           <i class="fa fa-check"></i> Autorizar
                        </button>
                     </fieldset>
                  </form>
               </td>
            </tr>
            <tr>
               <td class="movil">

               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <footer >
      <?php    include "footerIndex2.php"; ?>
   </footer>
   <script type="text/javascript">
      var url="";
      $.ajax({
         type:'POST',
         url:'http://192.168.1.251:81/sistema/web/ws/movilidad.php'
      }).done(function(){
         url='http://192.168.1.251:81/sistema/web/ws/movilidad.php';
         nombre();
      }).fail(function(){
         url='https://mzfinan.dyndns.org/sistema/web/ws/movilidad.php';
         nombre();
      })
      function nombre(){
         $.ajax({
            type:'POST',
            url:url,
            data: {id: <?php echo $_GET['t']; ?>, get:'nombre'}
         }).done(function(e){
            if(e.status==1){
               $("#text").html('Hola, '+e.nombre);

               //borrar
               
               $("#txtNombre").val(e.nombre);
               $("#txtApp").val(e.app);
               $("#txtApm").val(e.apm);
               $("#imagenine").attr("src",'https://mzfinan.dyndns.org'+e.urlImg1);
               $("#imageniner").attr("src",'https://mzfinan.dyndns.org'+e.urlImg2);
               /*if(e.sexo=="Hombre"){
                  $("#txtEdoCivil").html('<option value="Soltero">Soltero</option>'+
                                       '<option value="Casado">Casado</option>'+
                                       '<option value="Viudo">Viudo</option>'+
                                       '<option value="Divorciado">Divorciado</option>'+
                                       '<option value="Separado">Separado</option>');
               }else{
                  $("#txtEdoCivil").html('<option value="Soltero">Soltero</option>'+
                                       '<option value="Casado">Casado</option>'+
                                       '<option value="Viudo">Viudo</option>'+
                                       '<option value="Divorciado">Divorciado</option>'+
                                       '<option value="Separado">Separado</option>');
               }*/
               $("#txtEdoCivil").val(e.edocivil);
               $("#txtSexo").val(e.sexo);
               $("#txtEdoCivil").val(e.edocivil);
               $("#txtFnac").val(e.fechanac);
               $("#txtCP").val(e.cp);
               $("#txtEdo").val(e.estado);
               $("#txtMun").val(e.municipio);
               $("#txtCol").val(e.colonia);
               $("#txtDir").val(e.direccion);
               $("#txtCURP").val(e.curp);
               $("#txtTel").val(e.telefono);
               $("#Cnombre").val(e.nombre+' '+e.app+' '+e.apm);
               $("#Ctelefono").val(e.telefono);
               if(e.AT==0){
                  $("#vista1").attr('hidden',true);
                  $("#vista2").attr('hidden',true);
                  $("#vista3").removeAttr('hidden');
               }else if(e.AD==0){
                  $("#vista1").removeAttr('hidden');
                  $("#vista2").attr('hidden',true);
                  $("#vista3").attr('hidden',true);
               }else if(e.AB==0){
                  $("#vista1").attr('hidden',true);
                  $("#vista2").removeAttr('hidden');
                  $("#vista3").attr('hidden',true);
               }else{
                  $("#vista1").removeAttr('hidden');
                  $("#vista2").removeAttr('hidden');
                  $("#vista3").attr('hidden',true);
               }
            }else if(e.status==0){
               swal({type:'warning',title:e.mensaje});
               setInterval(function(){window.location.href="/views/modules/terminaBuroView.php";},1000);
            }  
         })
      }
      $("#frmClienteU").submit(function(e){
         e.preventDefault();
         swal({
           title: 'Los datos son correctos?',
           type: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           confirmButtonText: 'Si, Continuar',
           cancelButtonColor: '#d33',
           cancelButtonText:'No'
         }).then((result) => {
            if (result.value) {
            
               $.ajax({
                  type:'POST',
                  url:url,
                  data: $(this).serialize(),
                  beforeSend: function(){
                     $("#btnActualizar").html('<i class="fa fa-spinner fa-spin"></i>').attr('disabled',true);
                  }
               }).done(function(e){
                  if(e.status==1){
                     swal({type:'success',title:'Actualizado, continuemos con el tramite'});
                     $("#vista1").attr('hidden',true);
                     $("#vista2").removeAttr('hidden');
                     $("#vista3").attr('hidden',true);
                  }else if(e.status==0){
                     swal({type:'warning',title:e.mensaje});
                  }else{
                     swal({type:'error',title:'Comuniquese al depto de sistemas por correo a sistemas@lafin.mx'});
                  }
               }).always(function(){
                  $("#btnActualizar").html('Siguiente <i class="fa fa-arrow-right"></i>').removeAttr('disabled');
               })
               
            }
         });
      })
      $("#frmCliente").submit(function(e){
         e.preventDefault();
         $.ajax({
            type:'POST',
            url:url,
            data: {id: <?php echo $_GET['t']; ?>, set:'autorizar',nip:$("#acepto").val()},
            beforeSend: function(){
               $("#btnAutorizar").html('<i class="fa fa-spinner fa-spin"></i>').attr('disabled',true);
            }
         }).done(function(e){
            if(e.status==1){
               //swal({type:'success',title:'Autorizado, espera para saber sobre el tramite'});
               swal({
                  type:'success',
                  title:'Autorizado, espere que el vendedor se contacte con usted'
               });
               //setInterval(function(){window.location.href='/';},10000);
            }else if(e.status==0){
               swal({type:'warning',title:e.mensaje});
            }else{
               swal({type:'error',title:'Comuniquese al depto de sistemas por correo a sistemas@lafin.mx'});
            }
         }).always(function(){
            $("#btnAutorizar").html('<i class="fa fa-check"></i> Autorizar').removeAttr('disabled');
         })
      });

      $("#frmCliente3").submit(function(e){
         e.preventDefault();
         swal({
           title: '¿confirma que ha leído y acepta las Politicas de Privacidad, los Términos y Condiciones del sitio web?',
           type: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           confirmButtonText: 'Si, Continuar',
           cancelButtonColor: '#d33',
           cancelButtonText:'No'
         }).then((result) => {
           if (result.value) {
               $.ajax({
                  type:'POST',
                  url:url,
                  data:$(this).serialize(),
                  beforeSend: function(){
                     $("#btnSend").html('<i class="fa fa-spinner fa-spin"></i>').attr('disabled',true);
                  }
               }).done(function(e){
                  if(e.status==1){
                     $("#Cnombre").val("");
                     $("#Ctelefono").val("");
                     $("#Ccontra").val("");
                     swal({type:'success',title:'Agregado'});
                        $("#vista1").removeAttr('hidden');
                        $("#vista2").attr('hidden',true);
                        $("#vista3").attr('hidden',true);
                  }else if(e.status==0){
                     swal({type:'warning',title:e.mensaje});
                  }else{
                     swal({type:'error',title:'Comuniquese al depto de sistemas por correo a sistemas@lafin.mx'});
                  }
               }).fail(function(){
                     swal({type:'error',title:'Comuniquese al depto de sistemas por correo a sistemas@lafin.mx'});
               }).always(function(){
                     $("#btnSend").html('Siguiente').removeAttr('disabled');
               });
           }
        });

               
      });
   </script>
</body>
</html>