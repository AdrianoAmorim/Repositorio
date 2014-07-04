/**
 * Created by Adriano on 25/06/14.
 */


function add(){
    //pega quantos elementos que tem com o name o parametro
    var campoCompCurr = document.getElementsByName('componenteCurricular');
    //contador
    var i;
    //guarda a quantidade de elementos que foi pegado
    var aux = campoCompCurr.length;
    //variavel que vai guardar todos os inputs os existentes e depois o novo
    var conc = "";
    for(i=0;i< aux ;i++){
        //ainda nao sei exatamente o que faz
        conc += "<input type='text' name='componenteCurricular'class='inDados' value='"+campoCompCurr[i].value+"' /><br/>"
    }
    //depois de adicionar os inputs existentes adiciono o novo a variavel
    conc += "<input type='text'class= 'inDados' name='componenteCurricular' value='' /><br/>";

    //por fim adiciono os componentes no elemento com o id do parametro
    document.getElementById('componentesCurriculares').innerHTML = conc;

}