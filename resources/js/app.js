import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

 const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage : 'Sube tu Imagen',
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    addRemoveLinks : true,
    dictRemoveFile : 'Borrar Archivos',
    maxFiles : 1,
    uploadMultiple : false,
    init: function(){
        
        if(document.querySelector('input[name="imagen1"]').value.trim() != '/'){
            console.log(document.querySelector('input[name="imagen1"]').value);
            const imagenPublica={}
            imagenPublica.size = 1234;
            imagenPublica.name = document.querySelector('input[name="imagen1"]').value;
            
            this.options.addedfile.call(this, imagenPublica); 
            this.options.thumbnail.call(this, imagenPublica, `/uploads/${imagenPublica.name}`);

            imagenPublica.previewElement.classList.add('dz-sucess', 'dz-complete');
        }
    }

});
dropzone.on("success",function(file, response){
    console.log(response.toString);
    document.querySelector('[name="imagen1"]').value = response.imagen;
})
dropzone.on("removedfile",function(){
    document.querySelector('[name="imagen1"]').value = '/' ;
})