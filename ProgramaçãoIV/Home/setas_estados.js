let seta_sul = document.querySelector(".seta_sul");
            let sul = document.querySelector(".estado_sul");

            let seta_nordeste = document.querySelector(".seta_nordeste");
            let nordeste = document.querySelector(".estado_nordeste");

            let seta_centro = document.querySelector(".seta_centro");
            let centro = document.querySelector(".estado_centro");

            let seta_norte = document.querySelector(".seta_norte");
            let norte = document.querySelector(".estado_norte");

            let seta_sudeste = document.querySelector(".seta_sudeste");
            let sudeste = document.querySelector(".estado_sudeste");

            seta_sul.onclick = function(){
                sul.classList.toggle("active");
            }
            seta_nordeste.onclick = function(){
                nordeste.classList.toggle("active");
            }
            seta_norte.onclick = function(){
                norte.classList.toggle("active");
            }
            seta_sudeste.onclick = function(){
                sudeste.classList.toggle("active");
            }
            seta_centro.onclick = function(){
                centro.classList.toggle("active");
            }