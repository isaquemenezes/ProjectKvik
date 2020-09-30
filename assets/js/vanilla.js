/*==========================================*/
/*                  JS                      */
    (function readyJS(win, doc){
        'use strict';

        function getRoot(){
            return win.location.protocol+"//"+doc.location.hostname+"/ProjectKvik/";
        }

        /*============= page de login =======================*/
        let retornoLogin =doc.querySelector('.retornoLogin');
        let formLogin    =doc.querySelector('#formLogin');
        function sendLogin(e){
            e.preventDefault();

            let ajax=new XMLHttpRequest();
            ajax.open('POST', getRoot()+'controllers/controllerLogin');
            ajax.setRequestHeader('Content-type','application/x-www-form-urlencoded');
            ajax.onreadystatechange=function(response){
                //if(ajax.status===200 && ajax.readyState===4){
                if(response.retorno === 'success'){
                    win.location.href=response.page;
                }else{retornoLogin.innerHTML = 'erro!';}
            }
            ajax.send();

        }
        formLogin.addEventListener('submit', sendLogin, false);

        /*======== formulário de cdastro de idoso =================*/
        let select_C = doc.querySelector('#categoria');
        function s_Validate(e){
            if(e.target.selectedIndex==0){
                alert('selecione ao menos um opção');
            }
        }
        select_C.addEventListener('change', sValidate, false);


    })(window, document);