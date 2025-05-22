(function (){
    const tagsInput = document.querySelector('#tags_input');

    if(tagsInput) {
        const tagsDiv = document.querySelector('#tags');
        const tagsInputHidden = document.querySelector('[name="tags"]');

        let tags = [];

        //Recuperar del input oculto (al agregar ponente y fallar la verificacion y al editar)
        if(tagsInputHidden.value !== '') {
            tags = tagsInputHidden.value.split(',');
            mostrarTags();
        }

        //Escuchar los cambios en el input
        tagsInput.addEventListener('keypress', guardarTag); //keypress detecta las teclas que vamos presionando

        function guardarTag(e) {
            if(e.keyCode === 44) {  //Cada tecla tiene un keycode y el de la coma es 44

                if(e.target.value.trim() === '' || e.target.value == 1) { //Si lo que escribio el usuario son espacion o es un 1, no gurada nada en el arreglo
                    return;
                }

                e.preventDefault(); //Elimina la coma en el input despues de guardarlo en el arreglo
 
                tags = [...tags, e.target.value.trim()]; //En una copia del arreglo vamos guardando lo que escribe el usuario en el input y al presionar la coma se guarda

                tagsInput.value = ''; //Limpiamos el input al guardarlo en el arreglo

                mostrarTags();
            }
        }

        function mostrarTags() {
            tagsDiv.textContent = '';
            tags.forEach(tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.classList.add('formulario__tag');
                etiqueta.textContent = tag;
                etiqueta.ondblclick = eliminarTag;
                tagsDiv.appendChild(etiqueta);
            });
            actualizarInputHidden();
        }
        function eliminarTag(e) {
            e.target.remove();
            tags = tags.filter(tag => tag !== e.target.textContent); //Filter crea otro arreglo con el mismo nombre y agrega todos los elementos que no sean el que se quiere borrar
            actualizarInputHidden();
        }

        function actualizarInputHidden() {
            tagsInputHidden.value = tags.toString();
        }
    }
})();